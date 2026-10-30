<?php $title='Jacksonville Catering Menu'; $description='Explore Jacksonville catering dishes, tray sizes and indicative pricing. Prepare a menu enquiry for your wedding, party or corporate event.'; $pageClass='menu-page'; require __DIR__.'/_inner-head.php'; $menuData=json_decode(file_get_contents(__DIR__ . '/../catering/jacksonville-menu.json'),true,512,JSON_THROW_ON_ERROR); ?>
<section class="menu-hero menu-proclamation">
  <div class="menu-hero-copy">
    <a class="back-link" href="<?= h(sample2_url('catering.php')) ?>">← Catering services</a>
    <p class="eyebrow">JACKSONVILLE · CATERING</p>
    <h1>Your guest list.<br><em>Our grand menu.</em></h1>
    <p>Choose your dishes, explore tray sizes, and build a menu enquiry for your next celebration.</p>
    <div class="button-row"><a href="#catering-menu" class="btn gold">Explore the menu <?= icon('feast') ?></a><a href="#enquiry" class="btn outline">Ask for a quote <?= icon('arrow') ?></a></div>
  </div>
  <div class="menu-hero-stage">
    <span class="menu-hero-script">A feast, composed<br>for your occasion.</span>
    <div class="menu-hero-art ornamental-photo"><img src="/assets/images/catering.webp" alt="A selection of Indian dishes prepared for a catered celebration" fetchpriority="high"></div>
    <span class="menu-hero-seal" aria-hidden="true">JAX<br><em>Royal</em><br>table</span>
  </div>
</section>
<div class="menu-contact-bar">
  <a href="tel:9048934265"><?= icon('phone') ?> (904) 893-4265</a>
  <a href="tel:5102995378"><?= icon('phone') ?> (510) 299-5378</a>
  <a href="mailto:caterings@my5thelement.com"><?= icon('mail') ?> caterings@my5thelement.com</a>
</div>
<section class="page-section menu-section" id="catering-menu">
  <div class="section-title">
    <div>
      <p class="eyebrow">BUILD YOUR CELEBRATION MENU</p>
      <h2>Something for<br><em>every guest.</em></h2>
    </div>
    <p>Indicative prices from the project’s catering menu.<br>Final pricing and availability are confirmed by our team.</p>
  </div>
  <div class="tray-guide">
    <span><?= icon('feast') ?> TRAY GUIDE</span>
    <span>Small <b>8–12 guests</b></span>
    <span>Medium <b>15–20 guests</b></span>
    <span>Medium large <b>30–40 guests</b></span>
    <span>Large <b>50–60 guests</b></span>
  </div>
  <div class="menu-workspace">
    <aside class="menu-sidebar">
      <label class="search-label" for="dish-search">Find a dish</label>
      <div class="search-box"><?= icon('search') ?><input id="dish-search" type="search" placeholder="Search the full menu…"></div>
      <p class="eyebrow">MENU CATEGORIES</p>
      <div class="menu-categories" aria-label="Catering categories">
        <button type="button" data-category="all" aria-pressed="true">All dishes <span><?= array_sum(array_map(fn($c)=>count($c['items']),$menuData)) ?></span></button>
        <?php foreach($menuData as $i=>$category): ?>
          <button type="button" data-category="<?= $i ?>" aria-pressed="false"><?= h($category['label']) ?> 
          <span><?= count($category['items']) ?></span>
        </button>
        <?php endforeach; ?>
      </div>
    </aside>
    <div class="menu-results">
      <div class="results-heading">
        <h3 id="result-title">All dishes</h3>
        <span id="result-count" role="status"></span>
      </div>
      <div id="dish-results" class="dish-results"></div>
      <noscript>
        <p>Enable JavaScript to filter dishes and build an enquiry. You can still browse the full menu below.</p>
        <?php foreach($menuData as $category): ?>
        <h3><?= h($category['label']) ?></h3>
        <?php foreach($category['items'] as $item): ?>
        <p><?= h($item['name']) ?> — <?= $item['options'] ? h('$'.$item['options'][0]['price']) . ' and up' : h($item['simple'].' '.$item['unit']) ?></p>
        <?php endforeach; endforeach; ?>
      </noscript>
      <button class="btn outline" type="button" id="load-more">Show more dishes <?= icon('plus') ?></button>
    </div>
  </div>
</section>
<section class="quote-section page-section" id="your-menu">
  <div>
    <p class="eyebrow">YOUR MENU ENQUIRY</p>
    <h2>The beginnings<br>of <em>a wonderful feast.</em></h2>
    <p>Add dishes from the menu to discuss with our catering team. Quantities represent trays or units; minimum orders shown in dish names still apply.</p>
    <p class="fine-print">This is an enquiry list, not a checkout. Indicative food totals exclude taxes, delivery, staffing, and optional event services.</p>
  </div>
  <div class="quote-card">
    <div id="quote-items">
      <p>Your enquiry list is empty. Add a dish to get started.</p>
    </div>
    <div class="quote-total"><span>Indicative food total</span><strong id="quote-total">$0.00</strong></div>
    <a href="#enquiry" class="btn gold">Discuss this menu <?= icon('arrow') ?></a>
    <p id="quote-status" role="status" class="fine-print"></p>
  </div>
</section>
<!-- <section class="page-section extras-section">
  <div class="section-title">
    <div>
      <p class="eyebrow">BEYOND THE MENU</p>
      <h2>The finishing <em>touches.</em></h2>
    </div>
    <p>Ask for an event-specific quote for these services.</p>
  </div>
  <div class="extras-grid">
    <?php foreach ([['feast','Live food stations','Chaat, dosa, and tandoor stations. Chef and station charges may apply.'],['dine','Buffet setup & service','Discuss staffing, refill service, and service duration.'],['spark','Presentation & equipment','Ask about copper chafing dishes and event presentation.'],['truck','Delivery','Delivery charges depend on your venue and distance.']] as $index => [$ic,$name,$copy]): ?>
    <article class="extra-panel" data-extra-panel>
      <span class="extra-index">0<?= $index + 1 ?></span>
      <div class="extra-emblem"><?= icon($ic) ?></div>
      <h3><?= h($name) ?></h3>
      <p><?= h($copy) ?></p>
      <a href="#enquiry" class="extra-link">Ask about this <span aria-hidden="true">↗</span></a>
    </article>
    <?php endforeach; ?>
  </div>
</section> -->
<section class="menu-assurance">
  <p class="eyebrow">A MENU MADE PERSONAL</p>
  <h2>From a family gathering<br>to <em>a magnificent wedding.</em></h2>
  <p>Share your dietary preferences, service needs, and favourite flavours. We’ll help you shape the celebration.</p>
</section>
<script id="catering-data" type="application/json" data-cart-location-id="jacksonville">
  <?= json_encode($menuData,JSON_HEX_TAG|JSON_HEX_AMP|JSON_HEX_APOS|JSON_HEX_QUOT) ?>
</script>
<?php $cartLocationId='jacksonville'; $cartLocationName='Jacksonville Catering'; $cartImage='/assets/images/catering.webp'; require __DIR__.'/_location-cart.php'; unset($cartLocationId,$cartLocationName,$cartImage); $enquiryClass='menu-enquiry-section'; require __DIR__.'/_enquiry.php'; unset($enquiryClass); require __DIR__.'/_inner-foot.php'; ?>
