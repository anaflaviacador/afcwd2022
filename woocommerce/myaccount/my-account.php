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