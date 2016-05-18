<?php
/**
* Template Name: Blog Page
*
* @package Edin
*/

get_header(); ?>

	<div class="content-wrapper clear">
		<header class="hero with-featured-image">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">


				<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

				<?php if( have_posts() ): ?>

					<?php while( have_posts() ): the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<header class="entry-header">
								<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( edin_get_link_url() ) ), '</a></h2>' ); ?>

								<?php if ( 'post' == get_post_type() ) : ?>
									<div class="entry-meta">
										<?php edin_posted_on(); ?>
									</div><!-- .entry-meta -->
								<?php endif; ?>
							</header><!-- .entry-header -->

							<?php
							if ( 'post' == get_post_type() ) {
								edin_post_thumbnail();
							}
							?>

							<div class="entry-content">
								<?php
								/* translators: %s: Name of current post. Visible to screen readers only. */
								the_content( sprintf(
									__( 'Continue reading %s', 'edin' ),
									the_title( '<span class="screen-reader-text">', '</span>', false )
									) );

								wp_link_pages( array(
									'before'      => '<div class="page-links">' . __( 'Pages:', 'edin' ),
									'after'       => '</div>',
									'link_before' => '<span>',
									'link_after'  => '</span>',
									) );
									?>
								</div><!-- .entry-content -->

								<footer class="entry-footer">
									<?php edin_entry_meta(); ?>
								</footer><!-- .entry-footer -->
							</article><!-- #post-## -->
						<?php endwhile; ?>

						<div class="navigation">
							<span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
						</div><!-- /.navigation -->

					<?php else: ?>

						<div id="post-404" class="noposts">

							<p><?php _e('None found.','example'); ?></p>

						</div><!-- /#post-404 -->

					<?php endif; wp_reset_query(); ?>
				</main>
			</div>
		</div>

	<?php get_sidebar(); ?>
	<?php get_footer(); ?>