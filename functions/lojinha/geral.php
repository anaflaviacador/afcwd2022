<?php
// ========================================//
// TINY
// ========================================// 
// evita conflitos de otimizacao de imagem do plugin TinyPNG
if(class_exists('Tiny_Compress')) add_filter( 'woocommerce_background_image_regeneration', '__return_false' );


// ========================================//
// COOKIES
// ========================================// 
add_filter('wc_session_expiring', 'filter_ExtendSessionExpiring' );
add_filter('wc_session_expiration' , 'filter_ExtendSessionExpired' );
function filter_ExtendSessionExpiring($seconds) { return 60 * 60 * 71; }
function filter_ExtendSessionExpired($seconds) { return 60 * 60 * 72; }

// limpa carrinho
add_action( 'init', 'woocommerce_clear_cart_url' );
function woocommerce_clear_cart_url() {
	if ( isset( $_GET['limpar-carrinho'] ) ) {
        WC()->cart->empty_cart();
	}
}

// ========================================//
// GERAL
// ========================================// 
// remover sugestoes de marketplace
add_filter('woocommerce_allow_marketplace_suggestions', '__return_false');

// remove menu de marketing no painel
add_filter( 'woocommerce_marketing_menu_items', '__return_empty_array' );
add_filter( 'woocommerce_admin_features', 'afc_desabilita_mkt_tab' );
function afc_desabilita_mkt_tab( $features ) {
    $marketing = array_search('marketing', $features);
    unset( $features[$marketing] );
    return $features;
}

// desabilita area de admin bar
add_filter( 'woocommerce_admin_disabled', '__return_true' );

// remove mensagem de conectar no WooCommerce.com
add_filter( 'woocommerce_helper_suppress_admin_notices', '__return_true' );

// Disable Ajax Call from WooCommerce
add_action( 'wp_enqueue_scripts', 'dequeue_woocommerce_cart_fragments', 11); 
function dequeue_woocommerce_cart_fragments() { wp_dequeue_script('wc-cart-fragments'); }

// remover ordem de mostra de produtos em dropdown
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

// remove quantidade de resultados
remove_action( 'woocommerce_after_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );


// remove avaliacoes
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );

// remover width e height attributos de thumbnails
add_filter( 'post_thumbnail_html', 'afc_removedimensoes_thumbnail', 10, 3 );
function afc_removedimensoes_thumbnail( $html, $post_id, $post_image_id ) {
	$html = preg_replace( '/(width|height)=\"\d*\"\s/', '', $html );
	return $html;
}

// retirando titulo da loja principal (home)
add_filter( 'woocommerce_show_page_title', '__return_false' );


// remove label de promocao
add_filter('woocommerce_sale_flash', 'afc_remove_selo_promo');
function afc_remove_selo_promo() { return false; }

// remove bt de comprar novamente
remove_action( 'woocommerce_order_details_after_order_table', 'woocommerce_order_again_button' );


// ========================================//
// REDIRECIONAMENTO DIRETO AO CHECKOUT
// ========================================// 
// add_filter('add_to_cart_redirect', 'afc_cart_redirect');
function afc_cart_redirect() {
    global $woocommerce;
    $redirect_checkout = $woocommerce->cart->get_checkout_url();
    return $redirect_checkout;
}


// ========================================//
// RETIRA EXCESSO DE CHAMADAS NAS PÁGINAS QUE NAO SAO DE LOJA
// ========================================// 
add_action( 'wp_enqueue_scripts', 'child_manage_woocommerce_styles', 99 );
function child_manage_woocommerce_styles() {
    //remove generator meta tag
    remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );
  
    //first check that woo exists to prevent fatal errors
    if ( function_exists( 'is_woocommerce' ) ) {
        //dequeue scripts and styles
        // wp_dequeue_style('woocommerce-layout');

        if ( !is_woocommerce() && !is_cart() && !is_checkout() && !is_account_page() && !is_product() && !is_product_category() && !is_shop() ) {
            wp_dequeue_style('woocommerce-general');    
            wp_dequeue_style('woocommerce-smallscreen');
            wp_dequeue_style('woocommerce_frontend_styles');
            wp_dequeue_style('woocommerce_fancybox_styles');
            wp_dequeue_style('woocommerce_chosen_styles');
            wp_dequeue_style('woocommerce_prettyPhoto_css');
            wp_dequeue_style('wc-block-style');
            wp_dequeue_script('wc_price_slider');
            wp_dequeue_script('wc-single-product');
            wp_dequeue_script('wc-add-to-cart');
            wp_dequeue_script('wc-checkout');
            wp_dequeue_script('wc-add-to-cart-variation');
            wp_dequeue_script('wc-single-product');
            wp_dequeue_script('wc-cart');
            wp_dequeue_script('wc-cart-fragments');
            wp_dequeue_script('wc-chosen');
            wp_dequeue_script('woocommerce');
            wp_dequeue_script('prettyPhoto');
            wp_dequeue_script('prettyPhoto-init');
            wp_dequeue_script('jquery-blockui');
            wp_dequeue_script('jquery-placeholder');
            wp_dequeue_script('fancybox');
            wp_dequeue_script('jqueryui');
        }
    }
}

// ========================================//
// RETIRA WIDGETS WOO
// ========================================// 
add_action('widgets_init', 'afc_disable_woocommerce_widgets', 99);
function afc_disable_woocommerce_widgets() {
    unregister_widget('WC_Widget_Products');
    unregister_widget('WC_Widget_Product_Categories');
    unregister_widget('WC_Widget_Product_Tag_Cloud');
    unregister_widget('WC_Widget_Cart');
    unregister_widget('WC_Widget_Layered_Nav');
    unregister_widget('WC_Widget_Layered_Nav_Filters');
    unregister_widget('WC_Widget_Price_Filter');
    unregister_widget('WC_Widget_Product_Search');
    unregister_widget('WC_Widget_Recently_Viewed');
    unregister_widget('WC_Widget_Recent_Reviews');
    unregister_widget('WC_Widget_Top_Rated_Products');
    unregister_widget('WC_Widget_Rating_Filter');
}


// ========================================//
// MULTIPLOS PRODUTOS
// ========================================// 
function woocommerce_maybe_add_multiple_products_to_cart() {
    // Make sure WC is installed, and add-to-cart qauery arg exists, and contains at least one comma.
    if ( ! class_exists( 'WC_Form_Handler' ) || empty( $_REQUEST['add-to-cart'] ) || false === strpos( $_REQUEST['add-to-cart'], ',' ) ) {
        return;
    }

    // Remove WooCommerce's hook, as it's useless (doesn't handle multiple products).
    remove_action( 'wp_loaded', array( 'WC_Form_Handler', 'add_to_cart_action' ), 20 );

    $product_ids = explode( ',', $_REQUEST['add-to-cart'] );
    $count       = count( $product_ids );
    $number      = 0;

    foreach ( $product_ids as $product_id ) {
        if ( ++$number === $count ) {
            // Ok, final item, let's send it back to woocommerce's add_to_cart_action method for handling.
            $_REQUEST['add-to-cart'] = $product_id;

            return WC_Form_Handler::add_to_cart_action();
        }

        $product_id        = apply_filters( 'woocommerce_add_to_cart_product_id', absint( $product_id ) );
        $was_added_to_cart = false;

        $adding_to_cart    = wc_get_product( $product_id );

        if ( ! $adding_to_cart ) {
            continue;
        }

        // only works for simple atm
        if ( $adding_to_cart->is_type( 'simple' ) ) {

            // quantity applies to all products atm
            $quantity          = empty( $_REQUEST['quantity'] ) ? 1 : wc_stock_amount( $_REQUEST['quantity'] );
            $passed_validation = apply_filters( 'woocommerce_add_to_cart_validation', true, $product_id, $quantity );

            if ( $passed_validation && false !== WC()->cart->add_to_cart( $product_id, $quantity ) ) {
                wc_add_to_cart_message( array( $product_id => $quantity ), true );
            }

        }
    }
}
add_action( 'wp_loaded', 'woocommerce_maybe_add_multiple_products_to_cart', 15 );
