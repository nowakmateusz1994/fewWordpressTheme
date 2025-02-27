<?php

function registerCustomThemeSettingsPage()
{
    if (function_exists('acf_add_options_page')) {

        add_image_size('foundation-small', 640, 9999);
        add_image_size('foundation-medium', 1024, 9999);
        add_image_size('foundation-large', 1440, 9999);
        add_image_size('foundation-x-large', 1920, 9999);
        add_image_size('devmn-gallery-thumb', 350, 350, true);
        //Stworzenie głównego katalogu w kokpicie
        acf_add_options_page(array(
            'page_title' => 'Ustawienia skórki',
            'menu_title' => 'Ustawienia skórki',
            'menu_slug' => 'ustawienia_skorki',
            'capability' => 'edit_posts',
            'parent_slug' => '',
            'position' => 60,
            'icon_url' => false,
            'redirect' => false,
        ));

    }
}

add_action('init', 'registerCustomThemeSettingsPage');
