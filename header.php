<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Goran
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'goran' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<?php
			$top_area_content = get_theme_mod( 'goran_top_area_content' );
			if ( '' != $top_area_content ) :
		?>
		<div class="site-top-content">
			<?php echo wp_kses_post( $top_area_content ); ?>
		</div><!-- .site-top-content -->
		<?php endif; ?>

		<div class="site-branding">
			<?php edin_the_site_logo(); ?>
			<h1 class="site-title clear">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img class="glow-header-logo" src="/wp-content/themes/goran/assets/glowLady.jpg" alt="glow-logo" title="glowmidwifery.com">
					<span class="glow-header-text"><?php bloginfo( 'name' ); ?></span>
				</a>
			</h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div><!-- .site-branding -->

		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Menu', 'goran' ); ?></button>
				<?php
					wp_nav_menu( array(
						'theme_location'  => 'primary',
						'container_class' => 'menu-primary',
						'menu_class'      => 'clear',
					) );
				?>
			</nav><!-- #site-navigation -->
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
