<?php
$urlTema = get_template_directory_uri();
?>
<div class="rodape-selos">
    <div class="container">
        <div class="selos-container">
            <div class="selos-lista">
                <div class="selo-item">
                    <div class="selo-titulo"><?php esc_html_e( 'Métodos de pagamento aceitos', 'afcwd2022' ); ?></div>
                    <img src="<?php echo $urlTema; ?>/assets/images/logos-pgtos@2x.png" loading="lazy" alt="Cartões de crédito, pix e paypal" style="height:19px">
                </div>
                <div class="selo-item">
                    <div class="selo-titulo"><?php esc_html_e( 'Navegação segura', 'afcwd2022' ); ?></div>
                    <a href="https://transparencyreport.google.com/safe-browsing/search?url=afcweb.design" target="_blank" rel="noopener" class="w-inline-block">
                        <img src="<?php echo $urlTema; ?>/assets/images/logos-google@2x.png" loading="lazy" alt="Google" style="height:20px">
                    </a>
                </div>
                <div class="selo-item">
                    <div class="selo-titulo"><?php esc_html_e( 'Criptografia via', 'afcwd2022' ); ?></div>
                    <img src="<?php echo $urlTema; ?>/assets/images/logos-cloudflare@2x.png" loading="lazy" alt="Cloudflare" style="height:22px">
                </div>
                <div class="selo-item">
                    <div class="selo-titulo"><?php esc_html_e( 'Site hospedado na', 'afcwd2022' ); ?></div>
                    <a href="https://afcweb.design/indica-hospedagem" class="w-inline-block">
                        <img src="<?php echo $urlTema; ?>/assets/images/logos-nuvem@2x.png" loading="lazy" alt="Nuvem Hospedagem" style="height:21px">
                    </a>
                </div>
            </div>
            <div class="selos-bt-final">
                <a href="#top" class="topo-site jump"><?php esc_html_e( 'voltar ao topo', 'afcwd2022' ); ?> <i class="fa-light fa-angle-up cor-bege-medio"></i></a>
            </div>
        </div>
    </div>
</div>