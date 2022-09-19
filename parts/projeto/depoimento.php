<?php
global $post;
$depo = get_field('info_proj_relato', $post->ID);
$urlTema = get_template_directory_uri();
?>

<img src="<?php echo $urlTema; ?>/assets/images/aspas.svg" aria-hidden="true" alt="Grafismo" class="ico-aspas inverso">

<p class="texto-menor"><?php echo strip_tags(get_post_field('post_content', $depo)); ?></p>

<div class="projeto-depo-cliente"><?php echo get_the_title($depo); ?></div>