<?php
if ($args['is_options']):
    $add = get_field($args['field_name'], $args['is_options']);
else:
    $add = get_field($args['field_name']);
endif;
if ($add):
    $random = rand(0, count($add) - 1);
    $url = get_field('url', $add[$random]->ID);
?>
    <section class="add_container" id='add-<?= $add[$random]->ID; ?>' data-add='<?= $add[$random]->ID; ?>'>
        <div class="container">
            <div class="add_container_wrap">
                <?php
                if (wp_is_mobile()) {
                    $img =  get_field('small', $add[$random]->ID);
                    $size = 'medium';
                } else {
                    $size = $args['size'];
                    if ($size == 'full') {
                        $img =  get_field('big', $add[$random]->ID);
                        $size = 'foundation-x-large';
                    } else {
                        $img =  get_field('medium', $add[$random]->ID);
                        $size = 'foundation-medium';
                    }
                }
                ?>
                <a href="<?= $url['url'] ?>">
                    <?= wp_get_attachment_image($img, $size); ?>
                </a>
            </div>
            <small><?= __('REKLAMA', 'devmn'); ?></small>
        </div>
    </section>
<?php endif; ?>