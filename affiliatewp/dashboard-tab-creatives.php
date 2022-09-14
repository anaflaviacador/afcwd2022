<div id="affwp-affiliate-dashboard-creatives" class="affwp-tab-content">

	<h4>Banners de divulgação</h4>

	<p style="width: 100%; margin-bottom: 3em;">Aqui você encontrará alguns banners que você poderá usar. É só copiar o código do banner desejado e colar num local estratégico de sua página. Exemplo de uso: área de <u>widgets</u> de blog ou <u>área de anúncios</u> de site. <em style="color:var(--cor-negacao);">Os códigos de incorporação abaixo já possuem seu ID de afiliada.</em></p>

	<?php
	$per_page  = 30;
	$page      = affwp_get_current_page_number();
	$pages     = absint( ceil( affiliate_wp()->creatives->count( array( 'status' => 'active' ) ) / $per_page ) );
	$args      = array(
		'number' => $per_page,
		'offset' => $per_page * ( $page - 1 )
	);
	$creatives = affiliate_wp()->creative->affiliate_creatives( $args );
	?>

	<?php if ( $creatives ) : ?>

		<?php
		/**
		 * Fires immediately before creatives in the creatives tab of the affiliate area.
		 *
		 * @since 1.0
		 */
		do_action( 'affwp_before_creatives' );
		?>

		<?php echo $creatives; ?>

		<?php if ( $pages > 1 ) : ?>

			<p class="affwp-pagination">
				<?php
				echo paginate_links(
					array(
						'current'  => $page,
						'total'    => $pages,
						'add_args' => array(
							'tab' => 'creatives',
						),
					)
				);
				?>
			</p>

		<?php endif; ?>

		<?php
		/**
		 * Fires immediately after creatives in the creatives tab of the affiliate area.
		 *
		 * @since 1.0
		 */
		do_action( 'affwp_after_creatives' );
		?>

	<?php else : ?>

		<p class="affwp-no-results"><?php _e( 'Sorry, there are currently no creatives available.', 'affiliate-wp' ); ?></p>

	<?php endif; ?>

	<p><strong>Observação:</strong> Caso já tenha um banner do studio em seu <em>layout exclusivo</em> e não consegue atualizar para seu link de afiliada, é possível que a imagem possa ser alterada apenas via programação. Entre em contato comigo solicitando essa atualização que faço para ti sem custo adicional! ;)</p>

</div>
