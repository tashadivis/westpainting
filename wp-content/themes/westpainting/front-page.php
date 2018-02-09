<?php
/**
 * The template for displaying FRONT PAGE
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WestPainting
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php include("template-parts/hero.php"); ?>
			<?php include("template-parts/estimate-cta.php"); ?>
			<?php //include("template-parts/services.php"); ?>
			<?php //include("template-parts/estimate-form.php"); ?>
			<?php //include("template-parts/testimonials.php"); ?>
			<?php //include("template-parts/our-clients.php"); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
