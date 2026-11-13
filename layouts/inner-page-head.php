<?php
require_once __DIR__ . '/../includes/functions.php';
$sampleBase = sample2_url();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= h($title) ?> — 5th Element</title>
    <meta name="description" content="<?= h($description) ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Antic+Didone&family=Libre+Franklin:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= asset_url('styles/inner.css?v=3') ?>">
    <script>document.documentElement.classList.add('has-site-loader');</script>
</head>

<body class="<?= h($pageClass) ?>"><a class="skip-link" href="#main">Skip to content</a><?php if ($pageClass === 'checkout-page') {
                                                                                            $headerCta = 'Catering menu';
                                                                                            $headerTarget = sample2_url('catering/jacksonville/');
                                                                                        } else {
                                                                                            $headerCta = $pageClass === 'location-page' ? 'Plan your visit' : 'Plan your event';
                                                                                        }
                                                                                        require __DIR__ . '/../components/layout/header.php';
                                                                                        unset($headerCta, $headerTarget); ?><main id="main">
