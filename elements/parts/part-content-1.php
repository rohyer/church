<section id="content-1">
	<div class="container">
		<div class="row">

			<?php

			$args = array(
				'p' => '10',
			);

			$query = new WP_Query($args);

			if ( $query->have_posts() ) { 
				$query->the_post();
			?>

			<h4 class="text-center col-12"><?php the_title(); ?></h4>
			<?php the_content(); ?>

			<?php } ?>

		</div>
	</div>
</section>
