<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class='footer-blocks container'>
					
				<?php if (is_active_sidebar('sidebar-1')){dynamic_sidebar('sidebar-1');}?>

				<div class='footer-block-item'>
					<div class='text-logo'>
						<a rel='home'href=''> 
							<img src='http://tent.academy.red/wp-content/themes/inhabitent/images/inhabitent-logo-text.svg'>
						</a>
					</div> <!-- .text-logo -->
				</div><!-- .footer-block-item -->
				</div>
				
				<div class="site-info">
					<div class"container">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php echo 'Copyright © 2016 Inhabitent' ?></a>
					</div><!-- .container -->
					</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
