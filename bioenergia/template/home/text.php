<?php $text = get_field('home_text'); ?>
<section class="home_text">
    <div class="home_text_img">
        <?= wp_get_attachment_image($text['img'], 'full'); ?>
        <div class="home_text_icon"><?= wp_get_attachment_image($text['icon'], 'full'); ?></div>
    </div>
    <div class="home_text_content">
        <div class="home_text_wrap">
            <div class="home_text_supertitle section-supertitle"><?= $text['supertitle']; ?></div>
            <h3 class="home_text_title section-title"><?= $text['title']; ?></h3>
            <div class="home_text_description"><?= $text['description']; ?></div>
            <div class="home_text_urls">
                <?php foreach ($text['urls'] as $url): ?>
                    <a href="<?= $url['url']['url']; ?>" class="button"><?= $url['url']['title']; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>