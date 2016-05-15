<?php
/**
 * Sample implementation of the Custom Header feature
 * http://codex.wordpress.org/Custom_Headers
 *
 * @package Goran
 */

/**
 * Setup the WordPress core custom header feature.
 *
 * @uses edin_header_style()
 * @uses edin_admin_header_style()
 * @uses edin_admin_header_image()
 */
function goran_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'edin_custom_header_args', array(
		'default-text-color'     => 'ffffff',
		'height'                 => 576,
	) ) );
}
add_action( 'after_setup_theme', 'goran_custom_header_setup' );

/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * @see goran_custom_header_setup().
 */
function edin_admin_header_style() {
?>
	<style type="text/css">
		.appearance_page_custom-header #headimg {
			position: relative;
			min-height: 96px;
			background-color: #b23d3c;
			background-position: 50% 50%;
			background-repeat: no-repeat;
			-moz-background-size: cover;
			-o-background-size: cover;
			-webkit-background-size: cover;
			background-size: cover;
			font-family: "Noto Sans", sans-serif;
		}
		.appearance_page_custom-header #headimg:before {
			content: '';
			display: block;
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: rgba(0, 0, 0, 0.225);
		}
		#headimg h1 {
			position: relative;
			padding: 24px 72px;
			margin: 0;
			font-size: 36px;
			line-height: 48px;
			text-transform: uppercase;
		}
		#headimg h1 a {
			text-decoration: none;
		}
	</style>
<?php
}

/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * @see goran_custom_header_setup().
 */
function edin_admin_header_image() {
	$style = sprintf( ' style="color:#%s;"', get_header_textcolor() );
	$image = sprintf( ' style="background-image:none"', get_header_image() );
	if ( get_header_image() ) {
		$image = sprintf( ' style="background-image:url(%s)"', get_header_image() );
	}
?>
	<div id="headimg"<?php echo $image; ?>>
		<h1 class="displaying-header-text"><a id="name"<?php echo $style; ?> onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	</div>
<?php
}
