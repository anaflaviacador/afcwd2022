<?php get_header(); 
$term = get_queried_object();
$urlTema = get_template_directory_uri();
?>

<?php echo do_shortcode('[ajax_load_more post_type="etheme_portfolio" theme_repeater="projeto.php" container_type="div" posts_per_page="4" images_loaded="true" preloaded="true" preloaded_amount="2" scroll="true" scroll_distance="-150"  transition_container_classes="lista-projetos" taxonomy="'.$term->taxonomy.'" taxonomy_terms="'.$term->slug.'" taxonomy_operator="IN" button_label="<span>'.esc_html__( 'Mais projetos', 'afcwd2022' ).'</span>" button_loading_label="<span>'.esc_html__( 'Carregando', 'afcwd2022' ).'</span>" button_done_label="<span>'.esc_html__( 'Isso é tudo!', 'afcwd2022' ).'</span>" ]'); ?>

<?php get_footer(); ?>