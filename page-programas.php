<?php get_header(); ?>

    <div class="back-image-page">
        <?php get_template_part('elements/parts/part', 'secondary-image'); ?>
        <div class="container-custom-h">
            <h3>Programas & Eventos</h3>
        </div>
    </div>


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

        <div id="schedules" class="d-none d-sm-block">
            <div class="container-custom">
                <div class="row">
                    <div class="col-12">
                        <ul class="owl-theme owl-carousel aul">
                            <li id="first-three-schedules" class="abcde li-one-schedule">
                                <?php
                                $argsCult = array('p' => '46');
                                $queryCult = new WP_Query($argsCult);

                                $argsCommunion = array('p' => '52');
                                $queryCommunion = new WP_Query($argsCommunion);

                                $argsPray = array('p' => '56');
                                $queryPray = new WP_Query($argsPray);
                                ?>

                                <?php if ($queryCommunion->have_posts() && $queryPray->have_posts()) { ?>
                                <ul>
                                    <li class="cult li-one-schedule">
                                    <?php
                                    if ( $queryCult->have_posts() ) {
                                        $queryCult->the_post();
                                    ?>
                                        <?php the_post_thumbnail() ?>
                                        <span><?php the_title() ?></span>
                                        <p><?php the_content() ?></p>
                                    <?php } ?>
                                    </li>

                                    <li id="communion" class="li-one-schedule d-flex justify-content-around">
                                    <?php
                                    if ( $queryCommunion->have_posts() ) {
                                        $queryCommunion->the_post();
                                    ?>
                                        <?php the_post_thumbnail() ?>
                                        <span><?php the_title() ?></span>
                                        <p><?php the_content() ?></p>  
                                    <?php } ?>
                                    </li>

                                    <li id="pray" class="li-one-schedule d-flex justify-content-end">
                                    <?php
                                    if ( $queryPray->have_posts() ) {
                                        $queryPray->the_post();
                                    ?>
                                        <?php the_post_thumbnail() ?>
                                        <span><?php the_title() ?></span>
                                        <p><?php the_content() ?></p>
                                    <?php } ?>
                                    </li>
                                </ul>

                                <?php } elseif ($queryCommunion->have_posts() && !($queryPray->have_posts())) { ?>
                                <ul>
                                    <li class="cult li-one-schedule">
                                    <?php
                                    if ( $queryCult->have_posts() ) {
                                        $queryCult->the_post();
                                    ?>
                                        <?php the_post_thumbnail() ?>
                                        <span><?php the_title() ?></span>
                                        <p><?php the_content() ?></p>
                                    <?php } ?>
                                    </li>

                                    <li id="all-communion" class="li-one-schedule d-flex justify-content-around">
                                    <?php
                                    if ( $queryCommunion->have_posts() ) {
                                        $queryCommunion->the_post();
                                    ?>
                                        <?php the_post_thumbnail() ?>
                                        <span><?php the_title() ?></span>
                                        <p><?php the_content() ?></p>  
                                    <?php } ?>
                                    </li>
                                </ul>

                                <?php } elseif (!($queryCommunion->have_posts()) && $queryPray->have_posts()) { ?>
                                <ul>
                                    <li class="cult li-one-schedule">
                                    <?php
                                    if ( $queryCult->have_posts() ) {
                                        $queryCult->the_post();
                                    ?>
                                        <?php the_post_thumbnail() ?>
                                        <span><?php the_title() ?></span>
                                        <p><?php the_content() ?></p>
                                    <?php } ?>
                                    </li>

                                    <li id="all-pray" class="li-one-schedule d-flex justify-content-end">
                                    <?php
                                    if ( $queryPray->have_posts() ) {
                                        $queryPray->the_post();
                                    ?>
                                        <?php the_post_thumbnail() ?>
                                        <span><?php the_title() ?></span>
                                        <p><?php the_content() ?></p>
                                    <?php } ?>
                                    </li>
                                </ul>
                                <?php } ?>
                            </li>

                            <!-- Segunda LI -->
                            <li id="second-three-schedules" class="li-one-schedule">
                                <?php
                                $argsProject = array('p' => '58');
                                $queryProject = new WP_Query($argsProject);
                                            
                                $argsSchool = array('p' => '60');
                                $querySchool = new WP_Query($argsSchool);

                                $argsYoung = array('p' => '63');
                                $queryYoung = new WP_Query($argsYoung);
                                ?>

                                <?php if ($querySchool->have_posts() && $queryYoung->have_posts()) { ?>
                                <ul class="three-schedules">
                                    <li class="project li-one-schedule">
                                    <?php
                                    if ( $queryProject->have_posts() ) {
                                        $queryProject->the_post();
                                    ?>
                                        <?php the_post_thumbnail() ?>
                                        <span><?php the_title() ?></span>
                                        <p><?php the_content() ?></p>  
                                    <?php } ?>
                                    </li>

                                    <li id="school" class="li-one-schedule">
                                    <?php
                                    if ( $querySchool->have_posts() ) {
                                        $querySchool->the_post();
                                    ?>
                                        <?php the_post_thumbnail() ?>
                                        <span><?php the_title() ?></span>
                                        <p><?php the_content() ?></p>  
                                    <?php } ?>
                                    </li>

                                    <li id="young" class="li-one-schedule">
                                    <?php
                                    if ( $queryYoung->have_posts() ) {
                                        $queryYoung->the_post();
                                    ?>
                                        <?php the_post_thumbnail() ?>
                                        <span><?php the_title() ?></span>
                                        <p><?php the_content() ?></p>  
                                    <?php } ?>
                                    </li>
                                </ul>

                                <?php } elseif ($queryYoung->have_posts() && !($querySchool->have_posts())) { ?>
                                <ul class="three-schedules"> 
                                    <li class="project li-one-schedule">
                                    <?php
                                    if ( $queryProject->have_posts() ) {
                                        $queryProject->the_post();
                                    ?>
                                        <?php the_post_thumbnail() ?>
                                        <span><?php the_title() ?></span>
                                        <p><?php the_content() ?></p>  
                                    <?php } ?>
                                    </li>

                                    <li id="all-young" class="li-one-schedule">
                                    <?php
                                    if ( $queryYoung->have_posts() ) {
                                        $queryYoung->the_post();
                                    ?>
                                        <?php the_post_thumbnail() ?>
                                        <span><?php the_title() ?></span>
                                        <p><?php the_content() ?></p>  
                                    <?php } ?>
                                    </li>
                                </ul>

                                <?php } elseif (!($queryYoung->have_posts()) && $querySchool->have_posts()) { ?>
                                <ul class="three-schedules"> 
                                    <li class="project li-one-schedule">
                                    <?php
                                    if ( $queryProject->have_posts() ) {
                                        $queryProject->the_post();
                                    ?>
                                        <?php the_post_thumbnail() ?>
                                        <span><?php the_title() ?></span>
                                        <p><?php the_content() ?></p>  
                                    <?php } ?>
                                    </li>

                                    <li id="all-school" class="li-one-schedule">
                                    <?php
                                    if ( $querySchool->have_posts() ) {
                                        $querySchool->the_post();
                                    ?>
                                        <?php the_post_thumbnail() ?>
                                        <span><?php the_title() ?></span>
                                        <p><?php the_content() ?></p>  
                                    <?php } ?>
                                    </li>

                                </ul>
                                <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="schedules-responsive" class="d-block d-sm-none">
            <div class="container-custom">
                <div class="row">
                    <div class="col-12">
                        <ul class="owl-carousel owl-theme">
                            <li id="cult-responsive" class="li-one-schedule-responsive">
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

                            <li id="communion-responsive" class="li-one-schedule-responsive">
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

                            <li id="pray-responsive" class="li-one-schedule-responsive">
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

                            <li id="project-responsive" class="li-one-schedule-responsive">
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

                            <li id="school-responsive" class="li-one-schedule-responsive">
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

                            <li id="young-responsive" class="li-one-schedule-responsive">
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
                    </div>
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
                                    <a href="<?php the_permalink() ?>" class="d-none d-md-block">Saiba mais</a>
                                </div>
                                <div class="event-content">
                                    <span><?php the_title() ?></span>
                                    <?php
                                    $excerpt = get_the_excerpt();
                                    $excerpt = substr( $excerpt, 0, 115 );
                                    ?>
                                    <p><?php echo $excerpt . '...'; ?><a href="<?php the_permalink(); ?>" class="d-block d-md-none">ver mais</a></p>
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