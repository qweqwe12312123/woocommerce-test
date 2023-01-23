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

                    <?php  
                    $args = ['post_type' => 'product'];
                    $products = new WP_Query($args);
                    
                    while ( $products->have_posts() ) :
                        $products->the_post();

                        $title = get_the_title();
                        $id = get_the_ID();
                        $img = get_the_post_thumbnail($id);
                        $price = get_post_meta($id, '_regular_price', true);

                        $price = $price ? $price : (int) $product->get_variation_price();
                    ?>

                    <a href="<?php the_permalink(); ?>" class="catalog-card">
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