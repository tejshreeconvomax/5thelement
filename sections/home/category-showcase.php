<section class="section categories" id="cuisines">
    <div class="category-intro">
        <p class="eyebrow lotus-eyebrow">5th Element Delicacies</p>
        <h2>Discover a World of Indian Flavors</h2>
        <p>Authentic, Diverse Menus Tailored for Every Taste and Occasion</p>
        <a class="button" href="#locations">EXPLORE MENU</a>
    </div>
    <div class="category-explorer">
        <div class="category-stage">
            <img id="category-photo" src="/assets/images/appetizers-cuisine.webp" alt="Indian appetizers" loading="lazy">
            <div>
                <span>FROM THE 5TH ELEMENT KITCHEN</span>
                <h3 id="category-title">Appetizers</h3>
            </div>
        </div>
        <div class="category-buttons" aria-label="Explore cuisine categories">
            <?php
                $categories = [['Appetizers','appetizers-cuisine.webp'],['Biryanis & rice','cuisine-biryani.webp'],['Curries','week-veg.webp'],['Indo-Chinese','cuisine-indochinese-i.webp'],['Tandoor & breads','ig5.webp'],['Jewels of the sea','cuisine-seafood.webp'],['Desserts','ig4.webp'],['Beverages','week-drink.webp']];
                foreach ($categories as $i => [$name,$image]): ?>
                    <a href="#" class="category-button <?= $i === 0 ? 'active' : '' ?>" data-image="/assets/images/<?= $image ?>" data-title="<?= $name ?>"><?= $name ?> 
                    <span aria-hidden="true">↗</span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

