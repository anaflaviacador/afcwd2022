<?php
$urlTema = get_template_directory_uri();
global $post, $product;
$mockupImg = '6093';

$nome = get_field('nome_produto', $post->ID);
$print = get_field('print_principal', $post->ID);
$fundo = get_field('fundo_area_compra', $post->ID);
$intro = get_field('intro', $post->ID);
?>

  <main id="comprar" class="area-jump">
    <div id="comprar" class="prod-venda-wrap">
      <?php if($fundo): ?>
      <div class="prod-venda-fundo">
        <?php echo wp_get_attachment_image($fundo['ID'],'full', '', [
              'class' => 'prod-venda-fundo-img',
              'loading' => 'lazy',
          ]); ?>
      </div>
      <?php endif; ?>

      <div class="container">
        <img src="<?php echo $urlTema; ?>/assets/images/flor-preto-1.svg" loading="lazy" aria-hidden="true" alt="Grafismo" class="prod-venda-flor-1">
        <img src="<?php echo $urlTema; ?>/assets/images/flor-preto-2.svg" loading="lazy" aria-hidden="true" alt="Grafismo" class="prod-venda-flor-3">
        <img src="<?php echo $urlTema; ?>/assets/images/flor-preto-3.svg" loading="lazy" aria-hidden="true" alt="Grafismo" class="prod-venda-flor-2">

        
        <?php do_action( 'woocommerce_before_single_product' ); // notificacoes ?>

        <div class="prod-venda">
          <div class="prod-venda-comprar">
            <h2 class="has-text-align-center">Compre o tema <span class="titulo-cursiva cor-bege-medio"><?php echo $nome; ?></span></h2>
            
            <?php /*?><div class="wrap-adicionar-carrinho">
                <?php 
                    do_action( 'woocommerce_single_product_summary' );
                    do_action( 'woocommerce_after_single_product' ); 
                ?>
            </div><?php */ ?>

            <?php 
              $p_original = $product->get_regular_price();
              $p_promo = $product->get_sale_price();
              $p_final = $product->get_price();
            ?>
            <div class="prod-preco-txt">a partir de<?php echo $p_promo ? ' <del>&nbsp;<span class="cor-bege-medio">R$'.$p_original.'</span>&nbsp;</del>' : '';?></div>
            <div class="prod-preco">
              <span class="prod-preco-moeda">R$</span>
              <span class="prod-preco-valor"><?php echo $p_final; ?></span>
            </div>

            <div class="flexb-justify-center mb-10px texto-maior">
              <a href="#" class="botao inverso afirmacao grande">
                Quero comprar!<i class="fa-light fa-arrow-right-long bt-seta"></i>
              </a>
            </div>


            <div class="texto-menor has-text-align-center"><strong>10%OFF no Pix ou até 6x sem juros no cartão</strong><br><em>os descontos são aplicados no carrinho</em></div>
          </div>
          <div class="prod-venda-mockup">
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
        </div>
      </div>
      <div class="prod-venda-meios">
        <div class="container">
          <div class="prod-venda">
            <div class="prod-venda-col">
                <img src="<?php echo $urlTema; ?>/assets/images/logos-pgtos2@2x.png" loading="lazy" alt="Formas de pagamento: cartão, pix ou paypal" style="height:19px;">
            </div>
            <div class="prod-venda-col">
              <div><em>A nota fiscal é emitida em até 7 dias após o pagamento.</em></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>