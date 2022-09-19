<?php
global $post;
$info = get_field('info_proj_resumo', $post->ID);
$print = get_field('imagem_extra_print', $post->ID);
$mockupImg = '6444'; // producao
// $mockupImg = '6093'; // local
?>

<div class="proj-grid-item">
    
    <?php $terms = wp_get_post_terms($post->ID, 'tipoprojeto'); ?>
    <?php if ($terms) : ?>
        <div class="fonte-caixa-baixa proj-grid-cat">
            <?php $out = array();
            foreach ($terms as $term) { $out[] = $term->name; }
            echo join( ' + ', $out ); ?>
        </div>
    <?php endif; ?>

    <div class="mockup">
        <div class="mockup-area">
            <?php if($print): ?>
                <?php echo wp_get_attachment_image($print['ID'],'full', '', [
                    'class' => 'mockup-img',
                    // 'loading' => 'lazy',
                ]); ?>    
            <?php endif; ?>            
        </div>
        <div class="mockup-device sem-clique" style="background-image:url(<?php echo wp_get_attachment_image_url($mockupImg,'full');?>);"></div>
    </div>

    <div class="proj-grid-infos">
        <h3 class="proj-grid-titulo"><?php echo get_the_title($post->ID); ?></h3>
        <?php if($info): ?>
            <div class="hide-mobile"><em><?php echo esc_html($info); ?></em></div>
        <?php endif; ?>

        <a href="<?php echo get_the_permalink($post->ID); ?>" class="botao-liso bege flexb-shrink"><?php esc_html_e( 'ver detalhes', 'afcwd2022' );?> <i class="fa-light fa-arrow-right-long bt-seta"></i></a>
    </div>

    <a href="<?php echo get_the_permalink($post->ID); ?>" class="link-full w-inline-block"></a>
</div>