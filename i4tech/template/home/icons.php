<?php $icons = get_field('home_icons'); ?>
<section class="home_icons">
    <div class="container">
        <?php foreach ($icons as $icon): ?>
            <div class="home_icon" data-animate='fadeInUp'>
                <a href="<?= $icon['url']['url'] ?>">
                    <div class="home_icon_img"><?= wp_get_attachment_image($icon['img'],'full'); ?></div>
                    <div class="home_icon_title"><?= $icon['url']['title']; ?></div>
                    <span></span>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>