<?php get_header(); ?>

    <div class="back-image-page">
        <?php get_template_part('elements/parts/part', 'secondary-image'); ?>
        <div class="container-custom-h">
            <h3>Mensagens</h3>
        </div>
    </div>

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

        <div id="messages" class="owl-carousel">
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
                                    <div id="msgmsg">
                                        <time datetime="<?php the_time('c'); ?>">
                                            <?php the_time('d \d\e F \d\e Y'); ?>
                                        </time>
                                        <span><?php the_title(); ?></span>
                                        <?php
                                        $excerpt = get_the_excerpt();
                                        $excerpt = substr( $excerpt, 0, 90 );
                                        ?>
                                        <p><?php echo $excerpt . '...'; ?></p><a href="<?php the_permalink(); ?>">ver mais</a>
                                        </div>
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