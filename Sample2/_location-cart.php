<?php
/**
 * Reusable cart shell. Supply a unique location ID when a location adopts it.
 * The client-side cart uses that ID as part of its storage namespace.
 */
$cartLocationId = $cartLocationId ?? 'jacksonville';
$cartLocationName = $cartLocationName ?? 'Jacksonville Catering';
$cartImage = $cartImage ?? '/assets/images/catering.webp';
?>
<section class="location-cart" data-location-cart data-location-id="<?= h($cartLocationId) ?>" data-location-name="<?= h($cartLocationName) ?>" data-default-image="<?= h($cartImage) ?>" aria-label="<?= h($cartLocationName) ?> cart">
  <div class="cart-confirmation" data-cart-confirmation role="dialog" aria-modal="false" aria-labelledby="cart-confirmation-title" hidden>
    <button class="cart-close" type="button" data-cart-continue aria-label="Close confirmation">×</button>
    <img data-cart-confirmation-image src="<?= h($cartImage) ?>" alt="">
    <div class="cart-confirmation-copy">
      <p class="eyebrow">ADDED TO YOUR CART</p>
      <h2 id="cart-confirmation-title" data-cart-confirmation-name></h2>
      <p data-cart-confirmation-details></p>
      <strong data-cart-confirmation-price></strong>
      <div class="cart-confirmation-actions">
        <button class="btn outline" type="button" data-cart-continue>Continue shopping</button>
        <button class="btn gold" type="button" data-cart-view>View cart <span aria-hidden="true">↗</span></button>
      </div>
    </div>
  </div>

  <button class="floating-cart" type="button" data-cart-open aria-label="Open cart" aria-haspopup="dialog" aria-controls="location-cart-drawer">
    <svg class="floating-cart-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M3.5 4.5h2l1.8 9.2a2 2 0 0 0 2 1.6h7.6a2 2 0 0 0 1.9-1.4l1.2-4.7H7"/><path d="M9.5 19.5h.01M17 19.5h.01"/></svg>
    <span class="cart-badge" data-cart-count aria-label="0 items">0</span>
  </button>

  <div class="cart-scrim" data-cart-scrim hidden></div>
  <aside class="cart-drawer" id="location-cart-drawer" data-cart-drawer aria-hidden="true" aria-labelledby="cart-drawer-title" tabindex="-1">
    <header class="cart-drawer-header">
      <div><p class="eyebrow">YOUR SELECTIONS</p><h2 id="cart-drawer-title">Your cart</h2><p data-cart-location-label><?= h($cartLocationName) ?></p></div>
      <button class="cart-close" type="button" data-cart-close aria-label="Close cart">×</button>
    </header>
    <div class="cart-items" data-cart-items aria-live="polite"></div>
    <footer class="cart-drawer-footer">
      <div class="cart-totals"><span>Subtotal</span><strong data-cart-subtotal>$0.00</strong><span>Total</span><strong data-cart-total>$0.00</strong></div>
      <a class="btn gold cart-checkout" data-cart-checkout href="<?= h(sample2_url('checkout.php?location='.$cartLocationId)) ?>">Checkout <span aria-hidden="true">↗</span></a>
      <p>Taxes, delivery, and service charges are confirmed with your event quote.</p>
    </footer>
  </aside>
</section>
