<?php require __DIR__ . '/../../components/reviews/testimonials.php'; ?>
<section class="section journal" id="blogs">
    <div class="section-heading">
        <div>
            <p class="eyebrow">LATEST UPDATES</p>
            <h2>Our Blog</h2>
            <p>Stories, recipes, and culinary inspiration.</p>
        </div>
        <div class="slider-controls"><button type="button" data-slide="blog-track" data-direction="-1" aria-label="Previous blogs">←</button><button type="button" data-slide="blog-track" data-direction="1" aria-label="Next blogs">→</button></div>
    </div>
    <div class="scroll-track blog-track" data-auto-scroll id="blog-track" tabindex="0" aria-label="Blog previews">
        <?php
        $blogs = [['The Art of Biryani: A Royal Legacy', 'ig1.webp'], ['5 Spices That Define Indian Cooking', 'ig2.webp'], ['Behind the Scenes: Our Kitchen Story', 'ig3.webp'], ['A Guide to Indian Street Food', 'ig4.webp']];
        foreach ($blogs as [$title, $image]): ?>
            <article>
                <figure class="journal-image"><img src="/assets/images/<?= $image ?>" alt="" loading="lazy"></figure>
                <div class="journal-card-content">
                    <p class="dish-category">KITCHEN STORIES · ARTICLE PREVIEW</p>
                    <h3><?= $title ?></h3>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>
