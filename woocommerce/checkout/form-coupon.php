<?php
/**
 * Checkout coupon form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-coupon.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.4
 */

defined( 'ABSPATH' ) || exit;

if ( ! wc_coupons_enabled() ) { // @codingStandardsIgnoreLine.
	return;
}

?>
<form method="post">
    <p class="mb-10px">Tem um cupom de desconto? Use-o aqui!</p>
    <div class="afc-form-cupom">
        <input type="text" name="coupon_code" class="input-text" placeholder="Código do cupom" id="coupon_code" value="" />
        <button type="submit" class="botao azul inverso" name="apply_coupon" value="Aplicar">Aplicar!</button>
    </div>
</form>
