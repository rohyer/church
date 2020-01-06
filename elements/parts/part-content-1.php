<section id="content-1" class="show">
	<div class="container-custom-i">
		<div class="row">
			<div class="col-12">

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
	</div>
</section>
