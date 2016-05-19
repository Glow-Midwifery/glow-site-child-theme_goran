<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Edin
 */
?>
<span>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'edin' ),
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php edit_post_link( __( 'Edit', 'edin' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
	
</article><!-- #post-## -->


<?php $child_pages = $wpdb->get_results("SELECT *    FROM $wpdb->posts WHERE post_parent = ".$post->ID."    AND post_type = 'page' ORDER BY menu_order", 'OBJECT');    ?>
	<?php if ( $child_pages ) : ?>
		<h4 class="child-page-header">See other pages in the <?php single_post_title(); ?> section</h4>
	<?php endif; ?>
	<?php if ( $child_pages ) : foreach ( $child_pages as $pageChild ) : setup_postdata( $pageChild ); ?>

		<div class="child-page-thumb">
			<div class="child-thumb">
			<a href="<?php echo  get_permalink($pageChild->ID); ?>" rel="bookmark" title="<?php echo $pageChild->post_title; ?>">
				<?php echo get_the_post_thumbnail($pageChild->ID, 'large'); ?>
				<?php echo $pageChild->post_title; ?></a>
			</div>
		</div>
	<?php endforeach; endif;
?>
</span>
