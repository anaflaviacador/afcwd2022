<?php 
$nomesite = get_bloginfo('name');
$nomeslogan = get_bloginfo('description');
$homeurl = home_url(('/'));
$urlTema = get_template_directory_uri();
?>
<!DOCTYPE html>
<html <?php echo get_language_attributes(); ?> dir="ltr" data-wf-page="62eeb7fcdd39ff6e2af3173b" data-wf-site="62ed1cad053ccd52a2be0a5a">
	<head>
		<title class="notranslate"> 
			<?php echo wp_title( '|', true, 'right' ).$nomesite; ?>
		</title>
		<?php get_template_part('parts/header/metatags'); ?>
	</head>
<body class="<?php echo join(' ',get_body_class()); ?>">
<!-- <div aria-hidden="true" id="fakeloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner"><div class="loader"></div></div></div></div> -->

<?php get_template_part('parts/header/topbar'); ?>

<header id="top" class="cabecalho">
    <div class="container">
        <?php if(is_front_page() || is_page_template('template-simples.php')): ?>
            <div data-w-id="d1d527fb-cfda-51f0-9615-6c321f5eebb1" class="header-fundo sem-clique"></div>
        <?php endif; ?>

        <?php if(class_exists('woocommerce')): ?>
            <?php if(is_product()): ?>
                <?php $ativa_LP = get_field('ativar_lp'); ?>
                <?php if($ativa_LP == true): ?>
                    <div data-w-id="d1d527fb-cfda-51f0-9615-6c321f5eebb1" class="header-fundo sem-clique"></div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>

        <?php if(is_singular('etheme_portfolio')): ?>
            <div class="header-fundo-projeto sem-clique"></div>
        <?php endif; ?>

        <?php get_template_part('parts/header/principal'); ?>
    </div>

    <?php 
        if(!is_front_page()) {
            if( 
                (is_page() && !is_checkout() && !is_cart() ) 
                || is_post_type_archive(array('etheme_portfolio','afc_depoimentos')) 
                || (taxonomy_exists('tipoprojeto') && !is_post_type_archive() && !is_singular())
            ) { get_template_part('parts/header/pag-internas'); }
            
            global $post;
            $ativa_LP = get_field('ativar_lp', $post->ID);
            if ( is_account_page() || is_product_category() || is_shop() || (is_product() && $ativa_LP == false) ) {
                get_template_part('parts/header/pag-internas','loja');
            }
        
        }
    ?>
</header>