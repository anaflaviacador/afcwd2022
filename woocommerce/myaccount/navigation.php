<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
do_action( 'woocommerce_before_account_navigation' );

$user = wp_get_current_user(); 
$clienteloja = array('customer');
$clientevip = array('cliente_vip','administrator');
$username = $user->user_login;
$usermail = $user->user_email;
$userid = $user->ID;

$urlsite = get_bloginfo('url');


echo '<nav class="afc-cliente-menu"><div class="container'.(array_intersect($clienteloja, $user->roles ) ? '-medio' : '').'">';
	echo '<ul class="afc-cliente-menu-ul overflowy">';

		foreach ( wc_get_account_menu_items() as $endpoint => $label ) {
			$ico = '<i class="fa-light fa-gauge"></i>';
			if($endpoint == 'orders') $ico = '<i class="fa-light fa-cart-circle-check"></i>';
			if($endpoint == 'downloads') $ico = '<i class="fa-light fa-cloud-arrow-down"></i>';
			if($endpoint == 'edit-account') $ico = '<i class="fa-light fa-user-pen"></i>';

			echo '<li class="afc-cliente-menu-li">';
				echo '<a class="afc-cliente-menu-link" href="'.esc_url( wc_get_account_endpoint_url( $endpoint ) ).'"><span class="afc-menu-cliente-ico '.(is_account_page() ? afc_nav_cliente_classes($endpoint) : '').'">'.$ico.'</span> <span class="afc-menu-cliente-txt '.(is_account_page() ? afc_nav_cliente_classes($endpoint) : '').'">'.esc_html( $label ).'</span></a>';
			echo '</li>';
		}


		if (class_exists('WC_Subscription')) {
			if (has_active_subscription()) {
				echo '<li class="afc-cliente-menu-li">';
					echo '<a class="afc-cliente-menu-link" href="'.esc_url( wc_get_account_endpoint_url( 'subscriptions' ) ).'"><span class="afc-menu-cliente-ico"><i class="fa-light fa-arrows-rotate"></i></span> <span class="afc-menu-cliente-txt">Plano</span></a>';
				echo '</li>';
			}
		}

		if( array_intersect($clientevip, $user->roles )) {
			
	    	// echo '<li class="afc-cliente-menu-li">';
			// 	echo '<a class="afc-cliente-menu-link" href="'.$urlsite.'/minha-conta/briefing"><span class="afc-menu-cliente-ico '.(is_page('briefing')?' ativo':'').'"><i class="fa-light fa-file-heart"></i></span> <span class="afc-menu-cliente-txt '.(is_page('briefing')?' ativo':'').'">Briefing</span></a>';
			// echo '</li>';
			
			echo '<li class="afc-cliente-menu-li">';
				echo '<a class="afc-cliente-menu-link" href="'.$urlsite.'/minha-conta/bonus"><span class="afc-menu-cliente-ico '.(is_page('bonus')?' ativo':'').'"><i class="fa-light fa-box-archive"></i></span> <span class="afc-menu-cliente-txt '.(is_page('bonus')?' ativo':'').'">Acervo Plugins Premium</span></a>';
			echo '</li>';

		}
		if (class_exists( 'Affiliate_WP' )) {
			$status_afiliado = affwp_get_affiliate_status( affwp_get_affiliate_id() );

			if ( 'active' == $status_afiliado ) {
				$painelAfiliado = get_home_url() . '/minha-conta/afiliacao';
				$chamada_afiliado = 'Afiliação';
				echo '<li class="afc-cliente-menu-li">';
					echo '<a class="afc-cliente-menu-link" href="'.get_home_url() . '/minha-conta/afiliacao'.'"><span class="afc-menu-cliente-ico'.(is_page('afiliacao')?' ativo':'').'"><i class="fa-light fa-badge-percent"></i></span> <span class="afc-menu-cliente-txt'.(is_page('afiliacao')?' ativo':'').'">Minha afiliação</span></a>';
				echo '</li>';
			}

			if ( 'active' !== $status_afiliado && 'pending' !== $status_afiliado && 'inactive' !== $status_afiliado && 'rejected' !== $status_afiliado ) {
				echo '<li class="afc-cliente-menu-li">';
					echo '<a class="afc-cliente-menu-link" target="_blank" href="https://api.whatsapp.com/send?phone=5562996269941&text=Oi%20Ana!%20Gostaria%20de%20ser%20afiliada.%20Meu%20usuário%20é%20*'.$username.'*,%20email%20*'.$usermail.'*"><span class="afc-menu-cliente-ico"><i class="fa-light fa-badge-dollar"></i></span> <span class="afc-menu-cliente-txt">Seja afiliada!</span></a>';
				echo '</li>';
			}

		}
		echo '<li class="afc-cliente-menu-li">';
			echo '<a class="afc-cliente-menu-link" href="'.esc_url( wc_logout_url( get_home_url() ) ).'"><span class="afc-menu-cliente-ico"><i class="fa-light fa-arrow-right-from-bracket"></i></span> <span class="afc-menu-cliente-txt">Sair</span></a>';
		echo '</li>';
	echo '</ul>';
echo '</div><div class="afc-cliente-menu-gradiente"></div></nav>';

do_action( 'woocommerce_after_account_navigation' );