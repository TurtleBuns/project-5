<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<div class="product-grid-item">
	

		<?php if ( has_post_thumbnail() ) : ?>
			<div class='thumbnail-wrapper'>
				<?php echo '<a rel="bookmark" href="' ?>
				<?php echo the_permalink() . '">'?> 
				<?php echo the_post_thumbnail( 'large' ) . '</a>' ?>
			</div>
		<?php endif; ?>
			<div class='product-info'>
				<?php the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ), '</h2>' ); ?>
				<?php echo '<span class="price">' . CFS()->get('price') . '</span>'; ?>
			</div>

		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	
	
</div>
