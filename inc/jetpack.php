<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package basic theme with sass
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function basic_theme_with_sass_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'basic_theme_with_sass_jetpack_setup' );
