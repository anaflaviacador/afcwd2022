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
