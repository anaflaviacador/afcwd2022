<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
    <div class="container-medio has-text-align-center">
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>
<?php endif; ?>

<div class="container pb-4em">
    <?php get_template_part('parts/servicos/planos','manutencao'); ?>
</div>

<div class="pb-3em cor-azul-claro-bg">
    <div class="container">
        <div class="has-text-align-center mb-2em upper-titulo">
            <h2><?php _e( 'Perguntas <span class="titulo-cursiva cor-azul">frequentes</span>', 'afcwd2022' ); ?></h2>
        </div>

        <div class="colunas-wrap num-2">
            <div class="coluna-item num-2">
                <?php afc_faq(array('planos','manutencao','coluna-1'),'azul'); ?>
            </div>

            <div class="coluna-item num-2">
                <?php afc_faq(array('planos','manutencao','coluna-2'),'azul'); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>