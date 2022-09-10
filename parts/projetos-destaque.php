<?php
$urlTema = get_template_directory_uri();
$idClass = is_page('servicos') ? ' id="projetos" class="trabalhos-destaque area-jump"' : ' class="trabalhos-destaque"';
?>

<div<?php echo $idClass; ?>>
    <div class="trab-destaque-fundo"></div>
    <div class="trab-destaque-wrap overflowy">

    <?php 
    $tax = array('taxonomy' => 'categories', 'field' => 'slug', 'terms' => 'destaque');
    $args = array('post_type' => 'etheme_portfolio', 'posts_per_page' => 3, 'tax_query' => array($tax));

    $publicacoes = new WP_Query($args);
    if ( $publicacoes->have_posts() ) : $i = 0; while ( $publicacoes->have_posts() ) : $i++; $publicacoes->the_post(); ?>

        <div class="proj-destaque">
                <?php if ($i == 1 ): ?>
                    <img src="<?php echo $urlTema; ?>/assets/images/tap-to-see.svg" loading="lazy" alt="clique e conheça o projeto" class="tap-to-see mobile">
                    <img src="<?php echo $urlTema; ?>/assets/images/flor-rosa-1.svg" loading="lazy" data-w-id="4a55fc6e-1e75-c0d2-79fb-b07a5dbbbd06" alt="Grafismo" aria-hidden="true" class="proj-destaque-detalhe-1">
                <?php elseif ($i == 2 ): ?>
                    <img src="<?php echo $urlTema; ?>/assets/images/tap-to-see.svg" loading="lazy" alt="clique e conheça o projeto" class="tap-to-see">
                    <img src="<?php echo $urlTema; ?>/assets/images/flor-rosa-3.svg" loading="lazy" data-w-id="ee9275f3-065f-38f8-1327-bbc6bc2f4a20" alt="Grafismo" aria-hidden="true" class="proj-destaque-detalhe-2">
                <?php elseif ($i == 3 ): ?>
                    <img src="<?php echo $urlTema; ?>/assets/images/flor-rosa-2.svg" loading="lazy" data-w-id="115daa74-ed36-eeb2-a548-6e97337a69b7" alt="Grafismo" aria-hidden="true" class="proj-destaque-detalhe-3">
                <?php endif; ?>

                <?php get_template_part('parts/loop','projeto'); ?>
        </div>

    <?php endwhile; endif; ?>

    
    </div>
    <div class="trab-destaque-bt hide-mobile">
        <?php get_template_part('parts/projetos-destaque','bt'); ?>
    </div>
    <div class="trab-destaque-bt hide-desk">
        <?php get_template_part('parts/projetos-destaque','bt'); ?>
    </div>
</div>