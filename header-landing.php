<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<div class="hsw-header-landing">
			<div class="wp-block-cover__inner-container">
				<h3>Handstand Walk</h3>
				<h4>For beginners. Anywhere</h4>
			</div>
		</div>

		<?php
		wp_body_open();
		?>

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
