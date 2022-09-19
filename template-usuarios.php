<?php /* Template Name: Senhas e cadastros */
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
  <header class="cabecalho"></header>
  <main id="pag-simples" class="afc-login">
    <?php if (has_post_thumbnail()) : ?>
      <div class="login-fundo" style="background-image: url(<?php echo afc_thumb('full');?>)"></div>
    <?php endif; ?>
      <div class="login-fundo-overlay"></div>

    <div class="afc-login-container pt-2em pb-2em">
        <img src="<?php echo $urlTema; ?>/assets/images/flor-preto-2.svg" aria-hidden="true" alt="Grafismo" class="login-detalhe-fundo-2">
        <img src="<?php echo $urlTema; ?>/assets/images/flor-preto-1.svg" aria-hidden="true" alt="Grafismo" class="login-detalhe-fundo-1">

      <div class="flexb-column flexb-center">
        <a href="/" class="marca-site marca-login w-inline-block">
            <img src="<?php echo $urlTema; ?>/assets/images/marca-afcwebdesign-negative.svg" alt="Marca AFC web Design">
        </a>

        <div class="afc-login-wrap">
          <?php $colunica = get_field('form_layout_col_unica'); ?>
          <?php $form = get_field('selecionar_wpforms'); ?>
          
          <?php if($colunica): ?>
            <div>
              <h1 class="has-text-align-center"><?php the_title(); ?></h1>
              <?php the_content(); ?>

              <?php if($form) echo do_shortcode('[wpforms id="'.$form.'" title="false"]'); ?>
            </div>
          <?php else: ?>
            <div class="login-txt">
              <div>
                <h1 class="has-text-align-center"><?php the_title(); ?></h1>
                <p class="texto-menor">
                  <?php the_content(); ?>
                </p>
              </div>
              <div class="has-text-align-right">
                <a href="/minha-conta" class="botao-liso">
                  <?php esc_html_e( 'fazer login', 'afcwd2022' ); ?> 
                  <i class="fa-light fa-arrow-right-long bt-seta"></i>
                </a>
              </div>
            </div>
            <div class="login-area-form">
              <?php if($form) echo do_shortcode('[wpforms id="'.$form.'" title="false"]'); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>

  </main>



<?php get_template_part('parts/footer/cnpj-horarios'); ?>
<?php get_template_part('parts/whatsapp'); ?>
<?php get_template_part('parts/footer/menu-mobile'); ?>
<?php wp_footer(); ?>

</body>
</html>  