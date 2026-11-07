<?php require_once __DIR__ . '/includes/functions.php'; require_once __DIR__ . '/includes/common-components.php'; ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>5th Element — Tradition with a little fire</title>
  <meta name="description" content="Discover Indian cuisine and warm hospitality at 5th Element in Florida. Explore our dishes, find your restaurant, or plan a catered celebration.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=DM+Sans:wght@400;500;600;700&family=Cormorant+Garamond:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/sample-2-home.css?v=65">
</head>
<body class="home-page">
<svg xmlns="http://www.w3.org/2000/svg" class="icon-definitions" aria-hidden="true"><defs>
<symbol id="icon-pin" viewBox="0 0 24 24"><path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="3"/></symbol>
<symbol id="icon-dine" viewBox="0 0 24 24"><path d="M4 2v7m3-7v7m3-7v7M4 7h6M7 9v13M19 2c-4 3-4 9 0 10V2Zm0 10v10"/></symbol>
<symbol id="icon-bag" viewBox="0 0 24 24"><path d="M4 8h16l1 13H3L4 8Zm4 0V6a4 4 0 0 1 8 0v2"/></symbol>
<symbol id="icon-order" viewBox="0 0 24 24"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M9 6h6m-6 4h6m-6 4h4m-2 4h2"/></symbol>
<symbol id="icon-delivery" viewBox="0 0 24 24"><path d="M1 5h13v12H1V5Zm13 4h5l4 5v3h-9M3 9h6"/><circle cx="5" cy="18" r="3"/><circle cx="18" cy="18" r="3"/></symbol>
<symbol id="icon-feast" viewBox="0 0 24 24"><path d="M2 18h20M4 18a8 8 0 0 1 16 0M12 10V7m-2 0h4M4 22h16M8 3l1 2m7-2-1 2"/></symbol>
<symbol id="icon-lotus" viewBox="0 0 24 24"><path d="M12 20C4 16 7 7 12 2c5 5 8 14 0 18Zm0 0C3 22 1 12 2 8c4 0 8 3 10 7m0 5c9 2 11-8 10-12-4 0-8 3-10 7"/></symbol>
</defs></svg>
<a class="skip" href="#main">Skip to content</a>
<?php $pageClass='home-page'; $headerCta='Find a table'; $headerTarget='#locations'; require __DIR__ . '/header.php'; unset($headerCta, $headerTarget); ?>
<nav class="homepage-section-nav" aria-label="Homepage sections" data-section-nav>
  <div class="homepage-section-nav__track">
    <a class="is-active" href="#home" data-section-link="home" aria-current="true"><svg aria-hidden="true"><use href="#icon-lotus"/></svg><span data-min-font-exempt>Home</span></a>
    <a href="#dining" data-section-link="dining"><svg aria-hidden="true"><use href="#icon-dine"/></svg><span data-min-font-exempt>Dining</span></a>
    <a href="#takeout" data-section-link="takeout"><svg aria-hidden="true"><use href="#icon-bag"/></svg><span data-min-font-exempt>Takeout</span></a>
    <a href="#cuisines" data-section-link="cuisines"><svg aria-hidden="true"><use href="#icon-order"/></svg><span data-min-font-exempt>Menu</span></a>
    <a href="#locations" data-section-link="locations"><svg aria-hidden="true"><use href="#icon-pin"/></svg><span data-min-font-exempt>Locations</span></a>
    <a href="#weekly" data-section-link="weekly"><svg aria-hidden="true"><use href="#icon-feast"/></svg><span data-min-font-exempt>Weekly Menu</span></a>
    <a href="#our-story" data-section-link="our-story"><svg aria-hidden="true"><use href="#icon-lotus"/></svg><span data-min-font-exempt>Our Story</span></a>
    <a href="#celebrations" data-section-link="celebrations"><svg aria-hidden="true"><use href="#icon-feast"/></svg><span data-min-font-exempt>Catering</span></a>
    <a href="#testimonials-section" data-section-link="testimonials-section"><svg aria-hidden="true" viewBox="0 0 24 24"><path d="m12 2.8 2.8 5.7 6.3.9-4.6 4.4 1.1 6.2-5.6-3-5.6 3 1.1-6.2L3 9.4l6.3-.9L12 2.8Z"/></svg><span data-min-font-exempt>Reviews</span></a>
    <a href="#blogs" data-section-link="blogs"><svg aria-hidden="true"><use href="#icon-order"/></svg><span data-min-font-exempt>Blog</span></a>
  </div>
</nav>
<main id="main">
<section class="hero" id="home">
  <div class="hero-topline"><span>INDIA, IN EVERY SENSE.</span><span>FLORIDA, AT EVERY TABLE.</span></div>
  <div class="hero-canvas">
    <div class="hero-copy">
      <p class="eyebrow">5TH ELEMENT INDIAN RESTAURANT</p>
      <h1>Indian Restaurant<br>&amp; <em>Catering</em>
      <span class="hero-star" aria-hidden="true"></span></h1>
      <p class="intro">Bold Indian flavours. A generous welcome.<br>A whole world of stories on your plate.</p>
      <div class="hero-actions">
        <a class="button gold" href="#locations">Find a Table</a>
        <a class="text-link" href="#weekly">Meet the favourites →</a>
      </div>
    </div>
    <div class="hero-art">
      <div class="hero-photo">
        <img src="/assets/images/hero-biryani.webp" alt="Fragrant Indian biryani served with vibrant spices" fetchpriority="high">
      </div>
      <div class="spice-photo">
        <img src="/assets/images/spices.webp" alt="Colourful Indian spices" fetchpriority="high">
        <span data-min-font-exempt>IT STARTS WITH THE SPICE.</span>
      </div>
      <div class="flavour-stamp">
        <span data-min-font-exempt>FULL OF</span><strong>SOUL</strong>
        <span data-min-font-exempt>MADE TO SHARE</span>
      </div>
      <div class="photo-credit">THE ART OF A REALLY GOOD MEAL.</div>
    </div>
  </div>
  <form class="hero-location" action="https://my5thelement.com/jacksonville/" id="location-form">
    <label for="restaurant-select"><svg class="icon" aria-hidden="true"><use href="#icon-pin"/></svg> YOUR NEXT STOP</label>
    <select id="restaurant-select" aria-label="Choose your restaurant">
      <option value="jacksonville/">Baymeadows, Jacksonville</option>
      <option value="jacksonville-town-center/">Towncenter, Jacksonville</option>
      <option value="daytona/">Daytona</option>
      <option value="palm-coast/">Palm Coast</option>
    </select>
    <button type="submit">Explore restaurant & order <span>↗</span></button>
    <a href="#dining" class="scroll-cue">SCROLL TO DISCOVER ↓</a>
  </form>
</section>
<section class="service-strip" aria-label="Restaurant services">
  <a href="#locations">
    <svg class="icon" aria-hidden="true"><use href="#icon-pin"/></svg>
    Our locations
    <small>Across Florida</small>
  </a>
  <a href="#locations">
    <svg class="icon" aria-hidden="true"><use href="#icon-dine"/></svg>
    Dine-in
    <small>Make yourself at home</small>
  </a>
  <a href="#locations">
    <svg class="icon" aria-hidden="true"><use href="#icon-bag"/></svg>
    Takeout
    <small>Freshly packed for you</small>
  </a>
  <a href="#locations">
    <svg class="icon" aria-hidden="true"><use href="#icon-delivery"/></svg>
    Delivery
    <small>Check your local restaurant</small>
  </a>
  <a href="#celebrations">
    <svg class="icon" aria-hidden="true"><use href="#icon-feast"/></svg>
    Catering
    <small>For every occasion</small>
  </a>
</section>

<?php require __DIR__ . '/_dining.php'; ?>
<?php require __DIR__ . '/_categories.php'; ?>
<?php require __DIR__ . '/_locations.php'; ?>
<section class="takeout-banner" id="takeout" aria-label="Takeout">
  <div class="takeout-banner__content">
    <p class="takeout-banner__eyebrow" data-min-font-exempt>Takeout</p>
    <h2>Order Online &amp; Pick Up</h2>
    <p class="takeout-banner__copy" data-min-font-exempt>Enjoy your favorite Indian dishes<br>from the comfort of your home.</p>
    <ul class="takeout-banner__details" aria-label="Takeout options">
      <li><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M4 5h16v12H4zM8 19h8M9 9h6M9 13h4"/></svg><span data-min-font-exempt>Order<br>Online</span></li>
      <li><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M7 8h10l1 12H6L7 8ZM9 8V6a3 3 0 0 1 6 0v2M9 12h.01M15 12h.01M9 15h.01M15 15h.01"/></svg><span data-min-font-exempt>Pick Up at<br>Restaurant</span></li>
    </ul>
    <a class="takeout-banner__cta" href="#locations">Order Now</a>
  </div>
  <div class="takeout-banner__visual">
    <div class="takeout-banner__frame">
      <img class="takeout-banner__food" src="/assets/images/dish-biryani.webp" alt="Freshly prepared Indian biryani for takeout" loading="lazy">
      <img class="takeout-banner__frame-art" src="/assets/images/takeout-islamic-frame.png" alt="" aria-hidden="true" loading="lazy">
    </div>
  </div>
</section>
<?php require __DIR__ . '/_weekly.php'; ?>
<section class="story section" id="our-story">
  <div class="story-art">
    <img src="/assets/images/indian-cuisine.webp" alt="A colourful selection of Indian ingredients and spices" loading="lazy">
    <span class="image-note">Every flavour has a story.</span>
  </div>
  <div class="story-copy">
    <p></p>
    <h2>Our Story</h2>
    <p>In India, a meal is an invitation. To pause, to share, to feel at home. That spirit is at the heart of 5th Element.</p>
    <p>Our kitchen brings together the richness of Indian cooking and the lively flavours of Indo-Chinese cuisine. From comforting curries to fragrant biryanis, there is always something to gather around.</p>
    <a class="text-link dark" href="#cuisines">Discover your next favourite <span>→</span></a>
  </div>
</section>
<section class="celebrations" id="celebrations">
  <div class="celebration-photo"><img src="/assets/images/Indian-Catering.webp" alt="A generous Indian catering spread for a celebration" loading="lazy"></div><div class="celebration-copy"><span class="ornament" aria-hidden="true">✧</span><div class="celebration-content"><p class="eyebrow">FOR EVERY OCCASION</p><h2>Catering Services</h2><p>A wedding feast. A family milestone. A lunch that brings the team together. Let us bring the flavours of India to your celebration.</p><a class="button gold" href="https://my5thelement.com/catering-menu-booking/">View Catering</a></div></div><ul class="occasion-list feast-occasion-tags" aria-label="Celebration types"><li>Weddings</li><li>Corporate events</li><li>Private parties</li><li>Family gatherings</li><li>Special events</li></ul></section>
<?php require __DIR__ . '/_community.php'; ?>
</main>

<?php require __DIR__ . '/footer.php'; ?>

<script>
document.querySelector('#location-form').addEventListener('submit', event => { event.preventDefault(); window.location.href = 'https://my5thelement.com/' + document.querySelector('#restaurant-select').value; });
const toggle = document.querySelector('.nav-toggle');
const nav = document.querySelector('#inner-nav');
function closeMenu() { toggle.setAttribute('aria-expanded', 'false'); nav.classList.remove('is-open'); }
toggle.addEventListener('click', () => { const open = toggle.getAttribute('aria-expanded') !== 'true'; toggle.setAttribute('aria-expanded', String(open)); nav.classList.toggle('is-open', open); });
nav.querySelectorAll('a').forEach(link => link.addEventListener('click', closeMenu));
document.addEventListener('keydown', event => { if (event.key === 'Escape') { closeMenu(); toggle.focus(); } });
const newsletterForm=document.querySelector('#newsletter-form');
if(newsletterForm)newsletterForm.addEventListener('submit', event => { event.preventDefault(); document.querySelector('#newsletter-status').textContent = 'Thank you! This is a design preview; your email has not been subscribed.'; });
</script><script src="/assets/js/minimum-font-size.js?v=1" defer></script><script src="/assets/js/sample-2-carousel.js?v=5" defer></script><script src="/assets/js/sample-2-home.js?v=5" defer></script>
</body>
</html>
