<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>
<!--<p> content-single.php </p>-->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<?php if ( has_post_thumbnail() ) : ?>
		<header class='entry-header'>
        <?php the_post_thumbnail('full');?>
		
		<?php endif; ?>
		<h2 class='entry-title'><?php the_title(); ?></h2>
        <div class='entry-meta'>
            <span class='posted-on'>
                <time class='entry-date published '><?php echo get_the_date() ?> </time>
            </span>
                <?php echo ' / ' . get_comments_number() . ' Comments /' ?>
            <span class='byline'>
                by <span class='author vcard'><?php echo CFS()->get('author'); ?></span>
            </span>
        </div><!-- .entry-meta-->
        </header> <!-- .entry-header -->

	
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
