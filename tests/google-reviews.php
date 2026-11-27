<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/google-reviews.php';
require_once __DIR__ . '/../includes/featured-reviews.php';

function check(bool $condition, string $message): void
{
    if (!$condition) {
        throw new RuntimeException($message);
    }
}

$cacheDir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . '5thelement-reviews-test-' . bin2hex(random_bytes(5));
putenv('GOOGLE_REVIEWS_CACHE_DIR=' . $cacheDir);
putenv('GOOGLE_REVIEWS_CLIENT_ID=test-client');
putenv('GOOGLE_REVIEWS_CLIENT_SECRET=test-secret');
putenv('GOOGLE_REVIEWS_REFRESH_TOKEN=test-refresh');
putenv('GOOGLE_REVIEWS_LOCATION_BAYMEADOWS=accounts/123/locations/456');
putenv('GOOGLE_REVIEWS_LOCATION_DAYTONA=accounts/123/locations/789');

$calls = [];
$http = static function (string $url, array $headers, ?string $body = null) use (&$calls): array {
    $calls[] = [$url, $body];
    if (str_contains($url, 'oauth2.googleapis.com')) {
        return ['status' => 200, 'body' => '{"access_token":"test-access"}'];
    }
    if (str_contains($url, 'batchGetReviews')) {
        return ['status' => 200, 'body' => json_encode(['locationReviews' => [
            ['name' => 'accounts/123/locations/456', 'review' => [
                'comment' => 'A real guest review', 'starRating' => 'FIVE', 'createTime' => '2026-10-20T12:00:00Z',
                'reviewer' => ['displayName' => 'Test Reviewer', 'profilePhotoUrl' => 'https://lh3.googleusercontent.com/a/example'],
            ]],
            ['name' => 'accounts/123/locations/789', 'review' => [
                'comment' => 'Another real guest review', 'starRating' => 'FOUR', 'createTime' => '2026-10-19T12:00:00Z',
                'reviewer' => ['displayName' => 'Daytona Reviewer'],
            ]],
        ]])];
    }
    return ['status' => 200, 'body' => json_encode(['reviews' => [[
        'comment' => 'A real guest review', 'starRating' => 'FIVE', 'createTime' => '2026-10-20T12:00:00Z',
        'reviewer' => ['displayName' => 'Test Reviewer', 'profilePhotoUrl' => 'https://lh3.googleusercontent.com/a/example'],
    ]]])];
};

try {
    $single = google_reviews_load('baymeadows', $http);
    check($single['status'] === 'ok' && count($single['reviews']) === 1, 'Single-location review did not load.');
    check($single['reviews'][0]['name'] === 'Test Reviewer', 'Reviewer name missing.');
    check($single['reviews'][0]['photo'] !== '' && $single['reviews'][0]['rating'] === 5, 'Photo or rating missing.');
    check($single['reviews'][0]['date'] === '2026-10-20T12:00:00Z', 'Review date missing.');
    $firstCallCount = count($calls);
    google_reviews_load('baymeadows', $http);
    check(count($calls) === $firstCallCount, 'Fresh cache caused an API call.');

    $all = google_reviews_load('all', $http);
    check(count($all['reviews']) === 2, 'Multi-location batch did not load.');
    check($all['reviews'][1]['location'] === 'Daytona Beach, Florida', 'Location attribution incorrect.');
    check(count($calls) === $firstCallCount + 1, 'Multi-location batch did not use one API call.');
    google_reviews_load('all', $http);
    check(count($calls) === $firstCallCount + 1, 'Batch cache caused an API call.');
    check(google_reviews_load('unknown', $http)['status'] === 'invalid', 'Unknown location was accepted.');

    $failedHttp = static fn(): array => ['status' => 503, 'body' => '{}'];
    putenv('GOOGLE_REVIEWS_LOCATION_PALMCOAST=accounts/123/locations/999');
    check(google_reviews_load('palmcoast', $failedHttp)['status'] === 'unavailable', 'Upstream failure was not isolated.');

    $singleCache = $cacheDir . DIRECTORY_SEPARATOR . 'reviews-' . hash('sha256', 'accounts/123/locations/456') . '.json';
    $saved = json_decode((string) file_get_contents($singleCache), true);
    $saved['savedAt'] = time() - 7200;
    file_put_contents($singleCache, json_encode($saved));
    check(google_reviews_load('baymeadows', $failedHttp)['status'] === 'ok', 'Recent stale cache was not used on failure.');
    $saved['savedAt'] = time() - 90000;
    file_put_contents($singleCache, json_encode($saved));
    check(google_reviews_load('baymeadows', $failedHttp)['status'] === 'unavailable', 'Expired review content was served.');

    putenv('GOOGLE_REVIEWS_CLIENT_ID');
    check(google_reviews_load('baymeadows', $http)['status'] === 'unconfigured', 'Missing credentials were ignored.');
    $snapshot = featured_google_reviews('baymeadows');
    check($snapshot['status'] === 'static' && count($snapshot['reviews']) === 4, 'Baymeadows snapshot is missing.');
    check(count(featured_google_reviews('all')['reviews']) === 4, 'Sitewide snapshot is missing.');
    check(featured_google_reviews('daytona')['reviews'] === [], 'Unverified location received Baymeadows reviews.');
    echo "Google reviews service tests passed.\n";
} finally {
    if (is_dir($cacheDir)) {
        foreach (glob($cacheDir . DIRECTORY_SEPARATOR . '*') ?: [] as $path) {
            if (is_file($path)) {
                unlink($path);
            }
        }
        rmdir($cacheDir);
    }
}
