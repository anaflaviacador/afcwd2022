<?php
$urlTema = get_template_directory_uri();
global $post, $product;
$mockupImg = '6444'; // producao
// $mockupImg = '6093'; // local

$nome = get_field('nome_produto', $post->ID);
$print = get_field('print_principal', $post->ID);
$intro = get_field('intro', $post->ID);
?>

  <div class="container">
    <div class="prod-intro">
      <div class="prod-intro-preview hide-mobile">
            <img src="<?php echo $urlTema; ?>/assets/images/flor-roxo-1.svg" loading="lazy" alt="Grafismo" class="prod-intro-detalhe">
        <div class="prod-preview">
          <div class="proj-grid-item">
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
          </div>
        </div>
      </div>

      <div class="prod-intro-cnt">
        <h1 class="prod-intro-titulo"><?php echo $nome; ?></h1>
        <?php if ($intro) : ?>
            <h2><?php echo $intro['chamada']; ?></h2>
        <?php endif; ?>
        <div class="prod-preview hide-desk">
          <div class="proj-grid-item">
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
          </div>
        </div>

        <div><?php echo $intro['introducao']; ?></div>
        <div class="flexb-justify-center">
          <a href="#comprar" class="botao inverso grande jump"><?php get_template_part('parts/produto/bt','comprar'); ?> <i class="fa-light fa-arrow-right-long bt-seta"></i></a>
          <a href="#aovivo" class="botao grande ml-20px jump"><?php get_template_part('parts/produto/bt','aovivo'); ?> <i class="fa-light fa-arrow-right-long bt-seta"></i></a>
        </div>
      </div>
    </div>
  </div>
