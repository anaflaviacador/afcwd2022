<?php

// ========================================//
// LOOP DE PRODUTOS
// ========================================// 
remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );


// ========================================//
// PRODUTO
// ========================================// 
// retirar produtos relacionados
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

// limpa tudo no geral da pag
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50);
add_filter( 'woocommerce_product_description_heading', '__return_null' );
add_filter( 'woocommerce_product_additional_information_heading', '__return_null' );

add_action( 'woocommerce_single_product_summary', 'custom_button_after_product_summary', 15 );
function custom_button_after_product_summary() {
    global $product;
    $ativa_LP = get_field('ativar_lp', $product->id);
    $demo_principal = get_field('demo_principal');
    $desc_addon = get_field('descricao_extensao');
    $resumo = get_the_excerpt();

    $bt_text = 'comprar';
    if ( has_term( 'servicos-extras', 'product_cat', $product->id ) ) $bt_text = 'contratar';
    elseif ( has_term( 'planos', 'product_cat', $product->id ) ) $bt_text = 'assinar';

    $addcarrinho = '<a class="button mini bege" href="'.$product->add_to_cart_url().'">'.$bt_text.'</a>';


    if($ativa_LP == false) {
        echo '<p style="margin-top:1em">';
            if($demo_principal) echo '<a class="button mini" href="'.$demo_principal['url'].'" target="_blank" title="'.$demo_principal['title'].'">ver em ação</a>&nbsp;&nbsp;';

            if($desc_addon) {
                if(strlen($desc_addon) >= 1000) echo $addcarrinho;
            } else {
                if(strlen($resumo) >= 1000) echo $addcarrinho;
            }

            
        echo '</p>';
    }
}

// remove area das tabs
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);



// preços "a partir de"
add_filter( 'woocommerce_format_price_range', 'afc_custom_range_price', 10, 3 );
function afc_custom_range_price( $price, $from, $to ) {
    return sprintf( 'A partir de %s', wc_price( $from ) );
}

// texto sobre estoque
add_filter( 'woocommerce_get_availability', 'custom_get_availability', 1, 2);
function custom_get_availability( $availability, $_product ) {
    if ($_product->managing_stock() && $_product->is_in_stock() ) $availability['availability'] = __('Serviço disponível por tempo limitado.');

    if ($_product->managing_stock() && !$_product->is_in_stock() ) $availability['availability'] = __('Serviço esgotado. Já já estará de volta!');
    
    return $availability;
}

// bt comprar customizado
add_filter('woocommerce_product_single_add_to_cart_text','afc_custom_add_cart');
function afc_custom_add_cart(){
    global $product;
    $lp = get_field('ativar_lp',$product->ID);
    $nome = get_field('nome_produto',$product->ID);

    if($lp && $nome) {
        return 'Comprar '.$nome.'!';
    } else {

        if ( has_term( 'servicos-extras', 'product_cat', $product->id ) ) return 'Contratar';

        elseif ( has_term( 'planos', 'product_cat', $product->id ) ) return 'Assinar plano';

        return 'Comprar';

        
    }
}