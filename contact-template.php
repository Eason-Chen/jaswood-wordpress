<?php

/*
Template Name: Contact Us Template
 */

	get_header();
?>

	<!-- grade article start  -->
	<section class="container content clearfix">
		<div class="form_contact">
			<div>REQUEST A QUOTE</div>
			<?php
				if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 8 ); }
			?>
		</div>
		<div class="add">
			<div class="contitle">CONTACT</div>
			<p class="icon addIcon_b">Tempor Eiusmod inc, 9560 St Dlore Place</p>
			<p class="icon phoneIcon_b">+021 800 5555</p>
			<p class="icon emailIcon_b">jaswood@gmail.com</p>
		</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3191.94839622192!2d174.77720509999997!3d-36.867653999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d4876959d2e8d%3A0x72353becd12edd15!2s485+Khyber+Pass+Rd%2C+Newmarket%2C+Auckland+1023!5e0!3m2!1sen!2snz!4v1442267405511" width="990" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
	</section><!-- grade article end -->

	<footer>
		<div class="copy">Copyright &copy; 2015 Jas Wood Created by <a href="www.3a.co.nz">3A web solution</a></div>
	</footer>
</body>
</html>