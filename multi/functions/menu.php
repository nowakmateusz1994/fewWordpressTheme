<?php
register_nav_menus(
	array(
		'main-nav'		=> __('The Main Menu', 'devmn'),		// Main nav in header
		'footer-nav'		=> __('The Footer Menu', 'devmn'),		// Main nav in header
	)
);

function devmn_top_nav()
{
	wp_nav_menu(array(
		'container'			=> false,						// Remove nav container
		'menu_id'			=> 'main-nav',					// Adding custom nav id
		'menu_class'		=> 'medium-horizontal menu',	// Adding custom nav class
		'items_wrap'		=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'theme_location'	=> 'main-nav',					// Where it's located in the theme
		'depth'				=> 5,							// Limit the depth of the nav
		'fallback_cb'		=> false,						// Fallback function (see below)\
	));
}

function devmn_foot_nav()
{
	wp_nav_menu(array(
		'container'			=> false,						// Remove nav container
		'menu_id'			=> 'footer-nav',					// Adding custom nav id
		'menu_class'		=> 'medium-horizontal menu',	// Adding custom nav class
		'items_wrap'		=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'theme_location'	=> 'footer-nav',					// Where it's located in the theme
		'depth'				=> 5,							// Limit the depth of the nav
		'fallback_cb'		=> false,						// Fallback function (see below)\
	));
}
