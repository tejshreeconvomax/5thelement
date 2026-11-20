<?php
$title = 'About Us';
$description = 'Learn about the Indian roots, generous hospitality, and shared-table spirit behind 5th Element.';
$pageClass = 'about-page';
$headerCta = 'Get in touch';
$headerTarget = 'contact.php';
require __DIR__ . '/layouts/inner-page-head.php';
?>
<section class="about-hero">
  <div class="about-hero-copy">
    <p class="eyebrow">5TH ELEMENT</p>
    <h1>Experience the Taste of India</h1>
    <p>Every table has a story, filled with authentic Indian flavors, good conversations, and lasting memories.</p>
    <a class="btn gold" href="<?= h(sample2_url('jacksonville.php')) ?>">Visit our table <?= icon('arrow') ?></a>
  </div>
  <figure class="about-hero-image"><img src="/assets/images/dine.webp" alt="A warm 5th Element dining table prepared for guests" fetchpriority="high">
    <!-- <figcaption>HOSPITALITY, WITH A ROYAL HEART</figcaption> -->
    <!-- <span class="about-hero-script">Every table<br>has a story.</span>
    <span class="about-hero-mark" aria-hidden="true">5<sup>th</sup></span> -->
  </figure>
</section>

<section class="about-story page-section">
  <div class="about-story-photo ornamental-photo"><img src="/assets/images/spices.webp" alt="A colourful assortment of Indian spices" loading="lazy"></div>
  <div class="about-story-copy">
    <p class="eyebrow">The Story behind 5th Element</p>
    <h2>A Modern Take on Timeless Indian Flavors</h2>
    <p>At 5th Element, we’re a team of passionate people brought together by one goal — to serve Indian cuisine that’s rich in tradition, yet fresh in approach.</p>
    <p>Founded by restaurateur Sridhar Sannala, 5th Element is born out of a deep love for India’s diverse food culture. What started as a simple idea has grown into a bold vision: to elevate Indian cuisine and present it with pride on a global table.</p>
    <p>Our kitchen blends old-world recipes with modern techniques, honoring the classics while introducing creative new dishes. From street-style favorites to refined regional specialties, every plate tells a story.</p>
    <p>Whether you’re here for a family meal, a business lunch, or a special celebration, 5th Element offers a vibrant dining experience that feels both familiar and exciting. </p>
    
  </div>
</section>

<section class="about-journey page-section">
  <div class="journey-heading">
    <p class="eyebrow">OUR JOURNEY</p>
    <h2>Our Journey so far..</h2>
  </div>
  <div class="journey-layout">
    <figure class="journey-overview"><img src="/assets/images/dine.webp" alt="A warmly lit 5th Element dining room" loading="lazy"></figure>
    <ol class="journey-timeline">
      <li class="journey-step"><span class="journey-year">2008</span><div class="journey-marker"><?= icon('spark') ?></div><div class="journey-copy"><h3>The Grand Beginning</h3><p>We opened the first 5th Element in Jacksonville’s Baymeadows, aiming to bring authentic Indian flavors to a wider audience</p></div><img src="/assets/images/spices.webp" alt="An assortment of Indian spices" loading="lazy"></li>
      <li class="journey-step"><span class="journey-year">2019</span><div class="journey-marker"><?= icon('pin') ?></div><div class="journey-copy"><h3>Sanford, FL</h3><p>By 2019, a new location was established in Sanford, Florida, expanding the brand’s presence in the state.</p></div><img src="/assets/images/dine.webp" alt="A warmly lit restaurant dining room" loading="lazy"></li>
      <li class="journey-step"><span class="journey-year">2022</span><div class="journey-marker"><?= icon('leaf') ?></div><div class="journey-copy"><h3>Expansion to a few more places</h3><p>The Palm Coast, Pompano &amp; Daytona Beach branches were operational by 2022, serving the South Florida region with their diverse menu.</p></div><img src="/assets/images/palm-coast-fl.webp" alt="Palm Coast, Florida" loading="lazy"></li>
      <li class="journey-step"><span class="journey-year">2024</span><div class="journey-marker"><?= icon('arrow') ?></div><div class="journey-copy"><h3>The Journey Continues</h3><p>With the growing demand for fresh Indian Cuisine in South Florida, we opened in Delray Beach &amp; new branch in Jacksonville (Town Center).</p></div><img src="/assets/images/town-center.webp" alt="Town Center, Jacksonville" loading="lazy"></li>
    </ol>
  </div>
</section>

<section class="about-amenities">
  <div class="amenities-panel">
    <h2>Our Amenities</h2>
    <p>Each 5th Element location is designed for comfort and convenience. From spacious seating and easy parking to online ordering, third-party delivery, and inclusive menu options like vegan, gluten-free, and Halal—we make every visit smooth, satisfying, and enjoyable. Catering services are also available for events of all sizes.</p>
    <div class="amenities-list">
      <article class="amenity-item"><span class="amenity-symbol"><?= icon('wifi') ?></span><h3>WiFi</h3></article>
      <article class="amenity-item"><span class="amenity-symbol"><?= icon('wheelchair') ?></span><h3>Accessibility-Friendly</h3></article>
      <article class="amenity-item"><span class="amenity-symbol"><?= icon('music') ?></span><h3>Live Music</h3></article>
      <article class="amenity-item"><span class="amenity-symbol"><?= icon('car') ?></span><h3>Parking</h3></article>
    </div>
  </div>
</section>

<section class="about-invitation"><span class="about-invitation-elephant about-invitation-elephant--left" aria-hidden="true"></span><span class="about-invitation-elephant about-invitation-elephant--right" aria-hidden="true"></span><span class="rosette" aria-hidden="true"></span>
  <p class="eyebrow">THE FIFTH ELEMENT</p>
  <h2>Our Restaurant</h2>
  <p>That is the part we are here for.</p><a class="btn outline" href="<?= h(sample2_url('contact.php')) ?>">Start a conversation <?= icon('arrow') ?></a>
</section>
<?php require __DIR__ . '/layouts/inner-page-foot.php'; ?>
