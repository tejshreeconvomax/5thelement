<?php
$testimonialEyebrow = $testimonialEyebrow ?? 'WHAT OUR GUESTS SAY';
$testimonialTitle = $testimonialTitle ?? 'Stories from <em>the table.</em>';
$testimonialNote = $testimonialNote ?? 'Sample reviews carried over from Sample 1 for this design preview.';
$reviews = [
    ['The food is always fresh, full of flavour and the service is excellent. The biryani and butter chicken never miss.','Priya S.','Baymeadows, Jacksonville'],
    ['Amazing variety, authentic taste and a warm atmosphere. Highly recommend for both dining and catering.','Rahul M.','Towncenter, Jacksonville'],
    ['Everything from the appetisers to the desserts was absolutely delicious.','Neha K.','Daytona, Florida'],
    ['A real gem on the coast. Rich, honest flavours, generous portions and such friendly staff.','Daniel R.','Palm Coast, Florida'],
    ['We ordered catering for our daughter’s birthday and the spread was incredible.','Anita P.','Baymeadows, Jacksonville'],
    ['The tandoori platter and garlic naan are out of this world.','Marcus L.','Daytona, Florida'],
];
$reviewEscape = static fn($value) => htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
?>
<section class="section reviews shared-testimonials" id="testimonials-section">
  <div class="section-heading">
    <div><p class="eyebrow"><?= $reviewEscape($testimonialEyebrow) ?></p><h2><?= $testimonialTitle ?></h2></div>
    <div class="slider-controls">
      <button type="button" data-slide="reviews-track" data-direction="-1" aria-label="Previous reviews">←</button>
      <button type="button" data-slide="reviews-track" data-direction="1" aria-label="Next reviews">→</button>
    </div>
  </div>
  <?php if ($testimonialNote !== ''): ?><p class="preview-note"><?= $reviewEscape($testimonialNote) ?></p><?php endif; ?>
  <div class="scroll-track review-track" data-auto-scroll id="reviews-track" tabindex="0" aria-label="Guest reviews">
    <?php foreach ($reviews as [$quote, $name, $location]): ?>
      <figure>
        <div class="review-topline"><span class="stars" aria-label="5 out of 5 stars">★★★★★</span><span class="review-seal" aria-hidden="true">✦</span></div>
        <blockquote>“<?= $reviewEscape($quote) ?>”</blockquote>
        <figcaption><strong><?= $reviewEscape($name) ?></strong><span><?= $reviewEscape($location) ?></span></figcaption>
      </figure>
    <?php endforeach; ?>
  </div>
</section>
