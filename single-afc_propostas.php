<!DOCTYPE html>
<html <?php echo get_language_attributes(); ?> dir="ltr" data-wf-page="64e919b92660ac316d531c74" data-wf-site="64e89bb08683348b6e970712">
	<head>
		<title class="notranslate"> 
			<?php echo wp_title( '|', true, 'right' ).get_bloginfo('name'); ?>
		</title>
		<?php get_template_part('parts/header/metatags'); ?>
        <style>
            html, body {overflow: unset !important;}
        </style>
	</head>
<body class="<?php echo join(' ',get_body_class()); ?>">
<div id="projetos" class="area-jump-top"></div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php $bio = get_field('proposta_bio'); ?>

    <?php get_template_part('parts/proposta/cabecalho'); ?>
    <?php get_template_part('parts/proposta/forma-trabalho'); ?>
    <?php if($bio) get_template_part('parts/proposta/bio'); ?>
    <?php get_template_part('parts/proposta/clientes'); ?>
    <?php get_template_part('parts/proposta/valores'); ?>

<?php endwhile; endif; ?>

<?php get_template_part('parts/whatsapp'); ?>
<?php wp_footer(); ?>

<script>
    jQuery(document).ready(function ($) {
        var timeline = $('.timeline'),
            timelineLastBox = $('.timeline-end'),
            lastboxHeight = timelineLastBox.outerHeight();
        timeline.attr("style", "height: calc(100% - " + lastboxHeight + "px - 2em);");
    });
</script>

</body>
</html>