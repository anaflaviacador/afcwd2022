<?php get_header(); if (is_user_logged_in()) { 

do_action( 'woocommerce_account_navigation' );

echo '<div class="container" class="container">';

	$user = wp_get_current_user(); 
	$cliente = $user->user_firstname;
	$userid = $user->ID;

	
	if (have_posts()) {
		while (have_posts()) : the_post(); ?>
			 <?php the_content(); ?>	
		<?php endwhile;
	} 

echo '</div>';	
	
} else { get_template_part('parts/area-login'); }

get_footer();