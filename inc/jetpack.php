<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Goran
 */

function goran_jetpack_setup() {
	/**
	 * Add theme support for Logo upload.
	 */
	add_image_size( 'edin-logo', 314, 192 );
}
add_action( 'after_setup_theme', 'goran_jetpack_setup', 11 );