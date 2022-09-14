<?php get_header(); ?>
<?php global $post; ?>

<?php if (have_posts()) : ?>
<div id="artigo" class="container pb-2em">
    <div class="colunas-wrap-dupla mb-3em">
        <?php while (have_posts()) : the_post(); ?>
            <div class="colmaior">
                <?php get_template_part('parts/blog/header'); ?>

                <article class="pt-2em pb-1em">
                    <?php the_content();?> 
                </article>

                <?php get_template_part('parts/blog/footer'); ?>
            </div>
        <?php endwhile; ?>

        <?php get_sidebar(); ?>
    </div>
</div>
<?php endif; ?>

<?php $args = array('orderby' => 'RAND', 'post_type' => 'afc_blog', 'posts_per_page' => 4, 'post__not_in' => array($post->ID)); ?>
<?php $relacionados = new WP_Query($args); ?>
<?php if ( $relacionados->have_posts() ) : ?>
  <div class="cor-azul-claro-bg">
    <div class="container">
      <div class="upper-titulo">
        <h2 class="mb-0"><?php _e( 'Outros <span class="titulo-cursiva cor-azul">artigos</span>' , 'afcwd2022'); ?></h2>
        <div class="posrel"><?php esc_html_e( 'Aproveite e leia também os artigos abaixo', 'afcwd2022' ); ?></div>
      </div>
      <div class="colunas-wrap num-4 cor-azul">
        <?php while ( $relacionados->have_posts() ) : $relacionados->the_post(); ?>
            <div class="coluna-item num-4">
                <?php afc_post_grid($relacionados->ID,'cor-azul'); ?>
            </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
<?php endif; wp_reset_query(); ?>  
<?php get_footer(); ?>