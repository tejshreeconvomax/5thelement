<?php
$title = 'Contact Us';
$description = 'Contact 5th Element for restaurant questions, catering enquiries, and warm Indian hospitality in Jacksonville.';
$pageClass = 'contact-page';
$headerCta = 'Visit Jacksonville';
$headerTarget = 'jacksonville.php';
require __DIR__ . '/_inner-head.php';
?>
<section class="contact-hero"><div class="contact-hero-copy"><p class="eyebrow">WE’D LOVE TO HEAR FROM YOU</p><h1>Let’s make<br><em>plans together.</em></h1><p>Questions about your next meal, a special gathering, or our Jacksonville restaurant? Our team is ready to help.</p></div><aside class="contact-hero-card"><img src="/assets/images/loc-jacksonville.webp" alt="A welcoming 5th Element dining space" fetchpriority="high"><div><span>BAYMEADOWS · JACKSONVILLE</span><strong>Good food.<br>Warm company.</strong><a href="tel:9044488265">Call the restaurant <b aria-hidden="true">↗</b></a></div></aside><span class="contact-hero-seal" aria-hidden="true">A WARM<br><em>welcome</em><br>AWAITS</span></section>

<section class="contact-main page-section">
  <div class="contact-details"><p class="eyebrow">FIND YOUR WAY TO US</p><h2>Here for every<br><em>kind of gathering.</em></h2><p>Reach out directly, or send a note and we’ll point you to the right person.</p><figure class="contact-postcard"><img src="/assets/images/event-festive.webp" alt="A festive Indian celebration table" loading="lazy"><figcaption>YOUR TABLE AWAITS</figcaption></figure><div class="contact-detail-list"><a href="tel:9044488265"><?= icon('phone') ?><span><small>RESTAURANT</small>(904) 448-8265</span></a><a href="tel:5102995378"><?= icon('phone') ?><span><small>CATERING</small>(510) 299-5378</span></a><a href="mailto:caterings@my5thelement.com"><?= icon('mail') ?><span><small>EMAIL</small>caterings@my5thelement.com</span></a><a href="https://www.google.com/maps/search/?api=1&query=9551%20Baymeadows%20Rd%20Jacksonville%20FL%2032256"><?= icon('pin') ?><span><small>VISIT</small>9551 Baymeadows Rd, Jacksonville</span></a></div><a class="quiet-link" href="<?= h(sample2_url('location-menu.php')) ?>">Explore Jacksonville catering →</a></div>
  <form class="contact-form event-form" data-email-draft data-email-subject="Website message">
    <p class="eyebrow">SEND A NOTE</p><h2>How can we help?</h2>
    <div class="form-grid"><label>Name<input name="name" autocomplete="name" required></label><label>Email<input name="email" type="email" autocomplete="email" required></label><label>Phone<input name="phone" type="tel" autocomplete="tel"></label><label>Preferred date<input name="date" type="date" required></label><label class="wide">What can we help with?<select name="occasion"><option>Restaurant question</option><option>Catering enquiry</option><option>Private event</option><option>Feedback</option><option>Other</option></select></label><label class="wide">Your message<textarea name="details" rows="5" placeholder="Tell us a little more…" required></textarea></label></div>
    <button class="btn gold" type="submit">Prepare message <?= icon('arrow') ?></button><p class="form-help">Opens an email draft for you to review and send.</p><p class="form-status" role="status"></p>
  </form>
</section>

<section class="contact-hours page-section"><div><p class="eyebrow">BAYMEADOWS · JACKSONVILLE</p><h2>Come hungry.<br><em>Leave happy.</em></h2></div><dl class="hours"><div><dt>Monday – Friday</dt><dd>11 AM – 9:45 PM</dd></div><div><dt>Saturday</dt><dd>11 AM – 10 PM</dd></div><div><dt>Sunday</dt><dd>11 AM – 9:20 PM</dd></div></dl><a class="btn outline" href="<?= h(sample2_url('jacksonville.php#visit')) ?>">Plan your visit <?= icon('arrow') ?></a></section>
<?php require __DIR__ . '/_inner-foot.php'; ?>
