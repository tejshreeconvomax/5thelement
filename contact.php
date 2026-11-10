<?php
$title = 'Contact Us';
$description = 'Contact 5th Element restaurants across Florida for restaurant questions, catering enquiries, and warm Indian hospitality.';
$pageClass = 'contact-page';
$headerCta = 'Visit Jacksonville';
$headerTarget = 'jacksonville.php';
$restaurantLocations = [
  ['Baymeadows, Jacksonville', '9551 Baymeadows Rd Unit 10 & 11, Jacksonville, FL 32256', ['904-448-8265', '904-448-8266']],
  ['Town Center, Jacksonville', '10208 Buckhead Branch Dr, Jacksonville, FL 32246', ['904-893-4265', '904-893-4266']],
  ['Palm Coast', '101 Palm Harbor Pkwy, Palm Coast, FL 32137', ['386-302-0202']],
  ['Daytona Beach', '1448 W International Speedway Blvd, Daytona Beach, FL 32114', ['386-265-0726', '386-265-0729']],
];
require __DIR__ . '/layouts/inner-page-head.php';
?>
<section class="contact-hero">
  <div class="contact-hero-copy">
    <p class="eyebrow lotus-eyebrow">CONTACT 5TH ELEMENT</p>
    <h1>Contact Us</h1>
    <p>Questions about your next meal, a special gathering, or our Jacksonville restaurant? Our team is ready to help.</p>
  </div>
  <aside class="contact-hero-card"><img src="/assets/images/dine.webp" alt="A warm 5th Element dining room" fetchpriority="high">
    <div><strong>Good food.<br>Warm company.</strong><a href="tel:9044488265">Call the restaurant <b aria-hidden="true">↗</b></a></div>
  </aside><span class="contact-hero-seal" aria-hidden="true">A WARM<br><em>welcome</em><br>AWAITS</span>
</section>

<section class="contact-main page-section">
  <div class="contact-details">
    <p class="eyebrow lotus-eyebrow">OUR LOCATIONS</p>
    <h2>Visit Us</h2>
    <p>Find your nearest 5th Element restaurant, get directions, or call the team directly.</p>
    <figure class="contact-postcard"><img src="/assets/images/event-festive.webp" alt="A festive Indian celebration table" loading="lazy">
      <figcaption>YOUR TABLE AWAITS</figcaption>
    </figure>
    <div class="contact-location-list">
      <?php foreach ($restaurantLocations as [$name, $address, $phones]): ?>
        <article class="contact-location">
          <h3><?= icon('pin') ?><span><?= h($name) ?></span></h3>
          <a class="contact-location__address" href="https://www.google.com/maps/search/?api=1&amp;query=<?= rawurlencode($address) ?>"><?= h($address) ?></a>
          <div class="contact-location__phones">
            <?php foreach ($phones as $phone): ?><a href="tel:<?= h(str_replace('-', '', $phone)) ?>"><?= icon('phone') ?><?= h($phone) ?></a><?php endforeach; ?>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
    <a class="quiet-link" href="mailto:caterings@my5thelement.com">For catering enquiries, email our team →</a>
  </div>
  <form class="contact-form event-form" data-email-draft data-email-subject="Website message">
    <p class="eyebrow">SEND A NOTE</p>
    <h2>How can we help?</h2>
    <div class="form-grid"><label>Name<input name="name" autocomplete="name" required></label><label>Email<input name="email" type="email" autocomplete="email" required></label><label>Phone<input name="phone" type="tel" autocomplete="tel"></label><label>Preferred date<input name="date" type="date" required></label><label class="wide">What can we help with?<select name="occasion">
          <option>Restaurant question</option>
          <option>Catering enquiry</option>
          <option>Private event</option>
          <option>Feedback</option>
          <option>Other</option>
        </select></label><label class="wide">Your message<textarea name="details" rows="5" placeholder="Tell us a little more…" required></textarea></label></div>
    <button class="btn gold" type="submit">Submit <?= icon('arrow') ?></button>
    <p class="form-help">Opens an email draft for you to review and send.</p>
    <p class="form-status" role="status"></p>
  </form>
</section>

<section class="contact-hours page-section"><img class="contact-hours-chefs" src="/assets/images/contact-hours-chefs.png" alt="" aria-hidden="true" loading="lazy">
  <div>
    <p class="eyebrow">BAYMEADOWS · JACKSONVILLE</p>
    <h2>Restaurant Hours</h2>
  </div>
  <dl class="hours">
    <div>
      <dt>Monday – Friday</dt>
      <dd>11 AM – 9:45 PM</dd>
    </div>
    <div>
      <dt>Saturday</dt>
      <dd>11 AM – 10 PM</dd>
    </div>
    <div>
      <dt>Sunday</dt>
      <dd>11 AM – 9:20 PM</dd>
    </div>
  </dl><a class="btn outline" href="<?= h(sample2_url('jacksonville.php#visit')) ?>">Plan your visit <?= icon('arrow') ?></a>
</section>
<?php require __DIR__ . '/layouts/inner-page-foot.php'; ?>
