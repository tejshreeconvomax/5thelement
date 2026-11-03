<?php
$pageTitle = 'Baymeadows, Jacksonville | 5th Element Indian Cuisine';
$pageDescription = 'Visit 5th Element in Baymeadows, Jacksonville for Indian dining, lunch buffet, takeout, delivery and catering.';
$headerCta = 'Plan your visit';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/sample-3.css?v=44">
  <link rel="stylesheet" href="/assets/css/sample-3-jacksonville.css?v=1">
</head>
<body class="op-page sc-jacksonville-page">
  <a class="op-skip" href="#main-content">Skip to content</a>
  <?php require __DIR__ . '/header.php'; ?>

  <main id="main-content">
    <section class="jl-hero" id="home" aria-labelledby="jl-hero-title">
      <div class="jl-hero-bg" aria-hidden="true"></div>
      <div class="jl-container jl-hero-content">
        <p class="jl-kicker">Baymeadows <span>·</span> Jacksonville</p>
        <h1 id="jl-hero-title">Your neighbourhood.<br><em>A world of flavour.</em></h1>
        <p class="jl-hero-copy">Enjoy our biryanis, curries, warm breads<br>and something sweet.</p>
        <div class="jl-actions">
          <a class="jl-button jl-button--olive" href="#services">Menu &amp; Online Ordering <b>→</b></a>
          <a class="jl-button jl-button--outline" href="tel:+19044488265">Call for a Table</a>
        </div>
      </div>
    </section>

    <div class="jl-address-bar" aria-label="Baymeadows address">
      <span aria-hidden="true">●</span>
      <address>9551 Baymeadows Rd · Units 10 &amp; 11, Jacksonville, FL 32256</address>
    </div>

    <section class="jl-intro" aria-labelledby="jl-intro-title">
      <div class="jl-intro-image"><img src="/assets/images/dine.webp" alt="Warmly lit 5th Element dining room in Baymeadows" loading="lazy"></div>
      <div class="jl-intro-copy">
        <div class="jl-ornament" aria-hidden="true"><i></i><span>❦</span><i></i></div>
        <h2 id="jl-intro-title">At home in India.<br><em>Here in Florida.</em></h2>
        <p>Experience the rich flavours of India in a warm, welcoming atmosphere at our Baymeadows location.</p>
      </div>
    </section>

    <section class="jl-services jl-section" id="services" aria-labelledby="jl-services-title">
      <div class="jl-container">
        <div class="jl-heading jl-heading--center"><div class="jl-ornament" aria-hidden="true"><i></i><span>❦</span><i></i></div><h2 id="jl-services-title">Your table. Your way.</h2></div>
        <div class="jl-service-grid">
          <a class="jl-service" href="#visit"><img src="/assets/images/dine.webp" alt="Set dining tables at 5th Element"><span>Dine In</span></a>
          <a class="jl-service" href="#visit"><img src="/assets/images/order.webp" alt="5th Element takeout order prepared for delivery"><span>Delivery</span></a>
          <a class="jl-service" href="#visit"><img src="/assets/images/order.webp" alt="5th Element takeout order"><span>Takeout</span></a>
          <a class="jl-service" href="/Sample3/catering.php"><img src="/assets/images/catering.webp" alt="Indian catering dishes"><span>Catering</span></a>
        </div>
      </div>
    </section>

    <section class="jl-buffet" id="menu" aria-labelledby="jl-buffet-title">
      <div class="jl-container jl-buffet-grid">
        <div class="jl-buffet-copy">
          <h2 id="jl-buffet-title">The lunch buffet ritual.</h2>
          <p>A delightful spread of authentic Indian dishes,<br>perfect for your midday break.</p>
          <strong>Vegetarian &amp; Non-Vegetarian Choices</strong>
          <div class="jl-buffet-hours">
            <div><span aria-hidden="true">▣</span><p>Monday - Friday<br><b>11 AM – 2:30 PM</b></p></div>
            <div><span aria-hidden="true">▣</span><p>Saturday - Sunday<br><b>11 AM – 3 PM</b></p></div>
          </div>
          <a class="jl-button jl-button--olive" href="#visit">Buffet Menu <b>→</b></a>
        </div>
        <div class="jl-buffet-image"><img src="/assets/images/hero-biryani.webp" alt="Freshly prepared biryani and Indian dishes" loading="lazy"><span class="jl-buffet-image-overlay" aria-hidden="true"></span></div>
      </div>
    </section>

    <section class="jl-gallery jl-section" aria-labelledby="jl-gallery-title">
      <div class="jl-container">
        <div class="jl-heading jl-heading--center"><div class="jl-ornament" aria-hidden="true"><i></i><span>❦</span><i></i></div><h2 id="jl-gallery-title">A place to pause. A table to share.</h2></div>
        <div class="jl-gallery-grid">
          <figure class="jl-gallery-large"><img src="/assets/images/dine.webp" alt="Dining room at 5th Element Baymeadows" loading="lazy"></figure>
          <figure><img src="/assets/images/ig2.webp" alt="Indian cuisine prepared with fresh ingredients" loading="lazy"></figure>
          <figure><img src="/assets/images/ig1.webp" alt="Aromatic Indian rice dish" loading="lazy"></figure>
        </div>
      </div>
    </section>

    <section class="jl-testimonials jl-section" aria-labelledby="jl-testimonials-title">
      <div class="jl-container">
        <div class="jl-heading jl-heading--center"><div class="jl-ornament" aria-hidden="true"><i></i><span>❦</span><i></i></div><h2 id="jl-testimonials-title">Stories from the table.</h2></div>
        <div class="jl-testimonial-row">
          <button class="jl-arrow" type="button" data-jl-prev aria-label="Previous testimonial">‹</button>
          <figure class="jl-testimonial" data-jl-testimonial>
            <div class="jl-stars" aria-label="5 out of 5 stars">★★★★★</div>
            <blockquote>“Amazing food, wonderful service and a beautiful ambiance.<br>Our go-to spot in Jacksonville!”</blockquote>
            <figcaption>Priya S. · Baymeadows, Jacksonville</figcaption>
          </figure>
          <button class="jl-arrow" type="button" data-jl-next aria-label="Next testimonial">›</button>
        </div>
      </div>
    </section>

    <section class="jl-visit" id="visit" aria-labelledby="jl-visit-title">
      <div class="jl-container jl-visit-grid">
        <div class="jl-visit-copy">
          <h2 id="jl-visit-title">Visit Baymeadows.</h2>
          <div class="jl-visit-detail"><span aria-hidden="true">●</span><address>9551 Baymeadows Rd, Units 10 &amp; 11,<br>Jacksonville, FL 32256</address></div>
          <div class="jl-visit-detail"><span aria-hidden="true">⌕</span><p><a href="tel:+19044488265">(904) 448-8265</a><br><a href="tel:+19044488266">(904) 448-8266</a></p></div>
          <div class="jl-visit-detail"><span aria-hidden="true">◷</span><p>Monday - Friday: 11 AM - 9:45 PM<br>Saturday: 11 AM - 10 PM<br>Sunday: 11 AM - 9:20 PM</p></div>
          <a class="jl-button jl-button--olive" target="_blank" rel="noopener" href="https://www.google.com/maps/search/?api=1&amp;query=9551%20Baymeadows%20Rd%20Jacksonville%20FL%2032256">Get Directions <b>→</b></a>
        </div>
        <div class="jl-visit-image"><img src="/assets/images/spices.webp" alt="Fresh Indian spices used in our kitchen" loading="lazy"></div>
      </div>
    </section>

    <section class="jl-closing" aria-labelledby="jl-closing-title">
      <div class="jl-closing-bg" aria-hidden="true"></div>
      <div class="jl-container jl-closing-content"><div class="jl-ornament" aria-hidden="true"><i></i><span>❦</span><i></i></div><h2 id="jl-closing-title">The best journeys end at the table.</h2><a class="jl-button jl-button--olive" href="/Sample3/catering.php">Plan a catered celebration <b>→</b></a></div>
    </section>
  </main>

  <?php require __DIR__ . '/footer.php'; ?>
  <script src="/assets/js/sample-3.js" defer></script>
  <script src="/assets/js/sample-3-jacksonville.js" defer></script>
</body>
</html>
