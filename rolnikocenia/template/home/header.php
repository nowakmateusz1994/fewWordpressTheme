<?php $header = get_field('header'); ?>
<section class="home_header">
    <?php if (wp_is_mobile()) {
        echo (wp_get_attachment_image($header['img'], 'medium', false, ['loading' => 'lazy']));
    } else {
        echo (wp_get_attachment_image($header['img'], 'foundation-x-large', false, ['loading' => 'lazy']));
    }

    ?>
    <div class="container">
        <div class="home_header_content">
            <h1 class="home_header_title"><?= $header['title']; ?></h1>
            <div class="home_header_subtitle"><?= $header['subtitle']; ?></div>
        </div>
    </div>
</section>