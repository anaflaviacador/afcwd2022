<?php
add_action('init', 'afc_type_faq', 1);  

function afc_type_faq(){
  $labels = array(
    'name' => _x('Perguntas e respostas', 'post type general name', 'afcwd2022'),
    'singular_name' => _x('Pergunta', 'post type singular name', 'afcwebdesign'),
    'add_new' => _x('Adicionar pergunta', 'post type - add new', 'afcwebdesign'),
    'add_new_item' => __('Adicionar nova pergunta', 'afcwebdesign'),
    'edit_item' => __('Editar pergunta', 'afcwebdesign'),
    'new_item' => __('Nova pergunta', 'afcwebdesign'),
    'view_item' => __('Ver pergunta', 'afcwebdesign'),
    'search_items' => __('Buscar', 'afcwebdesign'),
    'not_found' =>  __('Nenhum pergunta encontrada', 'afcwebdesign'),
    'not_found_in_trash' => __('Nenhum pergunta encontrada na lixeira', 'afcwebdesign'),
    'parent_item_colon' => '',
    'menu_name' => 'F.A.Q.'
  );
  
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_rest' => false, // gutenberg
    'show_in_menu' => true,
    'query_var' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 40,
    'exclude_from_search' => true,
    'menu_icon' => 'dashicons-editor-help',
    'supports' => array('title','editor'),
    'rewrite' => array('slug' => 'faq')
  );
  
  register_post_type('afc_faq',$args);

    $tags = array(
        'name' => _x( 'Local de uso', 'taxonomy general name', 'afcwebdesign' ),
        'singular_name' => _x( 'Local', 'taxonomy singular name', 'afcwebdesign' ),
        'search_items' =>  __( 'Procurar', 'afcwebdesign' ),
        'all_items' => __( 'Todos os locais', 'afcwebdesign' ),
        'parent_item' => __( 'Local principal', 'afcwebdesign' ),
        'parent_item_colon' => __( 'Local mãe:', 'afcwebdesign' ),
        'edit_item' => __( 'Editar', 'afcwebdesign' ),
        'update_item' => __( 'Atualizar', 'afcwebdesign' ),
        'add_new_item' => __( 'Adicionar', 'afcwebdesign' ),
        'new_item_name' => __( 'Novo local', 'afcwebdesign' ),
        'menu_name' => 'Categorias'
    );

    // Custom taxonomy for Project Tags
    register_taxonomy('local_faq', array('afc_faq'), array(
        'hierarchical' => true,
        'labels' => $tags,
        'show_ui' => true,
        'query_var' => true,
        'show_admin_column' => true,
        'rewrite' => array( 'slug' => 'tipo-pergunta' ),
    ));

}



/**
 * Display a custom taxonomy dropdown in admin
 * @author Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
add_action('restrict_manage_posts', 'afc_filter_taxonomy_faq');
function afc_filter_taxonomy_faq() {
    global $typenow;
    $post_type = 'afc_faq'; // change to your post type
    $taxonomy  = 'local_faq'; // change to your taxonomy
    if ($typenow == $post_type) {
        $selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
        $info_taxonomy = get_taxonomy($taxonomy);
        wp_dropdown_categories(array(
            'show_option_all' => sprintf( __( '%s', 'textdomain' ), $info_taxonomy->label ),
            'taxonomy'        => $taxonomy,
            'name'            => $taxonomy,
            'orderby'         => 'name',
            'selected'        => $selected,
            'show_count'      => true,
            'hide_empty'      => true,
        ));
    };
}
/**
 * Filter posts by taxonomy in admin
 * @author  Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
add_filter('parse_query', 'afc_filter_taxonomy_faq_query');
function afc_filter_taxonomy_faq_query($query) {
    global $pagenow;
    $post_type = 'afc_faq'; // change to your post type
    $taxonomy  = 'local_faq'; // change to your taxonomy
    $q_vars    = &$query->query_vars;
    if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
        $term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
        $q_vars[$taxonomy] = $term->slug;
    }
}


// ========================================//
// FAQ
// ========================================//
function afc_faq($term = '', $cor = '') {
	$args = array(
		'post_type' => 'afc_faq', 
		'order' => 'ASC', 
		'posts_per_page' => -1, 
		'tax_query' => array(
			array( 'taxonomy' => 'local_faq', 'field' => 'slug', 'terms' => $term, 'operator' => 'AND', ),
		),
	);

	$perguntas = new WP_Query($args); 

	if ( $perguntas->have_posts() ) {
        while ( $perguntas->have_posts() ) : $perguntas->the_post(); 
            $id = get_the_ID();
            $pergunta = esc_html(get_the_title());
            $resposta = wpautop( get_the_content() );

            echo '<div class="aba cor-'.($cor ? $cor : 'bege').'" id="pergunta-'.$id.'">';
                echo '<div class="aba-titulo"><span class="cor-grafite">'.$pergunta.'</span></div>';
                echo '<div class="aba-conteudo">'.$resposta.'</div>';
            echo '</div>';
        endwhile;
	} wp_reset_query();
}