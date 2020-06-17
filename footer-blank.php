<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<footer id="site-footer" role="contentinfo" class="header-footer-group">
				
				<div class="footer-content">
					<?php echo do_shortcode("[sales_countdown_timer id='salescountdowntimer']"); ?>

					<div class="wp-block-buttons">
						<div class="wp-block-button is-style-fill text-center">
							<a class="wp-block-button__link" href="https://gum.co/tQbAN?wanted=true" target="_blank">Pre-Order Program</a>
						</div>
					</div>
					
				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
