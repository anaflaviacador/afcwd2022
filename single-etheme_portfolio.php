<?php get_header(); 
global $post;
$info = get_field('info_proj_resumo', $post->ID);
$print = get_field('imagem_extra_print', $post->ID);

$front = get_field('info_proj_front', $post->ID);
$back = get_field('info_proj_back', $post->ID);
$coautoria = get_field('info_proj_coautoria', $post->ID);
$programacao = get_field('info_proj_programacao', $post->ID);
$layout = get_field('info_proj_layout', $post->ID);
$impresso = get_field('info_proj_impresso', $post->ID);
$ilustracao = get_field('info_proj_ilustracao', $post->ID);
$idvisual = get_field('info_proj_idvisual', $post->ID);
$fotografia = get_field('info_proj_fotografia', $post->ID);
$lettering = get_field('info_proj_lettering', $post->ID);
$audiovisual = get_field('info_proj_audiovisual', $post->ID);
$animacao = get_field('info_proj_animacao', $post->ID);

$online = get_field('info_proj_online', $post->ID);
$depo = get_field('info_proj_relato', $post->ID);

?>

  <div class="container pb-2em">
    <div class="colunas-wrap-dupla mb-3em">
      <div class="colmenor esq flexb-column flexb-justify-space-between">
        <div class="projeto-info">
        <?php $terms = wp_get_post_terms($post->ID, 'tipoprojeto'); ?>
        <?php if ($terms) : ?>
            <h3 class="cor-roxo mb-0"><span class="titulo-cursiva fonte-caixa-baixa">
                <?php $out = array();
                foreach ($terms as $term) { $out[] = $term->name; }
                echo join( ' + ', $out ); ?>
            </span></h3>
        <?php endif; ?>

          <h1><?php echo get_the_title($post->ID); ?></h1>
            <?php if ($online) : ?>
                <div class="mb-2em">
                    <a href="<?php echo esc_url($online); ?>" class="botao inverso"><?php esc_html_e( 'ver online', 'afcwd2022' );?> <i class="fa-light fa-arrow-up-right-from-square bt-seta"></i></a>
                </div>
            <?php endif; ?>

          <p><?php echo get_the_excerpt($post->ID); ?></p>

          <?php if($front || $back || $coautoria || $programacao || $layout || $impresso || $ilustracao || $idvisual || $fotografia || $lettering || $audiovisual || $animacao) : ?>
          <div class="projeto-info-equipe hide-mobile">
            <?php get_template_part('parts/projeto/infos'); ?>
          </div>
          <?php endif;?>

        </div>

        <?php if($depo) : ?>
            <div class="projeto-depo hide-mobile">
                <?php get_template_part('parts/projeto/depoimento'); ?>
            </div>
        <?php endif;?>

      </div>

      <div class="colmaior">
        <article>
          <?php the_content(); ?>
        </article>


        <?php if($front || $back || $coautoria || $programacao || $layout || $impresso || $ilustracao || $idvisual || $fotografia || $lettering || $audiovisual || $animacao || $depo) : ?>
        <div class="hide-desk mt-2em">
            <h4><?php esc_html_e( 'Profissionais envolvidos neste projeto', 'afcwd2022' );?></h4>
            <div class="projeto-info-equipe">
                <?php get_template_part('parts/projeto/infos'); ?>
            </div>
          
            <?php if($depo) : ?>
                <div class="projeto-depo">
                    <h4 class="posrel" style="z-index:1"><?php esc_html_e( 'Depoimento de cliente', 'afcwd2022' );?></h4>
                    <?php get_template_part('parts/projeto/depoimento'); ?>
                </div>
            <?php endif;?>
        </div>
        <?php endif;?>
      </div>
    </div>


    <!-- <div class="flexb-justify-space-between">
      <a href="#" class="botao-liso"><span class="fa-light mr-10px"></span>projeto anterior</a>
      <a href="#" class="botao-liso">Próximo projeto<span class="fa-light ml-10px"></span></a>
    </div> -->
  </div>

<?php get_footer(); ?>