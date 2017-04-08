<header class="entry-header">
		<?php _sanjeev-theme_location(); ?>
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'item' === get_post_type() ) :
			?>
			<div class="entry-meta">
			<?php _sanjeev-theme_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif;
		?>
</header><!-- .entry-header -->

