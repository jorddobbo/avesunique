<?php
namespace ThemeTitle\Extras;
use ThemeTitle\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
	// Add page slug if it doesn't exist
	if (is_single() || is_page() && !is_front_page()) {
		if (!in_array(basename(get_permalink()), $classes)) {
			$classes[] = basename(get_permalink());
		}
	}
	return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');


/*
	WooCommerce Support
*/
add_theme_support('woocommerce');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
	return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'wearejh') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');
