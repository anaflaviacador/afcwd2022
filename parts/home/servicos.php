<?php
$urlTema = get_template_directory_uri();
?>

<div class="home-servicos">
    <div class="container">
        <div class="home-servicos-wrap">
            <div class="home-serv-col">
                <img src="<?php echo $urlTema;?>/assets/images/org-verde-1.svg" alt="grafismo orgânico" aria-hidden="true" class="home-serv-fundo-1 sem-clique">

                <h3>
                    <?php _e('Design único <span class="titulo-cursiva cor-verde">e elegante</span>','afcwd2022'); ?>
                </h3>
                <p>
                    <?php _e('Desde 2007 o studio realiza sonhos, produzindo sites e lojas virtuais com design elegante,
                    <strong>inteligente</strong>, cheio de <strong>personalidade</strong> e <strong>propósito</strong>
                    para empreendedoras e influencers.','afcwd2022'); ?>
                </p>
            </div>

            <div class="home-serv-col middle">
                <img src="<?php echo $urlTema;?>/assets/images/org-verde-1.svg" alt="grafismo orgânico" aria-hidden="true" class="home-serv-fundo-2 sem-clique">

                <h3>
                    <?php _e('Código limpo <span class="titulo-cursiva cor-verde">e otimizado</span>','afcwd2022'); ?>
                </h3>
                <p>
                    <?php _e('É seguido à risca as diretrizes de layout e estratégias do seu modelo de negócio, alinhado às boas práticas de programação, com o código feito do zero e SEO amigável.','afcwd2022'); ?>
                </p>
            </div>

            <div class="home-serv-col last">
                <img src="<?php echo $urlTema;?>/assets/images/org-verde-1.svg" alt="grafismo orgânico" aria-hidden="true" class="home-serv-fundo-3 sem-clique">

                <h3>
                    <?php _e('Suporte <span class="titulo-cursiva cor-verde">direcionado</span>','afcwd2022'); ?>
                </h3>
                <p>
                    <?php _e('Não estará sozinha momentos mais difíceis na hora de gerenciar seu novo site! É fornecido
                    <strong>orientações técnicas</strong>, dicas de <strong>boas práticas de gestão</strong> e
                    treinamento para sua dashboard.<strong></strong>','afcwd2022'); ?>
                </p>
            </div>
        </div>
        <div class="home-serv-ver-mais hide-mobile">
            <?php get_template_part('parts/home/servicos-bt-mais'); ?>
        </div>
        <div class="home-serv-ver-mais hide-desk">
            <?php get_template_part('parts/home/servicos-bt-mais'); ?>
        </div>
    </div>
</div>