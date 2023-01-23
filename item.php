<?php
/*
Template Name: item
*/
?>

<?php get_header();?>  

<main>
    <section class="item">
        <div class="container">

            <div class="item__carousel"> 
                <div class="item__slide"><img class="item__img" src="<?php bloginfo('template_url'); ?>/assets/img/demo-catalog.jpg" alt=""></div>
                <div class="item__slide"><img class="item__img" src="<?php bloginfo('template_url'); ?>/assets/img/item-page11.jpg" alt=""></div>
                <div class="item__slide"><img class="item__img" src="<?php bloginfo('template_url'); ?>/assets/img/item-page13.jpg" alt=""></div>
                <div class="item__slide"><img class="item__img" src="<?php bloginfo('template_url'); ?>/assets/img/item-page11.jpg" alt=""></div>
                <div class="item__slide"><img class="item__img" src="<?php bloginfo('template_url'); ?>/assets/img/item-page13.jpg" alt=""></div>
                <div class="item__slide"><img class="item__img" src="<?php bloginfo('template_url'); ?>/assets/img/item-page11.jpg" alt=""></div>
                <div class="item__slide"><img class="item__img" src="<?php bloginfo('template_url'); ?>/assets/img/item-page13.jpg" alt=""></div>
            </div>
    
            <div class="item__descr">
                <h1 class="item__title t22m">SINGLE-BREASTED TUXEDO JACKET IN GRAIN DE POUDRE</h1>
                <div class="item__price t18l">32000 руб.</div>
                <div class="item__size t11r b">размер:</div>

                <div class="select">
                    <a href="javascript:void(0);" class="slct t11r">Выбрать размер
                        <img src="https://e13.boutique/wp-content/uploads/2023/01/down-arrow.svg" alt="">
                    </a>
                    
                    <ul class="drop">
                        <li><a class="t11r drop__a" data-znach="dk">Выбрать размер</a></li>
                        <li><a class="t11r drop__a" data-znach="s">s</a></li>
                        <li><a class="t11r drop__a" data-znach="m">m</a></li>
                        <li><a class="t11r drop__a" data-znach="l">l</a></li>
                        <li><a class="t11r drop__a" data-znach="xl">xl</a></li>
                    </ul>
                    <input type="hidden" id="select">
                </div>

                <button class="item__btn">в корзину</button>
                <div class="item__text t11r"><span>о товаре:<br></span>Худи ZNY из коллекции AW22, выполненное из высококачественного хлопка "Heavy Cotton" повышенной плотности. Модель имеет объемный капюшон, круглый ворот и свободный oversize крой. Худи выкрашено и сварено вручную по технологии Garment Dye.

                    <br><br>

                    Каждая вещь выкрашена вручную и имеет индивидуальный оттенок, который может незначительно отличаться от представленного на фото. Обращаем ваше внимание, что из-за технологических особенностей, измерения в одном размере могут варьироваться в пределах 1-3 см.
                    
                    <br><br>
                    
                    Состав: 100% хлопок (Heavy Cotton)
                    <br><br>
                    Плотность: 460 г
                    <br><br>
                    Нанесение: шелкография / полимерное окрашивание
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>  