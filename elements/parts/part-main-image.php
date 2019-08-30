<section id="main-image">

	<?php

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

	?>

</section>