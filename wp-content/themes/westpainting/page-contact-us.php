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
						Mail:<br><a href="https://www.google.ca/maps/place/1987+Manning+Ave,+Port+Coquitlam,+BC+V3B+1L3/@49.2685169,-122.7722415,17z/data=!3m1!4b1!4m5!3m4!1s0x54867f505fffb545:0x7d5d29dd9830d320!8m2!3d49.2685169!4d-122.7700528">1987 Manning Ave. Port Coquitlam, BC</a>
					</span>
				</li>
				<li>
					<span class="icon">
						<img src="<?php echo esc_url( home_url( '/wp-content/uploads/2018/02/icon-phone.svg' ) ); ?>">
					</span>
					<span class="info">
						Phone:<br><a href="tel:6048284694">+1 (604) 828 4694</a>
					</span>
				</li>
			</ul>

			<div class="contactpageform">
				<?php 
					echo do_shortcode('[contact-form-7 id="32" title="Contact Form"]');
				?>
			</div>

			<?php 
				echo do_shortcode('[wpgmza id="1"]');
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
