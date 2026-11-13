<?php

declare(strict_types=1);

$requestedLocation = strtolower((string) ($_GET['location'] ?? 'jacksonville'));
$checkoutLocationId = preg_replace('/[^a-z0-9-]/', '', $requestedLocation) ?: 'jacksonville';
$locationNames = ['jacksonville' => 'Jacksonville Catering', 'baymeadows' => 'Baymeadows', 'towncenter' => 'Towncenter', 'daytona' => 'Daytona', 'palm-coast' => 'Palm Coast'];
$checkoutLocationName = $locationNames[$checkoutLocationId] ?? '5th Element Catering';
$title = 'Checkout';
$description = 'Review your catering selections and submit your order request.';
$pageClass = 'checkout-page';
require __DIR__ . '/layouts/inner-page-head.php';
?>
<section class="checkout-shell page-section" data-checkout-page data-location-id="<?= h($checkoutLocationId) ?>" data-location-name="<?= h($checkoutLocationName) ?>">
  <header class="checkout-hero">
    <span class="checkout-hero-mandala checkout-hero-mandala--left" aria-hidden="true"></span>
    <div class="checkout-hero-copy">
      <p class="eyebrow">YOUR ORDER · <?= h($checkoutLocationName) ?></p>
      <h1>Checkout</h1>
      <span class="checkout-hero-divider" aria-hidden="true"><i></i><b>⌁</b><i></i></span>
    </div>
    <span class="checkout-hero-palace" aria-hidden="true"></span>
  </header>
  <div class="checkout-empty" data-checkout-empty hidden>
    <h2>Your cart is empty</h2>
    <p>Add dishes from the catering menu before continuing to checkout.</p><a class="btn gold" href="<?= h(sample2_url('catering/jacksonville/')) ?>">Browse the menu <span aria-hidden="true">↗</span></a>
  </div>
  <div class="checkout-layout" data-checkout-layout>
    <form class="checkout-form" data-checkout-form novalidate>
      <fieldset class="checkout-card checkout-step">
        <legend><span class="checkout-step-number">1</span><span>Customer Details</span></legend>
        <div class="checkout-fields checkout-fields--three checkout-customer-fields"><label>Full name <span aria-hidden="true">*</span><input name="name" type="text" autocomplete="name" placeholder="Full name" required></label><label>Phone number <span aria-hidden="true">*</span><input name="phone" type="tel" autocomplete="tel" inputmode="tel" placeholder="Phone number" required></label><label>Email address <span aria-hidden="true">*</span><input name="email" type="email" autocomplete="email" placeholder="Email address" required></label></div>
      </fieldset>
      <fieldset class="checkout-card checkout-step">
        <legend><span class="checkout-step-number">2</span><span>Order Fulfilment</span></legend>
        <div class="checkout-choice-row checkout-fulfilment-choices" role="radiogroup" aria-label="Fulfilment method"><label><input type="radio" name="fulfilment" value="pickup" checked><span class="checkout-choice-icon"><?= icon('bag') ?></span><span>Pickup</span><b aria-hidden="true">✓</b></label><label><input type="radio" name="fulfilment" value="delivery"><span class="checkout-choice-icon"><?= icon('truck') ?></span><span>Delivery</span><b aria-hidden="true">✓</b></label></div>
        <div class="checkout-delivery-fields" data-delivery-fields hidden><label>Street address <span aria-hidden="true">*</span><input name="address" type="text" autocomplete="street-address" placeholder="Delivery address" data-delivery-required></label>
          <div class="checkout-fields checkout-fields--three"><label>City <span aria-hidden="true">*</span><input name="city" type="text" autocomplete="address-level2" data-delivery-required></label><label>State <span aria-hidden="true">*</span><input name="state" type="text" autocomplete="address-level1" data-delivery-required></label><label>ZIP code <span aria-hidden="true">*</span><input name="zip" type="text" autocomplete="postal-code" inputmode="numeric" data-delivery-required></label></div>
        </div>
      </fieldset>
      <fieldset class="checkout-card checkout-step checkout-payment-step">
        <legend><span class="checkout-step-number">3</span><span>Payment Preference</span></legend>
        <p class="checkout-card-note">No payment is captured until your order and final quote are confirmed.</p>
        <div class="checkout-payment-note"><span class="checkout-payment-icon">◆</span><span><strong>Pay after quote confirmation.</strong><small>No payment will be charged at this stage.</small></span></div>
        <div class="checkout-choice-row checkout-payment-choices" role="radiogroup" aria-label="Payment method"><label><input type="radio" name="payment" value="card" checked> Card on confirmation</label><label><input type="radio" name="payment" value="pickup"> Pay at pickup</label></div>
        <div class="checkout-card-fields" data-card-fields><label>Name on card <span aria-hidden="true">*</span><input name="card-name" type="text" autocomplete="cc-name" data-card-required></label><label>Card number <span aria-hidden="true">*</span><input name="card-number" type="text" autocomplete="cc-number" inputmode="numeric" maxlength="23" data-card-number data-card-required></label>
          <div class="checkout-fields checkout-fields--two"><label>Expiry (MM/YY) <span aria-hidden="true">*</span><input name="card-expiry" type="text" autocomplete="cc-exp" inputmode="numeric" placeholder="MM/YY" maxlength="5" data-card-expiry data-card-required></label><label>Security code <span aria-hidden="true">*</span><input name="card-cvc" type="text" autocomplete="cc-csc" inputmode="numeric" maxlength="4" data-card-cvc data-card-required></label></div>
        </div>
      </fieldset>
      <div class="checkout-form-actions">
        <p class="checkout-validation" data-checkout-validation role="alert" aria-live="polite"></p><button class="btn gold checkout-submit" type="submit">Submit Order Request <span aria-hidden="true">→</span></button><small>Final pricing confirmed by our catering team.</small>
      </div>
    </form>
    <aside class="checkout-summary" aria-labelledby="checkout-summary-title">
      <div class="checkout-summary-heading">
        <span class="checkout-summary-icon" aria-hidden="true"><?= icon('feast') ?></span><div><p class="eyebrow">YOUR SELECTIONS</p>
        <h2 id="checkout-summary-title">Order Summary</h2></div>
        <p data-checkout-location><?= h($checkoutLocationName) ?></p>
      </div>
      <img class="checkout-summary-image" src="/assets/images/catering.webp" alt="Indian catering dishes prepared for your order" loading="eager">
      <div class="checkout-summary-items" data-checkout-items></div>
      <div class="checkout-summary-total"><span>Subtotal</span><strong data-checkout-subtotal>$0.00</strong><span>Total</span><strong data-checkout-total>$0.00</strong></div>
      <p class="checkout-summary-note">Taxes, delivery, staffing, and service charges are confirmed with your final quote.</p><a class="checkout-back-link" href="<?= h(sample2_url('catering/jacksonville/')) ?>">← Continue shopping</a>
    </aside>
  </div>
  <section class="checkout-confirmation" data-checkout-confirmation hidden aria-live="polite" tabindex="-1">
    <p class="eyebrow">ORDER REQUEST RECEIVED</p>
    <h2>Thank you, <span data-confirmation-name></span>.</h2>
    <p>Your order reference is <strong data-confirmation-reference></strong>. Our catering team will confirm availability, final pricing, and payment details shortly.</p>
    <div class="checkout-confirmation-details" data-confirmation-details></div><a class="btn gold" href="<?= h(sample2_url('catering/jacksonville/')) ?>">Return to the menu <span aria-hidden="true">↗</span></a>
  </section>
</section>
<?php require __DIR__ . '/layouts/inner-page-foot.php'; ?>
