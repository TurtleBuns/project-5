<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class='home-hero'><img src="http://tent.academy.red/wp-content/themes/inhabitent/images/inhabitent-logo-full.svg" class="logo" alt="Inhabitent full logo"></section>
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

            <?php /* Taxonomy Loop */ ?>
			<section class='product-info container'>
			<h2> SHOP STUFF </h2>
			<div class='product-type-blocks'>
            <?php $args = array( 'taxonomy' => 'product_type', 'hide_empty' => 0 ); 
            $terms = get_terms($args);
            foreach($terms as $term){	
				echo '<div class="product-type-block-wrapper">';
				echo '<img src=' . get_template_directory_uri().'/images/product-type-icons/'. $term->name .'.svg >';
				echo  term_description($term);
				echo '<p><a class="btn" href=' .get_term_link($term) .'>' . $term->name .' Stuff' .'</a></p>' ;
				echo '</div>';
            };
            ?>
			</div>
			</section>
            
            <?php /* Journal Post Loop */ ?>
			<section class='latest-entries'>
				<div class='container'>
					
			<h2> INHABITENT JOURNAL </h2>
					<ul> 
			<?php
			$args = array( 'post_type' => 'post', 'order' => 'ASC','posts_per_page' => '3' );
			$product_posts = get_posts( $args ); // returns an array of posts
		 	?>
		<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
		 	<?php echo '<li>' ?>
			<?php echo '<div class="thumbnail-wrapper">' ?>
			<?php the_post_thumbnail() ?>
			<?php echo '</div>' ?>
			<?php echo '<div class="post-info-wrapper">' ?>
			<?php echo '<span class="entry-meta">' ?>
			<?php echo '<span class="posted-on"><time class="entry-date published">' ?>
		 	<?php echo get_the_date() ?>
			<?php echo '</time></span>'?>
			<?php echo ' / ' . get_comments_number() . ' Comments' ?>
			<?php echo '</span>'?>
			<?php echo '<h3 class="entry-title"><a href="'.get_permalink().'"rel="bookmark">' ?>
			<?php echo the_title() .'</a></h3>'?>
			<?php echo '</div>'?>
			<?php echo '<a class="black-btn" href='.get_permalink().'>READ ENTRY</a>' ?>
			<?php echo '</li>' ?>
		<?php endforeach; wp_reset_postdata(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
				</ul>
			</div>
        </section>
        <?php /* Adventure Loop */ ?>
			<section class='adventures container' >
				<h2> LATEST ADVENTURES </h2>
				<ul class="clearfix">
            <?php $args = array( 'post_type' => 'adventure', 'order' => 'ASC' ); 
			$adventure_posts = get_posts( $args ); // returns an array of posts
			?>
			<?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>
			<li>
				<div class="story-wrapper">
			<?php the_post_thumbnail();?>
					<div class="story-info">
			<h3 class="entry-title">
			<?php echo '<a rel="bookmark" href="' ?>
			<?php the_permalink(); ?>
			<?php echo '">' ?>
			<?php the_title(); ?>
			<?php echo '</a>' ?>
			</h3>
            <a class="white-btn" href="<?php the_permalink(); ?>">READ MORE</a>
					</div>
				</div>
			</li>
            <?php endforeach; wp_reset_postdata(); ?>
				</ul>
			<p class='see-more'>
			<a class='btn' href='http://localhost/wordpress/adventure/'> MORE ADVENTURES</a>
			</p>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>