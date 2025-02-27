<?php $short = get_field('home_short'); ?>
<section class="home_short">
    <div class="container">
        <div class="home_short_supertitle section-supertitle"><?= $short['supertitle']; ?></div>
        <h3 class="home_short_title section-title"><?= $short['title']; ?></h3>
        <div class="home_short_items">
            <?php foreach ($short['items'] as $item): ?>
                <div class="home_short_item">
                    <div class="home_short_item_wrap">
                        <div class="home_short_item_title"><?= $item['title']; ?></div>
                        <div class="home_short_item_url"><a href="<?= $item['url']['url']; ?>"><?= $item['url']['title']; ?></a></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>