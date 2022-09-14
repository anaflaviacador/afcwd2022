<?php


// ========================================//
// MINHA CONTA - NAV
// ========================================// 
// customiza os nomes dos menus da conta do usuario
function afcwoo_menu_cliente() {

    $myorder = array(
        'dashboard'          => __( 'Início', 'woocommerce' ),
        'orders'             => __( 'Pedidos', 'woocommerce' ),   
        'downloads'          => __( 'Downloads', 'woocommerce' ),     
        'edit-account'       => __( 'Dados', 'woocommerce' ),
        // 'subscriptions'      => __( 'Plano', 'woocommerce' ),
    );
    return $myorder;

}
add_filter ( 'woocommerce_account_menu_items', 'afcwoo_menu_cliente' );

// classes custom para nav de cliente
function afc_nav_cliente_classes( $endpoint ) {
	global $wp;

	$classes = array();

	// Set current item class.
	$current = isset( $wp->query_vars[ $endpoint ] );
	if ( 'dashboard' === $endpoint && ( isset( $wp->query_vars['page'] ) || empty( $wp->query_vars ) ) ) {
		$current = true; // Dashboard is not an endpoint, so needs a custom check.
	} elseif ( 'orders' === $endpoint && isset( $wp->query_vars['view-order'] ) ) {
		$current = true; // When looking at individual order, highlight Orders list item (to signify where in the menu the user currently is).
	} elseif ( 'payment-methods' === $endpoint && isset( $wp->query_vars['add-payment-method'] ) ) {
		$current = true;
	}

	if ( $current ) {
		$classes[] = 'ativo';
	}

	$classes = apply_filters( 'woocommerce_account_menu_item_classes', $classes, $endpoint );

	return implode( ' ', array_map( 'sanitize_html_class', $classes ) );
}


// ========================================//
// DETECTA SE HA ASSINATURA
// ========================================// 
if (class_exists('WC_Subscription')) {
    function has_active_subscription( $user_id='' ) {
        // When a $user_id is not specified, get the current user Id
        if( '' == $user_id && is_user_logged_in() ) 
            $user_id = get_current_user_id();

        // User not logged in we return false
        if( $user_id == 0 ) 
            return false;

        return wcs_user_has_subscription( $user_id, '', 'active' );
    }
}
