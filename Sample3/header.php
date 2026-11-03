<?php $headerCta = $headerCta ?? 'Find a location'; ?>
<header class="op-header">
  <a class="op-brand" href="/Sample3/" aria-label="5th Element Indian Restaurant homepage"><img class="op-brand-logo" src="/assets/images/5th-element-logo-transparent.png" alt="5th Element Indian Restaurant"></a>
  <nav id="op-nav" aria-label="Primary navigation"><a href="#home">Home</a><a href="#dining">Dine &amp; order</a><a href="#menu">Menu</a><a href="#catering">Catering</a><a href="#locations">Locations &amp; hours</a></nav>
  <div class="op-actions"><a class="op-reserve op-magnet" href="#locations"><span><?= htmlspecialchars($headerCta, ENT_QUOTES, 'UTF-8') ?></span><b>↗</b></a><button class="op-menu" type="button" aria-expanded="false" aria-controls="op-nav"><i></i><i></i><em>Menu</em></button></div>
</header>
