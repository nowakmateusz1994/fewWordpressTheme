<?php $text = get_field('home_text'); ?>
<section class="home_text">
    <div class="container">
        <div class="home_text_img" data-animate='fadeInLeft'><?= wp_get_attachment_image($text['img'], 'large'); ?><span></span><span></span></div>
        <div class="home_text_content" data-animate='fadeInRight'>
            <div class="home_text_supertitle section-supertitle"><?= $text['supertitle']; ?></div>
            <h3 class="home_text_title section-title"><?= $text['title']; ?></h3>
            <h4 class="home_text_subtitle section-subtitle"><?= $text['subtitle']; ?></h4>
            <div class="home_text_description"><?= $text['descirption']; ?></div>
        </div>
    </div>
</section>