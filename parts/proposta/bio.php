<?php
$urlTema = get_template_directory_uri();
$apelido = get_field('proposta_nome');
$anafoto = '6438'; // producao
// $anafoto = '6094'; // local
?>
<div id="sobre" class="area-jump"></div>
<section class="container">
    <div class="w-layout-vflex prop-intro-ana">
        <div class="aninha-wrap">
            <div class="aninha-coluna-foto">
                <img src="<?php echo $urlTema; ?>/assets/images/org-bege-1.svg" alt="Grafismo" aria-hidden="true" class="aninha-detalhe-1">
                
                <?php echo wp_get_attachment_image($anafoto,'full', '', [
                    'class' => 'aninha-img',
                ]); ?>

                <img src="<?php echo $urlTema; ?>/assets/images/org-bege-2.svg" alt="Grafismo" aria-hidden="true" class="aninha-detalhe-2">
                <img src="<?php echo $urlTema; ?>/assets/images/flor-bege-1.svg" alt="Grafismo" aria-hidden="true" class="aninha-detalhe-3">
            </div>
            <div class="aninha-coluna-txt tw-balance">
                <p>Formada em Design Gráfico pela Universidade Federal de Goiás em 2013 e trabalho desde 2007 na área de web, projetando sites, lojas virtuais e portais de artigos.</p>
                <p>Fundei o studio AFC Web Design em 2012 para mostrar meu trabalho ao público, possibilitando realizar sonhos de quem busca ter seu espaço na web com delicadeza, afeto, singularidade e, ao mesmo tempo, de forma extremamente profissional.</p>
                <p>No studio trabalho com design intimista, tratando pessoalmente todas etapas de projeto diretamente com cada cliente, buscando compreender e transparecer a essência de cada pessoa e de seu negócio.</p>
                <p class="mb-10px"><em>Será um prazer trabalhar no projeto, <?php echo wp_strip_all_tags( $apelido ); ?>!</em></p>
                <h2 class="aninha-titulo"><span class="titulo-cursiva cor-bege">Ana Flávia</span></h2>
            </div>
        </div>
    </div>
</section>