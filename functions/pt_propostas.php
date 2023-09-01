<?php 

add_action('init', 'afc_cpt_propostas', 1);  

function afc_cpt_propostas(){
	$labels = array(
		'name' => _x('Proposta de Projeto', 'post type general name', 'afcwebdesign'),
		'singular_name' => _x('Proposta', 'post type singular name', 'afcwebdesign'),
		'add_new' => _x('Add nova', 'proposta', 'afcwebdesign'),
		'add_new_item' => __('Add nova proposta', 'afcwebdesign'),
		'edit_item' => __('Editar proposta', 'afcwebdesign'),
		'new_item' => __('Nova proposta', 'afcwebdesign'),
		'view_item' => __('Ver proposta', 'afcwebdesign'),
		'search_items' => __('Buscar', 'afcwebdesign'),
		'not_found' =>  __('Nenhuma proposta encontrado', 'afcwebdesign'),
		'not_found_in_trash' => __('Nenhuma proposta encontrada na lixeira', 'afcwebdesign'),
		'parent_item_colon' => '',
		'menu_name' => 'Propostas'
	
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 40,
		'show_in_rest' => true, //habilita gutenberg
		'menu_icon' => 'dashicons-money',
		'supports' => array('title'),
		'rewrite' => array('slug' => 'propostas')
	);
	
	register_post_type('afc_propostas',$args);
}
