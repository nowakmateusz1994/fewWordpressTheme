<?php
get_header();
$id = $wp_query->queried_object->term_id;
$gallery = get_field('gallery', 'product_tag_' . $id);
$textImg = get_field('text_img', 'product_tag_' . $id);
?>
<div class="product_tag">
    <?php if ($textImg) : ?>
        <div class="product_tag_text">
            <div class="container">
                <?php foreach ($textImg as $item) : ?>
                    <div class="product_tag_text_item <?= $item['position']; ?>">
                        <?php if ($item['position'] == 'left') : ?>
                            <div class="product_tag_text_item_img">
                                <img src="<?= $item['img']['url']; ?>" loading="lazy" alt="<?= $item['title']; ?>">
                            </div>
                        <?php endif; ?>
                        <div class="product_tag_text_item_content">
                            <?php if ($item['title']) : ?>
                                <h3 class="product_tag_text_item_title"><?= $item['title']; ?></h3>
                            <?php endif;
                            if ($item['subtitle']) :
                            ?>
                                <div class="product_tag_text_item_subtitle"><?= $item['subtitle']; ?></div>
                            <?php endif;
                            if ($item['description']) : ?>
                                <div class="product_tag_text_item_description"><?= $item['description']; ?></div>
                            <?php endif; ?>
                        </div>
                        <?php if ($item['position'] == 'right') : ?>
                            <div class="product_tag_text_item_img">
                                <img src="<?= $item['img']['url']; ?>" loading="lazy" alt="<?= $item['title']; ?>">
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($gallery) : ?>
        <div class="product_tag_gallery">
            <?php foreach ($gallery as $item) : ?>
                <div class="product_tag_gallery_item">
                    <a href="<?php echo wp_get_attachment_image_url($item, 'foundation-x-large');  ?>" rel="lightbox">
                        <span class="product_tag_gallery_item_overlay"><i class="fas fa-search-plus"></i></span>
                        <?= wp_get_attachment_image($item, 'devmn-gallery-thumb'); ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>
<div class="product-container">
    <h3 class="section-title"><?= __('ZOBACZ OFERTY Z ', 'devmn') . get_field('title', 'product_tag_' . $id); ?></h3>
    <?php
    if (wc_get_loop_prop('total')) {
        while (have_posts()) {
            the_post();

            /**
             * Hook: woocommerce_shop_loop.
             */
            do_action('woocommerce_shop_loop');

            wc_get_template_part('content', 'product');
        }
    }
    ?>
</div>

<?php
get_footer();
?>