<?php $logos = get_field('logos'); ?>

<section class="home_logos">
    <div class="container">
        <h3 class="home_logos_title section-title"><?= $logos['title']; ?></h3>
        <div class="home_logos_items">
            <?php foreach ($logos['items'] as $item): ?>
                <div class="home_logos_item"><?= wp_get_attachment_image($item, 'medium'); ?></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>