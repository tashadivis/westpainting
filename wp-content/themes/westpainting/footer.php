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
