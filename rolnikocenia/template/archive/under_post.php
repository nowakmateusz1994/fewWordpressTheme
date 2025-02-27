<?php $under = get_field('under_archive_items', 'options'); ?>
<section class="archive_posts_under">
    <?php if (wp_is_mobile()) {
        $img = $under['img_mobile'];
    } else {
        $img = $under['img'];
    }
    ?>
    <?= wp_get_attachment_image($img, 'full'); ?>
    <div class="archive_posts_under_content">
        <h3 class="archive_posts_under_title"><?= $under['title']; ?></h3>
        <div class="archive_posts_under_subtitle"><?= $under['subtitle']; ?></div>
        <div class="archive_posts_under_url">
            <a href="<?= $under['url']['url']; ?>" class="button button-green"><?= $under['url']['title']; ?></a>
        </div>
    </div>
</section>