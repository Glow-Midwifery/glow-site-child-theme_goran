<?php
/**
 * Goran functions and definitions
 *
 * @package Goran
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
$content_width = 700; /* pixels */

/**
 * Adjust the content width for Front Page, Full Width and Grid Page Template.
 */
function edin_content_width() {
	global $content_width;

	if ( is_page_template( 'page-templates/front-page.php' ) || is_page_template( 'page-templates/full-width-page.php' ) || is_page_template( 'page-templates/grid-page.php' ) ) {
		$content_width = 1086;
	}
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function goran_setup() {

	/*
	 * Declare textdomain for this child theme.
	 */
	load_child_theme_textdomain( 'goran', get_stylesheet_directory() . '/languages' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_image_size( 'edin-thumbnail-landscape', 314, 228, true );
	add_image_size( 'edin-thumbnail-square', 314, 314, true );
	add_image_size( 'edin-featured-image', 772, 9999 );
	add_image_size( 'edin-hero', 1230, 1230 );

	/*
	 * Unregister nav menu.
	 */
	unregister_nav_menu( 'secondary' );

	/*
	 * Editor styles.
	 */
	add_editor_style( array( 'editor-style.css', goran_noto_sans_font_url(), goran_noto_serif_font_url(), goran_droid_sans_mono_font_url() ) );

	/**
	 * Add support for Eventbrite.
	 * See: https://wordpress.org/plugins/eventbrite-api/
	 */
	add_theme_support( 'eventbrite' );

}
add_action( 'after_setup_theme', 'goran_setup', 11 );

/*
 * Setup the WordPress core custom background feature.
 */
function goran_custom_background_args( $args ) {
    return array( 'default-color' => 'e1dfdf' );
}
add_filter( 'edin_custom_background_args', 'goran_custom_background_args' );

/**
 * Register Noto Sans font.
 *
 * @return string
 */
function goran_noto_sans_font_url() {
	$noto_sans_font_url = '';

	/* translators: If there are characters in your language that are not supported
	 * by Noto Sans, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Sans font: on or off', 'goran' ) ) {
		$subsets = 'latin,latin-ext';

		/* translators: To add an additional Noto Sans character subset specific to your language, translate this to 'cyrillic', 'greek', 'devanagari' or 'vietnamese'. Do not translate into your own language. */
		$subset = _x( 'no-subset', 'Noto Sans font: add new subset (cyrillic, greek, devanagari or vietnamese)', 'goran' );

		if ( 'cyrillic' == $subset ) {
			$subsets .= ',cyrillic-ext,cyrillic';
		} else if ( 'greek' == $subset ) {
			$subsets .= ',greek-ext,greek';
		} else if ( 'devanagari' == $subset ) {
			$subsets .= ',devanagari';
		} else if ( 'vietnamese' == $subset ) {
			$subsets .= ',vietnamese';
		}

		$query_args = array(
			'family' => urlencode( 'Noto Sans:400,700,400italic,700italic' ),
			'subset' => urlencode( $subsets ),
		);

		$noto_sans_font_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $noto_sans_font_url;
}

/**
 * Register Noto Serif font.
 *
 * @return string
 */
function goran_noto_serif_font_url() {
	$noto_serif_font_url = '';

	/* translators: If there are characters in your language that are not supported
	 * by Noto Serif, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Serif font: on or off', 'goran' ) ) {
		$subsets = 'latin,latin-ext';

		/* translators: To add an additional Noto Serif character subset specific to your language, translate this to 'cyrillic', 'greek' or 'vietnamese'. Do not translate into your own language. */
		$subset = _x( 'no-subset', 'Noto Serif font: add new subset (cyrillic, greek, vietnamese)', 'goran' );

		if ( 'cyrillic' == $subset ) {
			$subsets .= ',cyrillic-ext,cyrillic';
		} else if ( 'greek' == $subset ) {
			$subsets .= ',greek-ext,greek';
		} else if ( 'vietnamese' == $subset ) {
			$subsets .= ',vietnamese';
		}

		$query_args = array(
			'family' => urlencode( 'Noto Serif:400,700,400italic,700italic' ),
			'subset' => urlencode( $subsets ),
		);

		$noto_serif_font_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $noto_serif_font_url;
}

/**
 * Register Droid Sans Mono font.
 *
 * @return string
 */
function goran_droid_sans_mono_font_url() {
	$droid_sans_mono_font_url = '';

	/* translators: If there are characters in your language that are not supported
	 * by Droid Mono Sans, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Droid Sans Mono font: on or off', 'goran' ) ) {
		$query_args = array(
			'family' => urlencode( 'Droid Sans Mono' ),
		);

		$droid_sans_mono_font_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $droid_sans_mono_font_url;
}


/**
 * Enqueue scripts and styles.
 */
function goran_scripts() {
	wp_dequeue_style( 'edin-pt-sans' );

	wp_dequeue_style( 'edin-pt-serif' );

	wp_dequeue_style( 'edin-pt-mono' );

	wp_dequeue_style( 'edin-edincon' );

	wp_dequeue_script( 'edin-navigation' );

	wp_dequeue_script( 'edin-script' );

	wp_enqueue_style( 'goran-noto-sans', goran_noto_sans_font_url(), array(), null );

	wp_enqueue_style( 'goran-noto-serif', goran_noto_serif_font_url(), array(), null );

	wp_enqueue_style( 'goran-droid-sans-mono', goran_droid_sans_mono_font_url(), array(), null );

	wp_enqueue_script( 'goran-navigation', get_stylesheet_directory_uri() . '/js/navigation.js', array( 'jquery' ), '20140807', true );

	wp_enqueue_script( 'goran-script', get_stylesheet_directory_uri() . '/js/goran.js', array( 'jquery' ), '20140808', true );

	wp_enqueue_style( 'custom-app', get_stylesheet_directory_uri() . '/css/custom_app.css', null, null );
}
add_action( 'wp_enqueue_scripts', 'goran_scripts', 11 );

/**
 * Enqueue Google fonts style to admin screen for custom header display.
 *
 * @return void
 */
function goran_admin_fonts() {
	wp_dequeue_style( 'edin-pt-sans' );

	wp_dequeue_style( 'edin-pt-serif' );

	wp_dequeue_style( 'edin-pt-mono' );

	wp_enqueue_style( 'goran-noto-sans', goran_noto_sans_font_url(), array(), null );

	wp_enqueue_style( 'goran-noto-serif', goran_noto_serif_font_url(), array(), null );

	wp_enqueue_style( 'goran-droid-sans-mono', goran_droid_sans_mono_font_url(), array(), null );
}
add_action( 'admin_print_scripts-appearance_page_custom-header', 'goran_admin_fonts', 11 );

/**
 * Implement the Custom Header feature.
 */
require get_stylesheet_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_stylesheet_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_stylesheet_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_stylesheet_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_stylesheet_directory() . '/inc/jetpack.php';



