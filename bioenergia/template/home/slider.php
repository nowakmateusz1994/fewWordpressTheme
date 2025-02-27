<?php $slider = get_field('home_slider'); ?>
<section class="home_slider">
    <?php foreach ($slider as $item): ?>
        <div class="home_slider_item">
            <div class="home_slider_item_wrap">
                <div class="home_slider_item_content">
                    <div class="container">
                        <h1 class="home_slider_item_title"><?= $item['title']; ?></h1>
                        <a href="<?= $item['url']['url']; ?>" class="button button-white"><?= $item['url']['title']; ?></a>
                    </div>
                </div>
                <div class="home_slider_item_img">
                    <?= wp_get_attachment_image($item['img'], 'full'); ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</section>