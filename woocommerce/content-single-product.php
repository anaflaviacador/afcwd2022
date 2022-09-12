<?php defined( 'ABSPATH' ) || exit;
global $product;

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}

$ativa_LP = get_field('ativar_lp');
if($ativa_LP == true) {

$urlHome = esc_url(home_url('/'));
$urlTema = get_template_directory_uri();

// ========================================//
// LANDING PAGE
// ========================================// 
$demo_principal = get_field('demo_principal');
$demo_exemplos = get_field('demo_exemplos');
$nomeproduto = get_field('nome_produto');

// notificacoes
do_action( 'woocommerce_before_single_product' );

// layout
get_template_part('parts/produto/intro');
get_template_part('parts/produto/beneficios');
get_template_part('parts/produto/email-mkt');
get_template_part('parts/produto/video-tour');
get_template_part('parts/produto/ao-vivo');
get_template_part('parts/produto/area-comprar');
get_template_part('parts/produto/faq');
afc_depoimentos(7,'');


// ========================================//
// PAG PADRAO DE PRODUTO
// ========================================// 	
} else {
	do_action( 'woocommerce_before_single_product' );
	echo '<div id="product-'.get_the_ID().'"'; wc_product_class( '', $product ); echo '>';
		do_action( 'woocommerce_before_single_product_summary' );
		echo '<div class="summary entry-summary">';
			add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
			add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
			do_action( 'woocommerce_single_product_summary' );
		echo '</div>';
		do_action( 'woocommerce_after_single_product_summary' );
	echo '</div>'; 
	do_action( 'woocommerce_after_single_product' );

	echo '<div class="clear"></div>';
}