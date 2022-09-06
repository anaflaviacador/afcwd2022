<?php
$urlTema = get_template_directory_uri();
?>

<div class="trabalhos-destaque">
    <div class="trab-destaque-fundo"></div>
    <div class="trab-destaque-wrap overflowy">

    <?php 
    $tax = array('taxonomy' => 'categories', 'field' => 'slug', 'terms' => 'destaque');
    $args = array('post_type' => 'etheme_portfolio', 'orderby' => 'rand', 'posts_per_page' => 3, 'tax_query' => array($tax));

    $publicacoes = new WP_Query($args);
    if ( $publicacoes->have_posts() ) : $i = 0; while ( $publicacoes->have_posts() ) : $i++; $publicacoes->the_post(); ?>

        <div class="proj-destaque">
                <!-- <img src="<?php echo $urlTema; ?>/assets/images/tap-to-see.svg" loading="lazy" alt="clique e conheça o projeto" class="tap-to-see mobile">

                <img src="images/flor-rosa-1.svg" loading="lazy" data-w-id="4a55fc6e-1e75-c0d2-79fb-b07a5dbbbd06" alt="" aria-hidden="true" class="proj-destaque-detalhe-1">         -->

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