<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>
<!--<p> content-adventure.php </p> -->
<div class="adventure-grid-item">
	

		<?php if ( has_post_thumbnail() ) : ?>
			<div class='story-wrapper'>
				<?php echo '<a rel="bookmark" href="' ?>
				<?php echo the_permalink() . '">'?> 
				<?php echo the_post_thumbnail( 'full' ) . '</a>' ?>
			</div>
		<?php endif; ?>
			<div class='story-info'>
				<?php echo '<h2 class="entry-title"><a rel="bookmark" href="' ?> 
                <?php echo the_permalink() . '">' ?>
                <?php the_title() . '</a></h2>' ?>
                <br />
                <?php echo '<a class="white-btn" href="' ?> 
                <?php echo the_permalink() . '">Read More </a>' ?>
			</div>

		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	
	
</div>