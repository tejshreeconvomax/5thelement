<?php
$title = 'Catering Enquiry';
$description = 'Review a 5th Element catering enquiry.';
$pageClass = 'menu-page';
require __DIR__ . '/_inner-head.php';
?>
<section class="page-section"><p class="eyebrow">PLAN YOUR CELEBRATION</p><h1>Complete your enquiry.</h1><p>Checkout will be connected when online ordering is introduced. For now, our catering team can help you build the perfect menu.</p><a class="btn gold" href="<?= h(sample2_url('location-menu.php#enquiry')) ?>">Start an enquiry <?= icon('arrow') ?></a></section>
<?php require __DIR__ . '/_inner-foot.php'; ?>
