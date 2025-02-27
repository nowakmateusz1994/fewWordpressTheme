<?php $text = get_field('text'); ?>
<section class="home_text">
    <div class="container">
        <h3 class="home_text_title section-title"><?= $text['title']; ?></h3>
        <div class="home_text_description"><?= $text['description']; ?></div>
    </div>
</section>