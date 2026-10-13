<?php
$cards = [
 ['Dine in','Pull up a chair. Stay a little longer.','dine.webp','#locations','Find your table','AT OUR TABLE'],
 ['Takeout','Big flavours. Wherever you call home.','order.webp','#locations','Pick up your favourites','ON YOUR TERMS'],
 ['Order online','Your next craving is a few clicks away.','dish-biryani.webp','#locations','Choose your restaurant','STRAIGHT TO YOU'],
 ['Catering','Make the gathering as memorable as the food.','catering.webp','#celebrations','Plan something special','FOR YOUR PEOPLE'],
];
?>
<section class="section dining" id="dining"><div class="section-heading"><div><p class="eyebrow">FOUR WAYS TO FEEL AT HOME</p><h2>Follow your <em>appetite.</em></h2></div><p>One kitchen. Many possibilities.</p></div><div class="experience-panels">
<?php foreach ($cards as [$title,$copy,$image,$href,$cta,$label]): ?>
<a class="experience-panel" href="<?= $href ?>"><img src="/assets/images/<?= $image ?>" alt="" loading="lazy"><span class="experience-label"><?= $label ?></span><div><span class="experience-icon" aria-hidden="true"><svg class="icon"><use href="#icon-<?= ["Dine in" => "dine", "Takeout" => "bag", "Order online" => "order", "Catering" => "feast"][$title] ?>"/></svg></span><h3><?= $title ?></h3><p><?= $copy ?></p><span class="panel-cta"><?= $cta ?> ↗</span></div></a>
<?php endforeach; ?></div></section>


