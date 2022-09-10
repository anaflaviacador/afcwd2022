<?php
$urlTema = get_template_directory_uri();
$img1 = '6139';
$img2 = '6140';
?>


<div class="area-jump" id="planos">
    <div class="pb-4em cor-roxo-claro-bg">
        <div class="container-menor has-text-align-center pb-2em">
            <h2 class="mb-0 upper-titulo">
                <?php _e( 'Serviços por <span class="titulo-cursiva cor-roxo">assinatura</span><span class="titulo-cursiva cor-verde"></span>', 'afcwd2022' ); ?>
            </h2>
            <div>
                <?php _e( 'Serviços especiais recorrentes opcionais <strong>para quem já é cliente da casa</strong> e possui um layout exclusivo implementado.', 'afcwd2022' ); ?>
            </div>
        </div>
        <div class="container">
            <div class="area-servicos-cliente">
                <div class="area-servico-cliente">
                    <?php echo wp_get_attachment_image($img1,'full', '', [
                        'class' => 'servico-cliente-img',
                        'loading' => 'lazy',
                    ]); ?>
                    <div class="servico-cnt">
                        <h4 class="mb-0"><?php esc_html_e( 'Email marketing', 'afcwd2022' ); ?></h4>
                        <p class="mb-10px">
                            <?php _e( 'Engaje com seu público por email e trabalhe com listas, automações, segmentações, campanhas e armazenamento de <strong>leads ilimitados</strong>! Ganhe um <em>template personalizado</em> com sua identidade e integre com sua loja.', 'afcwd2022' ); ?>
                        </p>
                        <a href="/servicos/email-marketing" class="botao inverso">
                            <?php esc_html_e( 'conhecer planos', 'afcwd2022' ); ?>
                            <i class="fa-light fa-arrow-right-long bt-seta"></i>
                        </a>
                    </div>
                </div>
                <div class="area-servico-cliente">
                    <?php echo wp_get_attachment_image($img2,'full', '', [
                        'class' => 'servico-cliente-img',
                        'loading' => 'lazy',
                    ]); ?>
                    <div class="servico-cnt">
                        <h4 class="mb-0"><?php esc_html_e( 'Manutenção técnica', 'afcwd2022' ); ?></h4>
                        <p class="mb-10px">
                            <?php _e( '<strong>Enquanto você cuida do seu negócio, o studio cuida do seu site!</strong> São realizadas otimizações e atualizações de sua plataforma semanalmente, com planos prevendo edições de layout e outros serviços de design para seu site.', 'afcwd2022' ); ?>
                        </p>
                        <a href="/servicos/planos" class="botao inverso">
                            <?php esc_html_e( 'conhecer planos ', 'afcwd2022' ); ?>
                            <i class="fa-light fa-arrow-right-long bt-seta"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>