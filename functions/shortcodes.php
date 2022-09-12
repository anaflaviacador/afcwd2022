<?php

// ========================================//
// SHORTCODES - LIMPA
// ========================================// 
function afc_shortcode_paragraph_fix($content) {  
    $array = array (
        '<p>[' => '[',
        ']</p>' => ']',
        ']<br />' => ']'
    );

    $content = strtr($content, $array);

    return $content;
}
add_filter('the_content', 'afc_shortcode_paragraph_fix');


// ========================================//
// SHORTCODES
// ========================================// 
////////////////////////////// VIDEOS
function afc_shortcode_vimeo( $atts, $content = null ) {
    return '<div class="video"><iframe src="//player.vimeo.com/video/'.$content.'?color=d19389&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div><p>* Todos os vídeo-tutoriais não possuem som e têm a função de ilustrar e complementar o tutorial escrito.</p>';
}
add_shortcode('vimeo','afc_shortcode_vimeo');

function afc_shortcode_youtube( $atts, $content = null ) {
    return '<div class="video"><iframe src="//www.youtube.com/embed/'.$content.'?rel=0" frameborder="0" allowfullscreen></iframe></div>';
}
add_shortcode('youtube','afc_shortcode_youtube');

function afc_shortcode_videofolio( $atts, $content = null ) {
    return '<video class="videofolio" autoplay loop controls="false"><source src="'.$content.'" type="video/mp4" /></video>';
}
add_shortcode('videofolio','afc_shortcode_videofolio');


/////////////////////////////// ASSINATURA
function afc_shortcode_ass( $atts, $content = null ) {
    ob_start();
        echo '<span class="afc">'; 
            get_template_part('assets/images/afc');
        echo '</span>';
    $output = ob_get_clean();
    return $output;
}
add_shortcode('afc','afc_shortcode_ass');




////////////////////////////// FORMATA
function afc_shortcode_hr($atts, $content = null) {
    return '<hr>';
}
add_shortcode('hr','afc_shortcode_hr');

function afc_shortcode_br($atts, $content = null) {
    return '<br>';
}
add_shortcode('br','afc_shortcode_br');




// ========================================//
// ICONE
// ========================================// 
function afc_shortcode_icone($atts, $content = null) {
    extract(shortcode_atts(array(
        "nome" => '',
        "prefixo" => '',
        "tamanho" => '',
        "cor" => '',
    ), $atts));
    ob_start();

    echo '<i class="'.$prefixo.' fa-'.$nome.'" style="font-size:'.($tamanho ? $tamanho : '1').'em;'.($cor ? 'color: var(--cor-'.$cor.');' : '').'" aria-hidden="true"></i>';

    $output = ob_get_clean();
    return $output;

} add_shortcode('icone','afc_shortcode_icone');




// ========================================//
// SHORTCODE ON FIELDS
// ========================================//     
// codigo acf que permite que funcione o shortcode
if(!function_exists('afc_text_area_shortcode')) {function afc_text_area_shortcode($value, $post_id, $field) {
  if (is_admin()) return $value;
  return do_shortcode($value);
}}
if(class_exists('acf')) {
    add_filter('acf/load_value/type=textarea', 'afc_text_area_shortcode', 10, 3);
    add_filter('acf/format_value/type=text', 'afc_text_area_shortcode', 10, 3);
}


// ========================================//
// PARA BLOG
// ========================================// 
function afc_posts_blog($atts, $content = null) {
    extract(shortcode_atts(array(
        "posts" => '',
    ), $atts));
    ob_start();

    $ids = explode(',',$posts);

    $args = array('post_type' => 'afc_blog', 'post__in' => $ids);
    $relacionados = new WP_Query($args);

    // if ( $relacionados->have_posts() ) { 
    //     if($relacionados->post_count !== 1) echo '<div><h4 class="cursivo">leitura complementar</h4></div>';
    //     echo '<div'.($relacionados->post_count === 1 ? ' style="margin-top: 2em;"' : '').' class="relacionados interno lista-artigos num-'.$relacionados->post_count.'">';
    //     while ( $relacionados->have_posts() ) : $relacionados->the_post(); 
    //         echo '<div class="item-post-grid">';
    //             get_template_part('inc/blog-grid');
    //         echo '</div>';
    //     endwhile;
    //     echo '</div>';
    // } wp_reset_query();

    $output = ob_get_clean();
    return $output;

} add_shortcode('vertb','afc_posts_blog');



// ========================================//
// CURSIVA
// ========================================// 
function afc_shortcode_header_cursive( $atts, $content = null ) {
    extract(shortcode_atts(array(
        "cor" => '',
    ), $atts));
    ob_start();
        echo '<span class="titulo-cursiva cor-'.($cor ? $cor : 'azul').'">'.$content.'</span>';
    $output = ob_get_clean();
    return $output;

} add_shortcode('cursiva','afc_shortcode_header_cursive');


// ========================================//
// HIDE MOBILE
// ========================================// 
function afc_shortcode_hide_mobile( $atts, $content = null ) {
    extract(shortcode_atts(array(
        "tag" => '',
    ), $atts));
    ob_start();
    echo '<'.($tag ? $tag : 'span').' class="hide-mobile">'.$content.'</'.($tag ? $tag : 'span').'>';
    $output = ob_get_clean();
    return $output;

} add_shortcode('hide-mobile','afc_shortcode_hide_mobile');

