<?php if(is_page('home')) { ?>
<div class="estimate-form">
<?php } ?>
	<h1 class="yellowtext">Request a Free<br>
		<span class="greytext">On-site Estimate</span>
	</h1>
<?php 
	echo do_shortcode('[contact-form-7 id="32" title="Contact Form"]');
?>
<?php if(is_page('home')) { ?>
</div>
<?php } ?>