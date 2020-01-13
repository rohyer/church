<?php get_header(); ?>

<style>
    .main-404 {
        min-height: 325px;
        padding-top: 90px;
        padding-bottom: 90px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .main-404 h1 {
        font-family: "Montserrat";
        font-size: 32px;
        font-weight: 500;
        font-style: normal;
        margin-bottom: 15px;
    }
</style>

<div class="back-image-page">
    <?php get_template_part('elements/parts/part', 'secondary-image'); ?>
    <div class="container-custom-h">
    </div>
</div>

	<div id="primary" class="container-custom-h">
		<main id="main" class="main-404 site-main" role="main" >

			<section class="error-404 not-found text-center">
				<div class="page-404">
					<h1 class="title-404">Opa! A página não foi encontrada</h1>
				</div><!-- .page-header -->

				<div class="page-content-404">
					<p>Não foi encontrado nada aqui. Volte para a página Home para continuar sua busca.</p>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- .site-main -->

	</div><!-- .content-area -->

<?php get_footer(); ?>
