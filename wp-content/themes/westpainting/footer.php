<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WestPainting
 */

?>

	</div><!-- #content -->
	<footer class="infoFooter">
		<div class="mission">
			<h2>Our Mission</h2>
			<hr class="hryellow">
			<p>To turn ideas into reality- creating the finished project, just as you imagined. Our staff will work with you; using high-quality materials and value; to recreate your home.
			<br><br>
			We guarantee professionalism and integrity, and promise to create a lasting impression on your home and family.</p>
		</div>
		<div class="footerContact">
			<h2>Contact Info</h2>
			<hr class="hryellow">
			<ul>
				<li>
					<span class="label">Phone:</span>
					<span class="info"><a href="tel:6041234567">+1 (604) 123 4567</a></span>
				</li>
				<li>
					<span class="label">Email:</span>
					<span class="info"><a href="mailto:westpainting@gmail.com">westpainting@gmail.com</a></span>
				</li>
				<li>
					<span class="label">Address:</span>
					<span class="info"><a href="#">123 Maple Ave. Los Angeles, CA</a></span>
				</li>
			</ul>
		</div><!-- .footerContact -->
	</footer><!-- #infoFooter -->
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">West Painting & Decorating</a> &copy; <?php echo date('Y'); ?>
				<br>
			Made with &hearts; by <a href="https://tasha.tech">Tasha</a></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
