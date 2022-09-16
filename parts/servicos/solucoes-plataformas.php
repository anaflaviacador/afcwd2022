<?php
$urlTema = get_template_directory_uri();
$img1 = '6445'; // producao
$img2 = '6446'; // producao
$img3 = '6447'; // producao
$img4 = '6448'; // producao
// $img1 = '6135'; // local
// $img2 = '6136'; // local
// $img3 = '6137'; // local
// $img4 = '6138'; // local
?>
<div class="container mb-2em">
    <h2 class="para-seo">Soluções</h2>
    <div id="solucoes" class="area-servicos area-jump">
        <div class="area-servico">
            <?php echo wp_get_attachment_image($img1,'full', '', [
                'class' => 'servico-img',
                'loading' => 'lazy',
            ]); ?>
            <h3 class="servico-titulo">
                <?php _e( 'Design <span class="titulo-cursiva cor-verde">exclusivo</span>', 'afcwd2022' ); ?>
            </h3>
            <div class="servico-cnt">
                <p><?php _e( 'Aqui no studio é produzido um <strong>layout exclusivo</strong> para ti, com a estética mais adequada para o seu público. Com design elegante, inteligente, a personalidade de sua marca será exaltada com um layout <strong>incrível desde pequenos celulares até o maior dos monitores</strong> sem perder elegância e facilidade de navegação.', 'afcwd2022' ); ?></p>
            </div>
        </div>
        <div class="area-servico">
            <?php echo wp_get_attachment_image($img2,'full', '', [
                'class' => 'servico-img',
                'loading' => 'lazy',
            ]); ?>
            <h3 class="servico-titulo">
                <?php _e( 'Código <span class="titulo-cursiva cor-verde">otimizado</span>', 'afcwd2022' ); ?>
            </h3>
            <div class="servico-cnt">
                <p><?php _e( 'O <strong>código é escrito do zero para seu projeto</strong>, atendendo suas necessidades de forma direta e prática, sem uso de templates prontos ou page builders pesados. É seguido à risca o layout e estratégias do seu modelo de negócio, alinhado às boas práticas de programação e SEO para te auxiliar<strong> no ranking de buscas Google</strong>.', 'afcwd2022' ); ?></p>
            </div>
        </div>
        <div class="area-servico">
            <?php echo wp_get_attachment_image($img3,'full', '', [
                'class' => 'servico-img',
                'loading' => 'lazy',
            ]); ?>
            <h3 class="servico-titulo">
                <?php _e( 'Suporte <span class="titulo-cursiva cor-verde">direcionado</span>', 'afcwd2022' ); ?>
            </h3>
            <div class="servico-cnt">
                <p><?php _e( 'O studio te ajuda nos momentos mais difíceis na hora de gerir um site depois de ir ao ar, com <strong>orientações técnicas</strong> sempre que precisar, 90 dias de garantia e dicas de <strong>boas práticas de gestão</strong> enquanto usar o layout. Também é produzido diversas video-aulas ensinando como usar seu novo painel para você consultar quando necessário.', 'afcwd2022' ); ?></p>
            </div>
        </div>
        <div class="area-servico">
            <?php echo wp_get_attachment_image($img4,'full', '', [
                'class' => 'servico-img',
                'loading' => 'lazy',
            ]); ?>
            <h3 class="servico-titulo">
                <?php _e( 'Painel <span class="titulo-cursiva cor-verde">dedicado</span>', 'afcwd2022' ); ?>
            </h3>
            <div class="servico-cnt">
                <p><?php _e( 'Há vários <strong>campos personalizados</strong> e dinâmicos em todo layout para garantir total <strong>autonomia na gestão e das informações</strong> via painel. É possível criar soluções para seu negócio para promover uma experiência incrível para seu público como: área de membros, conteúdo restrito a usuários com login único e muito mais!', 'afcwd2022' ); ?></p>
            </div>
        </div>
    </div>
</div>


<div id="plataformas" class="area-jump mb-3em">
    <div class="cor-bege-claro-bg posrel">
        <div class="container">
            <div class="area-plataformas">
                <h2 class="para-seo"><?php esc_html_e( 'Plataformas utilizadas', 'afcwd2022' ); ?></h2>
                <div class="plataformas-cnt">
                    <h3>
                        <?php _e( 'As melhores <span class="titulo-cursiva cor-bege">plataformas</span>', 'afcwd2022' ); ?>
                    </h3>
                    <div>
                        <?php _e( 'O studio projeto sites nas melhores plataformas para garantir <strong>maior compatibilidade</strong> nas integrações e <strong>liberdade criativa</strong> no design!', 'afcwd2022' ); ?>
                    </div>
                </div>

                <img src="<?php echo $urlTema; ?>/assets/images/arrow-sessao.svg" loading="lazy" alt="Seta" class="area-plataformas-div" aria-hidden="true">

                <div class="plataformas-lista overflowy">
                    <div class="plataforma-item">
                        <em><?php esc_html_e( 'gestão de websites', 'afcwd2022' ); ?></em>
                        <img src="<?php echo $urlTema; ?>/assets/images/logo-webflow.svg" loading="lazy" alt="Logo Wordpress" height="" class="plataforma-logo">
                    </div>
                    <div class="plataforma-item">
                        <em><?php esc_html_e( 'gestão de lojas online', 'afcwd2022' ); ?></em>
                        <img src="<?php echo $urlTema; ?>/assets/images/logo-wordpress.svg" loading="lazy" alt="Logo Woocommerce" height="" class="plataforma-logo">
                    </div>
                    <div class="plataforma-item">
                        <em><?php esc_html_e( 'design front-end', 'afcwd2022' ); ?></em>
                        <img src="<?php echo $urlTema; ?>/assets/images/logo-woocommerce.svg" loading="lazy" alt="Logo webflow" height="" class="plataforma-logo">
                    </div>
                </div>
            </div>
        </div>
        <div class="plataformas-gradiente"></div>
    </div>
</div>