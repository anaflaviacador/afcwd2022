<?php
// ========================================//
// RESUMO
// ========================================// 
function afc_excerpt_more( $more ) { return '...'; }
function afc_excerpt_length( $length ) { return 600; }


// ========================================//
// DESABILITA EMOJIS
// ========================================// 
function disable_emojis() {
 remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
 remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
 remove_action( 'wp_print_styles', 'print_emoji_styles' );
 remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
 remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
 remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
 remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
 add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
 add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );

function disable_emojis_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}

function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
  if ( 'dns-prefetch' == $relation_type ) {
    $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
    $urls = array_diff( $urls, array( $emoji_svg_url ) );
  }
  return $urls;
}

// ========================================//
// RELACIONADOS
// single - area de blog
// ========================================// 
function afc_relacionados($post_id, $related_count, $args = array()) {
  $args = wp_parse_args( (array) $args, array(
    'orderby' => 'date',
    'return'  => 'query',
  ) );

  $post_type = get_post_type( $post_id );
  $post      = get_post( $post_id );

  $term_list  = array();
  $query_args = array();
  $tax_query  = array();
  $taxonomies = get_object_taxonomies( $post, 'names' );

  foreach ( $taxonomies as $taxonomy ) {
    $terms = get_the_terms( $post_id, $taxonomy );
    if ( is_array( $terms ) and count( $terms ) > 0 ) {
      $term_list = wp_list_pluck( $terms, 'slug' );
      $term_list = array_values( $term_list );
      if ( ! empty( $term_list ) ) {
        $tax_query['tax_query'][] = array(
          'taxonomy' => $taxonomy,
          'field'    => 'slug',
          'terms'    => $term_list
        );
      }
    }
  }

  if ( count( $taxonomies ) > 1 ) {
    $tax_query['tax_query']['relation'] = 'OR';
  }

  $query_args = array(
    'post_type'      => $post_type,
    'posts_per_page' => $related_count,
    'post_status'    => 'publish',
    'post__not_in'   => array( $post_id ),
    'orderby'        => $args['orderby']
  );

  if ( $args['return'] == 'query' ) {
    return new WP_Query( array_merge( $query_args, $tax_query ) );
  } else {
    return array_merge( $query_args, $tax_query );
  }
}



// ========================================//
// MENU
// ========================================// 
function afc_menu( $theme_location, $class ) {
    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $theme_location ] ) ) {
        $menu = wp_get_nav_menu_object( $locations[ $theme_location ] );
      
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        $menu_list = '';
        $count = 0;

        $menu_list .= '<ul role="list" class="header-nav">';

        foreach( $menu_items as $menu_item ) {
            $link = $menu_item->url;
            $title = $menu_item->title;

            if ( !$menu_item->menu_item_parent ) {
                $parent_id = $menu_item->ID;
                $pag_id = $menu_item->object_id;

                $current = ( $_SERVER['REQUEST_URI'] == parse_url( $menu_item->url, PHP_URL_PATH ) ) ? 'botao' : 'header-nav-item';

                $menu_list .= '<li class="header-nav-li">' ."\n";
                  $menu_list .= '<a href="'.$link.'" class="'.$current.'">'.$title.'</a>'."\n";
                $menu_list .= '</li>' ."\n";    
            }

            $count++;
        }
        $menu_list .= '</ul>';
    } 
    return $menu_list;
}