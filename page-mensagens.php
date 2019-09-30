<?php get_header(); ?>

    <?php get_template_part('elements/parts/part', 'main-image'); ?>

    <section id="page-messages">

        <div id="title-messages">
            <div class="container-custom">
                <div class="row">
                    <div class="col-12">
                        <h6>Mensagens</h6>
                    </div>
                </div>
            </div>
        </div>

        <div id="messages">
            <div class="container-custom">
                <div class="row">
                    <div class="col-12">
                        <ul class="owl-theme owl-carousel">
                            <?php

                            $args = array(
                                'category_name' => 'mensagens'
                            );

                            $query = new WP_Query($args);
                                if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) { 
                                        $query->the_post(); 
                            ?>

                            <li id="post-<?php the_ID(); ?>" class="message-post">
                                <div class="message-img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="message-content">
                                    <span><?php the_title(); ?></span>
                                    <?php
                                    $excerpt = get_the_excerpt();
                                    $excerpt = substr( $excerpt, 0, 100 );
                                    ?>
                                    <p><?php echo $excerpt . '...'; ?>
                                </div>
                            </li>

                            <?php 
                                }
                            }
                            ?>                        
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  

<?php get_footer(); ?>