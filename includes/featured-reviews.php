<?php
declare(strict_types=1);

require_once __DIR__ . '/google-reviews.php';

/** A dated selection from the restaurant's published Google reviews widget. */
function featured_google_reviews(string $scope): array
{
    // Only Baymeadows reviews have been verified for this temporary snapshot.
    if ($scope !== 'all' && $scope !== 'baymeadows') {
        return ['status' => 'unavailable', 'reviews' => []];
    }

    $location = google_review_locations()['baymeadows'];
    $shared = ['location' => $location['label'], 'mapsUrl' => $location['mapsUrl'], 'rating' => 5];
    $reviews = [
        [
            'name' => 'Dave MacCutcheon',
            'photo' => 'https://lh3.googleusercontent.com/a-/ALV-UjVecs1drl5GYUFu2KVLu_Wj68Jr36s48B4Aaz6TzYsfa8Ck0F1K=w40-h40-c-rp-mo-br100',
            'date' => '2026-11-08',
            'text' => 'Yummy butter chicken',
        ],
        [
            'name' => 'Mike Moon',
            'photo' => 'https://lh3.googleusercontent.com/a-/ALV-UjVgdj7BR8KHNTiknUUgjHkfFEF1VOxsxVZ-HAp5VpaZPL4rbLjH=w40-h40-c-rp-mo-ba12-br100',
            'date' => '2026-10-22',
            'text' => 'A beautiful buffet.',
        ],
        [
            'name' => 'Baskaran Souppour (Baski)',
            'photo' => 'https://lh3.googleusercontent.com/a-/ALV-UjVar2ipsDsmer3cxaEQMM-DJMclxI6P_PEFfv1W7DDq3dbz1JjG2g=w40-h40-c-rp-mo-ba12-br100',
            'date' => '2026-09-28',
            'text' => 'Excellent paper dosa and Lamb Briyani.',
        ],
        [
            'name' => 'Susan Garcia',
            'photo' => 'https://lh3.googleusercontent.com/a/ACg8ocLKEcZZUn1eKoq_m94q__PtP1os7llwTolmyJi_t5uWJE_N2w=w40-h40-c-rp-mo-ba12-br100',
            'date' => '2026-09-23',
            'text' => 'Very clean and food was very tasty',
        ],
    ];

    return [
        'status' => 'static',
        'capturedAt' => '2026-11-25',
        'reviews' => array_map(static fn(array $review): array => array_merge($shared, $review), $reviews),
    ];
}
