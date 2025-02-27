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
            <div class="header_contact">
                <div class="container">
                    <div class="header_contact_wrap">
                        <div class="header_contact_item"><?= __('Jeśli masz pytania skontaktuj się z nami! ', 'devmn'); ?></div>
                        <div class="header_contact_item email">
                            <div class="header_contact_icon"><img src="<?= get_stylesheet_directory_uri(); ?>/dist/svg/mail.svg" alt="<?= __('Ikona e-mail', 'devmn'); ?>" /></div>
                            <?php $emails = get_field('contact_emails', 'options'); ?>
                            <div class="header_contact_content"><a href="mailto:<?= $emails[0]['email']; ?>"><?= $emails[0]['email']; ?></a></div>
                        </div>
                        <div class="header_contact_item phone">
                            <?php $phones = get_field('contact_phones', 'options'); ?>
                            <div class="header_contact_icon"><img src="<?= get_stylesheet_directory_uri(); ?>/dist/svg/phone.svg" alt="<?= __('Ikona telefonu', 'devmn'); ?>" /></div>
                            <div class="header_contact_content"><a href="tel:<?= $phones[0]['number']; ?>"><?= $phones[0]['number'] ?></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_menu">
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
                    <div class='header__menu hide-for-medium'>
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
        </header>
        <div class="header_scrolled">
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
                <div class='header__menu hide-for-medium'>
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