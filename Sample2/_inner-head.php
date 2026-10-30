<?php
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/common-components.php';
$sampleBase = sample2_url();
?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title><?= h($title) ?> — 5th Element</title><meta name="description" content="<?= h($description) ?>"><link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=DM+Sans:wght@400;500;600;700&family=Cormorant+Garamond:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet"><link rel="stylesheet" href="<?= asset_url('css/sample-2-inner.css?v=16') ?>"></head><body class="<?= h($pageClass) ?>"><a class="skip-link" href="#main">Skip to content</a><?php $headerCta=$pageClass==='location-page'?'Plan your visit':'Plan your event'; require __DIR__ . '/header.php'; unset($headerCta); ?><main id="main">






