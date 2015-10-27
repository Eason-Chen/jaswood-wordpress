<?php
	get_header();
?>

	<!-- home article start -->
	<section class="container content">
	<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
	?>
	<?php the_post_thumbnail('home-thumbnail'); ?>
	<?php the_content(); ?>
	<?php
			endwhile;
		else :
			echo '<p>No content found</p>';
		endif;
	?>
	</section><!-- home article end -->

<?php
	get_footer();
?>