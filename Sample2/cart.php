<?php
$title = 'Your Catering Cart';
$description = 'Catering enquiry cart for 5th Element.';
$pageClass = 'menu-page';
require __DIR__ . '/_inner-head.php';
?>
<section class="page-section"><p class="eyebrow">YOUR SELECTIONS</p><h1>Your catering cart.</h1><p>Your catering selections will appear here when cart functionality is connected.</p><a class="btn gold" href="<?= h(sample2_url('location-menu.php')) ?>">Explore the catering menu <?= icon('arrow') ?></a></section>
<?php require __DIR__ . '/_inner-foot.php'; ?>
