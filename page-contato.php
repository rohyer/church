<?php get_header(); ?>

    <div class="back-image-page">
        <?php get_template_part('elements/parts/part', 'secondary-image'); ?>
        <div class="container-custom-h">
            <h3>Contato</h3>
        </div>
    </div>

    <section id="page-contact" class="d-flex align-items-center">
        <div class="container-custom">
            <div class="row">
                <div id="contact-form" class="col-12 col-md-6">
                    <h6>Formulário de Contato</h6>
                    <?php echo do_shortcode('[contact-form-7 id="43" title="Formulário de contato 1"]'); ?>
                </div>
                
                <div id="contact-contact" class="col-12 col-md-6">
                <h6>Fale conosco</h6>
                <p><?php echo get_theme_mod( 'telefone' ); ?></p>

                <h6>Ou mande-nos um e-mail:</h6>
                <p><?php echo get_theme_mod( 'email' ) ?></p>

                <h6>E siga nosso facebook:</h6>
                <a href="<?php echo get_theme_mod( 'facebook' ) ?>" target="__blank">
                    <i class="fab fa-facebook-square"></i>
                </a>
                    
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>