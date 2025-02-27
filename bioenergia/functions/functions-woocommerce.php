<?php
function devmn_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'devmn_add_woocommerce_support');

add_filter('woocommerce_resize_images', static function () {
    return false;
});
