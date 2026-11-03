<?php
$pageTitle = 'Catering | 5th Element Indian Cuisine';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Catering by 5th Element Indian Cuisine for weddings, corporate events, birthdays and celebrations across Florida.">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="/assets/css/sample-3.css?v=44">
  <link rel="stylesheet" href="/assets/css/sample-3-catering.css?v=1">
</head>
<body class="op-page sc-catering-page">
  <a class="op-skip" href="#main">Skip to catering content</a>
  <?php $headerCta = 'Plan your event'; require __DIR__ . '/header.php'; ?>

  <main id="main">
    <section class="sc-hero" id="home" aria-labelledby="catering-title">
      <img class="sc-hero-image" src="/assets/images/catering.webp" alt="Indian dishes prepared for a catered celebration">
      <div class="sc-container sc-hero-inner">
        <div class="sc-hero-copy">
          <div class="sc-rule" aria-hidden="true"><span>❧</span></div>
          <h1 id="catering-title">Exceptional Catering <em>for Every Occasion</em></h1>
          <p>Bring the authentic taste of India to your special events with our professional catering services.</p>
          <a class="sc-button sc-button--olive" href="#enquiry">Plan Your Event <b>→</b></a>
        </div>
      </div>
    </section>

    <section class="sc-occasions" aria-labelledby="occasions-title">
      <div class="sc-container">
        <header class="sc-section-title">
          <div class="sc-rule sc-rule--center" aria-hidden="true"><span>❧</span></div>
          <h2 id="occasions-title">Catering Occasions</h2>
        </header>
        <div class="sc-occasion-grid">
          <article class="sc-occasion-card"><img src="/assets/images/indian-wedding-mandap.webp" alt="Decorated wedding venue"><h3>Weddings</h3></article>
          <article class="sc-occasion-card"><img src="/assets/images/event-corporate.webp" alt="Corporate event dining room"><h3>Corporate Events</h3></article>
          <article class="sc-occasion-card"><img src="/assets/images/event-birthday.webp" alt="Birthday cake and celebration"><h3>Birthdays</h3></article>
          <article class="sc-occasion-card"><img src="/assets/images/festive-gathering.webp" alt="Glowing diyas at a festive gathering"><h3>Festive Gatherings</h3></article>
        </div>
      </div>
    </section>

    <section class="sc-custom" aria-labelledby="custom-title">
      <div class="sc-container sc-custom-inner">
        <div class="sc-custom-copy">
          <div class="sc-rule" aria-hidden="true"><span>❧</span></div>
          <h2 id="custom-title">Customized Catering <em>Just for You</em></h2>
          <p>From intimate gatherings to grand celebrations, we offer flexible catering options to suit your needs.</p>
          <ul>
            <li>Delicious Vegetarian &amp; Non-Vegetarian Options</li>
            <li>Dietary Preferences (Vegan, Gluten-Free, etc.)</li>
            <li>On-Time Delivery &amp; Professional Setup</li>
          </ul>
          <a class="sc-button sc-button--olive" href="#enquiry">Get a Catering Quote <b>→</b></a>
        </div>
        <figure class="sc-custom-photo"><img src="/assets/images/hero-biryani.webp" alt="A colorful spread of Indian catering dishes"></figure>
      </div>
    </section>

    <!-- <section class="sc-locations" id="locations" aria-labelledby="locations-title">
      <div class="sc-container">
        <header class="sc-section-title"><div class="sc-rule sc-rule--center" aria-hidden="true"><span>❧</span></div><h2 id="locations-title">Our Restaurant Locations</h2></header>
        <div class="sc-location-grid">
          <article class="sc-location-card"><img src="/assets/images/jacksonville-bay-meadows.webp" alt="5th Element Baymeadows restaurant"><h3>Baymeadows</h3></article>
          <article class="sc-location-card"><img src="/assets/images/town-center.webp" alt="5th Element Towncenter restaurant"><h3>Towncenter</h3></article>
          <article class="sc-location-card"><img src="/assets/images/daytona-menu.webp" alt="5th Element Daytona restaurant"><h3>Daytona</h3></article>
          <article class="sc-location-card"><img src="/assets/images/palm-coast-fl.webp" alt="5th Element Palm Coast restaurant"><h3>Palm Coast</h3></article>
        </div>
      </div>
    </section> -->
    <section class="op-location-trail" id="locations">
            <header class="op-location-showcase-head op-reveal"><div class="op-location-ornament" aria-hidden="true"><i></i><span>✦</span><i></i></div><p class="op-overline">OUR FOUR FLORIDA RESTAURANTS</p><h2>Our Restaurant <em>Locations</em></h2><p>Select a restaurant to view its menu, current prices, and online ordering options.</p><div class="op-location-ornament op-location-ornament-bottom" aria-hidden="true"><i></i><span>✦</span><i></i></div></header>
            <nav class="op-location-deck" aria-label="Choose a restaurant location"><?php foreach ([['Baymeadows','JACKSONVILLE, FL','jacksonville-bay-meadows.webp','5th Element Baymeadows restaurant exterior'],['Towncenter','JACKSONVILLE, FL','town-center.webp','5th Element Towncenter restaurant exterior'],['Daytona','DAYTONA, FL','daytona-menu.webp','5th Element Daytona restaurant exterior'],['Palm Coast','PALM COAST, FL','palm-coast-fl.webp','5th Element Palm Coast restaurant exterior']] as [$name,$city,$image,$alt]): ?><a class="op-location-card op-reveal" href="#menu" aria-label="View menu and order from <?= $name ?>"><figure><img src="/assets/images/<?= $image ?>" alt="<?= $alt ?>" loading="lazy"></figure><div class="op-location-card-title"><h3><?= $name ?></h3><p><?= $city ?></p></div><span class="op-location-card-action">View Menu &amp; Order <b>→</b></span></a><?php endforeach; ?></nav>
        </section>

    <section class="sc-gallery" aria-labelledby="gallery-title">
      <div class="sc-container">
        <header class="sc-section-title"><div class="sc-rule sc-rule--center" aria-hidden="true"><span>❧</span></div><h2 id="gallery-title">Our Catering Gallery</h2><p>A glimpse of the food, presentation, and atmosphere we bring to every celebration.</p></header>
        <div class="sc-gallery-carousel" data-gallery-carousel>
          <div class="sc-gallery-strip" tabindex="0" aria-label="Catering gallery. Use the arrow keys to browse.">
            <figure class="sc-gallery-item" data-gallery-item><img src="/assets/images/event-festive.webp" alt="Indian appetizers for a celebration"></figure>
            <figure class="sc-gallery-item" data-gallery-item><img src="/assets/images/dish-naan.webp" alt="Freshly made Indian breads"></figure>
            <figure class="sc-gallery-item" data-gallery-item><img src="/assets/images/catering.webp" alt="Catering buffet with Indian dishes"></figure>
            <figure class="sc-gallery-item" data-gallery-item><img src="/assets/images/event-corporate.webp" alt="Catered corporate banquet"></figure>
            <figure class="sc-gallery-item" data-gallery-item><img src="/assets/images/week-drink.webp" alt="Colorful drinks served at an event"></figure>
          </div>
          <div class="sc-gallery-controls">
            <button type="button" data-gallery-prev aria-label="Previous gallery image">←</button>
            <p aria-live="polite"><span data-gallery-current>01</span> / 05</p>
            <button type="button" data-gallery-next aria-label="Next gallery image">→</button>
          </div>
        </div>
      </div>
    </section>

    <section class="sc-testimonials" aria-labelledby="testimonials-title">
      <div class="sc-container">
        <header class="sc-section-title"><div class="sc-rule sc-rule--center" aria-hidden="true"><span>❧</span></div><h2 id="testimonials-title">What Our Customers Say</h2></header>
        <div class="sc-testimonial-slider" data-slider>
          <button class="sc-slider-button" type="button" data-slider-prev aria-label="Previous testimonial">‹</button>
          <div class="sc-testimonial-viewport op-slider-viewport" tabindex="0" aria-label="Customer testimonials">
            <div class="sc-testimonial-track op-slider-track">
              <figure class="sc-testimonial op-slider-slide"><img src="/assets/images/event-wedding.webp" alt=""><blockquote>“The catering was outstanding! The food was delicious, and the service was impeccable.”<cite>— Priya S.</cite></blockquote></figure>
              <figure class="sc-testimonial op-slider-slide"><img src="/assets/images/event-corporate.webp" alt=""><blockquote>“From the first call to the final course, the team made our event feel effortless.”<cite>— Daniel M.</cite></blockquote></figure>
              <figure class="sc-testimonial op-slider-slide"><img src="/assets/images/catering.webp" alt=""><blockquote>“Every guest asked about the food. The vegetarian spread was especially memorable.”<cite>— Anjali R.</cite></blockquote></figure>
            </div>
          </div>
          <button class="sc-slider-button" type="button" data-slider-next aria-label="Next testimonial">›</button>
          <p class="sc-slider-count"><span data-slider-current>01</span> / 03</p>
        </div>
      </div>
    </section>

    <section class="sc-enquiry" id="enquiry" aria-labelledby="enquiry-title">
      <div class="sc-container sc-enquiry-inner">
        <div class="sc-enquiry-copy"><span aria-hidden="true">❧</span><h2 id="enquiry-title">Inquire About<br>Our Catering Services</h2><p>Let us help you make your event memorable.</p></div>
        <form class="sc-enquiry-form" action="#enquiry" method="post">
          <label><span>Your name</span><input name="name" autocomplete="name" placeholder="Your Name" required></label>
          <label><span>City</span><input name="city" autocomplete="address-level2" placeholder="City"></label>
          <label><span>Occasion</span><select name="occasion" aria-label="Occasion"><option value="">Occasion</option><option>Wedding</option><option>Corporate event</option><option>Birthday</option><option>Festive gathering</option><option>Other</option></select></label>
          <label><span>Your email</span><input type="email" name="email" autocomplete="email" placeholder="Your Email" required></label>
          <label><span>Event date</span><input type="date" name="date" aria-label="Event date"></label>
          <label class="sc-message"><span>Your message</span><textarea name="message" rows="3" placeholder="Your Message"></textarea></label>
          <label><span>Your phone</span><input type="tel" name="phone" autocomplete="tel" placeholder="Your Phone"></label>
          <label><span>Guests</span><select name="guests" aria-label="Estimated guests"><option value="">Guests</option><option>1–25</option><option>26–50</option><option>51–100</option><option>101–200</option><option>200+</option></select></label>
          <button class="sc-button sc-button--olive" type="submit">Submit Enquiry <b>→</b></button>
        </form>
      </div>
    </section>

    <section class="sc-final-cta" aria-labelledby="final-title">
      <img src="/assets/images/catering-bg.webp" alt="">
      <div class="sc-container sc-final-inner"><div><h2 id="final-title">Plan Your Perfect Event with 5th Element</h2><p>Great food. Unforgettable moments.</p></div><a class="sc-button sc-button--olive" href="#enquiry">Contact Us <b>→</b></a></div>
    </section>
  </main>

  <?php require __DIR__ . '/footer.php'; ?>
  <script src="/assets/js/sample-3.js?v=6" defer></script>
  <script src="/assets/js/sample-3-catering.js?v=1" defer></script>
</body>
</html>
