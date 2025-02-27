<?php

//Theme support
require get_template_directory() . '/functions/theme_support.php';

//Enqueue Scripts
require get_template_directory() . '/functions/enqueue-scripts.php';

//Register Menu
require get_template_directory() . '/functions/menu.php';

//Add options page
require get_template_directory() . '/functions/options-page.php';

//Allow SVG
require get_template_directory() . '/functions/allow-svg.php';

//ACF JSON save
require get_template_directory() . '/functions/functions-acf.php';

//Sidebar
require get_template_directory() . '/functions/sidebar.php';

// pagenav
require get_template_directory() . '/functions/page_nav.php';

// CPT
require get_template_directory() . '/functions/cpt.php';

// ADD
require get_template_directory() . '/functions/add.php';

// ACF BLOCK
require get_template_directory() . '/functions/acf_block.php';