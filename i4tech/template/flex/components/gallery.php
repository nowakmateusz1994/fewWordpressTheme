<?php $gallery =  get_sub_field('gallery'); ?>
<section class="flex_gallery">
    <div class="container">
        <?php foreach ($gallery as $item): ?>
            <div class="flex_gallery_item" data-animate='fadeInUp'>
                <a href="<?php echo wp_get_attachment_image_url($item, 'foundation-x-large');  ?>" rel="lightbox">
                    <?= wp_get_attachment_image($item, 'devmn-gallery-thumb'); ?>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>