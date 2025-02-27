<?php $tech = get_field('home_technology'); ?>
<section class="home_technology">
    <div class="container">
        <h3 class="home_technology_title section-title" data-animate='fadeInUp'><?= $tech['title']; ?></h3>
        <div class="home_technology_items">
            <?php foreach ($tech['items'] as $item): ?>
                <div class="home_technology_item" data-animate='fadeIn'>
                    <?= wp_get_attachment_image($item['img'], 'medium'); ?>
                    <div class="home_technology_item_title"><?= $item['url']['title']; ?></div>
                    <a href="<?= $item['url']['url']; ?>"></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>