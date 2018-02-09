<?php
/**
 * The template for displaying all pages
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

			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<hr>
			</header><!-- .entry-header -->

			<ul id="contactDetails">
				<li>
					<span class="icon">
						<img src="<?php echo esc_url( home_url( '/wp-content/uploads/2018/02/icon-location.svg' ) ); ?>">
					</span>
					<span class="info">
						Mail:<br><a href="#">123 Maple Ave. Los Angeles, CA</a>
					</span>
				</li>
				<li>
					<span class="icon">
						<img src="<?php echo esc_url( home_url( '/wp-content/uploads/2018/02/icon-phone.svg' ) ); ?>">
					</span>
					<span class="info">
						Phone:<br><a href="tel:6041234567">+1 (604) 123 4567</a>
					</span>
				</li>
			</ul>

			<?php 
				echo do_shortcode('[contact-form-7 id="32" title="Contact Form"]');
			?>

			<?php 
				echo do_shortcode('[wpgmza id="1"]');
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
