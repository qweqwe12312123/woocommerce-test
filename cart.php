<?php
/*
Template Name: cart
*/
?>



        

<?php get_header(); 

global $woocommerce;
$items = $woocommerce->cart->get_cart();

?>  

<!-- <?php
if (isset($_GET['remove_item'])) {
    $cart_item_key = sanitize_text_field($_GET['remove_item']);
    wp_redirect(wc_get_cart_url());
    WC()->cart->remove_cart_item($cart_item_key);
    exit;
}
?> -->

<main>
    <section class="cart">
        <div class="container">
            <div class="cart__wrapper">
                <h1 class="cart__title t22m">корзина</h1>

                <div class="cart__items">
                    <!-- <?php 
                    foreach($items as $item => $values) { 
                        $_product =  wc_get_product( $values['data']->get_id()); 
                        $price = get_post_meta($values['product_id'] , '_price', true);

                        $params = ['class' => 'cart-item__img'];
                        $getProductDetail = wc_get_product( $values['product_id'] );
                        $delItem = $values['product_id'];


                        echo "<div class='cart-item'>";
                        echo $getProductDetail->get_image("full", $params);
                        echo "<div class='cart-item__text'>";
                        echo "<div class='cart-item__title t22m'>".$_product->get_title()."</div>";
                        echo "<div class='cart-item__price t18l'>Количество: ".$values['quantity']."</div>";
                        echo "<div class='cart-item__price t18l'>".$values['quantity']*$price." руб.</div>";
                        echo "<div class='cart-item__size t11b'>Размер: </div>";
                        echo "</div>";
                        echo "<button class='cart-item__close'><img src='http://localhost/e13wordpress/wp-content/uploads/2023/01/close-svgrepo-com.svg'</button>";
                        echo "</div>";
                    }
                    ?> -->

                    <?php
                    foreach($items as $item => $values) : ?>  
                        <?php 
                        $_product =  wc_get_product( $values['data']->get_id()); 
                        $price = get_post_meta($values['product_id'] , '_price', true);

                        $params = ['class' => 'cart-item__img'];
                        $getProductDetail = wc_get_product( $values['product_id'] );
                        $product_variation = new WC_Product_Variation( $_product );
                        ?> 
                        <div class='cart-item'>
                            <?php echo $getProductDetail->get_image("full", $params); ?>
                            
                            <div class='cart-item__text'>
                                <div class='cart-item__title t22m'><?php echo $_product->get_title() ?></div>
                                <div class='cart-item__price t18l'>Количество: <?php echo $values['quantity'] ?></div>
                                <div class='cart-item__price t18l'><?php echo $values['quantity']*$price ?> руб.</div>
                                <div class='cart-item__size t11b'>Размер: <?php echo $product_variation->attributes['pa_size'] ?></div>
                            </div>
                            <!-- <button class='cart-item__close'><img src='http://localhost/e13wordpress/wp-content/uploads/2023/01/close-svgrepo-com.svg'></button> -->
                        
                            <!-- <form method="get" action="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" onClick="removeItem(event)" >
                            <input type="hidden" name="remove_item" value="<?php echo $item ?>" >
                            <button type="submit" class="btn btn-danger">Remove</button>
                            </form> -->

                            <form method="POST" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
                                <input type="hidden" name="product_id" value="<?php echo $_product->get_id(); ?>">
                                <input type="hidden" name="action" value="remove_item">
                                <button>Remove</button>
                            </form>
                        </div>
                    <?php endforeach; ?>

                    


                    <!-- <div class="cart-item">
                        <img class="cart-item__img" src="<?php bloginfo('template_url'); ?>/assets/img/model.jpg" alt="">
                        <div class="cart-item__text">
                            <div class="cart-item__title t22m">пуховик №1002</div>
                            <div class="cart-item__price t18l">32000 руб.</div>
                            <div class="cart-item__size t11b">Размер: L</div>
                        </div>
                        <button class="cart-item__close"><img src="<?php bloginfo('template_url'); ?>/assets/img/close-svgrepo-com.svg" alt=""></button>
                    </div> -->

                    

                </div>

                <form action="#" class="cart__form">
                    <label class="text-label t11r">имя
                        <input placeholder="Иван" type="text" name="username">
                    </label>
                    <label class="text-label t11r">фамилия
                        <input placeholder="Иванов" type="text" name="usersurname">
                    </label>
                    <label class="text-label t11r">e-mail
                        <input placeholder="ivanov_ivan@gmail.com" type="email" name="useremail">
                    </label>
                    <label class="text-label t11r">телефон
                        <input class="art-stranger" placeholder="+7 (999) 999-99-99" type="tel" name="usertel">
                    </label>

                    <div class="t11r cart__way">
                        способ доставки:
                    </div>

                    <label class="radio-label t11r l">
                        <input checked type="radio" name="delivery"><div></div>САМОВЫВОЗ ИЗ МАГАЗИНА
                    </label>
                    <label class="radio-label t11r l">
                        <input type="radio" name="delivery"><div></div>ДОСТАВКА СДЭК
                    </label>
                    <label class="radio-label t11r l">
                        <input type="radio" name="delivery"><div></div>ДОСТАВКА ПОЧТОЙ РОССИИ
                    </label>
                    <label class="radio-label t11r l">
                        <input type="radio" name="delivery"><div></div>курьером в пределах МКАД
                    </label>

                    <div class="cart__address">
                        <div class="t11r cart__way">
                            Адрес доставки:
                        </div>
    
                        <label class="text-label t11r">город
                            <input placeholder="Москва" type="text" name="town">
                        </label>
                        <label class="text-label t11r">индекс
                            <input placeholder="012345" type="tel" name="index">
                        </label>
                        <label class="text-label t11r">адрес
                            <input placeholder="ул. Ильинка, д. 1, кв. 1" type="text" name="address">
                        </label>
                    </div>

                    <div class="t11r cart__way">
                        способ оплаты:
                    </div>

                    <label class="radio-label t11r l">
                        <input checked type="radio" name="payment"><div></div>ОПЛАТА ОНЛАЙН
                    </label>
                    <label class="radio-label t11r l">
                        <input type="radio" name="payment"><div></div>оплата при получении
                    </label>

                    <div class="cart__total t11r l"><span class="t11r">Итого:</span> <?php echo WC()->cart->get_total(); ?></div>

                    <button class="t11r b">оформить заказ</button>
                </form>

            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>    