<?php get_header(); 
$subtitulo = get_field('subtitulo',$post->ID);
?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

  <main id="pag-simples" class="flexb-column flexb-center flexb-justify-center">
    <article class="pb-2em container-medio">      
      <?php the_content(); ?>
    </article>
  </main>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>