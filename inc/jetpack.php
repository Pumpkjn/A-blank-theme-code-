<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package my1st theme
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function my1st_theme_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'my1st_theme_jetpack_setup' );
