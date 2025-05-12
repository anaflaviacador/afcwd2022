<?php 
$post_type = get_post_type();
$obj = get_queried_object();

$get_lista_args = array( 
    'posts_per_page' => -1, 'post_type' => $post_type,
    'post_status' => 'publish',
    'order' => 'ASC',
    'tax_query' => array( 
        array ( 
            'taxonomy' => $obj->taxonomy, 
            'field' => 'term_id', 
            'terms' => $obj->term_id
        ) 
    ),
);
$artigos = new WP_Query($get_lista_args);

get_header(); 
get_template_part('parts/blog/nav-interna'); ?>

<div class="container">
	<?php if ( $artigos->have_posts() ) : ?>
		<div class="colunas-wrap num-4 cor-azul">
			<?php while ( $artigos->have_posts() ) : $artigos->the_post(); ?>
				<div class="coluna-item num-4">
					<?php afc_post_grid(get_the_ID(),'cor-verde'); ?>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; wp_reset_query(); ?>

	<?php //echo do_shortcode('[ajax_load_more post_type="afc_blog" theme_repeater="artigo.php" container_type="div" posts_per_page="8" images_loaded="true" scroll="true" scroll_distance="-150" transition_container_classes="colunas-wrap num-4 cor-azul" taxonomy="'.$term->taxonomy.'" taxonomy_terms="'.$term->slug.'" taxonomy_operator="IN" button_label="<span>'.esc_html__( 'Mais artigos', 'afcwd2022' ).'</span>" button_loading_label="<span>'.esc_html__( 'Carregando', 'afcwd2022' ).'</span>" button_done_label="<span>'.esc_html__( 'Isso é tudo!', 'afcwd2022' ).'</span>" ]'); ?>
</div>

<?php get_footer(); ?>