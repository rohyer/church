<?php get_header(); ?>

    <?php get_template_part('elements/parts/part', 'main-image'); ?>

    <section id="schedules-events">
        <div id="invite-schedules-events">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h6>Venha participar conosco</h6>
                    </div>
                </div>
            </div>
        </div>

        <div id="schedules">
            <ul id="all-schedules">
                <li class="li-one-schedule">
                    <ul class="ul-one-schedule">
                        <li id="cult">
                            <span>Cultos</span>
                            <p>Todo domingo às 9:30</p>
                        </li>
                    </ul>
                </li>

                <li class="li-one-schedule">
                    <ul class="ul-one-schedule">
                        <li id="communion">
                            <span>Grupos de comunhão</span>
                            <p>Toda terça-feira às 20:00</p>
                        </li>
                    </ul>
                </li>

                <li class="li-one-schedule">
                    <ul class="ul-one-schedule">
                        <li id="pray">
                            <span>Grupos de Oração</span>
                            <p>Toda quinta-feira às 20:00</p>
                        </li>
                    </ul>
                </li>

                <li class="li-one-schedule">
                    <ul class="ul-one-schedule">
                        <li id="project">
                            <span>Grupos de Oração</span>
                            <p>Toda quinta-feira às 20:00</p>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <div id="events"></div>
    </section>


<?php get_footer(); ?>