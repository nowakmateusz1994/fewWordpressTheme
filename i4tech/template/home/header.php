<?php $header = get_field('home_header'); ?>
<section class="home_header fadeIn animated">
    <?= wp_get_attachment_image($header['img'], 'full'); ?>
    <div class="container">
        <h1 class="home_header_title fadeInLeft animated"><?= $header['title']; ?></h1>
    </div>
</section>