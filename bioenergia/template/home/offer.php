<?php $offer = get_field('home_offer'); ?>
<section class="home_offer">
    <div class="container">
        <h3 class="home_offer_title"><?= __('Poznaj naszą ofertę', 'devmn'); ?></h3>
        <div class="home_offer_items">
            <?php foreach ($offer as $item): ?>
                <div class="home_offer_item">
                    <div class="home_offer_item_img"><?= wp_get_attachment_image($item['img'], 'small'); ?></div>
                    <div class="home_offer_item_title"><?= $item['title']; ?></div>
                    <div class="home_offer_item_description"><?= $item['description']; ?></div>
                    <div class="home_offer_item_url"><a href="<?= $item['url']['url']; ?>"><?= $item['url']['title']; ?></a></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>