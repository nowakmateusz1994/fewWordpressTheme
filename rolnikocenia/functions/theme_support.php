<?php

// Adding WP Functions & Theme Support
function devmn_theme_support()
{

	// Add WP Thumbnail Support
	add_theme_support('post-thumbnails');

	// Default thumbnail size
	set_post_thumbnail_size(125, 125, true);

	// Add RSS Support
	add_theme_support('automatic-feed-links');

	// Add Support for WP Controlled Title Tag
	add_theme_support('title-tag');

	// Add HTML5 Support
	add_theme_support(
		'html5',
		array(
			'comment-list',
			'comment-form',
			'search-form',
		)
	);

	add_theme_support('custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array('site-title', 'site-description'),
	));

	// Adding post format support
	add_theme_support(
		'post-formats',
		array(
			'aside',             // title less blurb
			'gallery',           // gallery of images
			'link',              // quick link to other site
			'image',             // an image
			'quote',             // a quick quote
			'status',            // a Facebook like status update
			'video',             // video
			'audio',             // audio
			'chat'               // chat transcript
		)
	);

	// Set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
	$GLOBALS['content_width'] = apply_filters('devmn_theme_support', 1200);
} /* end theme support */

add_action('after_setup_theme', 'devmn_theme_support');


function devmn_excerpt_more($more)
{
	return '[...]';
}
add_filter('excerpt_more', 'devmn_excerpt_more');

function my_excerpt_length($length)
{
    return 45;
}

add_filter('excerpt_length', 'my_excerpt_length');