<?php

/*
Template Name: Product Grade Template
 */

get_header();
?>

	<!-- grade article start  -->
	<section class="container content clearfix">
		<div class="grade">
			<h2>Fixed Width Grades</h2>
			<?php
				$galleryPost = new WP_Query('cat=2');

				if ($galleryPost->have_posts()) :
					while ($galleryPost->have_posts()) : $galleryPost->the_post();
			?>
			<div class="items">
				<h3><?php the_title(); ?></h3>
				<?php the_content(); ?>
				<?php the_post_thumbnail('grade-thumbnail'); ?>
			</div>
			<?php
					endwhile;
				else :
					echo '<p>No content found</p>';
				endif;

				wp_reset_postdata();
			?>

			<h2>Random Width Grades</h2>
			<?php
				$galleryPost = new WP_Query('cat=4');

				if ($galleryPost->have_posts()) :
					while ($galleryPost->have_posts()) : $galleryPost->the_post();
			?>
			<div class="items">
				<h3><?php the_title(); ?></h3>
				<?php the_content(); ?>
				<?php the_post_thumbnail('grade-thumbnail'); ?>
			</div>
			<?php
					endwhile;
				else :
					echo '<p>No content found</p>';
				endif;

				wp_reset_postdata();
			?>
		</div>
	</section><!-- grade article end -->


<?php
	get_footer();
?>