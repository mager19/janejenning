<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package janejenning
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page">
	<a href="#content" class="sr-only"><?php esc_html_e( 'Skip to content', 'janejenning' ); ?></a>

	<div class="container mx-auto bg-red-700">
		<?php get_template_part( 'template-parts/layout/header', 'content' ); ?>
		Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint inventore iure eos excepturi doloremque rem doloribus quae consequuntur sequi earum laudantium tenetur a quos, laboriosam vitae commodi iste officia harum!
	</div>

	<div id="content">
