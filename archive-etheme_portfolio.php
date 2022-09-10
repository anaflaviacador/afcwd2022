<?php get_header(); 
$urlHome = esc_url(home_url('/'));
$urlTema = get_template_directory_uri();
?>

<?php $args = array( 'post_type' => 'etheme_portfolio', 'order' => 'DESC', 'posts_per_page' => 2 );?>
<?php $trabalhos = new WP_Query($args); ?>

<div class="lista-projetos">
<?php if ($trabalhos->have_posts()) : $i = 0; while ($trabalhos->have_posts()) : $i++; $trabalhos->the_post(); ?>  

    <div class="lista-projeto-col">
        <img src="<?php echo $urlTema; ?>/assets/images/org-bege-4.svg" loading="lazy" aria-hidden="true" alt="" class="list-projeto-fundo-2">
        <img src="<?php echo $urlTema; ?>/assets/images/org-bege-4.svg" loading="lazy" aria-hidden="true" alt="" class="list-projeto-fundo-1">
        
        <?php get_template_part('parts/loop','projeto'); ?>
    </div>

    <?php if($i == 2) get_template_part('parts/servicos/como-funciona'); ?>  
    
<?php endwhile; endif; wp_reset_query(); ?>
</div>

<?php echo do_shortcode('[ajax_load_more post_type="etheme_portfolio" theme_repeater="projeto.php" container_type="div" posts_per_page="4" offset="2" images_loaded="true" scroll="false" transition_container_classes="lista-projetos" button_label="<span>'.esc_html__( 'Mais projetos', 'afcwd2022' ).'</span>" button_loading_label="<span>'.esc_html__( 'Carregando', 'afcwd2022' ).'</span>" button_done_label="<span>'.esc_html__( 'Isso é tudo!', 'afcwd2022' ).'</span>" ]'); ?>



<?php get_footer(); ?>