<?php get_header(); ?>

<?php get_template_part('parts/home/intro'); ?>
<?php get_template_part('parts/home/servicos'); ?>
<?php get_template_part('parts/projetos-destaque'); ?>
<?php get_template_part('parts/home/ana'); ?>
<?php afc_depoimentos(7,'projeto'); ?>

<?php get_footer(); ?>