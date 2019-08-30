<section id="content-3">
	<div class="container">
		<div class="row">

		<?php

		$args = array(
			'p' => '12',
		);

		$query = new WP_Query($args);

		if ( $query->have_posts() ) {
			$query->the_post();
		?>

			<div id="first-content-3" class="d-none d-lg-block col-7">
				<a href="https://br.freepik.com/fotos-vetores-gratis/escola">
					<?php the_post_thumbnail(); ?>
				</a>
			</div>

			<div id="second-content-3" class="col-12 col-lg-5">
				<h4 class="text-center"><?php the_title(); ?></h4>
				<?php the_content(); ?>
			</div>

		<?php } ?>

		</div>
	</div>
</section>