<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<!--<p> archive-adventure.php </p>-->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class='container'>
		<?php if ( have_posts() ) : ?>

			<header class="page-header ">
				
				<?php
					#the_archive_title( '<h1 class="page-title">', '</h1>' );
					echo '<h1 class="page-title"> LATEST ADVENTURES</h1>'
					
					
				?>
			</header><!-- .page-header -->
			<div class='adventure-grid'>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content', 'adventure' );
				?>

			<?php endwhile; ?>
			
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</div><!-- .adventure-grid -->
			</div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>