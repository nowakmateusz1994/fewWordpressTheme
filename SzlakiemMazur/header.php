<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header class="header">
            <div class="header_wrap">
                <div class="container">
                    <?php
                    $ue = get_field('logo_ue', 'options');
                    if ($ue) :
                        ?>
                        <div class="header_ue">
                            <div class='header_branding' data-animate="fadeInLeft">
                                <?php if (get_custom_logo()) : ?>
                                    <?php the_custom_logo(); ?>
                                <?php endif; ?>
                            </div>
                            <img src='<?= $ue['url']; ?>' alt="<?= $ue['title']; ?>" />
                        </div>
                    <?php endif; ?>
                    <?php
                    $facebook = get_field('social_facebook', 'options');
                    $tube = get_field('social_you-tube', 'options');
                    $instagram = get_field('social_instagram', 'options');
                    $linkedin = get_field('social_linkedin', 'options');
                    $tripadvisor = get_field('social_tripadvisor', 'options');
                    ?>
                    <div class="header_social">
                        <?php if ($facebook) : ?>
                            <a href="<?= $facebook; ?>" rel='nofollow' target="_blank"><img src="<?= get_stylesheet_directory_uri() . '/dist/svg/facebook.png;' ?>" loading="lazy" alt="" width="32px" height="32px" /></a>
                        <?php endif; ?>

                        <?php if ($tube) : ?>
                            <a href="<?= $tube; ?>" rel='nofollow' target="_blank"><img src="<?= get_stylesheet_directory_uri() . '/dist/svg/you-tube.svg;' ?>" loading="lazy" alt="" width="32px" height="32px" /></a>
                        <?php endif; ?>

                        <?php if ($instagram) : ?>
                            <a href="<?= $instagram; ?>" rel='nofollow' target="_blank"><img src="<?= get_stylesheet_directory_uri() . '/dist/svg/instagram.png;' ?>" loading="lazy" alt="" width="32px" height="32px" /></a>
                        <?php endif; ?>

                        <?php if ($linkedin) : ?>
                            <a href="<?= $linkedin; ?>" rel='nofollow' target="_blank"><img src="<?= get_stylesheet_directory_uri() . '/dist/svg/linkedin.svg;' ?>" loading="lazy" alt="" width="32px" height="32px" /></a>
                        <?php endif; ?>

                        <?php if ($tripadvisor) : ?>
                            <a href="<?= $tripadvisor; ?>" rel='nofollow' target="_blank"><img src="<?= get_stylesheet_directory_uri() . '/dist/svg/tripadvisor.svg;' ?>" loading="lazy" alt="" width="32px" height="32px" /></a>
                        <?php endif; ?>
                    </div>
                    <div class="header_menu_container">
                        <div class='header_menu'>
                            <div class="header_nav hide-for-medium">
                                <?php devmn_top_nav(); ?>
                            </div>
                        </div>
                        <div class="header_nav_mobile show-for-medium">
                            <div class='header_nav_mobile_button'><i class="fas fa-bars"></i></div>
                            <div class='header_nav_mobile_content hide'>
                                <div class='header_nav_mobile_content_wrap'>
                                    <span class="header_nav_mobile_content_close"><i class="fas fa-times"></i></span>
                                    <?php devmn_top_nav(); ?>
                                </div>
                            </div>
                        </div>

                        <?php if (is_active_sidebar('language')) : ?>
                            <div>
                                <?php dynamic_sidebar('language'); ?>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
        </header>

        <?php
        $background = get_field('header_img');
        if (!$background) {
            $background = get_field('header_img', 'options');
        }
        $imgHeader = get_field('header_img2');
        if (!$imgHeader) {
            $imgHeader = get_field('header_img2', 'options');
        }

        if (!is_front_page()) :
            ?>
            <div class='page_header'>
                <div class='page_header_background'>
                    <img src="<?= $background['url'] ?>" loading="lazy" />
                </div>
                <div class="container">
                    <img src="<?= $imgHeader['url']; ?>" />
                    <div class="page_header_contnet">
                        <?php
                        $title = get_field('title');
                        $subtitle = get_field('subtitle');
                        ?>
                        <div class="page_header_title section-title">
                            <?php if ($title) : ?>
                                <?= $title; ?>
                                <?php
                            else :
                                if (is_blog()) {
                                    echo __('Blog', 'devmn');
                                } elseif (is_tax()) {
                                    $id = $wp_query->queried_object->term_id;
                                    echo (get_field('title', 'product_tag_' . $id));
                                } elseif (is_post_type_archive('product')) {
                                    echo __('Nasze oferty', 'devmn');
                                } else {
                                    the_title();
                                }

                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>