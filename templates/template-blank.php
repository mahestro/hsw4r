<?php
/**
 * Template Name: Blank (Full Width, No Title, No Menu)
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header(blank);
?>

<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content-blank', get_post_type() );
		}
	}

	?>

</main><!-- #site-content -->

<?php get_footer(blank); ?>