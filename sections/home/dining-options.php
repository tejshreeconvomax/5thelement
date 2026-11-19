<?php
$cards = [
    ['Dine in', 'We bring Indian heritage to your table with fresh-cooked curries, tandoor specialties, and fragrant biryani', 'dine.webp', '#locations', 'Book Now'],
    ['Takeout', 'Your favorites, packed fresh and ready for pickup.', 'order.webp', '#locations', 'Select Location'],
    ['Order online', 'Your next craving is a few clicks away.', 'dish-biryani.webp', '#locations', 'Choose your restaurant'],
    ['Catering', 'Weddings, parties, and office lunches, catered fresh. ', 'catering.webp', '#celebrations', 'Explore Catering'],
];
?>
<section class="section dining" id="dining">
    <div class="section-heading">
        <div>
            <h2>Four Ways to Enjoy 5th Element</h2>
        </div>
    </div>
    <div class="experience-panels">
        <?php foreach ($cards as [$title, $copy, $image, $href, $cta]): ?>
            <a class="experience-panel" href="<?= $href ?>"><img src="/assets/images/<?= $image ?>" alt="" loading="lazy">
                <div><span class="experience-icon" aria-hidden="true"><svg class="icon">
                            <use href="#icon-<?= ["Dine in" => "dine", "Takeout" => "bag", "Order online" => "order", "Catering" => "feast"][$title] ?>" />
                        </svg></span>
                    <h3><?= $title ?></h3>
                    <p><?= $copy ?></p><span class="panel-cta"><?= $cta ?> ↗</span>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</section>