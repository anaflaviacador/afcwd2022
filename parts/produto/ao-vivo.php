<?php
$urlTema = get_template_directory_uri();
global $post, $product;
$mockupIpadImg = '6443'; // producao
// $mockupIpadImg = '6092'; // local
?>

<div id="aovivo" class="area-jump">
    <div class="container"><img src="<?php echo $urlTema; ?>/assets/images/org-verde-2.svg" alt="" class="prod-exs-fundo">
      <div class="container-menor has-text-align-center">
        <h2>Exemplos de <span class="titulo-cursiva cor-verde">uso e clientes</span></h2>
        <p>Veja abaixo <strong>prints de blogs e sites</strong> que fazem uso do template e uma lista com vários outros <strong>exemplos ao vivo</strong>.</p>
      </div>
      <div class="prod-exs">
        <div class="prod-prints"><img src="<?php echo $urlTema; ?>/assets/images/flor-verde-1.svg" alt="Grafismo" class="prod-prints-flor">
          <div class="prod-prints-slider">
            <div id="prints-template" class="splide">
              <div class="splide__track">
                <div class="splide__list">
                <?php if ( have_rows( 'showcase' ) ) : ?>
                    <?php while ( have_rows( 'showcase' ) ) : the_row(); ?>
                        <?php if ( have_rows( 'lista_prints' ) ) : ?>
                            <?php while ( have_rows( 'lista_prints' ) ) : the_row(); ?>
                                <?php $print = get_sub_field( 'print' ); ?>
                                <div class="splide__slide">
                                    <div class="prod-print-item sem-clique">
                                    <div class="mockup">
                                        <div class="mockup-area-ipad">
                                            <?php if($print): ?>
                                                <?php echo wp_get_attachment_image($print['ID'],'medium', '', [
                                                    'class' => 'mockup-img',
                                                    // 'loading' => 'lazy',
                                                ]); ?>    
                                            <?php endif; ?>     
                                        </div>
                                        <div class="mockup-device-ipad sem-clique" style="background-image:url(<?php echo wp_get_attachment_image_url($mockupIpadImg,'medium');?>);"></div>
                                    </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
              </div>
              <div class="splide-nav-arrows cor-verde">
                
                  <div class="splide__arrows hide-mobile">
                    <button class="splide__arrow splide__arrow--prev"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 40 40">
                        <path fill="currentColor" d="M30.03 20.06a2 2 0 0 1-.25.76l-18.06 18.9c-.5.36-1 .36-1.5 0-.34-.48-.34-.93 0-1.35l17.42-18.45L10.22 1.74c-.34-.49-.34-1.01 0-1.5.5-.34 1-.34 1.5 0L29.78 19.3c.17.24.25.52.25.77Z"></path>
                      </svg></button>
                    <button class="splide__arrow splide__arrow--next"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 40 40">
                        <path fill="currentColor" d="M30.03 20.06a2 2 0 0 1-.25.76l-18.06 18.9c-.5.36-1 .36-1.5 0-.34-.48-.34-.93 0-1.35l17.42-18.45L10.22 1.74c-.34-.49-.34-1.01 0-1.5.5-.34 1-.34 1.5 0L29.78 19.3c.17.24.25.52.25.77Z"></path>
                      </svg></button>
                  
                </div>
              </div>

              <div class="splide-nav cor-verde">
                <div class="hide-mobile">
                    <ul class="splide__pagination splide__pagination--ltr"></ul>
                </div>
                <div class="hide-desk">
                  <div class="botao-liso verde">role para o lado e descubra <i class="fa-light fa-arrow-right-long"></i></div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="prod-exs-lista-wrap">
          <ul role="list" class="prod-exs-lista">
            <?php if ( have_rows( 'demo_exemplos' ) ) : ?>
                <?php while ( have_rows( 'demo_exemplos' ) ) : the_row(); ?>
                    <?php $link_exemplo = get_sub_field( 'link_exemplo' ); ?>
                    <?php if ( $link_exemplo ) : ?>
                        <li class="prod-exs-lista-li">
                            <a href="<?php echo esc_url( $link_exemplo['url'] ); ?>" target="<?php echo esc_attr( $link_exemplo['target'] ); ?>" class="cor-grafite"><?php echo esc_html( $link_exemplo['title'] ); ?></a>
                        </li>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>

          </ul>
          <?php /* ?><div class="flexb-justify-center hide-mobile">
            <a href="#comprar" class="botao inverso verde grande jump"><?php get_template_part('parts/produto/bt','comprar'); ?> <i class="fa-light fa-arrow-right-long bt-seta"></i></a>
          </div><?php */ ?>
        </div>
        <?php /* ?>
        <div class="flexb-justify-center hide-desk">
          <a href="#" class="botao inverso verde"><?php get_template_part('parts/produto/bt','comprar'); ?> <i class="fa-light fa-arrow-right-long bt-seta"></i></a>
        </div>
        <?php */ ?>
      </div>
    </div>
  </div>