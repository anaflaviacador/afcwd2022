<?php 
$urlTema = get_template_directory_uri();
?>
<div class="lista-projeto-col">
    <img src="<?php echo $urlTema; ?>/assets/images/org-bege-4.svg" loading="lazy" aria-hidden="true" alt="" class="list-projeto-fundo-2">
    <img src="<?php echo $urlTema; ?>/assets/images/org-bege-4.svg" loading="lazy" aria-hidden="true" alt="" class="list-projeto-fundo-1">
    
    <?php get_template_part('parts/loop','projeto'); ?>
</div>