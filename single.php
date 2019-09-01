<?php get_header(); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php

                if ( is_single() ) {
                    the_title( '<h1 class="entry-title">', '</h1>' );
                } else {
                    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>');
                }
                
                bloglite_breadcrumb();

                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>