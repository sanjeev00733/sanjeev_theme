<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php get_template_part('template-parts/item', 'header'); ?>
	
	<?php get_template_part('template-parts/item', 'slideshow'); ?>
		
	<?php get_template_part('template-parts/item', 'pricing'); ?>
		
	<?php get_template_part('template-parts/item', 'details'); ?>
	
	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'sanjeev_theme' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sanjeev_theme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php _sanjeev-theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
