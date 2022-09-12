<?php

// ========================================//
// LOOP DE PRODUTOS
// ========================================// 
// remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
// remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );

add_action( 'woocommerce_after_shop_loop_item_title', 'afcwoo_resumo_produto', 10 );
function afcwoo_resumo_produto() {
    echo '<p class="texto-menor has-text-align-left">'.get_the_excerpt().'</p>';
}

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

add_action( 'woocommerce_single_product_summary', 'custom_button_after_product_summary', 20 );
function custom_button_after_product_summary() {
    global $product;
    $ativa_LP = get_field('ativar_lp', $product->get_id());
    $demo_principal = get_field('demo_principal', $product->get_id());
    $desc_addon = get_field('descricao_extensao', $product->get_id());
    $resumo = get_the_excerpt();

    $bt_text = 'comprar';
    if ( has_term( 'servicos-extras', 'product_cat', $product->get_id() ) ) $bt_text = 'contratar';
    elseif ( has_term( 'planos', 'product_cat', $product->get_id() ) ) $bt_text = 'assinar';

    $addcarrinho = '<a class="botao verde" href="'.$product->add_to_cart_url().'">'.$bt_text.' <i class="bt-seta fa-light fa-cart-plus"></i></a>';


    if($ativa_LP == false) {
        echo '<p style="margin-top:1em">';
            if($demo_principal) echo '<a class="botao bege" href="'.$demo_principal['url'].'" target="_blank" title="'.$demo_principal['title'].'">ver em ação <i class="bt-seta fa-regular fa-arrow-up-right-from-square"></i></a>&nbsp;&nbsp;';

            if($desc_addon) {
                if(strlen($desc_addon) >= 1000) echo $addcarrinho;
            } else {
                if(strlen($resumo) >= 1000) echo $addcarrinho;
            }
        echo '</p>';

        if($desc_addon) {
            echo $desc_addon;
        } else {
            echo $resumo;
        }
    }
}

// remove area das tabs
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);

// bt comprar customizado
add_filter('woocommerce_product_single_add_to_cart_text','afc_custom_add_cart');
function afc_custom_add_cart(){
    global $product;
    $lp = get_field('ativar_lp',$product->get_id());
    $nome = get_field('nome_produto',$product->get_id());

    if($lp && $nome) {
        return 'Comprar '.$nome.'!';
    } else {

        if ( has_term( 'servicos-extras', 'product_cat', $product->get_id() ) ) return 'Contratar';

        elseif ( has_term( 'planos', 'product_cat', $product->get_id() ) ) return 'Assinar plano';

        return 'Comprar';        
    }
}

// remove zeros
add_filter( 'woocommerce_price_trim_zeros', '__return_true' );