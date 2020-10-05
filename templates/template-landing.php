<?php
/**
 * Template Name: Landing Page (Full Width, No Title, No Menu, No Footer)
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header(landing);
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