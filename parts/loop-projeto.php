<?php
global $post;
$info = get_field('info_proj_resumo', $post->ID);
$print = get_field('imagem_extra_print', $post->ID);
$class = is_post_type_archive('etheme_portfolio') ? '' : ' hidden';
$mockupImg = '6093';
?>

<div class="proj-grid-item">
    <div class="proj-grid-cat<?php echo $class; ?>">loja virtual</div>

    <div class="mockup">
        <div class="mockup-area">
            <?php if($print): ?>
                <?php echo wp_get_attachment_image($print['ID'],'full', '', [
                    'class' => 'mockup-img',
                    'loading' => 'lazy',
                ]); ?>    
            <?php endif; ?>            
        </div>
        <div class="mockup-device sem-clique" style="background-image:url(<?php echo wp_get_attachment_image_url($mockupImg,'full');?>);"></div>
    </div>

    <div class="proj-grid-infos<?php echo $class; ?>">
        <h3 class="proj-grid-titulo"><?php the_title(); ?></h3>
        <?php if($info): ?>
            <div class="hide-mobile"><em><?php echo esc_html($info); ?></em></div>
        <?php endif; ?>
    </div>

    <a href="<?php get_the_permalink(); ?>" class="link-full w-inline-block"></a>
</div>