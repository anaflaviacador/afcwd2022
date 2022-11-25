<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * My Account navigation.
 *
 * @since 2.6.0
 */
$clientevip = array('cliente_vip','administrator');
$user = wp_get_current_user(); 

do_action( 'woocommerce_account_navigation' ); ?>

<div class="afc-cliente-conta container-medio pt-2em pb-4em">
	<?php
		/**
		 * My Account content.
		 *
		 * @since 2.6.0
		 */
		do_action( 'woocommerce_account_content' );
	?>

<?php
	if( is_wc_endpoint_url('downloads') || is_wc_endpoint_url('orders') || is_wc_endpoint_url('view-order') ) {
		echo '<div class="has-text-align-center mt-2em">';
			echo '<a href="https://afcweb.design/termos/" target="_blank" class="botao grafite"><i class="far fa-file-invoice"></i> Termos de uso</a>';
		echo '</div>';
	}
?>

</div>


<?php if (! is_wc_endpoint_url() && array_intersect($clientevip, $user->roles ) ) : ?>
	<div class="container pb-4em">

		<h3 class="has-text-align-center">Conheça o <span class="titulo-cursiva cor-verde">Sendy</span><br><span class="texto-menor">o email marketing do studio</span></h3>
		<div class="container-medio">
			<p>Conecte-se com seu público de forma descomplicada e simples com o serviço de email do studio!</p>
		</div>
		<?php get_template_part('parts/servicos/planos-email'); ?>

		<p class="has-text-align-center pt-2em"><a href="/servicos/email-marketing/" class="botao grande rosa">Saiba mais <i class="fa-light fa-arrow-right-long bt-seta"></i></a></p>
	</div>
<?php endif; ?>