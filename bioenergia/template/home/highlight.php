<?php $highlight = get_field('home_highlight'); ?>
<section class="home_highlight">
    <div class="container">
        <div class="home_highlight_supertitle section-supertitle"><?= $highlight['supertitle'] ?></div>
        <h3 class="home_highlight_title section-title"><?= $highlight['title'] ?></h3>
        <div class="home_highlight_items">
            <?php foreach ($highlight['items'] as $item): ?>
                <div class="home_highlight_item">
                    <div class="home_highlight_item_img"><?= wp_get_attachment_image($item['img'], 'small'); ?></div>
                    <div class="home_highlight_item_title"><?= $item['title']; ?></div>
                    <div class="home_highlight_item_description"><?= $item['description']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>