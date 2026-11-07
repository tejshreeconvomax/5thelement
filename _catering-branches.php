<section class="page-section catering-locations">
    <div class="section-title">
        <div>
            <p class="eyebrow">CATERING LOCATIONS</p>
            <h2>Our Catering Locations</h2>
        </div>
        <p>Select your restaurant.<br>Hover or focus to discover its catering table.</p>
    </div>
    <div class="branch-showcase">
        <div class="branch-stage"><img id="branch-photo" src="/assets/images/jacksonville-bay-meadows.webp" alt="Baymeadows restaurant" loading="lazy">
            <div class="branch-stage-caption"><span>YOUR CELEBRATION STARTS HERE</span>
                <h3 id="branch-name">Baymeadows</h3>
                <p id="branch-description">Jacksonville · Indian hospitality for your special occasion.</p>
            </div><span class="branch-seal" aria-hidden="true">A FEAST<br><em>for you.</em></span>
        </div>
        <div class="branch-choices"><?php foreach ([['Baymeadows', 'Jacksonville', 'jacksonville.php', 'jacksonville-bay-meadows.webp', 'Indian hospitality for your special occasion.'], ['Towncenter', 'Jacksonville', '#', 'town-center.webp', 'A memorable table for your next gathering.'], ['Daytona', 'Florida', '#', 'daytona-menu.webp', 'Bring your people together around a festive feast.'], ['Palm Coast', 'Florida', '#', 'palm-coast-fl.webp', 'Celebrate milestones with a generous Indian spread.']] as $i => [$name, $region, $url, $image, $copy]): ?><a href="<?= h($url) ?>" class="branch-choice <?= $i === 0 ? 'active' : '' ?>" data-branch-image="/assets/images/<?= h($image) ?>" data-branch-name="<?= h($name) ?>" data-branch-description="<?= h($region . ' · ' . $copy) ?>"><span class="branch-choice-media" aria-hidden="true"><img src="/assets/images/<?= h($image) ?>" alt="" loading="lazy"></span><span class="branch-pin"><?= icon('pin') ?></span>
                    <div><small><?= h($region) ?></small>
                        <h3><?= h($name) ?></h3>
                        <p>Explore catering menu</p>
                    </div><span class="branch-arrow"><?= icon('arrow') ?></span>
                </a><?php endforeach; ?></div>
    </div>
</section>