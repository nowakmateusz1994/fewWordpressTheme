<section class="offer_items">
    <div class="container">
        <h3 class="offer_items_title section-title"><?php the_field('title'); ?></h3>
        <div class="offer_items_wrap">
            <?php foreach (get_field('types') as $item): ?>
                <div class="offer_items_item">
                    <div class="offer_items_item_img"><?= wp_get_attachment_image($item['img'], 'large'); ?></div>
                    <div class="offer_items_item_content">
                        <div class="offer_items_item_title"><?= $item['title']; ?></div>
                        <div class="offer_items_item_description"><?= $item['description']; ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>