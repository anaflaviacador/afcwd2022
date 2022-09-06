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
        <div data-w-id="d1d527fb-cfda-51f0-9615-6c321f5eebb1" class="header-fundo sem-clique"></div>
        <div class="header-site">
            <a href="<?php echo $homeurl; ?>" aria-current="page" class="marca-site w-inline-block w--current">
				<img src="<?php echo $urlTema; ?>/assets/images/marca-afcwebdesign.svg" loading="lazy" alt="Marca AFC Web Design">
			</a>


			<?php echo afc_menu('primary',''); /* menu */ ?>


			<?php if (class_exists('Woocommerce')): 
                $conta = esc_url( wp_login_url( get_permalink() ) );
                if(is_user_logged_in()) $conta = esc_url(wc_get_page_permalink('myaccount'));
                
                $pgCarrinho = esc_url(wc_get_page_permalink( 'cart' ));
                $numItens = WC()->cart->get_cart_contents_count();
			?>
            <ul role="list" class="shop-nav">
                <li class="shop-nav-li">
                    <a href="<?php echo $conta; ?>" class="shop-nav-link w-inline-block"><img src="<?php echo $urlTema; ?>/assets/images/ico-login.svg" loading="lazy"
                            alt="Login" aria-hidden="true" class="shop-nav-ico mr-10px">
						<span>
						<?php if(is_user_logged_in()): ?>
							<?php _e( 'Minha<br>conta', 'afcwd2022' ); ?>
						<?php else: ?>
							<?php _e( 'Fazer<br>login', 'afcwd2022' ); ?>
						<?php endif; ?>
						</span>
                    </a>
                </li>
                <li class="shop-nav-li">
                    <a href="<?php echo $pgCarrinho; ?>" class="shop-nav-link w-inline-block"><img src="<?php echo $urlTema; ?>/assets/images/ico-cart.svg" loading="lazy"
                            alt="<?php esc_html_e( 'Carrinho', 'afcwd2022' ); ?>" class="shop-nav-ico">
                        <span class="shop-nav-ncart"><?php echo $numItens; ?></span>
                    </a>
                </li>
            </ul>
			<?php endif; ?>
        </div>
    </div>
</header>