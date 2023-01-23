<?php get_header(); 

the_post();
global $product;
$id = get_the_ID();

$price = get_post_meta($id, '_regular_price', true);
$price = $price ? $price : (int) $product->get_variation_price();

$post_content = !empty($product->post->post_content) ? $product->post->post_content : '';
  $post_content = apply_filters('the_excerpt', $post_content);
  $post_content = str_replace(']]>', ']]&gt;', $post_content);
?>

<main>
    <section class="item">

<? $variations = $product->get_children(); ?>
<? $first_variation = new WC_Product_Variation( $variations[0] ); ?>

        <div class="container">
            <div class="item__carousel"> 

            <?php 
            $attachment_ids = $product->get_gallery_image_ids();
            $params = ['class' => 'item__img'];

            foreach ( $attachment_ids as $attachment_id ) {
                $img = wp_get_attachment_image($attachment_id, "full", false, $params );
                echo "<div class='item__slide'>";
                echo $img;
                echo "</div>";
            }
            ?>

            </div>
    
            <div class="item__descr">
                <h1 class="item__title t22m"><?php echo $product->get_title(); ?></h1>
                <div class="item__price t18l"><?php echo $price; ?> руб.</div>
                <div class="item__size t11r b">размер:</div>
                
                <div class="select">
                    <a href="javascript:void(0);" class="slct t11r">Выбрать размер
                        <img src="https://e13.boutique/wp-content/uploads/2023/01/down-arrow.svg" alt="">
                    </a>
                    
                    <ul class="drop">
                        <? foreach($variations as $variation) { ?>
                            <? $single_variation = new WC_Product_Variation($variation); ?>
                            <li>
                                <a class="t11r drop__a" data-znach="<?= $variation ?>">
                                <? echo $single_variation->attributes['pa_size'] ?>
                                </a>
                            </li>
                        <? } ?>   
                    </ul>

                    <form action="#" id="item-form" action="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" method="post">
                        <input type="hidden" id="select"> 
                        <button id="add_to_cart" name="add-to-cart" class="item__btn"
                        >в корзину</button>
                    </form>


                    
                </div>

                

                <div class="item__text t11r"><span>о товаре:<br></span>
                    <?php echo $post_content; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>  