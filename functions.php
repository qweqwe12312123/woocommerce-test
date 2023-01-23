<?php 

add_action( 'wp_enqueue_scripts', function () {

    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css' );
    wp_enqueue_style( 'style-theme', get_template_directory_uri() . '/assets/css/slick-theme.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );

    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	
    wp_enqueue_script( 'slick.min', get_template_directory_uri() . '/assets/js/slick.min.js', array(), 'null', true );
    wp_enqueue_script( 'jquery.validate.min', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array(), 'null', true );
    wp_enqueue_script( 'maska-nomera', get_template_directory_uri() . '/assets/js/maska-nomera.js', array(), 'null', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array(), 'null', true );
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

add_filter( 'upload_mimes', 'svg_upload_allow' );
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );
# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
}    

add_filter('woocommerce_variable_price_html', 'my_woocommerce_variable_price_html', 10, 2); 

function my_woocommerce_variable_price_html( $price, $product ) {
	return wc_price($product->get_price()); 
}


function tb_woo_product_price_shortcode( $atts ) {
	
	$atts = shortcode_atts( array(
		'id' => null
	), $atts, 'tb_product_price' );
 
	if ( empty( $atts[ 'id' ] ) ) {
		return '';
	}
 
	$product = wc_get_product( $atts['id'] );
 
	if ( ! $product ) {
		return '';
	}
 
	return $product->get_price_html();
}
add_shortcode( 'tb_product_price', 'tb_woo_product_price_shortcode' );

add_action( 'admin_post_nopriv_remove_item', 'remove_cart_item' );
add_action( 'admin_post_remove_item', 'remove_cart_item' );

function remove_cart_item()
{
  wc_load_cart();

  foreach(WC()->cart->get_cart() as $key => $item) {
        if($item['product_id'] == $_POST['product_id']){
            $result = WC()->cart->remove_cart_item($key);
        }
    }
    
  $url = get_home_url() . '/cart';
  header("Location: $url");
}

?>