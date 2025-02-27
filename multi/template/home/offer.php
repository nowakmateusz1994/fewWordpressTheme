<?php $offer = get_field('offer'); ?>
<section class="home_offer">
    <div class="container">
        <h3 class="home_offer_title section-title"><?= $offer['title']; ?></h3>
        <div class="home_offer_items">
            <?php foreach ($offer['items'] as $item): ?>
                <div class="home_offer_item">
                    <?= wp_get_attachment_image($item['img'], 'medium'); ?>
                    <div class="home_offer_item_content">
                        <?php if ($item['title']): ?>
                            <div class="home_offer_item_title"><?= $item['title']; ?></div>
                        <?php endif; ?>
                        <?php if ($item['subtitle']): ?>
                            <div class="home_offer_item_subtitle"><?= $item['subtitle']; ?></div>
                        <?php endif; ?>
                    </div>

                    <?php if ($item['url']): ?>
                        <a href="<?= $item['url']['url']; ?>"></a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>