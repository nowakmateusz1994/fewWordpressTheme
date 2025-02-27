<?php
register_nav_menus(
	array(
		'main-nav'		=> __('The Main Menu', 'devmn'),		// Main nav in header
		'foot-nav'		=> __('The Footer Menu', 'devmn'),		
		'policy-nav'		=> __('The Policy Menu', 'devmn'),		
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
		'menu_id'			=> 'foot-nav',					// Adding custom nav id
		'menu_class'		=> 'medium-horizontal menu',	// Adding custom nav class
		'items_wrap'		=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'theme_location'	=> 'foot-nav',					// Where it's located in the theme
		'depth'				=> 5,							// Limit the depth of the nav
		'fallback_cb'		=> false,						// Fallback function (see below)\
	));
}

function devmn_policy_nav()
{
	wp_nav_menu(array(
		'container'			=> false,						// Remove nav container
		'menu_id'			=> 'policy-nav',					// Adding custom nav id
		'menu_class'		=> 'medium-horizontal menu',	// Adding custom nav class
		'items_wrap'		=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'theme_location'	=> 'policy-nav',					// Where it's located in the theme
		'depth'				=> 5,							// Limit the depth of the nav
		'fallback_cb'		=> false,						// Fallback function (see below)\
	));
}