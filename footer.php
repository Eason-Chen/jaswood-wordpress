<!-- footer start -->
	<footer>
		<div class="container clearfix">
			<div class="form">
				<div class="footer_title">REQUEST A QUOTE</div>
				<?php
					if( function_exists( 'ninja_forms_display_form' ) ){
						ninja_forms_display_form( 1 );
					}
				?>
			</div>
			<address>
				<div class="footer_title footer_space">CONTACT</div>
				<p class="icon addIcon">Tempor Eiusmod inc, 9560 St Dlore Place</p>
				<p class="icon phoneIcon">+021 800 5555</p>
				<p class="icon emailIcon">jaswood@gmail.com</p>
			</address>
		</div>
		<div class="copy">Copyright &copy; 2015 Jas Wood Created by <a href="www.3a.co.nz">3A web solution</a></div>
	</footer><!-- footer end -->
	<?php wp_footer(); ?>
</body>
</html>