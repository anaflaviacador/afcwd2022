<?php global $post;
$urlTema = get_template_directory_uri();
$nome = get_the_title($post->ID);
$projeto = get_field('projeto',$post->ID);
$produto = get_field('tema',$post->ID);
$site = get_field('dominio',$post->ID);

$siteprojeto = get_field('info_proj_online', $projeto);
if($projeto) $site = $siteprojeto;

$nometema = get_the_title($produto);
if($produto) $nometema = get_field('nome_produto',$produto);
?>

<div class="cliente">
    <div class="cliente-container w-clearfix">
        <img src="<?php echo $urlTema; ?>/assets/images/aspas.svg" loading="lazy" aria-hidden="true" alt="Grafismo" class="ico-aspas">

        <?php if (has_post_thumbnail($post->ID)) : ?>
            <figure class="cliente-foto mb-0">
                <?php echo the_post_thumbnail('thumbnail', array(
                    'alt' => 'Depoimento de '.$nome.' para o site AFC Web Design', 
                    'class' => 'cliente-foto-item',
                    // 'loading' => 'lazy'
                )); ?>
            </figure>
        <?php endif; ?>

        <h4 class="cliente-nome ellipsis"><?php echo esc_html($nome); ?></h4>
        
        <div class="hide-mobile">
            <?php if ($projeto) : ?>
                <div class="cliente-links">
                    <a href="<?php echo get_the_permalink($projeto); ?>" class="botao verde inverso mr-10px"><?php esc_html_e( 'Projeto', 'afcwd2022' ); ?></a>
                    <?php if ($site) : ?>
                        <a href="<?php echo esc_url($site); ?>" class="botao verde">Online <i class="fa-light fa-arrow-up-right-from-square bt-seta"></i></a>
                    <?php endif; ?>
                </div>
            <?php elseif (class_exists('Woocommerce') && $produto) : ?>
                <div class="cliente-links">
                    <?php if (!is_product()) : ?>
                        <a href="<?php echo get_the_permalink($produto); ?>" class="botao verde inverso mr-10px"><?php esc_html_e( 'Template', 'afcwd2022' ); ?></a>
                    <?php endif; ?>
                    <?php if ($site) : ?>
                        <a href="<?php echo esc_url($site); ?>" class="botao verde">Online <i class="fa-light fa-arrow-up-right-from-square bt-seta"></i></a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="hide-desk">
            <?php if ($projeto) : ?>
                <div class="cliente-links">
                    <a href="<?php echo get_the_permalink($projeto); ?>" class="botao-liso verde inverso mr-10px"><?php esc_html_e( 'Projeto', 'afcwd2022' ); ?></a>
                    <?php if ($site) : ?>
                        <a href="<?php echo get_the_permalink($site); ?>" class="botao-liso verde">Online <i class="fa-light fa-arrow-up-right-from-square bt-seta"></i></a>
                    <?php endif; ?>
                </div>
            <?php elseif (class_exists('Woocommerce') && $produto) : ?>
                <div class="cliente-links">
                    <?php if (!is_product()) : ?>
                        <a href="<?php echo get_the_permalink($produto); ?>" class="botao-liso verde inverso mr-10px"><?php esc_html_e( 'Template', 'afcwd2022' ); ?></a>
                    <?php endif; ?>
                    <?php if ($site) : ?>
                        <a href="<?php echo get_the_permalink($site); ?>" class="botao-liso verde">Online <i class="fa-light fa-arrow-up-right-from-square bt-seta"></i></a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

        <p class="mb-0"><?php echo strip_tags(get_the_content()); ?></p>
    </div>
</div>