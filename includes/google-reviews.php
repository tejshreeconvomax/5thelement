<?php
declare(strict_types=1);

/** Google Business Profile reviews. Credentials and the cache stay outside the web root. */
function google_review_locations(): array
{
    $locations = [
        'baymeadows' => ['Baymeadows, Jacksonville', '9551 Baymeadows Rd, Jacksonville, FL 32256'],
        'towncenter' => ['Towncenter, Jacksonville', '5th Element Towncenter Jacksonville FL'],
        'daytona' => ['Daytona Beach, Florida', '5th Element Daytona Beach FL'],
        'palmcoast' => ['Palm Coast, Florida', '5th Element Palm Coast FL'],
    ];

    foreach ($locations as $key => &$location) {
        $suffix = strtoupper($key);
        $resource = trim((string) getenv('GOOGLE_REVIEWS_LOCATION_' . $suffix));
        $location['resource'] = preg_match('~^accounts/[0-9]+/locations/[0-9]+$~', $resource) ? $resource : '';
        $mapsUrl = trim((string) getenv('GOOGLE_REVIEWS_MAPS_' . $suffix));
        $location['mapsUrl'] = preg_match('~^https://(?:www\.)?google\.com/maps/[^\s]+$~i', $mapsUrl)
            ? $mapsUrl
            : 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode($location[1]);
        $location['label'] = $location[0];
        unset($location[0], $location[1]);
    }
    unset($location);

    return $locations;
}

function google_reviews_cache_dir(): ?string
{
    $configured = trim((string) getenv('GOOGLE_REVIEWS_CACHE_DIR'));
    $directory = $configured !== '' ? $configured : sys_get_temp_dir() . DIRECTORY_SEPARATOR . '5thelement-google-reviews';
    if (!is_dir($directory) && !@mkdir($directory, 0700, true)) {
        return null;
    }
    $resolved = realpath($directory);
    $webRoot = realpath(dirname(__DIR__));
    if ($resolved === false || $webRoot === false || !is_writable($resolved)) {
        return null;
    }
    if (DIRECTORY_SEPARATOR !== '\\' && ((fileperms($resolved) ?: 0) & 0077) !== 0) {
        @chmod($resolved, 0700);
        clearstatcache(true, $resolved);
        if (((fileperms($resolved) ?: 0) & 0077) !== 0) {
            return null;
        }
    }
    $rootPrefix = rtrim(str_replace('\\', '/', strtolower($webRoot)), '/') . '/';
    $cachePath = rtrim(str_replace('\\', '/', strtolower($resolved)), '/') . '/';
    return str_starts_with($cachePath, $rootPrefix) ? null : $resolved;
}

/** @return array{status:int, body:string}|null */
function google_reviews_http(string $url, array $headers, ?string $body = null): ?array
{
    if (function_exists('curl_init')) {
        $handle = curl_init($url);
        if ($handle === false) {
            return null;
        }
        $options = [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_CONNECTTIMEOUT_MS => 700,
            CURLOPT_TIMEOUT_MS => 2500,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_POST => $body !== null,
            CURLOPT_MAXREDIRS => 0,
        ];
        if ($body !== null) {
            $options[CURLOPT_POSTFIELDS] = $body;
        }
        curl_setopt_array($handle, $options);
        $response = curl_exec($handle);
        $status = (int) curl_getinfo($handle, CURLINFO_RESPONSE_CODE);
        curl_close($handle);
        return is_string($response) && strlen($response) < 512000 ? ['status' => $status, 'body' => $response] : null;
    }

    $context = stream_context_create(['http' => [
        'method' => $body === null ? 'GET' : 'POST',
        'header' => implode("\r\n", $headers),
        'content' => $body ?? '',
        'timeout' => 2.5,
        'ignore_errors' => true,
        'follow_location' => 0,
    ]]);
    $response = @file_get_contents($url, false, $context);
    $statusLine = $http_response_header[0] ?? '';
    preg_match('~^HTTP/\S+\s+(\d{3})~', $statusLine, $match);
    return is_string($response) && strlen($response) < 512000
        ? ['status' => (int) ($match[1] ?? 0), 'body' => $response]
        : null;
}

function google_reviews_access_token(callable $http): ?string
{
    static $accessToken = null;
    if (is_string($accessToken)) {
        return $accessToken;
    }
    $clientId = trim((string) getenv('GOOGLE_REVIEWS_CLIENT_ID'));
    $clientSecret = trim((string) getenv('GOOGLE_REVIEWS_CLIENT_SECRET'));
    $refreshToken = trim((string) getenv('GOOGLE_REVIEWS_REFRESH_TOKEN'));
    if ($clientId === '' || $clientSecret === '' || $refreshToken === '') {
        return null;
    }

    $response = $http('https://oauth2.googleapis.com/token', ['Content-Type: application/x-www-form-urlencoded'], http_build_query([
        'client_id' => $clientId,
        'client_secret' => $clientSecret,
        'refresh_token' => $refreshToken,
        'grant_type' => 'refresh_token',
    ]));
    if (!is_array($response) || ($response['status'] ?? 0) !== 200) {
        return null;
    }
    $payload = json_decode((string) ($response['body'] ?? ''), true);
    $accessToken = is_array($payload) && is_string($payload['access_token'] ?? null) ? $payload['access_token'] : null;
    return $accessToken;
}

function google_reviews_cached_response(string $path): ?array
{
    if (!is_file($path)) {
        return null;
    }
    $payload = json_decode((string) @file_get_contents($path), true);
    if (!is_array($payload) || !isset($payload['savedAt'], $payload['response']) || !is_array($payload['response'])) {
        return null;
    }
    // Google Business Profile permits a temporary performance cache, never beyond 30 days.
    if (time() - (int) $payload['savedAt'] > 86400) {
        @unlink($path);
        return null;
    }
    return $payload;
}

/** Returns an unmodified API response from a private, temporary cache. */
function google_reviews_cached_query(string $key, string $url, ?string $body, string $expectedField, string $cacheDir, callable $http): ?array
{
    $path = $cacheDir . DIRECTORY_SEPARATOR . 'reviews-' . hash('sha256', $key) . '.json';
    $cached = google_reviews_cached_response($path);
    if ($cached !== null && time() - (int) $cached['savedAt'] < 3600) {
        return $cached['response'];
    }

    $lock = @fopen($path . '.lock', 'c');
    if ($lock === false || !flock($lock, LOCK_EX | LOCK_NB)) {
        if (is_resource($lock)) {
            fclose($lock);
        }
        return $cached['response'] ?? null;
    }
    try {
        $cached = google_reviews_cached_response($path);
        if ($cached !== null && time() - (int) $cached['savedAt'] < 3600) {
            return $cached['response'];
        }
        $token = google_reviews_access_token($http);
        if ($token === null) {
            return $cached['response'] ?? null;
        }
        $headers = ['Authorization: Bearer ' . $token, 'Accept: application/json'];
        if ($body !== null) {
            $headers[] = 'Content-Type: application/json';
        }
        $response = $http($url, $headers, $body);
        $payload = is_array($response) && ($response['status'] ?? 0) === 200
            ? json_decode((string) ($response['body'] ?? ''), true)
            : null;
        if (!is_array($payload) || !isset($payload[$expectedField]) || !is_array($payload[$expectedField])) {
            return $cached['response'] ?? null;
        }
        $encoded = json_encode(['savedAt' => time(), 'response' => $payload], JSON_UNESCAPED_SLASHES);
        if (is_string($encoded)) {
            $temporary = @tempnam($cacheDir, 'review-');
            if (is_string($temporary)) {
                @chmod($temporary, 0600);
                if (@file_put_contents($temporary, $encoded, LOCK_EX) !== false) {
                    if (!@rename($temporary, $path) && is_file($path)) {
                        // Windows does not replace an existing file with rename().
                        @unlink($path);
                        @rename($temporary, $path);
                    }
                }
                if (is_file($temporary)) {
                    @unlink($temporary);
                }
            }
        }
        return $payload;
    } finally {
        flock($lock, LOCK_UN);
        fclose($lock);
    }
}

function google_reviews_for_location(string $resource, string $cacheDir, callable $http): ?array
{
    return google_reviews_cached_query(
        $resource,
        'https://mybusiness.googleapis.com/v4/' . $resource . '/reviews?pageSize=8&orderBy=updateTime%20desc',
        null,
        'reviews',
        $cacheDir,
        $http
    );
}

function google_reviews_for_batch(array $selected, string $cacheDir, callable $http): ?array
{
    $resources = array_column($selected, 'resource');
    $account = explode('/', $resources[0])[1];
    return google_reviews_cached_query(
        implode('|', $resources),
        'https://mybusiness.googleapis.com/v4/accounts/' . $account . '/locations:batchGetReviews',
        json_encode(['locationNames' => $resources, 'pageSize' => 24, 'orderBy' => 'updateTime desc']),
        'locationReviews',
        $cacheDir,
        $http
    );
}

/** @return array{status:string,reviews:array} */
function google_reviews_load(string $scope, ?callable $http = null): array
{
    $locations = google_review_locations();
    if ($scope !== 'all' && !isset($locations[$scope])) {
        return ['status' => 'invalid', 'reviews' => []];
    }
    $selected = $scope === 'all' ? $locations : [$scope => $locations[$scope]];
    $selected = array_filter($selected, static fn(array $location): bool => $location['resource'] !== '');
    if ($selected === [] || !getenv('GOOGLE_REVIEWS_CLIENT_ID') || !getenv('GOOGLE_REVIEWS_CLIENT_SECRET') || !getenv('GOOGLE_REVIEWS_REFRESH_TOKEN')) {
        return ['status' => 'unconfigured', 'reviews' => []];
    }
    $cacheDir = google_reviews_cache_dir();
    if ($cacheDir === null) {
        return ['status' => 'unavailable', 'reviews' => []];
    }

    $http ??= 'google_reviews_http';
    $reviews = [];
    $items = [];
    $accounts = array_unique(array_map(static fn(array $location): string => explode('/', $location['resource'])[1], $selected));
    if (count($selected) > 1 && count($accounts) === 1) {
        $response = google_reviews_for_batch($selected, $cacheDir, $http);
        $locationByResource = [];
        foreach ($selected as $location) {
            $locationByResource[$location['resource']] = $location;
        }
        foreach (($response['locationReviews'] ?? []) as $item) {
            $location = $locationByResource[$item['name'] ?? ''] ?? null;
            if ($location !== null && is_array($item['review'] ?? null)) {
                $items[] = [$location, $item['review']];
            }
        }
    } else {
        foreach ($selected as $location) {
            $response = google_reviews_for_location($location['resource'], $cacheDir, $http);
            foreach (($response['reviews'] ?? []) as $review) {
                $items[] = [$location, $review];
            }
        }
    }
    foreach ($items as [$location, $review]) {
            if (!is_array($review) || trim((string) ($review['comment'] ?? '')) === '') {
                continue;
            }
            $stars = ['ONE' => 1, 'TWO' => 2, 'THREE' => 3, 'FOUR' => 4, 'FIVE' => 5][$review['starRating'] ?? ''] ?? 0;
            if ($stars === 0) {
                continue;
            }
            $reviewer = is_array($review['reviewer'] ?? null) ? $review['reviewer'] : [];
            $photo = (string) ($reviewer['profilePhotoUrl'] ?? '');
            if (!preg_match('~^https://(?:[a-z0-9-]+\.)*(?:googleusercontent\.com|ggpht\.com)/~i', $photo)) {
                $photo = '';
            }
            $reviews[] = [
                'name' => !empty($reviewer['isAnonymous']) ? 'Google reviewer' : (string) ($reviewer['displayName'] ?? 'Google reviewer'),
                'photo' => $photo,
                'rating' => $stars,
                'date' => (string) ($review['createTime'] ?? ''),
                'text' => (string) $review['comment'],
                'location' => $location['label'],
                'mapsUrl' => $location['mapsUrl'],
            ];
    }
    return ['status' => $reviews === [] ? 'unavailable' : 'ok', 'reviews' => $reviews];
}
