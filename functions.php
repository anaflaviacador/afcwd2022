<?php
// ========================================//
// SETUP THEME
// ========================================// 
add_action( 'after_setup_theme', 'afc_setup' );
function afc_setup() {

    // seguranca
    add_filter( 'style_loader_src', 'afc_scripts_remove_versao', 9999 );
    add_filter( 'script_loader_src', 'afc_scripts_remove_versao', 9999 );
    add_filter( 'style_loader_src', 'afc_removequerystring', 10, 2 );
    add_filter( 'script_loader_src', 'afc_removequerystring', 10, 2 );
    add_filter( 'xmlrpc_enabled', '__return_false');

    // limpeza
    remove_action( 'wp_head', 'wp_shortlink_wp_head', 10);
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'wp_generator_tag' );
    remove_action( 'wp_head', 'wp_resource_hints', 2);
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'feed_links', 2 );
    remove_action( 'wp_head', 'feed_links_extra', 3 );
    remove_action( 'wp_head', 'rest_output_link_wp_head');
    remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10);
    remove_action( 'wp_head', 'wlwmanifest_link');
    update_option( 'link_manager_enabled', 0 );
    add_filter( 'xmlrpc_enabled', '__return_false' );


    // layout
    add_action( 'wp_enqueue_scripts', 'afc_load_styles', 999 );
    add_action( 'wp_head', 'afc_load_scripts_head', 999 );
    add_action( 'wp_footer', 'afc_load_scripts_footer', 999 );
    add_filter( 'body_class', 'afc_body_class' );
    add_filter( 'excerpt_more', 'afc_excerpt_more' );
    add_filter( 'excerpt_length', 'afc_excerpt_length', 999 );
    add_filter( 'big_image_size_threshold', '__return_false' );

    // menus
    register_nav_menus( array( 
      'primary' => __( 'Menu Topo'),
      'secondary' => __( 'Menu Rodape'),
    ) );

    // loja
    add_theme_support( 'woocommerce' );
}


// ========================================//
// SEGURANCA
// ========================================// 
// remover versão do wp nos scripts 
function afc_scripts_remove_versao( $src ) {
    if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}

// retirar query strings de scripts e css
function afc_removequerystring( $src ) {
 if( strpos( $src, '?ver=' ) )
 $src = remove_query_arg( 'ver', $src );
 return $src;
}


// ========================================//
// FUNCOES AFC DIVERSAS
// tudo que faz o tema funcionar
// ========================================// 
include_once(get_template_directory().'/functions/admin.php' );
include_once(get_template_directory().'/functions/scripts.php' );
include_once(get_template_directory().'/functions/elementos.php' );
include_once(get_template_directory().'/functions/midias.php' );
include_once(get_template_directory().'/functions/pt_depoimentos.php' );
include_once(get_template_directory().'/functions/pt_blog.php' );
include_once(get_template_directory().'/functions/pt_portfolio.php' );
include_once(get_template_directory().'/functions/pt_faq.php' );
include_once(get_template_directory().'/functions/shortcodes.php' );
include_once(get_template_directory().'/functions/blocks.php' );

// ========================================//
// LOJA
// ========================================// 
if (class_exists('Woocommerce')) {
    include_once(get_template_directory().'/functions/lojinha/geral.php');
    include_once(get_template_directory().'/functions/lojinha/area-cliente.php');
    include_once(get_template_directory().'/functions/lojinha/checkout.php');
    include_once(get_template_directory().'/functions/lojinha/produto.php');
}


// ========================================//
// AFFILIATE WP
// ========================================// 
if (class_exists( 'Affiliate_WP' )) {
  include_once(get_template_directory().'/functions/afiliados/fields-pix.php' );
  include_once(get_template_directory().'/functions/afiliados/fields-cpfcnpj.php' );
}

// ========================================//
// REDEFINIR SENHA
// ========================================// 
add_filter( 'lostpassword_url', 'my_lost_password_page', 10, 2 );
function my_lost_password_page( $lostpassword_url, $redirect ) {
    // https://wpforms.com/how-to-customize-the-wordpress-password-reset-form/
    return home_url( '/minha-conta/redefinir-senha/?redirect_to=' . $redirect );
}