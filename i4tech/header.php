<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="content">
        <header>
            <?php get_template_part('template/adds/header'); ?>
            <div class="header_top">
                <div class="header_top_wrap">
                    <div class="container">
                        <div class="header_logo fadeInLeft animated">
                            <?php if (get_custom_logo()) : ?>
                                <?php the_custom_logo(); ?>
                            <?php else : ?>
                                <a href='<?= home_url(); ?>'>
                                    <h1 class="site-title section-title"><?php bloginfo('name'); ?></h1>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="header_menu fadeIn animated">
                            <?php if (!wp_is_mobile()): ?>
                                <div class="header_menu_contet"><?php devmn_top_nav(); ?></div>
                            <?php endif; ?>
                            <div class="header_language">
                                <?php if (is_active_sidebar('language')) : ?>
                                    <?php dynamic_sidebar('language'); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="header_contact fadeInRight animated">
                            <?php if (!wp_is_mobile()): ?>
                                <a href='tel:<?php the_field('contact_phone', 'options'); ?>' class="button button-contact"><?php the_field('contact_phone', 'options'); ?><span></span></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <?php if (!is_page_template('template/home.php')):
            get_template_part('template/page-header');
        endif; ?>


        <?php if (wp_is_mobile()): ?>
            <div class="mobile_menu">
                <div class="mobile_menu_button">
                    <span id="open" class=''>
                        <svg width="80" height="72" viewBox="0 0 80 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect y="15" width="80" height="57" fill="#F9F9F9" />
                            <rect x="8" width="64" height="64" rx="2" fill="#333333" />
                            <rect x="26.0001" y="19.4286" width="27.3171" height="4.19044" rx="2" fill="white" />
                            <rect x="26" y="29.9044" width="27.3171" height="4.19044" rx="2" fill="white" />
                            <rect x="26" y="29.9047" width="27.3171" height="4.19044" rx="2" fill="white" />
                            <rect x="26" y="40.381" width="27.3171" height="4.19044" rx="2" fill="white" />
                        </svg>
                    </span>
                </div>

                <div class="mobile_menu_content">
                    <div class="header_search">
                        <?= get_search_form(); ?>
                    </div>

                    <?php devmn_top_nav(); ?>

                    <div class="header_contact" style="text-align: center; padding: 3.875rem 0 0;">
                        <a href='tel:<?php the_field('contact_phone', 'options'); ?>' class="button button-contact"><?php the_field('contact_phone', 'options'); ?><span></span></a>
                    </div>

                    <span id='close'>
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="64" height="64" rx="2" fill="#333333" />
                            <rect x="20.5189" y="40.1763" width="27.3171" height="4.19044" rx="2" transform="rotate(-45 20.5189 40.1763)" fill="white" />
                            <rect x="23.482" y="20.8602" width="27.3171" height="4.19044" rx="2" transform="rotate(45 23.482 20.8602)" fill="white" />
                        </svg>
                    </span>
                </div>
            </div>

        <?php endif; ?>