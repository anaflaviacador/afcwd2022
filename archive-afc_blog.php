<?php get_header(); ?>
<?php get_template_part('parts/blog/nav-interna'); ?>

<div class="container">
	<?php echo do_shortcode('[ajax_load_more post_type="afc_blog" theme_repeater="artigo.php" container_type="div" posts_per_page="4" images_loaded="true" scroll="true" preloaded="true" preloaded_amount="4" scroll_distance="-150" transition_container_classes="colunas-wrap num-4 cor-azul" button_label="<span>'.esc_html__( 'Mais artigos', 'afcwd2022' ).'</span>" button_loading_label="<span>'.esc_html__( 'Carregando', 'afcwd2022' ).'</span>" button_done_label="<span>'.esc_html__( 'Isso é tudo!', 'afcwd2022' ).'</span>" ]'); ?>
</div>

<?php get_footer(); ?>