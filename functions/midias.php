<?php
// thumbnails
add_theme_support( 'post-thumbnails' ); 
add_image_size( 'afc_blog_thumb', 366, 200, true );

// ========================================//
// THUMBS CHAMADAS
// ========================================//
function afc_thumb($size) {
  // $webp = strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' );
  // $extensao = 'png';
  // if( $webp !== false ) $extensao = 'webp';  

  global $post;
  $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),$size); 
  $url = $thumb['0'];
  return $url;
}


function afc_autothumb($size) {
    $attachment = get_children(
        array(
            'post_parent'    => get_the_ID(),
            'post_type'      => 'attachment',
            'post_mime_type' => 'image',
            'order'          => 'DESC',
            'numberposts'    => 1,
        )
    );
    if ( ! is_array( $attachment ) || empty( $attachment ) ) {
        return;
    }
    $attachment = current( $attachment );
    return wp_get_attachment_url( $attachment->ID,$size);
}



// ========================================//
// HABILITA FORMATOS DE ARQUIVOS EXTRAS
// logo em alta definicao
// ========================================//
// habilita arquivos imagens svg
if(!function_exists('afc_add_fonts_to_allowed_mimes')) { function afc_add_fonts_to_allowed_mimes( $mimes = array() ) {
	$mimes['svg']  = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
	return $mimes;
} } add_filter( 'upload_mimes', 'afc_add_fonts_to_allowed_mimes');

// evita erros de alerta de seguranca na leitura do svg
if(!function_exists('afc_add_fonts_fix_mime_type_svg')) { function afc_add_fonts_fix_mime_type_svg( $data = null, $file = null, $filename = null, $mimes = null ) {
    $ext = isset( $data['ext'] ) ? $data['ext'] : '';
    if ( strlen( $ext ) < 1 ) {
        $exploded = explode( '.', $filename );
        $ext      = strtolower( end( $exploded ) );
    }
    if ( $ext === 'svg' ) {
        $data['type'] = 'image/svg+xml';
        $data['ext']  = 'svg';
    } elseif ( $ext === 'svgz' ) {
        $data['type'] = 'image/svg+xml';
        $data['ext']  = 'svgz';
    }
    return $data;
} } add_filter( 'wp_check_filetype_and_ext', 'afc_add_fonts_fix_mime_type_svg' , 75, 4 );


// ========================================//
// RSS
// ========================================// 
// display featured post thumbnails in WordPress feeds
function afc_insert_thumb_feed() {
    global $post;
    $output = '';
    if ( has_post_thumbnail( $post->ID ) ) {
        $thumbnail_ID = get_post_thumbnail_id( $post->ID );
        $thumbnail = wp_get_attachment_image_src( $thumbnail_ID, 'afc_thumb_feed' );
        $output .= '<media:content xmlns:media="http://search.yahoo.com/mrss/" medium="image" type="image/jpeg"';
        $output .= ' url="'. $thumbnail[0] .'"';
        $output .= ' width="'. $thumbnail[1] .'"';
        $output .= ' height="'. $thumbnail[2] .'"';
        $output .= ' />';
    }
    echo $output;
}
add_action( 'rss2_item', 'afc_insert_thumb_feed' );

function afc_insert_content_feed($content) {
  global $post;
  $content =  trim(strip_tags(substr(get_the_content(), 0,600))) . '...';
  return $content;
}
add_filter('the_excerpt_rss', 'afc_insert_content_feed');