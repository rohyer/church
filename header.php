<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="header">
	<div class="container">
		<div class="row">
			<div id="header-content">
				<div id="logo" class="d-flex justify-content-center justify-content-md-start col-md-3 col-lg-3 col-xl-2">
					<h1><a href="<?php echo esc_url( home_url('/') ); ?>">Igreja</a></h1>
				</div>

				<div id="header-menu" class="d-none d-md-flex col-md-9 col-lg-7 offset-lg-2 col-xl-7 offset-xl-3 justify-content-md-end">
					<ul>
					<?php
					
					wp_nav_menu(array(
						'menu' => 'menu',

						'theme_location' => 'menu',
					));

					?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>