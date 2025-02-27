<?php $highlight = get_field('highlight'); ?>
<section class="about_highlight">
    <div class="container">
        <div class="about_highlight_supertitle section-supertitle"><?= $highlight['supertitle'] ?></div>
        <h3 class="about_highlight_title section-title"><?= $highlight['title'] ?></h3>
        <div class="about_highlight_items">
            <?php foreach ($highlight['items'] as $item): ?>
                <div class="about_highlight_item">
                <div class="about_highlight_item_img"><?= wp_get_attachment_image($item['img'],'full'); ?></div>
                <div class="about_highlight_item_title"><?= $item['title']; ?></div>
                <div class="about_highlight_item_description"><?= $item['description']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>