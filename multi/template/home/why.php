<?php $why = get_field('why'); ?>
<section class="home_why">
    <div class="container">
        <h3 class="home_why_title section-title"><?= $why['title']; ?></h3>
        <div class="home_why_items">
            <?php foreach ($why['items'] as $item): ?>
                <div class="home_why_item">
                    <div class="home_why_item_img_wrap">
                        <div class="home_why_item_img">
                            <?= wp_get_attachment_image($item['img'], 'full'); ?>
                        </div>
                    </div>
                    <div class="home_why_item_title"><?= $item['title']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>