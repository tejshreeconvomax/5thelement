<section class="section categories" id="cuisines">
    <div class="category-intro">
        <p class="eyebrow">THE MANY MOODS OF INDIA</p>
        <h2>Pick a craving.<br><em>Meet its match.</em></h2>
        <p>From the heat of the tandoor to the comfort of a slow-cooked curry. Explore the kitchen, one flavour at a time.</p>
        <a class="button" href="#locations">Find your local menu ↗</a>
    </div>
    <div class="category-explorer">
        <div class="category-stage">
            <img id="category-photo" src="/assets/images/cuisine-appetizers-i.webp" alt="Indian appetizers" loading="lazy">
            <div>
                <span>FROM THE 5TH ELEMENT KITCHEN</span>
                <h3 id="category-title">Appetizers</h3>
            </div>
        </div>
        <div class="category-buttons" aria-label="Explore cuisine categories">
            <?php
                $categories = [['Appetizers','cuisine-appetizers-i.webp'],['Biryanis & rice','cuisine-biryani.webp'],['Curries','week-veg.webp'],['Indo-Chinese','cuisine-indochinese-i.webp'],['Tandoor & breads','ig5.webp'],['Jewels of the sea','cuisine-seafood.webp'],['Desserts','ig4.webp'],['Beverages','week-drink.webp']];
                foreach ($categories as $i => [$name,$image]): ?>
                    <a href="#" class="category-button <?= $i === 0 ? 'active' : '' ?>" data-image="/assets/images/<?= $image ?>" data-title="<?= $name ?>"><?= $name ?> 
                    <span aria-hidden="true">↗</span>
                </a>
                <?php endforeach; ?>
            </div>
            <p class="category-hint">Choose a flavour to explore.</p>
        </div>
    </section>

