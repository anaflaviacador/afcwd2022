<?php get_header(); 
$term = get_queried_object();
?>
<?php get_template_part('parts/blog/nav-interna'); ?>

<div class="container">
	<?php echo do_shortcode('[ajax_load_more post_type="afc_blog" theme_repeater="artigo.php" container_type="div" posts_per_page="8" images_loaded="true" scroll="true" scroll_distance="-150" transition_container_classes="colunas-wrap num-4 cor-azul" taxonomy="'.$term->taxonomy.'" taxonomy_terms="'.$term->slug.'" taxonomy_operator="IN" button_label="<span>'.esc_html__( 'Mais artigos', 'afcwd2022' ).'</span>" button_loading_label="<span>'.esc_html__( 'Carregando', 'afcwd2022' ).'</span>" button_done_label="<span>'.esc_html__( 'Isso é tudo!', 'afcwd2022' ).'</span>" ]'); ?>
</div>

<?php get_footer(); ?>