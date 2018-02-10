<div id="testimonials">
	<h1 class="yellowtext">Client<br><span class="greytext">Testimonials</span></h1>
	<div class="slider testimonials">
		<div>
			<img src="<?php echo esc_url( home_url( '/wp-content/themes/westpainting/inc/quote-left.svg' ) ); ?>">
			<p>We have used Alek's company 'West Painting & Decorating' for the last 10 years. Alek was recommended by my contractor and we have been extremely happy with the many painting/staining jobs he has done for us at different houses. He does a wonderful job at a very fair price. We highly recommend him and his crew for any of your painting/staining needs.</p>
			<p class="author">Margaret Yaworski & Paul Lukaitis</p>
			<!-- <p class="company"></p> -->
		</div>
		<div>
			<img src="<?php echo esc_url( home_url( '/wp-content/themes/westpainting/inc/quote-left.svg' ) ); ?>">
			<p>Aleksander Jagla has worked for me for approximately 28 years, as both a maintenance man and a painting contractor. He has proven to be dependable and provide excellent service and results.</p>
			<p class="author">Ed Striker</p>
			<p class="company">Admin - Burnaby Center</p>
		</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $('.slider.testimonials').slick({
    autoplay: true,
    arrows: false,
    dots: true,
    mobileFirst: true,
  });
});
</script>