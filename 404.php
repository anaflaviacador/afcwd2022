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
<?php get_template_part('parts/header/loader'); ?>
<?php get_template_part('parts/header/topbar'); ?>

<header id="top" class="cabecalho">
    <div class="container">
        <div data-w-id="d1d527fb-cfda-51f0-9615-6c321f5eebb1" class="header-fundo sem-clique"></div>
        <?php get_template_part('parts/header/principal'); ?>
    </div>
</header>


  <main id="pag-simples" class="flexb-column flexb-center flexb-justify-center">
    <article class="pb-2em container-menor">
      <header class="has-text-align-center mb-2em">
        <h1 class="mb-0"><span class="titulo-cursiva cor-roxo"><?php esc_html_e( 'Precisa de ajuda?', 'afcwd2022' ); ?></span></h1>
      </header>
      
      <p class="has-text-align-center"><strong><?php esc_html_e( 'Essa página foi excluída recentemente.', 'afcwd2022' ); ?></strong></p>
      <p class="has-text-align-center"><?php esc_html_e( 'Você poderá navegar pelo site através da navegação acima, ou entrar em contato caso precise de ajuda.', 'afcwd2022' ); ?></p>
      <div class="has-text-align-center">
        <a href="<?php echo $homeurl; ?>" class="botao inverso grande">
            <?php esc_html_e( 'voltar ao site', 'afcwd2022' ); ?> 
            <i class="fa-light fa-arrow-right-long bt-seta"></i>
        </a>
      </div>
    </article>
  </main>

<?php get_template_part('parts/footer/cnpj-horarios'); ?>
<?php get_template_part('parts/whatsapp'); ?>
<?php get_template_part('parts/footer/menu-mobile'); ?>
<?php wp_footer(); ?>

</body>
</html>