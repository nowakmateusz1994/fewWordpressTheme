<?php 
add_action('acf/init', 'custom_acf_block');
function custom_acf_block() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        
        acf_register_block_type(array(
            'name'              => 'gutenberg_add',
            'title'             => __('Reklama gutenberg','devmn'),
            'description'       => __('Reklamy które możemy dodać w gutenbergu w opisie.','devmn'),
            'render_template'   => 'template/adds/gutenberg-add.php',
            'category'          => 'formatting',
            'multiple' => true,
        ));
    }
}