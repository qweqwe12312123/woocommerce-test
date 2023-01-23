<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>  

    <main>
        <section class="main">
            <ul class="side-panel">
                <li><a href="#" class="category t11r">мужское</a></li>
                <li><a href="#" class="category t11r">женское</a></l>
                <li><a href="#" class="category t11r">аксессуары</a>
                </li>
                <div class="sub-categories">
                    <li>
                        <a href="#" class="category t11r">все коллекции</a>
                    </li>
                    <li>
                        <a href="#" class="category t11r">о бренде</a>
                    </li>
                </div>
            </ul>
            <a class="main__link" href="catalog">
                <img src="<?php the_field('main_image'); ?>" alt="Model">
                <!-- <img src="<?php bloginfo('template_url'); ?>/assets/img/model.jpg" alt="Model"> -->
                <h1><?php the_field('main_text'); ?></h1>
            </a>
        </section>
    </main>

<?php get_footer(); ?>    