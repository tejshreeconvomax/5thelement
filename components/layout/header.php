<?php $headerCta = $headerCta ?? 'Plan your event'; $headerTarget = $headerTarget ?? '#enquiry'; $headerTargetEscaped = htmlspecialchars($headerTarget, ENT_QUOTES, 'UTF-8'); ?>
<div class="site-loader" role="status" aria-label="Loading page">
  <span class="site-loader__mandala" aria-hidden="true"></span>
</div>
<div class="top-note"><span>INDIAN ROOTS · FLORIDA SOUL </span></div>
<header class="site-header header">
  <a class="wordmark brand" href="<?= h(sample2_url()) ?>"><img class="brand-logo" src="<?= h(asset_url('images/5th-element-logo-transparent.png')) ?>" alt="5th Element Indian Restaurant" width="160" height="86"></a>
  <button class="nav-toggle menu-toggle" type="button" aria-label="Open navigation" aria-expanded="false" aria-controls="inner-nav"><span aria-hidden="true">☰</span></button>
  <nav id="inner-nav" aria-label="Main navigation">
    <a href="<?= h(sample2_url()) ?>" <?= ($pageClass ?? '')==='home-page' ? 'aria-current="page"' : '' ?>>HOME</a>
    <a href="<?= h(sample2_url('about.php')) ?>" <?= ($pageClass ?? '')==='about-page' ? 'aria-current="page"' : '' ?>>ABOUT US</a>
    <div class="nav-group">
      <span class="nav-group__label">OUR LOCATIONS</span>
      <div class="nav-submenu" role="group" aria-label="Our Location">
        <a href="<?= h(sample2_url('jacksonville.php')) ?>" <?= ($pageClass ?? '')==='location-page' ? 'aria-current="page"' : '' ?>>Jacksonville</a>
      </div>
    </div>
    <div class="nav-group">
      <a href="<?= h(sample2_url('catering.php')) ?>" <?= ($pageClass ?? '')==='catering-page' ? 'aria-current="page"' : '' ?>>CATERING SERVICES</a>
      <div class="nav-submenu" role="group" aria-label="Catering Services">
        <a href="<?= h(sample2_url('catering/jacksonville/')) ?>" <?= ($pageClass ?? '')==='menu-page' ? 'aria-current="page"' : '' ?>>Jacksonville Catering</a>
      </div>
    </div>
    <a href="<?= h(sample2_url('contact.php')) ?>" <?= ($pageClass ?? '')==='contact-page' ? 'aria-current="page"' : '' ?>>CONTACT US</a>
  </nav>
  <a class="btn small outline header-order" href="<?= $headerTargetEscaped ?>"><?= $headerCta ?> <span aria-hidden="true">↗</span></a>
</header>
