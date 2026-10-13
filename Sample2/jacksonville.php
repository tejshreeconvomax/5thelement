<?php $title='Baymeadows, Jacksonville'; $description='Visit 5th Element at 9551 Baymeadows Road, Jacksonville for Indian cuisine, lunch buffet, takeout, delivery and catering.'; $pageClass='location-page'; require __DIR__.'/_inner-head.php'; ?>
<section class="location-hero">
    <div class="location-hero-copy">
        <p class="eyebrow">BAYMEADOWS · JACKSONVILLE</p>
        <h1>Your neighbourhood.<br><em>A world of flavour.</em></h1>
        <p>Biryanis, curries, warm breads, and something sweet. Find your taste of India in the heart of Baymeadows.</p>
        <div class="button-row">
            <a href="#" class="btn gold">Menu & online ordering <?= icon('bag') ?></a>
            <a href="tel:9044488265" class="btn outline">Call for a table <?= icon('phone') ?></a>
        </div>
        <div class="address-tag"><?= icon('pin') ?><span>9551 Baymeadows Rd · Units 10 & 11<br>Jacksonville, FL 32256</span></div>
    </div>
    <div class="location-hero-photo">
        <img src="/assets/images/dine.webp" alt="An Indian dining room with warm lanterns and heritage details" fetchpriority="high">
        <span class="location-seal">AT HOME<br><em>in India.</em><br>HERE IN FLORIDA</span>
    </div>
</section>

<section class="page-section local-services">
    <div class="section-title"><div>
        <p class="eyebrow">HOW WE WELCOME YOU</p>
        <h2>Your table.<br><em>Your way.</em></h2>
        </div>
        <p>A leisurely lunch, an evening gathering,<br>or your favourites to go.</p>
    </div>
    <div class="service-grid">
        <?php foreach ([['dine','Dine in','Settle into our dining room for freshly prepared Indian flavours.','#visit','Plan your visit'],['truck','Delivery','Enjoy your favourites at home through available delivery partners.','#','Explore delivery'],['bag','Takeout','Call ahead and pick up a meal for your own table.','tel:9044488265','Call for takeout'],['feast','Catering','Bring Indian food to your next celebration with flexible catering trays.','../catering/jacksonville.php','Explore catering']] as [$ic,$name,$copy,$url,$label]): ?>
            <article class="service-scene-card" data-service-card><div class="service-illustration">
                <?php $scene=["dine"=>"dining","truck"=>"takeout","bag"=>"catering","feast"=>"banquet"][$ic]; echo file_get_contents(__DIR__."/../assets/svg/service-".$scene.".svg"); ?>
                </div>
                <button type="button" class="scene-toggle" aria-pressed="false" aria-label="Animate <?= h($name) ?> illustration">Explore the detail <span aria-hidden="true">✧</span></button>
                <h3><?= h($name) ?></h3>
                <p><?= h($copy) ?></p>
                <a class="quiet-link" href="<?= h($url) ?>"><?= h($label) ?> ↗</a>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="buffet-section">
    <div class="buffet-information">
        <span class="buffet-ornament rosette" aria-hidden="true"></span>
        <p class="eyebrow">A LITTLE OF EVERYTHING YOU LOVE</p>
        <h2>The lunch<br><em>buffet ritual.</em></h2>
        <p>Discover a variety of Indian dishes, with vegetarian and non-vegetarian choices and a sweet finish.</p>
        <div class="buffet-times"><div>
            <?= icon('clock') ?><span>MONDAY — FRIDAY<strong>11 AM – 2:30 PM</strong></span>
        </div>
        <div><?= icon('clock') ?><span>SATURDAY — SUNDAY<strong>11 AM – 3 PM</strong></span></div>
        </div>
    <a href="#" class="btn gold">Buffet menu <?= icon('arrow') ?></a>
    </div>
    <div class="buffet-collage">
        <img src="/assets/images/Indian-food.webp" alt="An assortment of Indian dishes for lunch" loading="lazy">
        <img src="/assets/images/week-dessert.webp" alt="Indian sweets to finish the meal" loading="lazy">
    </div>
</section>

<section class="page-section gallery-section">
    <div class="section-title">
        <div>
            <p class="eyebrow">MAKE YOURSELF AT HOME</p>
            <h2>A place to pause.<br><em>A table to share.</em></h2>
        </div>
        <p>Take a closer look at our restaurant and cuisine.</p>
    </div>
    <div class="photo-gallery local-gallery">
        <?php foreach ([['loc-jacksonville.webp','Indian dining room inspiration'],['dine.webp','A warm dining experience'],['dish-biryani.webp','Biryani prepared with aromatic spices']] as [$image,$alt]): ?>
            <button type="button" data-gallery="/assets/images/<?= h($image) ?>" data-caption="<?= h($alt) ?>" aria-label="Enlarge: <?= h($alt) ?>">
                <img src="/assets/images/<?= h($image) ?>" alt="<?= h($alt) ?>" loading="lazy">
                <span><?= icon('plus') ?></span>
            </button>
        <?php endforeach; ?>
    </div>
</section>

<!-- <section class="app-section">
    <div><?= icon('bag') ?><p class="eyebrow">YOUR FAVOURITES, CLOSER</p><h2>Take the flavour <em>with you.</em></h2><p>Order takeout or reserve a table through the 5th Element mobile app.</p></div>
    <div class="button-row">
        <a href="#" class="btn outline">Google Play <?= icon('arrow') ?></a>
        <a href="#" class="btn outline">App Store <?= icon('arrow') ?></a>
    </div>
</section> -->
<?php require __DIR__.'/_testimonials.php'; ?>

<section class="visit-section page-section" id="visit">
    <div class="visit-card" id="enquiry">
        <p class="eyebrow">A WARM WELCOME AWAITS</p>
        <h2>Visit <em>Baymeadows.</em></h2>
        <p class="street"><?= icon('pin') ?> 9551 Baymeadows Rd, Units 10 & 11<br>Jacksonville, FL 32256</p>
        <div class="visit-phones">
            <a href="tel:9044488265">(904) 448-8265</a>
            <a href="tel:9044488266">(904) 448-8266</a>
        </div>
        <h3>Restaurant hours</h3>
        <dl class="hours">
            <div><dt>Monday – Friday</dt><dd>11 AM – 9:45 PM</dd></div>
            <div><dt>Saturday</dt><dd>11 AM – 10 PM</dd></div>
            <div><dt>Sunday</dt><dd>11 AM – 9:20 PM</dd></div>
        </dl>
        <p class="fine-print">Call the restaurant for holiday hours and reservations.</p>
        <a class="btn gold" href="https://www.google.com/maps/search/?api=1&query=9551%20Baymeadows%20Rd%20Jacksonville%20FL%2032256">Get directions <?= icon('arrow') ?></a>
    </div>
    <div class="visit-illustration">
        <div class="visit-palace-photo">
            <img src="/assets/images/spices.webp" alt="A colourful selection of Indian spices" loading="lazy">
        </div>
        <div class="visit-invitation">
            <span class="rosette" aria-hidden="true"></span>
            <p class="eyebrow">INDIAN ROOTS · FLORIDA SOUL</p>
            <p class="visit-quote">The best journeys<br>end at <em>the table.</em></p>
            <a href="<?= h(sample2_url('location-menu.php')) ?>" class="btn outline">Plan a catered celebration <?= icon('feast') ?></a>
        </div>
    </div>
</section>

<?php require __DIR__.'/_inner-foot.php'; ?>
