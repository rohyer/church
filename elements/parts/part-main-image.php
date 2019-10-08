<section id="main-image">

	<?php
	$args = array(
		'p' => '6',
	);

	$query = new WP_Query($args);
	
	if ( $query->have_posts() ) { 
		$query->the_post(); ?>
		<div id="post-<?php the_ID(); ?>"<?php post_class() ?>><?php the_content(); ?>
		<?php 
			the_post_thumbnail();
		?>
		</div>
	<?php }

	wp_reset_postdata();

	?>

</section>