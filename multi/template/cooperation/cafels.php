<?php $cafels = get_field('cafels'); ?>
<section class="cooperation_cafels">
    <div class="container">
        <h3 class="cooperation_cafels_tite section-title"><?= $cafels['title']; ?></h3>
        <div class="cooperation_cafels_items">
            <?php
            $i = 1;
            foreach ($cafels['items'] as $item):
            ?>
                <div class="cooperation_cafels_item">
                    <div class="cooperation_cafels_item_img">
                        <?= wp_get_attachment_image($item['img'], 'full'); ?>
                        <div class="cooperation_cafels_item_number"><span><?= $i; ?></span></div>
                    </div>
                    <div class="cooperation_cafels_item_title"><?= $item['subtitle']; ?></div>
                </div>
            <?php
                $i++;
            endforeach;
            ?>
        </div>
    </div>
</section>