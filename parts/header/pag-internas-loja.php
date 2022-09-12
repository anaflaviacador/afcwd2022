<?php 
global $post;
$term = get_queried_object();
$urlTema = get_template_directory_uri();
?>

<div class="header-pag">
    <img src="<?php echo $urlTema; ?>/assets/images/org-azul-2.svg" loading="lazy" alt="Grafismo" aria-hidden="true" class="header-pag-fundo">

    <!-- titulo principal -->
    <h1 class="header-pag-titulo" title="<?php echo get_the_title($post->ID); ?>">
        <?php _e( 'Produtos <span class="titulo-cursiva cor-azul">digitais</span>', 'afcwd2022' ); ?>
    </h1>

    <!-- subtitulo -->
    <div class="header-pag-subtitulo">
        <?php _e( 'Templates à pronta entrega e extensões para seu site.', 'afcwd2022' ); ?>
    </div>
</div>