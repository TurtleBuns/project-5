<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<?php if ( has_post_thumbnail() ) : ?>
			<div class='product-image-wrapper'>
			<?php the_post_thumbnail( 'large' ); ?>
			</div>
		<?php endif; ?>
	<div class='product-content-wrapper'>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
		<div class="entry-content">
		<p class='price'>
		<?php echo CFS()->get('price'); ?>
		</p>

	
		<?php the_content(); ?>
		<div class="social-buttons">
   			<button type="button" class="black-btn"><i class="fa fa-facebook"></i>Like</button>
   			<button type="button" class="black-btn"><i class="fa fa-twitter"></i>Tweet</button>
  	 		<button type="button" class="black-btn"><i class="fa fa-pinterest"></i>Pin</button>
		</div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	</div><!-- .product-content-wrapper -->
	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
