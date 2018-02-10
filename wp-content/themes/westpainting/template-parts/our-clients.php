<div id="our-clients">
	<h1 class="yellowtext">Our<br>
		<span class="greytext">Clients</span>
	</h1>
	<div class="slider clients">
		<div><img src="<?php echo esc_url( home_url( '/wp-content/uploads/2018/02/max-mara.png' ) ); ?>"></div>
		<div><img src="<?php echo esc_url( home_url( '/wp-content/uploads/2018/02/lindasale.png' ) ); ?>"></div>
		<div><img src="<?php echo esc_url( home_url( '/wp-content/uploads/2018/02/kitchenforcooks.png' ) ); ?>"></div>
		<div><img src="<?php echo esc_url( home_url( '/wp-content/uploads/2018/02/CEMiles.png' ) ); ?>"></div>
		<div><img src="<?php echo esc_url( home_url( '/wp-content/uploads/2018/02/burnabycenter.png' ) ); ?>"></div>
		<div><img src="<?php echo esc_url( home_url( '/wp-content/uploads/2018/02/boardwalk.gif' ) ); ?>"></div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $('.slider.clients').slick({
    autoplay: true,
    arrows: false,
    dots: true,
    slidesToShow: 2,
    mobileFirst: true,
  });
});
</script>