<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Rifle River Campground 2015
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function rifle_river_campground_2015_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'rifle_river_campground_2015_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function rifle_river_campground_2015_jetpack_setup
add_action( 'after_setup_theme', 'rifle_river_campground_2015_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function rifle_river_campground_2015_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function rifle_river_campground_2015_infinite_scroll_render
