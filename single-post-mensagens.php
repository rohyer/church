<?php get_header(); ?>

<div class="back-image-page">
    <?php get_template_part('elements/parts/part', 'secondary-image'); ?>
    <div class="container-custom-h">
        <h3>Mensagens</h3>
    </div>
</div>

<section class="post-content">
    <div class="container-custom-h">
        <div class="row">

            <!-- <div class="col-12 offset-sm-1 col-sm-10 offset-md-2 col-md-8 d-lg-none">
                <?php
                if ( is_single() ) {
                    the_title( '<h1 class="entry-title">', '</h1>' );
                } else {
                    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>');
                }
                ?>
            </div> -->

            <?php if ( has_post_thumbnail() ) : ?>

                <div class="col-12 offset-sm-1 col-sm-10 offset-md-2 col-md-8 offset-lg-0 col-lg-5 offset-xl-0 col-xl-4">
                    <?php the_post_thumbnail(); ?>
                </div>

            <?php endif; ?>

            <div class="col-12 offset-sm-1 col-sm-10 offset-md-2 col-md-8 offset-lg-0 col-lg-7 offset-xl-0 col-xl-8">

                <?php
                if ( is_single() ) {
                    the_title( '<h1 class="entry-title">', '</h1>' );
                } else {
                    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>');
                }
                ?>
                
                <?php

                while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
                    
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>