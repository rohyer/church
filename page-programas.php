<?php get_header(); ?>

    <?php get_template_part('elements/parts/part', 'main-image'); ?>

    <section id="main-schedules">
        <div id="title-schedules" class="d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h6>Programas</h6>
                    </div>
                </div>
            </div>
        </div>

        <div id="schedules">
            <div class="container-custom">
                <div class="row">
                    <ul class="owl-carousel owl-theme">
                        <li id="first-three-schedules" class="li-one-schedule">
                            <ul>
                                <li id="cult" class="li-one-schedule">
                                <?php
                                $args = array('p' => '46');
                                $query = new WP_Query($args);

                                if ( $query->have_posts() ) {
                                    $query->the_post();
                                ?>
                                    <?php the_post_thumbnail() ?>
                                    <span><?php the_title() ?></span>
                                    <p><?php the_content() ?></p>
                                <?php } ?>
                                </li>

                                <li id="communion" class="li-one-schedule">
                                <?php
                                $args = array('p' => '52');
                                $query = new WP_Query($args);

                                if ( $query->have_posts() ) {
                                    $query->the_post();
                                ?>
                                    <?php the_post_thumbnail() ?>
                                    <span><?php the_title() ?></span>
                                    <p><?php the_content() ?></p>  
                                <?php } ?>
                                </li>

                                <li id="pray" class="li-one-schedule">
                                <?php
                                $args = array('p' => '56');
                                $query = new WP_Query($args);

                                if ( $query->have_posts() ) {
                                    $query->the_post();
                                ?>
                                    <?php the_post_thumbnail() ?>
                                    <span><?php the_title() ?></span>
                                    <p><?php the_content() ?></p>
                                <?php } ?>
                                </li>
                            </ul>
                        </li>

                        <li id="second-three-schedules" class="li-one-schedule">
                            <ul>
                                <li id="project" class="li-one-schedule">
                                <?php
                                $args = array('p' => '58');
                                $query = new WP_Query($args);

                                if ( $query->have_posts() ) {
                                    $query->the_post();
                                ?>
                                    <?php the_post_thumbnail() ?>
                                    <span><?php the_title() ?></span>
                                    <p><?php the_content() ?></p>  
                                <?php } ?>
                                </li>

                                <li id="school" class="li-one-schedule">
                                <?php
                                $args = array('p' => '60');
                                $query = new WP_Query($args);

                                if ( $query->have_posts() ) {
                                    $query->the_post();
                                ?>
                                    <?php the_post_thumbnail() ?>
                                    <span><?php the_title() ?></span>
                                    <p><?php the_content() ?></p>  
                                <?php } ?>
                                </li>

                                <li id="young" class="li-one-schedule">
                                <?php
                                $args = array('p' => '63');
                                $query = new WP_Query($args);

                                if ( $query->have_posts() ) {
                                    $query->the_post();
                                ?>
                                    <?php the_post_thumbnail() ?>
                                    <span><?php the_title() ?></span>
                                    <p><?php the_content() ?></p>  
                                <?php } ?>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="main-events">
        <div id="title-events" class="d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h6>Eventos</h6>
                    </div>
                </div>
            </div>
        </div>

        <div id="events">
            <div class="container-custom">
                <div class="row">
                    <div class="col-12">
                        <ul class="owl-carousel owl-theme">
                        <?php
                        $args = array(
                            'numberposts' => '10',
                            'category_name' => 'eventos'
                        );
                        $query = new WP_Query($args);
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) { 
                                $query->the_post() 
                        ?>
                        <li id="post-<?php the_ID() ?>" class="event-post">
                            <div class="event-img">
                                <?php the_post_thumbnail() ?>
                            </div>
                            <a href="<?php the_permalink() ?>">Saiba mais</a>
                            <div class="event-content">
                                <span><?php the_title() ?></span>
                                <?php the_content() ?>
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