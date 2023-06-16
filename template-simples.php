<?php /* Template Name: Página simples */

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

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
  <?php $subtitulo = get_field('subtitulo',get_the_ID()); ?>
  <main id="pag-simples" class="flexb-column flexb-center flexb-justify-center">
    <article class="pb-2em container-medio">
      <header class="has-text-align-center mb-2em">
        <h1 class="mb-0"><span class="titulo-cursiva cor-roxo"><?php the_title(); ?></span></h1>
        <?php if ($subtitulo) : ?><h2><?php echo wp_strip_all_tags($subtitulo); ?></h2><?php endif; ?>
      </header>
      
      <?php the_content(); ?>

      <div class="pt-3em has-text-align-center">
        <a href="/" class="botao grande"><?php esc_html_e( 'voltar ao site', 'afcwd2022' ); ?> <i class="fa-light fa-arrow-right-long bt-seta"></i></a>
      </div>
    </article>
  </main>

<?php endwhile; ?>
<?php endif; ?>

<?php get_template_part('parts/footer/cnpj-horarios'); ?>
<?php get_template_part('parts/whatsapp'); ?>
<?php get_template_part('parts/footer/menu-mobile'); ?>
<?php wp_footer(); ?>

</body>
</html>