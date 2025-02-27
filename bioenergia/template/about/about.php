<?php $about = get_field('about_text'); ?>
<section class="about_text">
    <div class="container">
        <div class="about_text_supertitle section-supertitle"><?= $about['supertitle']; ?></div>
        <h3 class="about_text_title section-title"><?= $about['title']; ?></h3>
    </div>
    <div class="about_text_img">
        <?= wp_get_attachment_image($about['img'], 'full'); ?>
        <div class="about_text_icon"><?= wp_get_attachment_image($about['icon'], 'full'); ?></div>
    </div>
    <div class="about_text_wrap">
        <div class="about_text_content">
            <?= $about['description']; ?>
        </div>
    </div>
</section>