<?php
$urlTema = get_template_directory_uri();
global $post, $product;
$printPainel = '6437'; // producao
// $printPainel = '6269'; // local
?>

   <div class="container">
    <div class="prod-tour">
      <div class="prod-tour-cnt">
        <h2>Faça um <span class="titulo-cursiva cor-rosa">tour</span></h2>
        <p class="mb-10px">Dê uma espiadinha no <strong>AFC Painel</strong>, a dashboard que <strong>centraliza todas as <em>personalizações</em> e <em>funcionalidades</em></strong> do tema.</p>
        <div class="flexb-justify-center hide-mobile">
          <a href="#comprar" class="botao inverso rosa jump">comprar<span class="bt-seta"></span></a>
          <a href="#aovivo" class="botao ml-20px rosa jump">ver ao vivo<span class="bt-seta"></span></a>
        </div>
      </div>
      <div class="prod-tour-video">
        <img src="<?php echo $urlTema; ?>/assets/images/org-rosa-1.svg" loading="lazy" alt="" class="prod-tour-video-detalhe">
        <img src="<?php echo $urlTema; ?>/assets/images/flor-rosa-4.svg" loading="lazy" aria-hidden="true" alt="" class="prod-tour-video-flor">

        <div class="prod-tour-video-cover">
            <?php echo wp_get_attachment_image($printPainel,'full', '', [
                'class' => 'fullwidth',
                // 'loading' => 'lazy',
            ]); ?>   
          <div class="prod-tour-video-overlay"></div>
          <div class="prod-tour-play"><i class="fa-thin fa-circle-play"></i></div>
          <a href="https://www.youtube.com/watch?v=mVcd6XkjZYg" class="afczoom link-full w-inline-block"></a>
        </div>
      </div>
      <div class="flexb-justify-center hide-desk">
        <a href="#" class="botao inverso rosa"><?php get_template_part('parts/produto/bt','comprar'); ?> <i class="fa-light fa-arrow-right-long bt-seta"></i></a>
        <a href="#" class="botao ml-20px rosa"><?php get_template_part('parts/produto/bt','aovivo'); ?> <i class="fa-light fa-arrow-right-long bt-seta"></i></a>
      </div>
    </div>
  </div>