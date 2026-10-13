<section class="section weekly" id="weekly">
    <div class="section-heading">
        <div>
            <p class="eyebrow">THIS WEEK ON THE MENU</p>
            <h2>Dishes of <em>the week.</em></h2>
        </div>
        <p>From the first bite to a sweet finish.<br>A little inspiration for your next visit.</p>
    </div>
    <div class="weekly-grid">
        <?php
        $dishes = [ ['Starter','Samosa Chaat','week-starter.webp','Crisp samosas, chickpeas, yoghurt and tangy chutneys.'], ['Vegetarian','Paneer Tikka Masala','paneer-tikka-masala.webp','Paneer in a rich, warmly spiced tomato gravy.'], ['Non-vegetarian','Lamb Rogan Josh','week-nonveg.webp','Slow-cooked lamb with aromatic Kashmiri spices.'], ["Chef’s pick",'Mango Lassi','week-drink.webp','Sweet mango blended with chilled yoghurt.'], ['Dessert','Gulab Jamun','week-dessert.webp','A warm, syrup-soaked sweet finish.'] ];
        foreach ($dishes as [$tag,$name,$image,$copy]): ?>
            <article>
                <img src="/assets/images/<?= $image ?>" alt="<?= $name ?>" loading="lazy">
                <p class="dish-category"><?= $tag ?></p>
                <h3><?= $name ?></h3><p><?= $copy ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</section>

