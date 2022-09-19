<?php

// ========================================//
// HABILITANDO BLOCOS ESPECIFICOS
// ========================================//
add_filter( 'allowed_block_types', 'afc_allowed_block_types' );
function afc_allowed_block_types( $allowed_blocks ) {
 	// lista de blocos: https://rudrastyh.com/gutenberg/remove-default-blocks.html
	return array(
		'core/spacer',
		'core/image',
		'core/paragraph',
		'core/heading',
		'core/list',
		'core/media-text',
		'core/html',
		'core/gallery',
		'core/code',
		'core/cover',
		'core/quote',
		'core/separator',
		'core/shortcode',
		'core/columns',
		'core/more',
	    'core/buttons',
	    'core/group',
	    'core/block',
	    'core/embed',

		// jetpack
		'jetpack/gif',
		'acf/afcblock-bonus',
	);
}


// ========================================//
// CADASTRANHO BLOCOS - ADVANCED CUSTOM FIELDS
// ========================================//
add_action('acf/init', 'afc_register_blocks');
function afc_register_blocks() {
	if( function_exists('acf_register_block_type') ) {
      acf_register_block_type(array(
        'name'            => 'afcblock-bonus',
        'title'           => esc_html__('Plugins','afcwebdesign'),
        'description'     => esc_html__('Bonus para Clientes VIP','afcwebdesign'),
        'mode'            => 'edit',
        'render_callback' => 'afcblock_bonus',
        'category'        => 'widgets',
        'icon'         	  => 'admin-plugins',
        'keywords'        => array( 'plugin','bonus' ),
        'supports' => array( 
          'align' =>  false,
          'mode' => false,
          'multiple' => true,
          'html' => false,
          'anchor' => false,
          'jsx' => false,
         ),
      ));
  }
}

//////////////// bonus
function afcblock_bonus( $block, $content = '', $is_preview = false ) {
	$id = $block['id'];
	$blocoslug = $block['name'];
	$nomebloco = substr($blocoslug, strrpos($blocoslug, "/") + 1);

	$classes = [];
	if( !empty( $block['className'] ) )
	    $classes = array_merge( $classes, explode( ' ', $block['className'] ) );

	$anchor = '';
	if( !empty( $block['anchor'] ) )
		$anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';
	
	$align = '';
	if( !empty($block['align']) ) {
	    $align = ' align' . $block['align'];
	}

	$nome = get_field('nome');
	$data = get_field('data');
	$versao = get_field('versao');
	$site = get_field('site');
	$fundo = get_field('fundo');
	$imagem = get_field('imagem');
	$svg = get_field('svg');
	$descricao = get_field('descricao');
	$arquivo = get_field('arquivo');
	$cupom = get_field('cupom');

	echo '<div class="item-servico bloco '.join( ' ', $classes ) . '"' . $anchor . ' style="width: 100%; margin-top:1em">';
		echo '<figure style="background:'.$fundo.'">';
		
			if($imagem && empty($svg)) echo '<img src="'.esc_url($imagem).'">';
			if($svg) echo $svg;

			if($cupom) echo '<figcaption><i class="far fa-tags"></i> '.$cupom.'</figcaption>';
		echo '</figure>';

		echo '<aside>';
			echo '<header>';
				echo '<div class="intro">';
				if($versao) echo 'Versão '.$versao;
				if($data) echo '&nbsp;&nbsp;&bull;&nbsp; Em '.$data;
				echo '</div>';
				echo '<h3>'.$nome; 
					if($site) echo '&nbsp;&nbsp;<a href="'.esc_url($site).'" data-tooltip="Visitar site oficial / revendedor deste plugin" target="_blank" rel="external noopener nofollow"><i class="fa-light fa-link cor-negacao"></i></a>';
				echo '</h3>';
			echo '</header>';

			if($descricao) echo $descricao;
			if($arquivo) echo '<p class="mt-10px" style="margin-bottom:0"><a class="botao bege inverso" href="'.esc_url($arquivo).'" download>Baixar plugin <i class="fa-light fa-arrow-right-long bt-seta"></i></a></p>';
		echo '</aside>';
	echo '</div>';
} 