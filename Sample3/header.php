<?php $headerCta = $headerCta ?? 'Book a table'; ?>
<header class="op-header">
  <a class="op-brand" href="/Sample3/" aria-label="5th Element Urban Spice homepage"><span class="op-monogram">5</span><span><b>URBAN SPICE</b><i>MODERN INDIAN KITCHEN</i></span></a>
  <nav id="op-nav" aria-label="Primary navigation"><a href="#home">Home</a><a href="#dining">Ways to eat</a><a href="#menu">Menu</a><a href="#catering">Catering</a><a href="#locations">Locations</a></nav>
  <div class="op-actions"><a class="op-reserve op-magnet" href="#locations"><span><?= htmlspecialchars($headerCta, ENT_QUOTES, 'UTF-8') ?></span><b>↗</b></a><button class="op-menu" type="button" aria-expanded="false" aria-controls="op-nav"><i></i><i></i><em>Menu</em></button></div>
</header>
