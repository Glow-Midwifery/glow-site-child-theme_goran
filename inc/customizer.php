<?php
/**
 * Goran Theme Customizer
 *
 * @package Goran
 */

//remove_action( 'customize_register', 'edin_customize_register' );
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function goran_customize_register( $wp_customize ) {
	$wp_customize->remove_setting( 'edin_menu_style' );
	$wp_customize->remove_control( 'edin_menu_style' );
	$wp_customize->remove_setting( 'edin_featured_image_remove_filter' );
	$wp_customize->remove_control( 'edin_featured_image_remove_filter' );
	$wp_customize->remove_setting( 'edin_search_header' );
	$wp_customize->remove_control( 'edin_search_header' );

	/* Top Area Content */
	$wp_customize->add_setting( 'goran_top_area_content', array(
		'default'           => '',
		'sanitize_callback' => 'wp_kses_post',
	) );
	$wp_customize->add_control( 'goran_top_area_content', array(
		'label'             => __( 'Top Area Content', 'goran' ),
		'section'           => 'edin_theme_options',
		'priority'          => 3,
		'type'              => 'textarea',
	) );
}
add_action( 'customize_register', 'goran_customize_register', 11 );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function goran_customize_preview_js() {
	wp_dequeue_script( 'edin_customizer' );

	wp_enqueue_script( 'goran-customizer', get_stylesheet_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20140819', true );
}
add_action( 'customize_preview_init', 'goran_customize_preview_js', 11 );
