<?php
/*
  Template Name: Atrakcje
 */
$front_page_id = get_option('page_on_front');
get_header();
?>
<div class="attraction">
    <?php
    $atraction = get_field('atraction', $front_page_id);
    if ($atraction) :
        ?>
        <div class="home_atraction">
            <div class="container">
                <?php if ($atraction['title']) : ?>
                    <h3 class="section-title"><?= $atraction['title']; ?></h3>
                <?php endif; ?>
                <?php if ($atraction['subtitle']) : ?>
                    <div class="section-subtitle"><?= $atraction['subtitle']; ?></div>
                <?php endif; ?>
                <div class="home_atraction_items">
                    <div class="home_atraction_item cubic">
                        <img class="home_atraction_item_background" src="<?= $atraction['img']['url']; ?>" loading="lazy" />
                    </div>

                    <?php
                    $tagArgs = array(
                        'hide_empty' => false,
                        'orderby' => 'term_order',
                        'order' => 'ASC'
                    );

                    $atractionTag = get_terms('product_tag', $tagArgs);
                    foreach ($atractionTag as $tag) :
                        ?>
                        <div class="home_atraction_item cubic">
                            <div class="home_atraction_item_wrap ">
                                <?php
                                $logo = get_field('icon', 'product_tag_' . $tag->term_id);
                                if ($logo) :
                                    ?>
                                    <img class="home_atraction_item_icon" src="<?= $logo['url']; ?>" loading="lazy" alt="" width="64px;" height="64px" />
                                <?php
                                endif;

                                $title = get_field('title', 'product_tag_' . $tag->term_id);
                                if ($title) :
                                    ?>
                                    <h4 class="home_atraction_item_title"><?= $title; ?></h4>
                                <?php
                                endif;

                                $short = get_field('short', 'product_tag_' . $tag->term_id);
                                if ($short) :
                                    ?>
                                    <div class="home_atraction_item_short"><?= $short; ?></div>
        <?php endif; ?>
                                <a href="<?= get_term_link($tag->term_id, 'product_tag'); ?>"><?= __('Czytaj więcej', 'devmn') ?> <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
    <?php endforeach; ?>
                </div>

                <?php
                $atractionBackground = $atraction['background'];
                if (!$atractionBackground) :
                    $atractionBackground = get_field('header_img', 'options');
                endif;
                ?>
                <div class="home_atraction_background">
                    <img src="<?= $atractionBackground['url']; ?>" loading="lazy" alt="" />
                </div>
            </div>


        </div>
<?php endif; ?>
</div>

<?php
get_footer();
?>