<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/google-reviews.php';
require_once __DIR__ . '/../includes/featured-reviews.php';

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store, private');
header('X-Content-Type-Options: nosniff');

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(405);
    header('Allow: GET');
    echo json_encode(['status' => 'invalid', 'reviews' => []]);
    exit;
}

$scope = $_GET['location'] ?? 'all';
if (!is_string($scope) || ($scope !== 'all' && !array_key_exists($scope, google_review_locations()))) {
    http_response_code(400);
    echo json_encode(['status' => 'invalid', 'reviews' => []]);
    exit;
}

try {
    $result = google_reviews_load($scope);
} catch (Throwable $error) {
    error_log('Google reviews request failed: ' . get_class($error));
    $result = ['status' => 'unavailable', 'reviews' => []];
}

if ($result['status'] !== 'ok') {
    $snapshot = featured_google_reviews($scope);
    if ($snapshot['reviews'] !== []) {
        $result = $snapshot;
    }
}

echo json_encode($result, JSON_INVALID_UTF8_SUBSTITUTE | JSON_UNESCAPED_SLASHES);
