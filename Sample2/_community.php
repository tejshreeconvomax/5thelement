<?php require __DIR__.'/_testimonials.php'; ?>
<section class="section journal" id="blogs"><div class="section-heading"><div><p class="eyebrow">FROM OUR KITCHEN</p><h2>The flavour <em>journal.</em></h2><p>Stories, recipes, and culinary inspiration.</p></div><div class="slider-controls"><button type="button" data-slide="blog-track" data-direction="-1" aria-label="Previous blogs">←</button><button type="button" data-slide="blog-track" data-direction="1" aria-label="Next blogs">→</button></div></div><div class="scroll-track blog-track" data-auto-scroll id="blog-track" tabindex="0" aria-label="Blog previews">
<?php
$blogs = [['The Art of Biryani: A Royal Legacy','ig1.webp'],['5 Spices That Define Indian Cooking','ig2.webp'],['Behind the Scenes: Our Kitchen Story','ig3.webp'],['A Guide to Indian Street Food','ig4.webp'],['Pairing Wine With Indian Cuisine','ig5.webp'],['Festivals & Feasts: Seasonal Menus','ig6.webp'],['From Farm to Table: Fresh Ingredients','ig7.webp'],['Mastering the Tandoor: Tips & Tricks','ig1.webp']];
foreach ($blogs as [$title,$image]): ?>
<article><img src="/assets/images/<?= $image ?>" alt="" loading="lazy"><p class="dish-category">KITCHEN STORIES · ARTICLE PREVIEW</p><h3><?= $title ?></h3></article>
<?php endforeach; ?></div></section>
<section class="section featured" id="featured"><p class="eyebrow">FEATURED ON</p><h2>A place at <em>the table.</em></h2><div class="four-grid">
<?php foreach ([['Food Magazine','food-magazine.webp'],['Good Food','good-food-mg.webp'],['TripAdvisor','trip-advisor-mg.webp'],['Yelp','yelp-mg.webp']] as [$name,$image]): ?>
<img src="/assets/images/<?= $image ?>" alt="<?= $name ?>" loading="lazy">
<?php endforeach; ?></div></section>

