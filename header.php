<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="header" class="d-none d-lg-block">
	<div class="container-custom-h">
		<div class="row">
			<div id="header-content">
				<div id="logo" class="d-flex justify-content-center justify-content-md-start col-md-4 col-lg-4 col-xl-4">
					<h1><a href="<?php echo esc_url( home_url('/') ); ?>">
					
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/main-img/logo/logo-main.png" alt="">
					<div id="name-logo"> Comunidade Luterana</div></a></h1> 
				</div>

				<div id="header-menu" class="d-none d-md-flex col-md-8 col-lg-7 offset-lg-1 col-xl-6 offset-xl-2 justify-content-md-end">
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

<header id="header-responsive" class="d-block d-lg-none">
	<div class="container-custom-h">
		<div class="row">
			<div id="header-content-responsive">
				<div id="logo-responsive" class="d-flex justify-content-start align-items-center col-sm-10 col-9">
					<h1><a href="<?php echo esc_url( home_url('/') ); ?>" class="d-flex align-items-center">
					
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/main-img/logo/logo-main.png" alt="">
					<div id="name-logo-responsive"> C. Luterana</div></a></h1> 
				</div>
				
				<div id="main-icon" class="d-flex justify-content-end align-items-center col-sm-2 col-3">
					<div id="btn-icon" class="menu-closed">
						<span class="btn-icon-lines"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<nav id="main-menu-responsive" class="d-block d-lg-none">
	<div class="container-custom">
		<ul>
			<h6>Menu</h6>
			<li><a href="./index.php">Home</a></li>
			<li><a href="./programas">Programas & Eventos</a></li>
			<li><a href="./mensagens">Mensagens</a></li>
			<li><a href="./contato">Contato</a></li>
		</ul>
		<div id="menu-medias-responsive">
			<a href="<?php echo get_theme_mod( 'facebook' ) ?>" target="__blank">
				<i class="fab fa-facebook"></i>
            </a>
		</div>
	</div>
</nav>