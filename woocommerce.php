<?php get_header(); ?>
<?php if(is_product()) :?>
	<?php $ativa_LP = get_field('ativar_lp'); ?>
	<?php if($ativa_LP == false): ?>
		<div class="container">
	<?php endif; ?>
<?php else: ?>
	<div class="container">
<?php endif; ?>

	<?php woocommerce_content(); ?>

<?php if(is_product()) :?>
	<?php $ativa_LP = get_field('ativar_lp'); ?>
	<?php if($ativa_LP == false): ?>
		</div>
	<?php endif; ?>
<?php else: ?>
	</div>
<?php endif; ?>
<?php get_footer(); ?>