<?php if(is_page('home')) { ?>

<div id="services">
	<div class="entry-header">
		<h1>Our Services</h1>
		<hr>
	</div>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	<div id="servicesContainer">
		<div class="service">
			<img src="<?php echo esc_url( home_url( '/wp-content/themes/westpainting/inc/services/painting.jpg' ) ); ?>">
			<div class="description">
				<h3>Painting</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor</p>
			</div>
		</div>
		<div class="service">
			<img src="<?php echo esc_url( home_url( '/wp-content/themes/westpainting/inc/services/wallpapering.jpg' ) ); ?>">
			<div class="description">
				<h3>Wallpapering</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor</p>
			</div>
		</div>
		<div class="service">
			<img src="<?php echo esc_url( home_url( '/wp-content/themes/westpainting/inc/services/renovating.jpg' ) ); ?>">
			<div class="description">
				<h3>Renovation</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor</p>
			</div>
		</div>
	</div>
	<a class="ctabtn bluebtn" href="<?php echo esc_url( home_url( '/our-services' ) ); ?>">View all Services</a>
</div>

<?php } elseif(is_page('our-services')) { ?>

<div id="services" class="our-services">
	<div class="entry-header">
		<h1>Our Services</h1>
		<hr>
	</div>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	<div id="servicesContainer">
		<div class="service">
			<img src="<?php echo esc_url( home_url( '/wp-content/themes/westpainting/inc/services/painting.jpg' ) ); ?>">
			<div class="description">
				<h3>Painting</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor</p>
			</div>
		</div>
		<div class="service">
			<img src="<?php echo esc_url( home_url( '/wp-content/themes/westpainting/inc/services/wallpapering.jpg' ) ); ?>">
			<div class="description">
				<h3>Wallpapering</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor</p>
			</div>
		</div>
		<div class="service">
			<img src="<?php echo esc_url( home_url( '/wp-content/themes/westpainting/inc/services/renovating.jpg' ) ); ?>">
			<div class="description">
				<h3>Renovation</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor</p>
			</div>
		</div>
		<div class="service">
			<img src="<?php echo esc_url( home_url( '/wp-content/themes/westpainting/inc/services/remodeling.jpg' ) ); ?>">
			<div class="description">
				<h3>Remodeling</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor</p>
			</div>
		</div>
		<div class="service">
			<img src="<?php echo esc_url( home_url( '/wp-content/themes/westpainting/inc/services/staging.jpeg' ) ); ?>">
			<div class="description">
				<h3>Staging</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor</p>
			</div>
		</div>
		<div class="service">
			<img src="<?php echo esc_url( home_url( '/wp-content/themes/westpainting/inc/services/colour-consulting.jpg' ) ); ?>">
			<div class="description">
				<h3>Colour Consulting</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor</p>
			</div>
		</div>
	</div>
</div>

<?php } ?>