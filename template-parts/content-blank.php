<?php
/**
 * The default template for displaying content without title
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="post-inner post-inner-full <?php echo is_page_template( 'templates/template-blank.php' ) ? '' : 'thin'; ?> ">

		<div class="entry-content">
			<!-- <div class="wp-block-cover alignfull has-background-dim-30 has-background-dim has-background-gradient hsw-header-cover">
				<span aria-hidden="true" class="wp-block-cover__gradient-background has-midnight-gradient-background"></span>
				
				<div class="wp-block-cover__inner-container">
					<h1>Learn Handstand Walk</h1>
					<h4>For beginners. Anywhere. No Equipments</h4>
				</div>

				<video loop muted autoplay poster="http://localhost:8888/hsw4r/wp-content/uploads/2020/06/screencast-2020-06-13-00-31-19.mp4">
						<source src="http://localhost:8888/hsw4r/wp-content/uploads/2020/06/screencast-2020-06-13-00-31-19.mp4" type="video/webm">
						<source src="http://localhost:8888/hsw4r/wp-content/uploads/2020/06/screencast-2020-06-13-00-31-19.mp4" type="video/mp4">
				</video>
			</div> -->


			<?php
			if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
				the_excerpt();
			} else {
				the_content( __( 'Continue reading', 'twentytwenty' ) );
			}
			?>

		</div><!-- .entry-content -->

	</div><!-- .post-inner -->

	<div class="section-inner">
		<?php
		wp_link_pages(
			array(
				'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'twentytwenty' ) . '"><span class="label">' . __( 'Pages:', 'twentytwenty' ) . '</span>',
				'after'       => '</nav>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);

		edit_post_link();

		// Single bottom post meta.
		twentytwenty_the_post_meta( get_the_ID(), 'single-bottom' );

		if ( is_single() ) {

			get_template_part( 'template-parts/entry-author-bio' );

		}
		?>

	</div><!-- .section-inner -->

	<?php

	if ( is_single() ) {

		get_template_part( 'template-parts/navigation' );

	}

	/**
	 *  Output comments wrapper if it's a post, or if comments are open,
	 * or if there's a comment number – and check for password.
	 * */
	if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
		?>

		<div class="comments-wrapper section-inner">

			<?php comments_template(); ?>

		</div><!-- .comments-wrapper -->

		<?php
	}
	?>

</article><!-- .post -->
