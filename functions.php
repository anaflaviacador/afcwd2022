<?php
// ========================================//
// VARIAVEIS GLOBAIS
// ========================================// 
$afcwd_colors = array(
    array("nome" => "negacao", "hex" => "#BA5040"),
    array("nome" => "afirmacao", "hex" => "#A7AF66"),
    array("nome" => "grafite", "hex" => "#333"),
    array("nome" => "cinza", "hex" => "#999"),
    array("nome" => "cinza-medio", "hex" => "#ddd"),
    array("nome" => "cinza-claro", "hex" => "#f5f5f5"),
    array("nome" => "texto", "hex" => "#444"),
    array("nome" => "branco", "hex" => "#fff"),
    array("nome" => "rosa", "hex" => "#d19389"),
    array("nome" => "rosa-medio", "hex" => "#EBB7AF"),
    array("nome" => "rosa-claro", "hex" => "#FBF6F6"),
    array("nome" => "negacao", "hex" => "#BA5040"),
    array("nome" => "roxo", "hex" => "#a297b3"),
    array("nome" => "roxo-medio", "hex" => "#D1C8E2"),
    array("nome" => "roxo-claro", "hex" => "#F7F5FA"),
    array("nome" => "roxo-escuro", "hex" => "#564b66"),
    array("nome" => "verde", "hex" => "#9e9a6f"),
    array("nome" => "verde-medio", "hex" => "#DDDABD"),
    array("nome" => "verde-claro", "hex" => "#F8F8F4"),
    array("nome" => "bege", "hex" => "#D1A680"),
    array("nome" => "bege-medio", "hex" => "#F6DAC1"),
    array("nome" => "bege-claro", "hex" => "#FDF9F6"),
    array("nome" => "azul", "hex" => "#8AA8C4"),
    array("nome" => "azul-medio", "hex" => "#CBD9E5"),
    array("nome" => "azul-claro", "hex" => "#F7F9FB"),
    array("nome" => "azul-escuro", "hex" => "#4e759a")
);

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

    // gutenberg
    add_theme_support( 'editor-styles' );
    add_theme_support( 'responsive-embeds' );

    add_theme_support('editor-font-sizes', array());
    add_theme_support('disable-custom-colors');
    add_theme_support('disable-custom-gradients');   

    add_theme_support('editor-gradient-presets', array() );


    // cores do tema
    global $afcwd_colors;
    
    // array para adicionar ao editor
    $args_cores_editor = []; 

    // criando array de estrutura das cores do gutenberg via declarações do $afcwd_colors
    for ($i=0; $i < count($afcwd_colors); $i++) { 
        array_push($args_cores_editor, array(
            'name'  => $afcwd_colors[$i]['nome'],
            'slug'  => $afcwd_colors[$i]['nome'],
            'color' => $afcwd_colors[$i]['hex']
        ));
    }

    // aplicando a estrutura criada acima
    add_theme_support('editor-color-palette', $args_cores_editor);

    // remove padroes de blocos
    remove_theme_support('core-block-patterns');
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
include_once(get_template_directory().'/functions/login-painel.php' );

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
    // return home_url( '/minha-conta/redefinir-senha/?redirect_to=' . $redirect );
    return home_url( '/minha-conta/redefinir-senha/' );
}

// ========================================//
// WPROCKET
// ========================================//
if(defined('WP_ROCKET_FILE')){
    add_filter( 'pre_get_rocket_option_emoji', function($value){ return 0; } );
}


// ========================================//
// REDIRECIONA WPFORM PARA WHATSAPP
// pega campo de texto e coloca no link do whats
// ========================================//
/**
 * Redirect URL.
 *
 * @link https://wpforms.com/developers/wpforms_process_redirect_url/
 *
 * @param string     $url       URL to redirect to.
 * @param int        $form_id   The form ID.
 * @param array      $form_data Processed form settings/data.
 * @param array      $fields    Sanitized fields data.
 * @param int        $entry_id  Entry id.
 *
 * @return string
 */
$wpp_num = get_field('whatsapp_numero','option');
$wpp_bt = get_field('whatsapp_bt','option');
$wpp_form = get_field('whatsapp_wpforms','option');

if($wpp_num && $wpp_bt && $wpp_form) {
    function wpf_dev_process_redirect_url( $url, $form_id, $fields, $form_data, $entry_id ) {
        // Only run on my form with ID
        if ( absint( $form_data[ 'id' ] ) !== $wpp_form ) {
            return $fields;
        }

        $url = 'https://wa.me/5562996269941?text='.$fields[5][ 'value' ];

        return $url;
    }
    add_filter( 'wpforms_process_redirect_url', 'wpf_dev_process_redirect_url', 10, 5 );
}