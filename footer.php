<footer class="footer">
        <div class="footer-line">
            <div class="footer-line__links">

                
                <a href="<?php the_field('vk-link', 7); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/vk.svg" alt="Vk" />
                </a>
                <a href="<?php the_field('tg-link', 7); ?>" class="n-mr">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/telegram.svg" alt="Telegram" />
                </a>
                <a href="<?php the_field('instagram-link', 7); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/instagram.svg" alt="Instagram" />
                </a>
                

                </div>
            <ul class="footer-line__text">

                <?php the_field('working-pages', 7); ?> 

                <div class="footer-line__item new-string">
                    <li>
                        <div class="t11r t11r__black"><?php the_field('pochta', 7); ?></div>
                    </li>
                    <li>
                        <a class="t11r t11r__black" href="tel:<?php the_field('ugly-tel', 7); ?>"> <?php the_field('nice-tel', 7); ?> </a>
                    </li>
                </div>
            </ul>
            <a href="home" class="footer-line__logo">
                <?php 
                $logo_img = '';
                $custom_logo_id = get_theme_mod( 'custom_logo' );

                if( $custom_logo_id ){
                    $logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                        'class'    => 'custom-logo',
                        'itemprop' => 'logo',
                    ) );
                }

                echo $logo_img; 
                ?>
            </a>
        </div>
    </footer>

    <?php wp_footer(); ?>

</body>
</html>