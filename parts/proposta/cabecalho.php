<?php 
$homeurl = home_url(('/'));
$urlTema = get_template_directory_uri();
$apelido = get_field('proposta_nome');
$projetos = get_field('proposta_projetos');
$bio = get_field('proposta_bio');
$mockupIpadImg = '6443'; // producao
// $mockupIpadImg = '6092'; // local
?>
<nav class="w-layout-hflex prop-nav">
    <a href="#projetos" class="prop-nav-link">Projetos</a>
    <a href="#forma-trabalho" class="prop-nav-link">Forma de trabalho</a>
    <?php echo $bio ? '<a href="#sobre" class="prop-nav-link">Quem faz</a>' : ''?>
    <a href="#clientes" class="prop-nav-link">Clientes</a>
    <a href="#investimento" class="prop-nav-link">Investimento</a>
</nav>

<section class="container">
    <div class="w-layout-hflex prop-topo">
        <div class="w-layout-vflex">
            <div>Ana Flávia Cador</div>
            <div>Web Designer</div>
        </div>
        <a href="<?php echo $homeurl; ?>" aria-current="page" class="marca-site w-inline-block" style="top:unset">
            <img src="<?php echo $urlTema; ?>/assets/images/marca-afcwebdesign.svg" alt="Marca AFC Web Design">
        </a>

        <div class="w-layout-vflex prop-topo-right">
            <?php echo do_shortcode('[email endereco="contato@afcweb.design" texto="contato@afcweb.design"]'); ?>
            <a href="https://wa.me/5562996269941?text=Oi%20Ana!%20Vi%20sua%20proposta." target="_blank">+55 62 9 9626-9941</a>
        </div>
    </div>

    <div class="w-layout-vflex prop-intro">
        <h1 class="cor-roxo"><span class="titulo-cursiva">Olá, <?php echo wp_strip_all_tags( $apelido ); ?>!</span></h1>
        <h2 class="prop-intro-chamada tw-balance">Saiba como poderei agregar valor ao seu negócio</h2>
        <div class="cor-roxo tw-balance"><em>Aproveite e conheça alguns projetos.</em></div>
    </div>
</section>

<div class="prop-exemplos-proj-wrap">
    <section data-w-id="dbde38c3-8b99-73e9-544b-61184ba2474c" class="prop-exemplos-proj">
        <?php 
        $args = array('post_type' => 'etheme_portfolio', 'posts_per_page' => -1, 'post__in' => $projetos);
        $publicacoes = new WP_Query($args);
        if ( $publicacoes->have_posts() ) : while ( $publicacoes->have_posts() ) : $publicacoes->the_post(); ?>
            <?php $print = get_field('imagem_extra_print', get_the_ID() ); ?>
            <div class="projeto-wrap posrel">
                <div class="mockup">
                    <div class="mockup-area-ipad">
                        <?php if($print): ?>
                            <?php echo wp_get_attachment_image($print['ID'],'full', '', [
                                'class' => 'mockup-img',
                            ]); ?>    
                        <?php endif; ?>  
                    </div>
                    <div class="mockup-device-ipad sem-clique" style="background-image:url(<?php echo wp_get_attachment_image_url($mockupIpadImg,'full');?>);"></div>
                </div>
            </div>
        <?php endwhile; endif; wp_reset_query(); ?>
    </section>
</div>