<?php
/*
Template Name: catalog
*/
?>

<?php get_header(); ?>  

<main>
        <section class="catalog">
            <h1 class="catalog__h1">Каталог</h1>
            <div class="container">
                <div class="catalog__wrapper">

                    <!-- <a href="item.html" class="catalog-card">
                        <div class="block">
                            <img src="https://thumb.tildacdn.com/stor3464-6133-4839-b364-656366323561/-/format/webp/73943671.jpg" alt="">
                        </div>
                        <div class="catalog-card__text">
                            <div class="catalog-card__title t11r">кожаная oversize-Куртка</div>
                            <div class="catalog-card__price t11r">45000 руб.</div>
                        </div>
                    </a>  -->

                    <!-- <?php
                    global $post;

                    $myposts = get_posts([ 
                        'numberposts' => -1
                    ]);

                    if( $myposts ){
                        foreach( $myposts as $post ){
                            setup_postdata( $post );
                            ?>
                                <a href="item" class="catalog-card">
                                    <div class="block">
                                        <?php the_post_thumbnail(
                                            array(),
                                            array('class' => 'catalog-card__image')
                                        ); ?>
                                    </div>
                                    <div class="catalog-card__text">
                                        <div class="catalog-card__title t11r"><?php the_title(); ?></div>
                                        <div class="catalog-card__price t11r"><?php the_content(); ?></div>
                                    </div>
                                </a> 
                            <?php 
                        }
                    } 

                    wp_reset_postdata();
                    ?> -->

                    <?php  
                    $args = ['post_type' => 'product'];
                    $products = new WP_Query($args);

                    while ( $products->have_posts() ) :
                        $products->the_post();

                        $title = get_the_title();
                        $id = get_the_ID();
                        $img = get_the_post_thumbnail($id);
                        $price = get_post_meta($id, '_regular_price', true);
                    ?>

                    <a href="#" class="catalog-card">
                        <div class="block">
                            <?php echo $img; ?>
                        </div>
                        <div class="catalog-card__text">
                            <div class="catalog-card__title t11r"><?php echo $title; ?></div>
                            <div class="catalog-card__price t11r"><?php echo $price; ?> руб.</div>
                        </div>
                    </a> 

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>