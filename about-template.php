<?php

/*
Template Name: About Template
 */

get_header();
?>

	<!-- about article start  -->
	<section class="container content clearfix">
		<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
		?>
		<div class="about_img">
			<?php the_post_thumbnail('about-thumbnail'); ?>
		</div>
		<?php the_content(); ?>
		<?php
				endwhile;
			else :
				echo '<p>No content found</p>';
			endif;
		?>
	</section><!-- about article end -->


<?php
	get_footer();
?>