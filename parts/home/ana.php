<?php
$urlTema = get_template_directory_uri();
$anafoto = '6438'; // producao
// $anafoto = '6094'; // local
?>
<div class="aninha">
    <div class="container">
        <div class="aninha-wrap">
            <div class="aninha-coluna-foto">
                <img src="<?php echo $urlTema; ?>/assets/images/org-bege-1.svg" data-w-id="03f60f81-579c-e1c7-c625-78223328e69d" alt="Grafismo" aria-hidden="true" class="aninha-detalhe-1">
                
                <?php echo wp_get_attachment_image($anafoto,'full', '', [
                    'class' => 'aninha-img',
                    // 'loading' => 'lazy',
                ]); ?>

                <img src="<?php echo $urlTema; ?>/assets/images/org-bege-2.svg" data-w-id="e50aa55c-835d-892b-b330-f816055f58d7" alt="Grafismo" aria-hidden="true" class="aninha-detalhe-2">
                <img src="<?php echo $urlTema; ?>/assets/images/flor-bege-1.svg" data-w-id="44d36a74-3a6c-750d-a5e0-b6795d1dd081" alt="Grafismo" aria-hidden="true" class="aninha-detalhe-3">
            </div>

            <div class="aninha-coluna-txt">
                <img src="<?php echo $urlTema; ?>/assets/images/org-bege-3.svg" alt="Grafismo" aria-hidden="true" class="aninha-fundo">

                <h2 class="aninha-titulo">A designer <span class="titulo-cursiva cor-bege">e o studio</span></h2>
                <p>Seja bem-vinda ao meu estudio! Meu nome é Ana Flávia Cador, mas você pode me chamar de Ana. Tenho 31 anos, sou casada e formada em Design Gráfico pela Universidade Federal de Goiás. Trabalho desde 2007 na área de web, projetando  sites com ênfase no empreendedorismo feminino e público jovem.</p>
                <p class="hide-mobile">Descobri minha vocação ainda na adolescência, quando criei o um blog e aprendi a criar meus próprios layouts. E, na faculdade, em 2012, fundei o studio para mostrar meu trabalho ao público, possibilitando realizar sonhos de quem busca ter seu espaço na web.</p>
                <p class="hide-mobile">Por aqui trabalho com design intimista, tratando pessoalmente todas etapas de projeto diretamente com cada cliente, buscando compreender e transparecer a essência de cada uma e de seu negócio.</p>
                <p class="hide-mobile">Toda pessoa é <em>única</em>. Todo projeto é <em>único</em>.</p>

                <div class="aninha-bt hide-mobile">
                    <?php get_template_part('parts/home/ana-bt'); ?>
                </div>
                <div class="aninha-bt hide-desk">
                    <?php get_template_part('parts/home/ana-bt'); ?>
                </div>
            </div>
        </div>
    </div>
</div>