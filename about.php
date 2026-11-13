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
    <p class="eyebrow">ABOUT 5TH ELEMENT</p>
    <h1>A Place to Gather</h1>
    <p>At 5th Element, every visit is an opportunity to share good food, easy conversation, and time together.</p>
    <a class="btn gold" href="<?= h(sample2_url('jacksonville.php')) ?>">Visit our table <?= icon('arrow') ?></a>
  </div>
  <figure class="about-hero-image"><img src="/assets/images/dine.webp" alt="A warm 5th Element dining table prepared for guests" fetchpriority="high">
    <figcaption>HOSPITALITY, WITH A ROYAL HEART</figcaption>
    <span class="about-hero-script">Every table<br>has a story.</span>
    <!-- <span class="about-hero-mark" aria-hidden="true">5<sup>th</sup></span> -->
  </figure>
</section>

<section class="about-story page-section">
  <div class="about-story-photo ornamental-photo"><img src="/assets/images/spices.webp" alt="A colourful assortment of Indian spices" loading="lazy"></div>
  <div class="about-story-copy">
    <p class="eyebrow">OUR APPROACH</p>
    <h2>Good food, shared well.</h2>
    <p>We create a welcoming setting for everyday meals, relaxed catch-ups, and occasions worth celebrating.</p>
    <p>Whether you dine in, pick up, or plan a gathering, our team is here to make the experience simple, generous, and enjoyable.</p>
    <div class="about-story-note"><span>OUR APPROACH</span><b>Warm welcome.<br>Thoughtful service.</b></div><a class="quiet-link" href="<?= h(sample2_url('catering.php')) ?>">Celebrate with us →</a>
  </div>
</section>

<section class="about-values page-section">
  <div class="section-title">
    <div>
      <p class="eyebrow">WHAT GUIDES US</p>
      <h2>Our Values</h2>
    </div>
    <p>From the first greeting to the last shared bite,<br>we make room for people to feel at home.</p>
  </div>
  <div class="about-value-grid">
    <article><span><?= icon('feast') ?></span>
      <p class="eyebrow">01 · GENEROSITY</p>
      <h3>More to share.</h3>
      <p>Food is at its best when there is enough for one more plate, one more story, and one more person at the table.</p>
    </article>
    <article><span><?= icon('spark') ?></span>
      <p class="eyebrow">02 · CRAFT</p>
      <h3>Flavour with feeling.</h3>
      <p>We build depth through time-honoured techniques, thoughtful ingredients, and a little joyful curiosity.</p>
    </article>
    <article><span><?= icon('dine') ?></span>
      <p class="eyebrow">03 · BELONGING</p>
      <h3>Come as you are.</h3>
      <p>A quick lunch, a family dinner, or a once-in-a-lifetime celebration: every guest deserves a warm welcome.</p>
    </article>
  </div>
</section>

<section class="about-invitation"><span class="rosette" aria-hidden="true"></span>
  <p class="eyebrow">THE FIFTH ELEMENT</p>
  <h2>Our Restaurant</h2>
  <p>That is the part we are here for.</p><a class="btn outline" href="<?= h(sample2_url('contact.php')) ?>">Start a conversation <?= icon('arrow') ?></a>
</section>
<?php require __DIR__ . '/layouts/inner-page-foot.php'; ?>