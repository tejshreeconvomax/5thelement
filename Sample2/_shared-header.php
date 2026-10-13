<?php $headerCta = $headerCta ?? 'Plan your event'; $headerTarget = $headerTarget ?? '#enquiry'; $headerTargetEscaped = htmlspecialchars($headerTarget, ENT_QUOTES, 'UTF-8'); ?>
<div class="top-note">INDIAN ROOTS · FLORIDA SOUL <span>Hospitality, with a royal heart.</span></div>
<header class="site-header header">
  <a class="wordmark brand" href="<?= h(sample2_url()) ?>"><strong>5<sup>th</sup></strong><span>ELEMENT<small>INDIAN RESTAURANT</small></span></a>
  <button class="nav-toggle menu-toggle" type="button" aria-label="Open navigation" aria-expanded="false" aria-controls="inner-nav"><span aria-hidden="true">☰</span></button>
  <nav id="inner-nav" aria-label="Main navigation">
    <a href="<?= h(sample2_url()) ?>" <?= ($pageClass ?? '')==='home-page' ? 'aria-current="page"' : '' ?>>Home</a>
    <a href="<?= h(sample2_url('catering.php')) ?>" <?= ($pageClass ?? '')==='catering-page' ? 'aria-current="page"' : '' ?>>Catering services</a>
    <a href="<?= h(sample2_url('jacksonville.php')) ?>" <?= ($pageClass ?? '')==='location-page' ? 'aria-current="page"' : '' ?>>Jacksonville</a>
    <a href="<?= h(sample2_url('location-menu.php')) ?>" <?= ($pageClass ?? '')==='menu-page' ? 'aria-current="page"' : '' ?>>Catering menu</a>
  </nav>
  <a class="btn small outline header-order" href="<?= $headerTargetEscaped ?>"><?= $headerCta ?> <span aria-hidden="true">↗</span></a>
</header>
