<section class="section locations" id="locations">
    <div class="section-heading">
        <div>
            <p class="eyebrow">INDIAN ROOTS. FLORIDA SOUL.</p>
            <h2>Come for the food.<br><em>Stay for the feeling.</em></h2>
        </div>
        <p>Find your restaurant.<br>Dine in, take out, or order online.</p>
    </div>
    <div class="restaurant-directory">
        <div class="restaurant-visual">
            <img id="restaurant-photo" src="/assets/images/loc-jacksonville.webp" alt="Explore our Florida restaurants" loading="lazy">
            <div>
                <span>YOUR NEXT GATHERING STARTS HERE</span>
                <p id="restaurant-caption">Baymeadows · Jacksonville</p>
            </div>
            <span class="map-mark" aria-hidden="true"><svg class="icon"><use href="#icon-pin"/></svg></span>
        </div>
        <div class="restaurant-list">
        <?php foreach ([['JACKSONVILLE','Baymeadows','jacksonville/','jacksonville-bay-meadows.webp'],['JACKSONVILLE','Towncenter','jacksonville-town-center/','town-center.webp'],['FLORIDA','Daytona','daytona/','daytona-menu.webp'],['FLORIDA','Palm Coast','palm-coast/','palm-coast-fl.webp']] as [$region,$name,$url,$image]): ?>
            <a href="https://my5thelement.com/<?= $url ?>" data-restaurant-image="/assets/images/<?= $image ?>" data-restaurant-name="<?= $name ?> · <?= $region ?>">
                <span><?= $region ?></span>
                <h3><?= $name ?></h3>
                <span class="restaurant-action">Visit & order <b>↗</b></span>
            </a>
        <?php endforeach; ?>
    </div>
</div>
</section>

