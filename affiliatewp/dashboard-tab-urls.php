<?php
$affiliate_id = affwp_get_affiliate_id();
$all_coupons  = affwp_get_affiliate_coupons( $affiliate_id );
$terms_of_use = affiliate_wp()->settings->get( 'terms_of_use' );
?>
<div id="affwp-affiliate-dashboard-url-generator" class="affwp-tab-content">

	
	<h4>Informações de divulgação</h4>

	<?php
	/**
	 * Fires at the top of the Affiliate URLs dashboard tab.
	 *
	 * @since 2.0.5
	 *
	 * @param int $affiliate_id Affiliate ID of the currently logged-in affiliate.
	 */
	do_action( 'affwp_affiliate_dashboard_urls_top', $affiliate_id );
	?>

	<p>
		<?php /*if ( 'id' == affwp_get_referral_format() ) : ?>
			<?php printf( __( 'Your affiliate ID is: <strong>%s</strong>', 'affiliate-wp' ), $affiliate_id ); ?>
		<?php elseif ( 'username' == affwp_get_referral_format() ) : ?>
			<?php printf( __( 'Your affiliate username is: <strong>%s</strong>', 'affiliate-wp' ), affwp_get_affiliate_username() ); ?>
		<?php endif;*/ ?>
		<i class="fa-light fa-long-arrow-right"></i> <?php printf( __( 'Seu ID de afiliada é: <strong>%s</strong>', 'affiliate-wp' ), '<span class="cor-rosa cor-rosa-claro-bg">'.$affiliate_id.'</span>' ); ?><br>
		<i class="fa-light fa-long-arrow-right"></i> <?php printf( __( 'Seu username é: <strong>%s</strong>', 'affiliate-wp' ), '<span class="cor-azul cor-azul-claro-bg">'.affwp_get_affiliate_username().'</span>' ); ?><br>
		<i class="fa-light fa-long-arrow-right"></i> <?php printf( __( 'Seu link principal é: <strong>%s</strong>', 'affiliate-wp' ), '<span class="cor-verde cor-verde-claro-bg">'.esc_url( urldecode( affwp_get_affiliate_referral_url() ) ).'</span>' ); ?><br>
	</p>

	<?php
	/**
	 * Fires just before the Referral URL Generator.
	 *
	 * @since 2.0.5
	 *
	 * @param int $affiliate_id Affiliate ID of the currently logged-in affiliate.
	 */
	do_action( 'affwp_affiliate_dashboard_urls_before_generator', $affiliate_id );
	?>

	<h4>Gerador de URL</h4>

	<p>Digite qualquer URL daqui do site para gerar seu link direto!</p>

	<form id="affwp-generate-ref-url" class="affwp-form" method="get" action="#affwp-generate-ref-url">
		<div class="affwp-wrap affwp-base-url-wrap">
			<label for="affwp-url"><?php _e( 'Page URL', 'affiliate-wp' ); ?></label>
			<input class="input-text" type="text" name="url" id="affwp-url" value="<?php echo esc_url( urldecode( affwp_get_affiliate_base_url() ) ); ?>" />
		</div>

		<div class="affwp-wrap affwp-campaign-wrap">
			<label for="affwp-campaign"><?php _e( 'Campaign Name (optional)', 'affiliate-wp' ); ?></label>
			<input class="input-text" type="text" name="campaign" id="affwp-campaign" value="" />
		</div>

		<div class="affwp-wrap affwp-referral-url-wrap" <?php if ( ! isset( $_GET['url'] ) ) { echo 'style="display:none;"'; } ?>>
			<label for="affwp-referral-url"><strong>Sua URL está pronta!</strong></label>
			<input class="input-text" type="text" id="affwp-referral-url" value="<?php echo esc_url( urldecode( affwp_get_affiliate_referral_url() ) ); ?>" />
			<div class="description" style="font-size: 11px; font-style: italic">Agora copie e compartilhe pelo mundo.</div>
		</div>

		<div class="affwp-referral-url-submit-wrap">
			<input type="hidden" class="affwp-affiliate-id" value="<?php echo esc_attr( urldecode( affwp_get_referral_format_value() ) ); ?>" />
			<input type="hidden" class="affwp-referral-var" value="<?php echo esc_attr( affiliate_wp()->tracking->get_referral_var() ); ?>" />
			<!-- <input type="submit" class="button" value="<?php //_e( 'Generate URL', 'affiliate-wp' ); ?>" /> -->
			<button type="submit" class="botao inverso azul">Gerar link</button>
		</div>
	</form>

	<?php
	/**
	 * Fires at the bottom of the Affiliate URLs dashboard tab.
	 *
	 * @since 2.0.5
	 *
	 * @param int $affiliate_id Affiliate ID of the currently logged-in affiliate.
	 */
	do_action( 'affwp_affiliate_dashboard_urls_bottom', $affiliate_id );
	?>

	<p>&nbsp;</p>

	<h4>Cupons de desconto</h4>
	<p>Os cupons de desconto são uma forma atrativa de fornecer os produtos do studio por valores mais acessíveis e <em>realmente</em> garantir sua comissão.</p>

	<?php
	/**
	 * Fires at the top of the Coupons dashboard tab.
	 *
	 * @since 2.6
	 *
	 * @param int $affiliate_id Affiliate ID of the currently logged-in affiliate.
	 */
	do_action( 'affwp_affiliate_dashboard_coupons_top', $affiliate_id );
	?>

	<?php
	/**
	 * Fires right before displaying the affiliate coupons dashboard table.
	 *
	 * @since 2.6
	 *
	 * @param int $affiliate_id Affiliate ID.
	 */
	do_action( 'affwp_coupons_dashboard_before_table', $affiliate_id ); ?>

	<?php if ( ! empty( $all_coupons ) ) : ?>
		<table class="affwp-table affwp-table-responsive">
			<thead>
				<tr>
					<th>Nome do cupom</th>
					<th>Desconto</th>
					<?php
					/**
					 * Fires right after displaying the last affiliate coupons dashboard table header.
					 *
					 * @since 2.6
					 *
					 * @param int $affiliate_id Affiliate ID.
					 */
					do_action( 'affwp_coupons_dashboard_th' ); ?>
				</tr>
			</thead>

			<tbody>

			<?php if ( $all_coupons ) :
				foreach ( $all_coupons as $type => $coupons ) :
					foreach ( $coupons as $coupon ) : ?>
						<tr>
							<td data-th="Nome do cupom"><?php echo $coupon['code']; ?></td>
							<td data-th="Desconto"><?php echo $coupon['amount']; ?></td>
							<?php
							/**
							 * Fires right after displaying the last affiliate coupons dashboard table data.
							 *
							 * @since 2.6
							 *
							 * @param array $coupons Coupons array.
							 */
							do_action( 'affwp_coupons_dashboard_td', $coupon ); ?>
						</tr>
					<?php endforeach; ?>
				<?php endforeach; ?>
			<?php endif; ?>

			</tbody>
		</table>

		<p><strong>Observação:</strong> Um cupom de desconto atribuído a uma afiliada irá sobrepor o cookie e a atribuição manual no checkout. Sua comissão será proporcional ao valor do produto com desconto no carrinho.</p>
	<?php else : ?>
		<p class="cor-negacao"><i class="fal fa-info-circle"></i> Você ainda não possui cupons de descontos associados à sua afiliação.</p>
	<?php endif; ?>

	<?php
	/**
	 * Fires right after displaying the affiliate coupons dashboard table.
	 *
	 * @since 2.6
	 *
	 * @param int $affiliate_id Affiliate ID.
	 */
	do_action( 'affwp_coupons_dashboard_after_table', $affiliate_id ); ?>

</div>
