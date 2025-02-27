<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="profile" defer href="https://gmpg.org/xfn/11">
    <link rel="preconnect" defer href="https://use.typekit.net" crossorigin>
    <link rel="stylesheet" defer href="https://use.typekit.net/fhd6qfu.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="content">
        <header>
            <?php if (is_front_page()): ?>
                <?php get_template_part('template/adds/header'); ?>
            <?php endif; ?>
            <div class="header_top">
                <div class="header_top_wrap">
                    <div class="container">
                        <?php if (!wp_is_mobile()): ?>
                            <div class="header_menu">
                                <div class="header_menu_top"><?php the_field('over_menu', 'options'); ?></div>
                                <div class="header_menu_contet"><?php devmn_top_nav(); ?></div>
                            </div>
                        <?php endif; ?>
                        <div class="header_logo">
                            <?php if (get_custom_logo()) : ?>
                                <?php the_custom_logo(); ?>
                            <?php else : ?>
                                <a href='<?= home_url(); ?>'>
                                    <h1 class="site-title section-title"><?php bloginfo('name'); ?></h1>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="header_contact">
                            <?php if (!wp_is_mobile()): ?>
                                <div class="header_contact_top"><?php the_field('over_buttons', 'options') ?></div>
                            <?php endif; ?>
                            <div class="header_contact_content">
                                <?php if (!wp_is_mobile()): ?>
                                    <div class="header_contact_item" id='search'>
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <mask id="mask0_191_1167" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="40" height="40">
                                                <rect width="40" height="40" fill="#D9D9D9" />
                                            </mask>
                                            <g mask="url(#mask0_191_1167)">
                                                <path d="M32.6667 35L22.1667 24.5C21.3333 25.1667 20.375 25.6944 19.2917 26.0833C18.2083 26.4722 17.0556 26.6667 15.8333 26.6667C12.8056 26.6667 10.2433 25.6183 8.14667 23.5217C6.04889 21.4239 5 18.8611 5 15.8333C5 12.8056 6.04889 10.2428 8.14667 8.145C10.2433 6.04833 12.8056 5 15.8333 5C18.8611 5 21.4239 6.04833 23.5217 8.145C25.6183 10.2428 26.6667 12.8056 26.6667 15.8333C26.6667 17.0556 26.4722 18.2083 26.0833 19.2917C25.6944 20.375 25.1667 21.3333 24.5 22.1667L35 32.6667L32.6667 35ZM15.8333 23.3333C17.9167 23.3333 19.6878 22.6044 21.1467 21.1467C22.6044 19.6878 23.3333 17.9167 23.3333 15.8333C23.3333 13.75 22.6044 11.9789 21.1467 10.52C19.6878 9.06222 17.9167 8.33333 15.8333 8.33333C13.75 8.33333 11.9789 9.06222 10.52 10.52C9.06222 11.9789 8.33333 13.75 8.33333 15.8333C8.33333 17.9167 9.06222 19.6878 10.52 21.1467C11.9789 22.6044 13.75 23.3333 15.8333 23.3333Z" fill="#2F2F2F" />
                                            </g>
                                        </svg>

                                    </div>
                                    <div class="header_contact_item"><a href='<?= get_field('button_black', 'options')['url']; ?>' class="button" target='<?= get_field('button_black', 'options')['target'] ?>'><?= get_field('button_black', 'options')['title'] ?></a></div>
                                <?php endif; ?>
                                <div class="header_contact_item"><a href='<?= get_field('button_green', 'options')['url']; ?>' class="button button-green" target='<?= get_field('button_green', 'options')['target'] ?>'><?= get_field('button_green', 'options')['title'] ?></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <?php if (wp_is_mobile()): ?>
            <div class="mobile_menu">
                <div class="mobile_menu_button">
                    <span id="open">
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

                    <div class="header_contact_item"><a href='<?= get_field('button_green', 'options')['url']; ?>' class="button button-green" target='<?= get_field('button_green', 'options')['target'] ?>'>
                            <?= get_field('button_green', 'options')['title']; ?>
                            <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.70831 11.0834H9.29165V9.62504H10.75V9.04171H9.29165V7.58337H8.70831V9.04171H7.24998V9.62504H8.70831V11.0834ZM8.99998 12.25C8.19304 12.25 7.50519 11.9657 6.93644 11.3969C6.36769 10.8282 6.08331 10.1403 6.08331 9.33337C6.08331 8.52643 6.36769 7.83858 6.93644 7.26983C7.50519 6.70108 8.19304 6.41671 8.99998 6.41671C9.80692 6.41671 10.4948 6.70108 11.0635 7.26983C11.6323 7.83858 11.9166 8.52643 11.9166 9.33337C11.9166 10.1403 11.6323 10.8282 11.0635 11.3969C10.4948 11.9657 9.80692 12.25 8.99998 12.25ZM0.833313 11.0834V4.08337L5.49998 0.583374L10.1666 4.08337V5.42504C9.98192 5.36671 9.79234 5.32296 9.5979 5.29379C9.40345 5.26462 9.20415 5.25004 8.99998 5.25004V4.66671L5.49998 2.04171L1.99998 4.66671V9.91671H4.9604C4.98956 10.1209 5.03331 10.3202 5.09165 10.5146C5.14998 10.7091 5.2229 10.8987 5.3104 11.0834H0.833313Z" fill="#FCFBF3" />
                            </svg>

                        </a>
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