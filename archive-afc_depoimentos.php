
<?php 

$args = array(
	'post_type' => 'afc_depoimentos', 
	'order' => 'DESC', 
	'orderby' => 'rand',
	'posts_per_page' => -1,
);
	
$depo = new WP_Query($args);


get_header(); ?>

<div class="container pb-4em">


	<?php if ( $depo->have_posts() ) : ?>
		<div class="clientes-lista">    
			<?php while ( $depo->have_posts() ) : $depo->the_post(); ?>

				<?php get_template_part('alm_templates/depoimento'); ?>

			<?php endwhile; ?>
		</div>
	<?php endif; ?>
	
	<?php // do_shortcode('[ajax_load_more post_type="afc_depoimentos" theme_repeater="depoimento.php" container_type="div" posts_per_page="8" images_loaded="true" scroll="true" scroll_distance="-150" transition_container_classes="clientes-lista" transition="masonry" masonry_animation="slide-up" masonry_selector=".cliente" button_label="<span>'.esc_html__( 'Mais relatos', 'afcwd2022' ).'</span>" button_loading_label="<span>'.esc_html__( 'Carregando', 'afcwd2022' ).'</span>" button_done_label="<span>'.esc_html__( 'Isso é tudo!', 'afcwd2022' ).'</span>" ]'); ?>

    <div class="has-text-align-center mt-2em">
      <div class="mb-10px">
		<?php _e( 'É cliente ou conhece a qualidade dos meus serviços?<br>Conte sua experiência e junte-se ao time acima!', 'afcwd2022' ); ?>
		<i class="fa-light fa-heart cor-negacao"></i>
	  </div>
      <a href="/enviar-relato" class="botao verde">
		<?php esc_html_e( 'Enviar depoimento', 'afcwd2022' ); ?>
		<i class="fa-light fa-arrow-right-long bt-seta"></i>
	  </a>
    
    </div>

</div>

<?php get_footer(); ?>