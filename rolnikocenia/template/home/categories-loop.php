<?php
$catFiled = get_field('companies_events', 'options');
foreach ($catFiled as $catComp):
?>
    <div class="home_categories_item" data-catId='<?= $catComp['id']; ?>'>
        <div class="home_categories_item_img">
            <?= wp_get_attachment_image($catComp['img'], 'small' , false, ['loading' => 'lazy']); ?>
        </div>
        <?= $catComp['title']; ?>
    </div>
<?php
endforeach;
wp_reset_postdata();
?>