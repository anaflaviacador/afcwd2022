<?php /* Template Name: Conta loja */ ?>


<?php if(is_user_logged_in()) : ?>

  <?php get_header(); ?>

  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  
        <?php the_content(); ?>

  <?php endwhile; ?>
  <?php endif; ?>

  <?php get_footer(); ?>

<?php else : ?>

<?php get_template_part('parts/area-login'); ?>

<?php endif; ?>