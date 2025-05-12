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
$trabalhos = new WP_Query($get_lista_args);

get_header(); ?>

<div class="lista-projetos">
<?php if ($trabalhos->have_posts()) : $i = 0; while ($trabalhos->have_posts()) : $i++; $trabalhos->the_post(); ?>  

    <div class="lista-projeto-col">
        <img src="<?php echo $urlTema; ?>/assets/images/org-bege-4.svg" aria-hidden="true" alt="" class="list-projeto-fundo-2">
        <img src="<?php echo $urlTema; ?>/assets/images/org-bege-4.svg" aria-hidden="true" alt="" class="list-projeto-fundo-1">
        
        <?php get_template_part('parts/loop','projeto'); ?>
    </div>

    <?php if($i == 2) get_template_part('parts/servicos/como-funciona'); ?>  
    
<?php endwhile; endif; wp_reset_query(); ?>
</div>

<?php //echo do_shortcode('[ajax_load_more post_type="etheme_portfolio" theme_repeater="projeto.php" container_type="div" posts_per_page="4" images_loaded="true" preloaded="true" preloaded_amount="2" scroll="true" scroll_distance="-150"  transition_container_classes="lista-projetos" taxonomy="'.$term->taxonomy.'" taxonomy_terms="'.$term->slug.'" taxonomy_operator="IN" button_label="<span>'.esc_html__( 'Mais projetos', 'afcwd2022' ).'</span>" button_loading_label="<span>'.esc_html__( 'Carregando', 'afcwd2022' ).'</span>" button_done_label="<span>'.esc_html__( 'Isso é tudo!', 'afcwd2022' ).'</span>" ]'); ?>

<?php get_footer(); ?>