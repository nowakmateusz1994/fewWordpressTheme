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
    <div class="content_wrap">
        <header class="header">
            <div class="header__wrap">
                <div class="container">
                    <div class='header__branding' data-animate="fadeInLeft">
                        <?php if (get_custom_logo()) : ?>
                            <?php the_custom_logo(); ?>
                        <?php else : ?>
                            <a href='<?= home_url(); ?>'>
                                <h1 class="site-title section-title"><?php bloginfo('name'); ?></h1>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="header_right">
                        <div class="header_contact">
                            <span><?= __('Skontaktuj się z nami: ', 'devmn'); ?></span>
                            <a href='mailto:<?php the_field('e-mail', 'options'); ?>'><i class="fas fa-envelope"></i><?php the_field('e-mail', 'options'); ?></a>
                            <a href='tel:<?php the_field('phone', 'options'); ?>'><i class="fas fa-phone-alt"></i><?php the_field('phone', 'options'); ?></a>
                        </div>
                        <div class="header_menu_wrap">
                            <div class='header__menu'>
                                <div class="header__nav hide-for-medium">
                                    <?php devmn_top_nav(); ?>
                                </div>
                            </div>
                            <div class="header__nav_mobile show-for-medium">
                                <div class='header__nav_mobile_button'><i class="fas fa-bars"></i></div>
                                <div class='header__nav_mobile__content hide'>
                                    <div class='header__nav_mobile__content_wrap'>
                                        <span class="header__nav_mobile__content_close"><i class="fas fa-times"></i></span>
                                        <?php devmn_top_nav(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <?php get_template_part('template/header/slider'); ?>