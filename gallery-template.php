<?php

/*
Template Name: Gallery Template
 */

get_header();
?>

	<!-- gallery start  -->
	<section class="container content clearfix">
		<?php
			if (have_posts()) :
				while (have_posts()) : the_post();
					the_content();
				endwhile;
			else :
				echo '<p>No content found</p>';
			endif;
		?>
	</section><!-- gallery end -->


<?php
	get_footer();
?>