<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Primary Meta Tags -->
    <title>ê13</title>
    <meta name="title" content="ê13">
    <meta name="description" content="Московский бренд одежды">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://e13.boutique/"> <!-- поменять  -->
    <meta property="og:title" content="ê13">
    <meta property="og:description" content="Московский бренд одежды">
    <meta property="og:image" content="<?php bloginfo('template_url'); ?>/assets/icons/icon1200x628.svg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://e13.boutique/">
    <meta property="twitter:title" content="ê13">
    <meta property="twitter:description" content="Московский бренд одежды">
    <meta property="twitter:image" content="<?php bloginfo('template_url'); ?>/assets/icons/icon1200x628.svg">
    
    <link rel="apple-touch-icon" sizes="57x57" href="icons/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="icons/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="icons/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="icons/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="icons/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="icons/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="icons/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="icons/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="icons/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="icons/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icons/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="icons/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icons/favicons/favicon-16x16.png">
    <link rel="manifest" href="icons/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="icons/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- замена картинок <?php bloginfo('template_url'); ?>/assets/img/ -->

    <?php wp_head(); ?>
    
</head>
<body>
    <header>
        <div class="mobile-h-wrapper">
            <div class="header">
                <a class="header__logo" href="home">
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
                <a class="t11r header__cart-hidden" href="cart">корзина</a>
            </div>
            <a class="t11r header__cart" href="cart">корзина</a>
        </div>
    </header>