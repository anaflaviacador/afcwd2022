<?php 
global $post;
$term = get_queried_object();
$urlTema = get_template_directory_uri();
$titulo = get_field('titulo_principal',$post->ID);
$subtitulo = get_field('subtitulo',$post->ID);
?>

<div class="header-pag">
    <img src="<?php echo $urlTema; ?>/assets/images/org-azul-2.svg" loading="lazy" alt="Grafismo" aria-hidden="true" class="header-pag-fundo">

    <!-- titulo principal -->
    <h1 class="header-pag-titulo" title="<?php echo get_the_title($post->ID); ?>">
        <?php if($titulo): ?>
            <?php echo wp_kses_post($titulo); ?>
        <?php else: ?>
            <?php 
                if(
                    (!is_post_type_archive(array('etheme_portfolio','afc_depoimentos','afc_blog')) 
                    && !is_tax()) || is_page()
                ) 
                    echo get_the_title($post->ID); 
            ?>
        <?php endif; ?>

        <?php if(is_post_type_archive('etheme_portfolio')): ?>
            <?php _e( 'Projetos <span class="titulo-cursiva cor-azul">destaque</span>', 'afcwd2022' ); ?>
        <?php endif; ?>

        <?php if(is_post_type_archive('afc_depoimentos')): ?>
            <?php _e( 'Experiências <span class="titulo-cursiva cor-azul">únicas</span>', 'afcwd2022' ); ?>
        <?php endif; ?>

        <?php if(is_post_type_archive('afc_blog')): ?>
            <?php _e( 'Blog do <span class="titulo-cursiva cor-azul">studio</span>', 'afcwd2022' ); ?>
        <?php endif; ?>

        <?php if(is_tax('tipoprojeto')): ?>
            <?php _e( 'Projetos de', 'afcwd2022' ); ?> <span class="titulo-cursiva fonte-caixa-baixa cor-azul"><?php echo $term->name; ?></span>
        <?php endif; ?>

        <?php if(is_tax('categoria_blog')): ?>
            <span class="titulo-cursiva fonte-caixa-baixa cor-azul dblock">Categoria</span> <?php echo $term->name; ?>
        <?php endif; ?>
    </h1>


    <!-- subtitulo -->
    <?php if($subtitulo): ?>
        <div class="header-pag-subtitulo">
            <?php echo wp_kses_post($subtitulo); ?>
        </div>
    <?php endif; ?>

    <?php if(is_post_type_archive('etheme_portfolio')): ?>
        <div class="header-pag-subtitulo">
            <?php _e( 'Confira os projetos mais recentes do studio.', 'afcwd2022' ); ?>
        </div>
    <?php endif; ?> 
    
    <?php if(is_post_type_archive('afc_depoimentos')): ?>
        <div class="header-pag-subtitulo">
            <?php _e( 'O que as clientes do studio têm a dizer.', 'afcwd2022' ); ?>
        </div>
    <?php endif; ?>
    
    <?php if(is_post_type_archive('afc_blog')): ?>
        <div class="header-pag-subtitulo">
            <?php _e( 'Eleve o nível do seu site com dicas sobre de gestão, ferramentas, produtividade e empreendedorismo.', 'afcwd2022' ); ?>
        </div>
    <?php endif; ?>

    <?php if(is_tax('tipoprojeto')): ?>
        <div class="header-pag-subtitulo">
            <?php _e( 'Todos os projetos deste mesmo segmento.', 'afcwd2022' ); ?>
        </div>
    <?php endif; ?> 

    <?php if(is_tax('categoria_blog')): ?>
        <div class="header-pag-subtitulo">
            <?php _e( 'Todos os artigos deste assunto no blog.', 'afcwd2022' ); ?>
        </div>
    <?php endif; ?> 
</div>