<?php
$urlTema = get_template_directory_uri();
$heroImg = '6441'; // producao
// $heroImg = '6087'; // local
?>

<div class="home-intro">
    <div class="container">
        <div class="home-intro-wrap">
            <div class="home-intro-foto">
                <?php echo wp_get_attachment_image($heroImg,'full', '', [
                    'class' => 'home-intro-img nolazing',
                    // 'loading' => 'lazy',
                ]); ?>

                <img src="<?php echo $urlTema; ?>/assets/images/flor-roxo-1.svg" data-w-id="066cb1cb-1545-4c81-b194-7a4cb56eb6dd" alt="Grafismo" aria-hidden="true" class="home-intro-detalhe nolazing">
            </div>
            <div class="home-intro-cnt has-text-align-center">

                <h1 class="home-intro-titulo hidden"><?php esc_html_e( 'Tire seu projeto do papel e tenha o site que sempre sonhou.', 'afcwd2022' ); ?></h1>

                <h2 class="home-intro-titulo" aria-hidden="true">Tire seu projeto do papel e tenha
                    <?php get_template_part('parts/home/escrita'); ?>
                    que sempre sonhou
                </h2>
            
                <div class="home-intro-bt-desk">
                    <?php get_template_part('parts/home/intro-bt'); ?>
                </div>
            </div>
            <div class="home-intro-bt-mob">
                <?php get_template_part('parts/home/intro-bt'); ?>
            </div>
        </div>
    </div>
</div>