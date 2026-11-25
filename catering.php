<?php $title = 'Catering Services';
$description = 'Indian and Indo-Chinese catering for weddings, corporate events and family celebrations across Florida.';
$pageClass = 'catering-page';
require __DIR__ . '/layouts/inner-page-head.php'; ?>
<section class="catering-hero">
    <div class="hero-background"><img src="/assets/images/event-wedding.webp" alt="An elegant celebration ready for Indian catering" fetchpriority="high"></div>
    <div class="hero-invitation">
        <div class="hero-invitation-content">
            <!-- <p class="eyebrow">5TH ELEMENT CATERING</p> -->
            <h1>Catering Services</h1>
            <p>Indian roots. Exceptional hospitality. A menu made for the moments you’ll remember.</p>
            <a class="btn gold" href="#enquiry">Plan Event</a>
        </div>
    </div>
    <!-- <span class="hero-side-note">WEDDINGS · CORPORATE · FAMILY CELEBRATIONS</span> -->
</section>
<!-- <section class="intro-ribbon">
    <p>From an intimate table<br>to a magnificent celebration.</p><span class="rosette" aria-hidden="true"></span>
    <p>Thoughtful menus.<br>Flavours worth gathering for.</p>
</section> -->  
<section class="page-section occasion-section">
    <div class="section-title">
        <div>
            <p class="eyebrow">CATERING FOR EVERY OCCASION</p>
            <h2>Your Celebrations Deserve The Best</h2>
        </div>
        <!-- <p>Weddings, office celebrations, birthdays, and festivals.<br>Let the food be part of the memory.</p> -->
    </div>
    <div class="occasion-gallery">
        <?php foreach ([['Weddings', 'event-wedding.webp', 'A feast for your wedding festivities.'], ['Corporate occasions', 'event-corporate.webp', 'Welcome clients and celebrate your team.'], ['Birthdays & milestones', 'event-birthday.webp', 'A generous table for your favourite people.'], ['Festive gatherings', 'event-festive.webp', 'Celebrate tradition with a menu full of flavour.']] as [$name, $image, $copy]): ?>
            <a href="#enquiry" class="occasion-card"><img src="/assets/images/<?= h($image) ?>" alt="<?= h($name) ?>" loading="lazy">
                <div>
                    <h3><?= h($name) ?></h3>
                    <p><?= h($copy) ?></p><span>Plan your celebration ↗</span>
                </div>
            </a><?php endforeach; ?>
    </div>
</section>
<section class="craft-section page-section">
    <div class="craft-composition">
        <div class="craft-photo ornamental-photo"><img src="/assets/images/catering.webp" alt="A colourful Indian catering spread" loading="lazy"></div>
        <div class="craft-detail"><img src="/assets/images/spices.webp" alt="Indian spices selected for a flavorful celebration" loading="lazy"><span>THE ART IS IN THE DETAILS</span></div>
    </div>
    <div>
        <p class="eyebrow lotus-eyebrow">CATERING DETAILS</p>
        <h2>Our Catering Services</h2>
        <!-- <p>Discover Indian and Indo-Chinese flavours, with menus tailored to your occasion. Share your preferences, dietary needs, venue, and service requirements with our catering team.</p> -->
        <div class="craft-list">
            <?php foreach ([['dishes', '500+ Indian Dishes to Choose From', 'Indulge in over 500 authentic Indian dishes, including traditional and contemporary options, all made with premium ingredients and spices.'], ['diet-options', 'Veg, Non-Veg, & Vegan Options', 'From rich vegetarian gravies to tender non-veg dishes and satisfying vegan meals, we offer flavorful options to suit every guest’s preference.'], ['custom-menu', 'Customized Menus for Every Event', 'We work with you to create a personalized Indian menu that fits your event’s theme, taste, and dietary needs—whether it’s a small gathering or a large celebration.'], ['nationwide', 'Nationwide Catering Service', 'Our catering is available across the U.S., ensuring timely delivery and authentic Indian cuisine wherever your event is held.'], ['placard', 'Menu & Placard Design', 'Add a stylish touch with customized placard designs, perfect for labeling dishes or personalizing your event décor.']] as [$ic, $name, $copy]): ?>
                <div><?= icon($ic) ?><div>
                        <h3><?= h($name) ?></h3>
                        <p><?= h($copy) ?></p>
                    </div>
                </div><?php endforeach; ?>
        </div>
    </div>
</section>
<?php require __DIR__ . '/sections/catering/branches.php'; ?>
<section class="page-section gallery-section">
    <div class="section-title">
        <div>
            <p class="eyebrow">CATERING PHOTOS</p>
            <h2>Take A Look Into Our Catering Delicacies</h2>
        </div>
        <p>A feast for the eyes, as well as the tummy.</p>
    </div>
    <div class="catering-gallery-shell">
        <div class="photo-gallery catering-carousel scroll-track" data-auto-scroll id="catering-photo-track" tabindex="0" aria-label="Catering event photos">
            <?php
            // Explicit paths keep the gallery independent of deployment filesystem glob support.
            $cateringPhotos = [
                ['outdoor-catering-buffet-setup.webp', 'Outdoor catering buffet setup with food stations'],
                ['carved-watermelon-fruit-platter.webp', 'Carved watermelon fruit platter with oranges and grapes'],
                ['catering-fruit-platter-orange-grapes.webp', 'Fresh fruit platter with orange slices, grapes and melon'],
                ['catering-fruit-display-strawberries.webp', 'Catering fruit display with strawberries and carved melon'],
                ['catering-fruit-buffet-closeup.webp', 'Close view of a colourful fruit buffet'],
                ['blue-lit-catering-dessert-table.webp', 'Dessert and fruit catering table under blue event lighting'],
                ['event-dessert-and-fruit-station.webp', 'Event dessert and fruit station with individual servings'],
                ['indian-catering-buffet-trays.webp', 'Indian catering buffet with assorted trays of food'],
                ['indian-buffet-spread-overhead.webp', 'Overhead view of an Indian buffet spread'],
                ['outdoor-catering-dessert-cart.webp', 'Outdoor catering dessert cart at an evening event'],
                ['indoor-indian-catering-buffet.webp', 'Indoor Indian catering buffet with copper serving dishes'],
                ['catering-dessert-cups-on-stand.webp', 'Individual dessert cups arranged on a tiered stand'],
                ['assorted-catering-dessert-cups.webp', 'Assorted colourful dessert cups at a catered event'],
                ['event-buffet-room.webp', 'Catering buffet arranged along a dining room wall'],
                ['guests-at-indian-catering-buffet.webp', 'Guests visiting an Indian catering buffet'],
                ['covered-indian-buffet-dishes.webp', 'Covered dishes lined up at an Indian buffet'],
                ['guest-serving-from-catering-buffet.webp', 'Guest serving food from a catering buffet'],
                ['floral-catering-buffet-display.webp', 'Buffet display with flowers beside covered serving dishes'],
                ['floral-catering-buffet-display-second.webp', 'Second view of the floral catering buffet display'],
                ['guests-serving-indian-buffet.webp', 'Guests serving themselves at an Indian buffet'],
                ['indian-rice-buffet-chafing-dishes.webp', 'Rice and Indian dishes in copper buffet chafing dishes'],
                ['catering-beverage-station.webp', 'Beverage dispensers at a catering station'],
                ['guest-serving-rice-at-buffet.webp', 'Guest serving rice from the buffet'],
                ['guest-selecting-indian-buffet.webp', 'Guest selecting food at the Indian buffet'],
                ['catering-juice-and-fruit-drinks.webp', 'Fruit drinks and juice at a catered event'],
                ['covered-catering-chafing-dish.webp', 'Covered chafing dish at a catering station'],
                ['pineapple-catering-drinks.webp', 'Pineapple garnished drinks served at a catering station'],
                ['catering-green-fruit-drinks.webp', 'Green fruit drinks with orange garnishes'],
                ['mango-dessert-cups.webp', 'Mango dessert cups topped with fruit'],
                ['fresh-fruit-bowl-catering.webp', 'Fresh mixed fruit in a catering bowl'],
                ['catering-mixed-fruit-platter.webp', 'Mixed fruit platter with citrus and berries'],
                ['carved-watermelon-fruit-bowl.webp', 'Carved watermelon bowl filled with fresh fruit'],
            ];
            foreach ($cateringPhotos as [$image, $alt]):
                $photoUrl = '/assets/images/catering/' . rawurlencode($image);
            ?>
                <button type="button" data-gallery="<?= h($photoUrl) ?>" data-caption="<?= h($alt) ?>" aria-label="Enlarge: <?= h($alt) ?>"><img src="<?= h($photoUrl) ?>" alt="<?= h($alt) ?>" width="768" height="768" loading="lazy" decoding="async"><span><?= icon('plus') ?></span></button>
            <?php endforeach; ?>
        </div>
        <div class="catering-gallery-controls" aria-label="Catering photo carousel controls">
            <button type="button" data-slide="catering-photo-track" data-direction="-1" aria-label="Previous catering photos">←</button>
            <button type="button" data-slide="catering-photo-track" data-direction="1" aria-label="Next catering photos">→</button>
        </div>
    </div>
</section>
<?php require __DIR__ . '/components/reviews/testimonials.php';
require __DIR__ . '/sections/catering/enquiry-form.php';
require __DIR__ . '/layouts/inner-page-foot.php'; ?>
