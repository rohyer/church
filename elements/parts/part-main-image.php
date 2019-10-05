<section id="main-image">

	<video loop autoplay muted poster="<?php echo get_template_directory_uri(); ?>/assets/video/main-img-video.png" id="video" class="bg-video">
		<source src="<?php echo get_template_directory_uri(); ?>/assets/video/luterana-video.webm" type="video/webm">
		<source src="<?php echo get_template_directory_uri(); ?>/assets/video/luterana-video.mp4" type="video/mp4">
	</video>

	<!-- <?php

	$args = array(
		'p' => '6',
	);

	$query = new WP_Query($args);
	
	if ( $query->have_posts() ) { ?>

		<?php while ( $query->have_posts() ) { ?>
			<?php 
				$query->the_post();
				the_post_thumbnail();
			?>
			<div id="post-<?php the_ID(); ?>"<?php post_class() ?>><?php the_content(); ?></div>
		<?php } ?>
	<?php }

	wp_reset_postdata();

	?> -->

</section>