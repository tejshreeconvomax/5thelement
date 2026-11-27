<?php $title='Baymeadows, Jacksonville'; $description='Visit 5th Element at 9551 Baymeadows Road, Jacksonville for Indian cuisine, lunch buffet, takeout, delivery and catering.'; $pageClass='location-page'; require __DIR__.'/layouts/inner-page-head.php'; ?>
<section class="contact-hero">
    <div class="contact-hero-copy">
        <p class="eyebrow">BAYMEADOWS · JACKSONVILLE</p>
        <h1>Baymeadows’s Favorite Indian Restaurant</h1>
        <p>Located in the heart of Jacksonville in Baymeadows, we serve a variety of Indian food like Biryanis, Curries, Breads, Desserts, and more. Each meal is made with authentic Indian spices and the freshest Indian ingredients.</p>
        <div class="button-row">
            <a href="<?= h(sample2_url('catering/jacksonville/')) ?>" class="btn gold">Order Online</a>
            <a href="tel:9044488265" class="btn outline">Call Restaurant</a>
        </div>
        <div class="address-tag"><?= icon('pin') ?><span>9551 Baymeadows Rd · Units 10 & 11<br>Jacksonville, FL 32256</span></div>
    </div>
    <aside class="contact-hero-card"><img src="/assets/images/jacksonville-bay-meadows.webp" alt="Baymeadows 5th Element restaurant" fetchpriority="high">
        <div><span>BAYMEADOWS · JACKSONVILLE</span><a href="tel:9044488265">Call the restaurant <b aria-hidden="true">↗</b></a></div>
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
        <?php foreach ([['dine','Dine in','Visit our restaurant for a relaxed dining experience with authentic Indian flavors, served fresh every day.','#visit','Plan your visit'],['truck','Delivery','Live nearby? Order from our kitchen and get your meal delivered via Uber Eats, Grubhub, Postmates, or DoorDash.','#visit','Explore delivery'],['bag','Takeout','Short on time? Call Us or Book Takeout online we’ll have your order ready for quick pickup.','tel:9044488265','Call for takeout'],['feast','Catering','Planning an event? Our catering team offers flexible Indian catering trays for gatherings of all sizes.','catering.php','Explore catering']] as [$ic,$name,$copy,$url,$label]): ?>
            <article class="service-scene-card" data-service-card><div class="service-illustration">
                <?php $scene=["dine"=>"dining","truck"=>"takeout","bag"=>"catering","feast"=>"banquet"][$ic]; echo file_get_contents(__DIR__."/assets/svg/service-".$scene.".svg"); ?>
                </div>
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
        <p>A luxurious spread crafted to elevate your dining experience.</p>
        <div class="buffet-times"><div>
            <?= icon('clock') ?><span>MONDAY — FRIDAY<strong>11 AM – 2:30 PM</strong></span>
        </div>
        <div><?= icon('clock') ?><span>SATURDAY — SUNDAY<strong>11 AM – 3 PM</strong></span></div>
        </div>
    <!-- <a href="#buffet" class="btn gold">View Buffet</a> -->
    </div>
    <div class="buffet-collage" aria-label="Lunch buffet menu">
        <img class="buffet-menu-pdf" src="/assets/images/bay-23-Nov-menu.webp" alt="5th Element Baymeadows lunch buffet menu" width="2246" height="2800" loading="lazy" decoding="async" fetchpriority="low">
    </div>
</section>

<section class="page-section gallery-section">
    <div class="section-title">
        <div>
            <p class="eyebrow">RESTAURANT PHOTOS</p>
            <h2>A Look Inside 5th Element</h2>
        </div>
        <!-- <p>Take a closer look at our restaurant and cuisine.</p> -->
    </div>
    <div class="baymeadows-gallery-shell">
        <div class="photo-gallery local-gallery baymeadows-carousel scroll-track" data-auto-scroll id="baymeadows-photo-track" tabindex="0" aria-label="Baymeadows restaurant photos">
            <?php
            // Keep this manifest explicit: Wasmer's PHP runtime does not reliably
            // expand brace-based glob patterns, which left the carousel empty.
            $baymeadowsPhotos = [
                'jacksonville-bay-meadows.webp',
                'TA_6379.webp',
                'TA_6386.webp',
                'TA_6408.webp',
                'TA_6421.webp',
                'TA_6423.webp',
                'TA_6430.webp',
                'TA_6438.webp',
                'TA_6484.webp',
                'TA_6500.webp',
                'TA_6501.webp',
                'TA_6506.webp',
                'TA_6519.webp',
                'TA_6528.webp',
                'TA_6542.webp',
            ];
            foreach ($baymeadowsPhotos as $index => $filename):
                $caption = 'Baymeadows restaurant photo ' . ($index + 1);
                $photoUrl = '/assets/images/baymeadows/' . rawurlencode($filename);
            ?>
                <button type="button" data-gallery="<?= h($photoUrl) ?>" data-caption="<?= h($caption) ?>" aria-label="Enlarge: <?= h($caption) ?>">
                    <img src="<?= h($photoUrl) ?>" alt="<?= h($caption) ?>" loading="lazy">
                    <span><?= icon('plus') ?></span>
                </button>
            <?php endforeach; ?>
        </div>
        <div class="baymeadows-gallery-controls" aria-label="Photo carousel controls">
            <button type="button" data-slide="baymeadows-photo-track" data-direction="-1" aria-label="Previous restaurant photos">←</button>
            <button type="button" data-slide="baymeadows-photo-track" data-direction="1" aria-label="Next restaurant photos">→</button>
        </div>
    </div>
</section>

<!-- <section class="app-section">
    <div><?= icon('bag') ?><p class="eyebrow">YOUR FAVOURITES, CLOSER</p><h2>Take the flavour <em>with you.</em></h2><p>Order takeout or reserve a table through the 5th Element mobile app.</p></div>
    <div class="button-row">
        <a href="#" class="btn outline">Google Play <?= icon('arrow') ?></a>
        <a href="#" class="btn outline">App Store <?= icon('arrow') ?></a>
    </div>
</section> -->
<?php $reviewLocation = 'baymeadows'; require __DIR__.'/components/reviews/testimonials.php'; ?>

<section class="visit-section page-section" id="visit">
    <div class="visit-card" id="enquiry">
        <p class="eyebrow">BAYMEADOWS · JACKSONVILLE</p>
        <h2>Visit Us</h2>
        <p class="street"><?= icon('pin') ?> 9551 Baymeadows Rd, Units 10 & 11<br> Jacksonville, FL 32256</p>
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
        <div class="visit-map">
            <iframe src="https://www.google.com/maps?q=5th%20Element%20Indian%20Restaurant%2C%209551%20Baymeadows%20Rd%2C%20Jacksonville%2C%20FL%2032256&output=embed" title="Map to 5th Element Indian Restaurant in Baymeadows, Jacksonville" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class="visit-illustration">
        <div class="visit-palace-photo">
            <img src="/assets/images/spices.webp" alt="A colourful selection of Indian spices" loading="lazy">
        </div>
        <div class="visit-invitation">
            <span class="rosette" aria-hidden="true"></span>
            <p class="eyebrow">INDIAN ROOTS · FLORIDA SOUL</p>
            <p class="visit-quote">A place to gather.<br>Good food and warm company, shared around <em>the table.</em></p>
        </div>
    </div>
</section>

<?php require __DIR__.'/layouts/inner-page-foot.php'; ?>
