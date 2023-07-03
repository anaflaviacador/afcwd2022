<?php
// ========================================//
// CARRINHO
// ========================================// 
// tirar mensagem de carrinho
add_filter( 'wc_add_to_cart_message_html', '__return_null' );

// retira campo de endereço e restante de campos desnecessarios para compra de item digital
function custom_override_checkout_fields_ek( $fields ) {
    // credito: https://rudrastyh.com/woocommerce/reorder-checkout-fields.html

    ///////// CHECKOUT COMPLETO - ENDERECO _ CPF E CNPJ
    // $fields['billing']['billing_neighborhood']['required'] = true;

    // $fields['billing']['billing_email']['priority'] = 21;
    // $fields['billing']['billing_email']['class'] = array( 'afc-form-row-wide clear' );

    // $fields['billing']['billing_company']['label'] = 'Razão social da empresa <abbr class="required" title="obrigatório">*</abbr>';


    // if(is_user_logged_in()) {
    //     $fields['billing']['billing_email']['label'] = 'E-mail para recebimento dos arquivos';
    // } else {
    //     $fields['billing']['billing_email']['label'] = 'E-mail para conta e recebimento';
    // }

    // $fields['billing']['billing_address_1']['class'] = array( 'afc-form-row-first' );
    // $fields['billing']['billing_number']['class'] = array( 'afc-form-row-last' );
    // $fields['billing']['billing_persontype']['class'] = array( 'afc-form-row-first' );
    // $fields['billing']['billing_cpf']['class'] = array( 'afc-form-row-last' );

    // $fields['billing']['billing_neighborhood']['class'] = array( 'afc-form-row-wide clear' );

    // $fields['billing']['billing_number']['placeholder'] = 'Insira SN se não houver';


    ///////// CHECKOUT OTIMIZADO
    unset($fields['billing']['billing_neighborhood']);
    unset($fields['billing']['billing_number']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_state']);

    $fields['billing']['billing_email']['priority'] = 21;
    $fields['billing']['billing_email']['class'] = array( 'afc-form-row-wide clear' );

    $fields['billing']['billing_company']['label'] = 'Razão social da empresa';
    $fields['billing']['billing_phone']['label'] = 'Whatsapp';


    if(is_user_logged_in()) {
        $fields['billing']['billing_email']['label'] = 'E-mail para recebimento dos arquivos';
    } else {
        $fields['billing']['billing_email']['label'] = 'E-mail para conta e recebimento';
    }


    $fields['billing']['billing_persontype']['class'] = array( 'form-row-first' );
    $fields['billing']['billing_cpf']['class'] = array( 'form-row-last' );
    $fields['billing']['billing_company']['class'] = array( 'form-row-last' );


    return $fields;
}
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields_ek' );


add_action( 'woocommerce_form_field_tel','afc_checkout_field_alerta_tel', 10, 2 );
function afc_checkout_field_alerta_tel( $field, $key ){
    if ( is_checkout() && ( $key == 'billing_phone') ) {
        // $field .= '<p class="form-row form-row-wide" style="font-size: 12px; width: 100%; margin: -7px 0 11px 0 !important; float: left; line-height: 1.5; clear: both;"><span class="cor-negacao">Alerta:</span> caso selecione cartão de crédito, por gentileza, informe o contato que está associado à fatura do cartão utilizado, evitando possíveis bloqueios de pagamento pelo sistema anti-fraude.</p>';
        $field .= '<p class="form-row form-row-wide" style="font-size: 12px; width: 100%; margin: -7px 0 11px 0 !important; float: left; line-height: 1.5; clear: both;">O whatsapp é o canal de contato oficial do site, facilitando a comunicação do suporte e identificação de sua compra.</p>';
    }
    return $field;
}



add_action( 'woocommerce_form_field_email','afc_checkout_field_alerta_email', 10, 2 );
function afc_checkout_field_alerta_email( $field, $key ){
    if ( is_checkout() && ( $key == 'billing_email') && !is_user_logged_in() ) {
        $field .= '<p class="form-row form-row-wide" style="font-size: 12px; width: 100%; margin: -7px 0 11px 0 !important; float: left; line-height: 1.5; clear: both;"><span class="cor-negacao">Obs:</span> Utilize um e-mail que você tenha acesso, pois será por ele que você receberá informações de pedido, arquivos para download, nota fiscal e acesso a área de clientes do site.</p>';
    }
    return $field;
}
    

// mensagens de aviso sobre o nao parcelamento para planos recorrentes, descontos e parcelamentos
add_action( 'woocommerce_review_order_before_payment', 'afc_mensagem_acima_pagamentos' );
function afc_mensagem_acima_pagamentos() {  
    echo '<h3>Meio de pagamento</h3>';
    // echo '<p class="mb-10px texto-menor">';
    //     echo 'Mora fora do Brasil? Aceitamos seu pagamento por conta Paypal. É só ter um cartão de crédito apto a transações internacionais em sua conta (pagamento em moeda BRL).';
    // echo '</p>';
}


// remove titulo de nota adicional
add_filter( 'woocommerce_enable_order_notes_field', '__return_false', 9999 );

// removendo possiveis itens do lado do checkout de fechar compra
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );

// imagens de formas de pagamentos
add_filter( 'woocommerce_available_payment_gateways', 'afc_logos_pgto' );
function afc_logos_pgto( $gateways ) {
    if ( isset( $gateways['paghiper_pix'] ) ) $gateways['paghiper_pix']->icon = get_stylesheet_directory_uri() . '/assets/images/logo-pix-gateway.svg';
    if ( isset( $gateways['woocommerce_openpix_pix'] ) ) $gateways['woocommerce_openpix_pix']->icon = get_stylesheet_directory_uri() . '/assets/images/logo-pix-gateway.svg';

    return $gateways;
}

add_filter( 'woocommerce_paypal_icon', 'afc_logos_pgto_pp' ); 
function afc_logos_pgto_pp() { return get_stylesheet_directory_uri() . '/assets/images/logo-paypal-gateway.svg'; }

if (class_exists('WC_Gateway_Stripe')) {
    add_filter( 'wc_stripe_payment_icons', 'afc_logos_pgto_stripe' );
    function afc_logos_pgto_stripe( $icons ) {
        // var_dump( $icons ); // to show all possible icons to change.
        $icons['visa'] = '';
        $icons['amex'] = ''; $icons['mastercard'] = ''; $icons['discover'] = ''; $icons['diners'] = ''; $icons['jcb'] = ''; $icons['alipay'] = ''; $icons['wechat'] = ''; $icons['bancontact'] = ''; $icons['ideal'] = ''; $icons['p24'] = ''; $icons['giropay'] = ''; $icons['eps'] = ''; $icons['multibanco'] = ''; $icons['sofort'] = ''; $icons['sepa'] = '';

        return $icons;
    }    
}


// botao de pagamento
add_filter( 'woocommerce_order_button_html', 'afc_botao_pagar' );
function afc_botao_pagar( $button_html ) {

    $order_button_text = 'Finalizar pagamento';
    $button_html = '<p style="width:100%; margin-top:2em; font-size:1.2em"><button type="submit" class="botao afirmacao grande fullwidth" name="woocommerce_checkout_place_order" style="float:none;display:inline-block" id="place_order" value="' . esc_attr( $order_button_text ) . '" data-value="' . esc_attr( $order_button_text ) . '">' . esc_html( $order_button_text ) . '</button></p>';

    return $button_html;
}

// move cupom de lugar
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );


// ========================================//
// ALEGACAO DE NAO REVENDA FORA DO SITE - qdo eh produto digital
// nao visivel para categorias de planos de manutencao
// ========================================// 
add_action( 'woocommerce_review_order_before_submit', 'afcwoo_inserir_politica', 9 );
function afcwoo_inserir_politica() {

    $cat_check = false;
    foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
        $product = $cart_item['data'];
        
        if ( has_term( array('temas','addons'), 'product_cat', $product->get_id() ) ) {
            $cat_check = true;

                woocommerce_form_field( 'aceite_extra', array(
                    'type' => 'checkbox',
                    'class' => array('form-row privacy aceite-extra'),
                    'label_class' => array('woocommerce-form__label woocommerce-form__label-for-checkbox checkbox'),
                    'input_class' => array('woocommerce-form__input woocommerce-form__input-checkbox input-checkbox'),
                    'required' => true,
                    'label' => '<label style="line-height: initial; display: initial;">Tenho ciência que minha <span data-tooltip="Licença vitalícia para uso em domínios ilimitados de mesma titularidade + 1 ano de atualizações grátis"><u>licença é instransferível</u></span> e que não posso reproduzir ou distribuir este(s) produto(s) para terceiros.</label>',
                    )
                );

                woocommerce_form_field( 'aceite_extra2', array(
                    'type' => 'checkbox',
                    'class' => array('form-row privacy aceite-extra'),
                    'label_class' => array('woocommerce-form__label woocommerce-form__label-for-checkbox checkbox'),
                    'input_class' => array('woocommerce-form__input woocommerce-form__input-checkbox input-checkbox'),
                    'required' => true,
                    'label' => '<label style="line-height: initial; display: initial;">Entendo a <span data-tooltip="Entrega instantânea, considerada de consumo imediato após download."><u>natureza de consumo</u></span> do(s) produto(s) que estou adquirindo e que não tenho direito a <span data-tooltip="O reembolso é possível APENAS se não houver download do produto."><u>reembolso por arrependimento</u></span>.</label>',
                    )
                );

            break;
        }
    }
}

add_action( 'woocommerce_checkout_process', 'afcwoo_politica_nao_selecionada' );
function afcwoo_politica_nao_selecionada() {
    $cat_check = false;
    foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
        $product = $cart_item['data'];
        
        if ( has_term( array('temas','addons'), 'product_cat', $product->get_id() ) ) {
            $cat_check = true;

            if ( ! (int) isset( $_POST['aceite_extra'] ) ) wc_add_notice( __( 'Você precisa alegar que está ciente que sua licença é intransferível e que <strong>não pode reproduzir ou distribuir os produtos do studio</strong> para outras pessoas.' ), 'error' );
            if ( ! (int) isset( $_POST['aceite_extra2'] ) ) wc_add_notice( __( 'Você precisa alegar que está ciente de que <strong>os produtos do studio não entram na categoria da Lei do Arrependimento!</strong>' ), 'error' );
        }
    }
}
     


// ========================================//
// PEDIDO FINALIZADO
// ========================================// 
// agradecimento
add_filter( 'woocommerce_thankyou_order_received_text', 'misha_thank_you_title', 20, 2 );
function misha_thank_you_title( $thank_you_title, $order ){
    $conta = wc_get_page_permalink('myaccount');
    $pedidos = wc_get_account_endpoint_url( 'orders' );
    $downloads = wc_get_account_endpoint_url( 'downloads' );
    return '<strong>Pedido recebido com sucesso! Obrigada, '.$order->get_billing_first_name().'!</strong><br>Acesse seu histórico de pedidos para mais detalhes.<br><a href="'.esc_url($pedidos).'" class="button alt mini" style="margin-top:4px">pedidos</a> &nbsp; <a href="'.esc_url($downloads).'" class="button alt mini" style="margin-top:4px">downloads</a>';
}

// organizacao de colunas de download
function filter_woocommerce_account_downloads_columns( $columns ) {
    $columns['download-product'] = __( 'Produto digital liberado', 'woocommerce');
    // $columns['download-remaining'] = __( 'Nº downloads', 'woocommerce');
    $columns['download-expires'] = __( 'Licença (updates)', 'woocommerce');
    $columns['download-file'] = __( 'Arquivo', 'woocommerce');

    unset($columns['download-remaining']);
    return $columns;
}
add_filter( 'woocommerce_account_downloads_columns', 'filter_woocommerce_account_downloads_columns', 10, 1 );


// mostrar / esconder meios de pgto dependendo do pedido - feito manualmente via painel
add_filter( 'woocommerce_available_payment_gateways', 'conditionally_hide_payment_gateways', 100, 1 );
function conditionally_hide_payment_gateways( $available_gateways ) {
    
    if( is_wc_endpoint_url( 'order-pay' ) ) {
        $order = wc_get_order( get_query_var('order-pay') ); // pedido
        $items = $order->get_items(); // get items do pedido
        $total = $order->get_total();
        $tags = [ ]; // registra array

        // captura tags dos produtos no pedido
        foreach ( $items as $item ) {
            $product_id = $item->get_product_id();
            $terms = get_the_terms( $product_id, 'product_tag' );
            if ( ! empty( $terms ) ) {
                foreach ( $terms as $term ) {
                    $tags[] = $term->slug;
                }
            }
        }

        // revisa o loop do pedido 'pending', 'on-hold', 'processing' etc
        foreach( $available_gateways as $gateways_id => $gateways ){

            // definicoes apenas quando está no status aguardando pagamento
            if($order->has_status('pending')) {
                // mostra apenas stripe para assinaturas
                if(in_array('assinaturas', $tags ) && $gateways_id !== 'stripe_cc' ) unset($available_gateways[$gateways_id]);

                // retira stripe para servicos gerais para cliente da loja
                if(in_array('geral-loja', $tags ) && $gateways_id === 'stripe_cc' ) unset($available_gateways[$gateways_id]);
            }
        }
    }

    return $available_gateways;
}
