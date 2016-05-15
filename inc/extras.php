<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Goran
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function goran_body_classes( $classes ) {
	// Adds a class of hero-image to pages with featured image.
	if ( ( is_page() && has_post_thumbnail() ) || ( '' != get_header_image() && ( ( is_page() && ! has_post_thumbnail() ) || is_404() || is_search() || is_archive() ) ) ) {
		$classes[] = 'hero-image';
	}

	// Adds a class of has-quinary to blogs with front page widgets
	if ( is_active_sidebar( 'sidebar-5' ) || is_active_sidebar( 'sidebar-6' ) || is_active_sidebar( 'sidebar-7' ) )  {
		$classes[] = 'has-quinary';
	}

	return $classes;
}
add_filter( 'body_class', 'goran_body_classes' );

/**
 * Wrap more link
 */
function goran_more_link( $link ) {
	return '<p>' . $link . '</p>';
}
add_filter( 'the_content_more_link', 'goran_more_link' );
