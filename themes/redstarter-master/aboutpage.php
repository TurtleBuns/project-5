<?php 
    /* Template Name: About Template*/

?>
<!--<h1>aboutpage.php</h1>-->
<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */get_header(); ?>
 <div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header custom-hero">
 <?php echo '<div class="container">
 <h1 class="entry-title">'. get_the_title() . '</h1></div>' ?>
 </header><!-- .entry-header -->
 <div class='container'>
	 <div class='entry-content'>
<h2>Our Story</h2>
<p class='p1'>
	<span class='p1'>
<?php echo CFS()->get('about_our_story'); ?>
	</span>
</p>
<h2>Our Team </h2>
<p class='p1'>
	<span class='p1'>
<?php echo CFS()->get('about_our_team'); ?>
	</span>
</p>
	</div>
</div>


	

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'about' ); ?>

			<?php endwhile; // End of the loop. ?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>