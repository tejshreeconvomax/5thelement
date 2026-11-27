<?php
$testimonialTitle = $testimonialTitle ?? 'Why Florida Loves 5th Element';
$reviewLocation = $reviewLocation ?? 'all';
?>
<section class="section reviews shared-testimonials" id="testimonials-section" data-google-reviews="<?= h($reviewLocation) ?>">
  <div class="section-heading">
    <div>
      <h2><?= h($testimonialTitle) ?></h2>
    </div>
    <div class="slider-controls">
      <button type="button" data-slide="reviews-track" data-direction="-1" aria-label="Previous reviews" disabled>←</button>
      <button type="button" data-slide="reviews-track" data-direction="1" aria-label="Next reviews" disabled>→</button>
    </div>
  </div>
  <div class="scroll-track review-track" data-auto-scroll id="reviews-track" tabindex="0" aria-label="Google guest reviews">
    <p class="review-status" role="status">Loading Google reviews…</p>
  </div>
  <p class="review-disclosure" hidden>
    <span data-review-static hidden>Featured excerpts from Google reviews displayed on the restaurant website, captured November 25, 2026. This selection does not update automatically.</span>
    <span data-review-live hidden>Reviews from Google Business Profile. Written reviews only, shown by most recent update. <a href="https://support.google.com/contributionpolicy/answer/7400114" target="_blank" rel="noopener noreferrer">About Google reviews</a></span>
  </p>
</section>
