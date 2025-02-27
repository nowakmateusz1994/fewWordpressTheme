<?php 
add_action('acf/init', 'custom_acf_block');
function custom_acf_block() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        
        acf_register_block_type(array(
            'name'              => 'header_slider',
            'title'             => __('Slider Nagłówek','devmn'),
            'description'       => __('Slider w nagłówku storny głównej.','devmn'),
            'render_template'   => 'template/acf_block/header_slider.php',
            'category'          => 'formatting',
        ));

        acf_register_block_type(array(
            'name'              => 'header',
            'title'             => __('Nagłówek','devmn'),
            'description'       => __('','devmn'),
            'render_template'   => 'template/acf_block/header.php',
            'category'          => 'formatting',
        ));


        acf_register_block_type(array(
            'name'              => 'left_right',
            'title'             => __('Zdjęcia prawo lewo','devmn'),
            'description'       => __('Zdjęcie z prawej lub lewej strony tekstu zależenie od wyboru opcji.','devmn'),
            'render_template'   => 'template/acf_block/left-right.php',
            'category'          => 'formatting',
        ));

        acf_register_block_type(array(
            'name'              => 'icons',
            'title'             => __('Ikony','devmn'),
            'description'       => __('Ikony wraz z opisami 3 w rzędzie.','devmn'),
            'render_template'   => 'template/acf_block/icons.php',
            'category'          => 'formatting',
        ));

        acf_register_block_type(array(
            'name'              => 'logos',
            'title'             => __('Loga','devmn'),
            'description'       => __('Lista log automatycznie się przewijające.','devmn'),
            'render_template'   => 'template/acf_block/logos.php',
            'category'          => 'formatting',
        ));

        acf_register_block_type(array(
            'name'              => 'contact',
            'title'             => __('Kontakt','devmn'),
            'description'       => __('','devmn'),
            'render_template'   => 'template/acf_block/contact.php',
            'category'          => 'formatting',
        ));

        acf_register_block_type(array(
            'name'              => 'text_with_media',
            'title'             => __('Tekst z medium','devmn'),
            'description'       => __('','devmn'),
            'render_template'   => 'template/acf_block/text_with_media.php',
            'category'          => 'formatting',
        ));

        acf_register_block_type(array(
            'name'              => 'gallery',
            'title'             => __('Galeria fencybox','devmn'),
            'description'       => __('','devmn'),
            'render_template'   => 'template/acf_block/gallery.php',
            'category'          => 'formatting',
        ));

    }
}