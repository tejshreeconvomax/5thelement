<?php $title='Baymeadows, Jacksonville'; $description='Visit 5th Element at 9551 Baymeadows Road, Jacksonville for Indian cuisine, lunch buffet, takeout, delivery and catering.'; $pageClass='location-page'; require __DIR__.'/layouts/inner-page-head.php'; ?>
<section class="contact-hero">
    <div class="contact-hero-copy">
        <p class="eyebrow">BAYMEADOWS · JACKSONVILLE</p>
        <h1>Jacksonville Restaurant</h1>
        <p>Biryanis, curries, warm breads, and something sweet. Find your taste of India in the heart of Baymeadows.</p>
        <div class="button-row">
            <a href="<?= h(sample2_url('catering/jacksonville/')) ?>" class="btn gold">Order Online</a>
            <a href="tel:9044488265" class="btn outline">Call Restaurant</a>
        </div>
        <div class="address-tag"><?= icon('pin') ?><span>9551 Baymeadows Rd · Units 10 & 11<br>Jacksonville, FL 32256</span></div>
    </div>
    <aside class="contact-hero-card"><img src="/assets/images/jacksonville-bay-meadows.webp" alt="Baymeadows 5th Element restaurant" fetchpriority="high">
        <div><span>BAYMEADOWS · JACKSONVILLE</span><strong>Good food.<br>Warm company.</strong><a href="tel:9044488265">Call the restaurant <b aria-hidden="true">↗</b></a></div>
    </aside><span class="contact-hero-seal" aria-hidden="true">A WARM<br><em>welcome</em><br>AWAITS</span>
</section>

<section class="page-section local-services">
    <div class="section-title"><div>
        <p class="eyebrow">RESTAURANT SERVICES</p>
        <h2>Our Services</h2>
        </div>
        <p>A leisurely lunch, an evening gathering,<br>or your favourites to go.</p>
    </div>
    <div class="service-grid">
        <?php foreach ([['dine','Dine in','Settle into our dining room for freshly prepared Indian flavours.','#visit','Plan your visit'],['truck','Delivery','Enjoy your favourites at home through available delivery partners.','#visit','Explore delivery'],['bag','Takeout','Call ahead and pick up a meal for your own table.','tel:9044488265','Call for takeout'],['feast','Catering','Bring Indian food to your next celebration with flexible catering trays.','catering.php','Explore catering']] as [$ic,$name,$copy,$url,$label]): ?>
            <article class="service-scene-card" data-service-card><div class="service-illustration">
                <?php $scene=["dine"=>"dining","truck"=>"takeout","bag"=>"catering","feast"=>"banquet"][$ic]; echo file_get_contents(__DIR__."/assets/svg/service-".$scene.".svg"); ?>
                </div>
                <button type="button" class="scene-toggle" aria-pressed="false" aria-label="Animate <?= h($name) ?> illustration">Explore the detail <span aria-hidden="true">✧</span></button>
                <h3><?= h($name) ?></h3>
                <p><?= h($copy) ?></p>
                <a class="quiet-link" href="<?= h($url) ?>"><?= h($label) ?> ↗</a>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="buffet-section" id="buffet">
    <div class="buffet-information">
        <span class="buffet-ornament rosette" aria-hidden="true"></span>
        <p class="eyebrow">DAILY BUFFET</p>
        <h2>Lunch Buffet</h2>
        <p>Discover a variety of Indian dishes, with vegetarian and non-vegetarian choices and a sweet finish.</p>
        <div class="buffet-times"><div>
            <?= icon('clock') ?><span>MONDAY — FRIDAY<strong>11 AM – 2:30 PM</strong></span>
        </div>
        <div><?= icon('clock') ?><span>SATURDAY — SUNDAY<strong>11 AM – 3 PM</strong></span></div>
        </div>
    <a href="#buffet" class="btn gold">View Buffet</a>
    </div>
    <div class="buffet-collage">
        <img src="/assets/images/Indian-food.webp" alt="An assortment of Indian dishes for lunch" loading="lazy">
        <img src="/assets/images/week-dessert.webp" alt="Indian sweets to finish the meal" loading="lazy">
    </div>
</section>

<section class="page-section gallery-section">
    <div class="section-title">
        <div>
            <p class="eyebrow">RESTAURANT PHOTOS</p>
            <h2>Our Restaurant</h2>
        </div>
        <p>Take a closer look at our restaurant and cuisine.</p>
    </div>
    <div class="photo-gallery local-gallery">
        <?php foreach ([['jacksonville-bay-meadows.webp','Baymeadows restaurant'],['dine.webp','A warm dining experience'],['dish-biryani.webp','Biryani prepared with aromatic spices']] as [$image,$alt]): ?>
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
<?php require __DIR__.'/components/reviews/testimonials.php'; ?>

<section class="visit-section page-section" id="visit">
    <div class="visit-card" id="enquiry">
        <p class="eyebrow">BAYMEADOWS · JACKSONVILLE</p>
        <h2>Visit Us</h2>
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
        <a class="btn gold" href="https://www.google.com/maps/search/?api=1&query=9551%20Baymeadows%20Rd%20Jacksonville%20FL%2032256">Directions</a>
    </div>
    <div class="visit-illustration">
        <div class="visit-palace-photo">
            <img src="/assets/images/spices.webp" alt="A colourful selection of Indian spices" loading="lazy">
        </div>
        <div class="visit-invitation">
            <span class="rosette" aria-hidden="true"></span>
            <p class="eyebrow">INDIAN ROOTS · FLORIDA SOUL</p>
            <p class="visit-quote">The best journeys<br>end at <em>the table.</em></p>
            <a href="<?= h(sample2_url('catering/jacksonville/')) ?>" class="btn outline">Catering Menu</a>
        </div>
    </div>
</section>

<?php require __DIR__.'/layouts/inner-page-foot.php'; ?>
