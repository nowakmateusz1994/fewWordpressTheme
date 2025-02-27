<?php $add = get_field('adds_top', 'options');
$url = get_field('url', $add[0]->ID);
?>
<section class="add_container" id='add-<?= $add[0]->ID; ?>' data-add='<?= $add[0]->ID; ?>'>
    <div class="container">
        <div class="add_container_wrap">
            <?php
            if (wp_is_mobile()) {
                $img =  get_field('small', $add[0]->ID);
                $size = 'medium';
            } else {
                $img =  get_field('big', $add[0]->ID);
                $size = 'foundation-x-large';
            }
            ?>
            <a href="<?= $url['url'] ?>">
                <?= wp_get_attachment_image($img, $size); ?>
            </a>
        </div>
        <small><?= __('REKLAMA', 'devmn'); ?></small>
    </div>
</section>