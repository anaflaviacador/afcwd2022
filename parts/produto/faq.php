  <div class="container pt-3em pb-4em">

    <div class="has-text-align-center mb-2em">
        <h2><?php _e( 'Perguntas <span class="titulo-cursiva cor-azul">frequentes</span>', 'afcwd2022' ); ?></h2>
    </div>      

    <div class="colunas-wrap num-3 texto-menor">
      <div class="coluna-item num-3 mb-0">
        <?php afc_faq(array('template','coluna-1'),'azul'); ?>
      </div>
      <div class="coluna-item num-3 mb-0">
        <?php afc_faq(array('template','coluna-2'),'azul'); ?>
      </div>
      <div class="coluna-item num-3 mb-0">
        <?php afc_faq(array('template','coluna-3'),'azul'); ?>
      </div>      
    </div>

    <div class="has-text-align-center pt-2em mb-2em texto-maior">
      <a href="#comprar" class="botao inverso azul grande jump">
        <?php esc_html_e( 'Quero comprar!', 'afcwd2022' ); ?> <i class="fa-light fa-arrow-right-long bt-seta"></i>
      </a>
    </div>

  </div>