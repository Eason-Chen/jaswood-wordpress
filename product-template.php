<?php

/*
Template Name: Product Template
 */

get_header();
?>

	<!-- product article start  -->
	<section class="container content clearfix product">
		<h2>Product Introduction</h2>
		<?php
			$galleryPost = new WP_Query('cat=1');

			if ($galleryPost->have_posts()) :
				while ($galleryPost->have_posts()) : $galleryPost->the_post();
		?>
		<article>
			<h5><?php the_title(); ?></h5>
			<?php the_content(); ?>
		</article>
		<?php
				endwhile;
			else :
				echo '<p>No content found</p>';
			endif;

			wp_reset_postdata();
		?>

		<h2>Product Size</h2>
		<?php
			if (have_posts()) :
				while (have_posts()) : the_post();
					the_content();
				endwhile;
			else :
				echo '<p>No content found</p>';
			endif;
		?>
	</section><!-- product article end -->


<?php
	get_footer();
?>