<?php
// ========================================//
// RESUMO
// ========================================// 
function afc_excerpt_more( $more ) { return '...'; }
function afc_excerpt_length( $length ) { return 600; }


// ========================================//
// BODY CLASS
// adiciona mais informacoes ao body
// ========================================// 
if(!function_exists('afc_body_class')) {function afc_body_class($classes) {
  global $post;
  
  if ( isset( $post ) ) $classes[] = $post->post_type . '-' . $post->post_name;

  return $classes;
}}



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
// DEPOIMENTOS
// ========================================// 
function afc_depoimentos($num = '', $term = '') {
    $urlTema = get_template_directory_uri();

	if(!empty($term)) {
		$args = array(
			'post_type' => 'afc_depoimentos', 
			'order' => 'DESC', 
			'orderby' => 'rand',
			'posts_per_page' => $num, 
			'tax_query' => array(
				array( 'taxonomy' => 'cat_depo', 'terms' => $term ),
			),
		);
	} else {
		$args = array(
			'post_type' => 'afc_depoimentos', 
			'order' => 'DESC', 
			'orderby' => 'rand',
			'posts_per_page' => $num,
		);
	}

	$depo = new WP_Query($args);

	if ( $depo->have_posts() ) : ?>

    <?php //if(!is_post_type_archive('afc_depoimentos')):?>
    <div class="cor-verde-claro-bg pb-2em">
        <div class="container">
            <div class="upper-titulo">
                <h2 class="mb-0"><?php _e( 'Relatos de <span class="titulo-cursiva cor-verde">clientes</span>', 'afcwd2022' ); ?></h2>
                <div><?php esc_html_e( 'O que as clientes do studio têm a dizer sobre os serviços', 'afcwd2022' ); ?></div>
            </div>
    <?php //endif; ?>

            <div class="clientes-lista">    
                <?php while ( $depo->have_posts() ) : $depo->the_post(); ?>

                    <?php get_template_part('alm_templates/depoimento'); ?>

                <?php endwhile; ?>

            </div>

    <?php //if(!is_post_type_archive('afc_depoimentos')): ?>        
            <div class="has-text-align-right">
                <a href="/depoimentos" class="botao-liso verde"><?php esc_html_e( 'Mais depoimentos', 'afcwd2022' ); ?> <i class="fa-light fa-arrow-right-long bt-seta"></i></a>
            </div>
        </div>
    </div>
    <?php //endif; ?>

	<?php endif; wp_reset_query();
}


// ========================================//
// POSTGRID
// ========================================// 
function afc_post_grid($post_id,$cor) { 
  $nome = get_the_title($post_id);
  $terms = get_the_terms($post_id,'categoria_blog');  
  ?>  
  <div class="post-grid">
      <h3 class="post-grid-titulo"><?php echo $nome; ?></h3>
      <figure class="post-grid-thumb">
          <?php if (has_post_thumbnail($post_id)) : ?>
              <?php echo the_post_thumbnail('afc_blog_thumb', array(
                  'class' => 'post-grid-img',
                  'loading' => 'lazy'
              )); ?>
          <?php endif; ?>
      </figure>

      <?php if ($terms && ! is_wp_error($terms)) : $i=0;?>
      <ul role="list" class="post-grid-cats<?php echo $cor ? ' '.$cor : ''; ?>">
          <?php foreach ($terms as $term) : $i++; ?>
          <li class="flexb-center" style="white-space:nowrap">
              <?php if ($i > 1): ?><div class="currentcolor pl-10px pr-10px">●</div><?php endif; ?>
              <div class="cor-grafite"><?php echo $term->name;?></div>
          </li>
          <?php endforeach; ?>
      </ul>
      <?php endif; ?>
      <a href="<?php echo get_the_permalink($post_id); ?>" class="link-full w-inline-block"></a>
  </div>
<?php }