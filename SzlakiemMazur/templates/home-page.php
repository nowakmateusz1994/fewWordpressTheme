<?php
/*
  Template Name: Strona główna
 */
get_header();
?>
<div class="home">
    <?php
    $header = get_field("header");
    if ($header) :
        ?>
        <div class="home_header">
            <?php
            $background = $header['background'];
            if (!$background) :
                $background = get_field('header_img', 'options');
            endif;
            ?>
            <div class="home_header_img">
                <img src="<?= $background['url']; ?>" loading="lazy" class="home_header_background" />
            </div>
            <div class="home_header_content">
                <?php
                $slider = $header['slider'];
                if ($slider) :
                    ?>
                    <div class="home_header_slider">
                        <?php foreach ($slider as $item) : ?>
                            <div class="home_header_slider_item">
                                <div>
                                    <img src="<?= $item['img']['url']; ?>" loading="lazy" />
                                    <h3 class="home_header_slider_item_title"><?= $item['title']; ?></h3>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <?php
                $organizers = get_field('organizers', 'options');
                if ($organizers) :
                    ?>
                    <div class="home_header_organizers">
                        <h3><?= __('Organizatorzy:', 'devmn'); ?></h3>
                        <?php foreach ($organizers as $org) : ?>
                            <div class="home_header_organizers_item">
                                <?php if ($org['url']) : ?>
                                    <a href="<?= $org['url']; ?>" title="<?= $org['name']; ?>" rel="nofollow" target="_blank"></a>
                                <?php endif; ?>
                                <?php if ($org['logo']) : ?>
                                    <img src="<?= $org['logo']['url']; ?>" loading="lazy" alt='<?= $org['name']; ?>' />
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php
            if ($organizers) :
                ?>
                <div class="home_header_organizers_slider">
                    <h3><?= __('Organizatorzy:', 'devmn'); ?></h3>
                    <div class="container">
                        <div class="home_header_organizers_slider_items">
                            <?php foreach ($organizers as $org) : ?>
                                <div>
                                    <div class="home_header_organizers_slider_item">
                                        <?php if ($org['url']) : ?>
                                            <a href="<?= $org['url']; ?>" title="<?= $org['name']; ?>" rel="nofollow" target="_blank"></a>
                                        <?php endif; ?>
                                        <?php if ($org['logo']) : ?>
                                            <img src="<?= $org['logo']['url']; ?>" loading="lazy" alt='<?= $org['name']; ?>' />
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="home_header_title">
                <div class="section-title"><?= $header['title'] ?></div>
                <div class="section-subtitle"><?= $header['subtitle'] ?></div>
            </div>
            <?php
            $header_movie = get_field('header_movie');
            if ($header_movie):
                ?>
                <div class="home_header_movie">
                    <?= $header_movie; ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <?php
    $offer = get_field('offer');
    if ($offer) :
        ?>
        <div class="home_offer">
            <div class="container">
                <div class="home_offer_hedaer">
                    <?php if ($offer['title']) : ?>
                        <div class="section-title"><?= $offer['title']; ?></div>
                        <?php
                    endif;
                    if ($offer['subtitle']) :
                        ?>
                        <div class="section-subtitle"><?= $offer['subtitle']; ?></div>\
                    <?php endif; ?>
                </div>
                <?php if ($offer['offerts']) : ?>
                    <?php devmnSerarchForm(); ?>
                    <div class="home_offer_items">
                        <?php foreach ($offer['offerts'] as $item) : ?>
                            <div class="home_offer_item">
                                <a href="<?= the_permalink($item); ?>" title='<?= get_the_title($item); ?>'></a>
                                <div class="home_offer_item_thumb">
                                    <?= get_the_post_thumbnail($item, 'large'); ?>
                                    <?php
                                    $terms = get_the_terms($item, 'product_cat');
                                    ?>
                                    <a href=' <?= get_term_link($terms[0]->term_id, 'product_cat'); ?>' title='<?= $terms[0]->name; ?>'>
                                        <div class="home_offer_item_cat">
                                            <?= $terms[0]->name; ?>
                                        </div>
                                    </a>
                                </div>
                                <div class="home_offer_item_content">
                                    <a href="<?= the_permalink($item); ?>" title='<?= get_the_title($item); ?>'>
                                        <h3><?= get_the_title($item); ?></h3>
                                    </a>
                                    <div class="subtitle">
                                        <?= get_the_excerpt($item); ?>
                                        </br>
                                        <a href="<?= the_permalink($item); ?>" title='<?= get_the_title($item); ?>'><?= __('Czytaj więcej', 'devmn') ?> <i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <div class="home_offer_footer">
                    <a href="<?php echo wc_get_page_permalink('shop') ?>" class="button"><?= __('ZOBACZ WSZYSTKIE OFERTY', 'devmn') ?></a>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php
    $atraction = get_field('atraction');
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
    <div class="home_blog">
        <div class="container">
            <h3 class="section-title"><?= __('Nasz', 'devmn') . '<span> ' . __('Blog', 'devmn') . '</span>'; ?></h3>
            <?php
            // The Query.
            $args = array(
                'posts_per_page' => 3,
                'post_type' => 'post'
            );
            $the_query = new WP_Query($args);

            // The Loop.
            if ($the_query->have_posts()) {
                ?>
                <div class="home_blog_items">
                    <?php
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                        ?>
                        <div class="home_blog_item">
                            <?php the_post_thumbnail('large'); ?>
                            <div class="home_blog_item_content">
                                <a href="<?php the_permalink(); ?>">
                                    <h3 class="home_blog_item_tite"><?php the_title(); ?></h3>
                                </a>
                                <div class="home_blog_item_subtitle"><?php the_excerpt(); ?></div>
                                <a href="<?php the_permalink(); ?>"><?= __('Czytaj więcej', 'devmn') ?> <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="home_blog_footer">
                    <a href="<?= get_permalink(get_option('page_for_posts')); ?>" class="button"><?= __('ZOBACZ WSZYSTKIE WPISY', 'devmn'); ?></a>
                </div>
                <?php
            }
            // Restore original Post Data.
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>