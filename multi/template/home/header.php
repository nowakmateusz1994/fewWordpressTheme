<?php $header = get_field('header'); ?>
<section class="home_header">
    <div class="container">
        <div class="home_header_content">
            <h1 class="home_header_title"><?= $header['title']; ?></h1>
            <h3 class="home_header_subtitle"><?= $header['subtitle']; ?></h3>
            <div class="home_header_urls"><a href="<?= $header['url']['url']; ?>" class="button"><?= $header['url']['title']; ?></a></div>
        </div>
        <div class="home_header_img">
            <?= wp_get_attachment_image($header['img'], 'large'); ?>
            <div class="home_header_img_before">
                <img class="spin" src="<?= get_stylesheet_directory_uri() ?>/dist/img/leafs.png" />
            </div>
        </div>
    </div>
</section>