<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<!--<h1> archive-product.php </h1> -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class='container'>
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"> SHOP STUFF </h1>
				<ul class='product-type-list'>
				<?php
					
					$args = array( 'taxonomy' => 'product_type', 'hide_empty' => 0 ); 
					$terms = get_terms($args);
					foreach($terms as $term){	
						echo '<li><p><a href=' .get_term_link($term) .'>' . $term->name  .'</a></p></li>' ;
					};
					
				?>
				</ul>
			</header><!-- .page-header -->
<div class='product-grid'>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</div><!-- .product-gird -->
			</div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
