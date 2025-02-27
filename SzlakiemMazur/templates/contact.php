<?php
/*
  Template Name: Kontakt
 */
get_header();
$organizers = get_field('organizers', 'options');
?>
<div class="contact">
    <div class="container">
        <div class="contact_left">
        <div class="contact_addres">
                <?php foreach ($organizers as $organ) : ?>
                    <div class="contact_addres_item">
                        <img src="<?= get_stylesheet_directory_uri() . '/dist/svg/map.svg;' ?>" loading="lazy" width="32px" height='45px' />
                        <div class="contact_addres_item_wrap">
                            <strong><?= $organ['name']; ?></strong>
                            </br>
                            <?= $organ['address']; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="contact_right">
            <?php echo(do_shortcode(get_field('form', 'options'))); ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>