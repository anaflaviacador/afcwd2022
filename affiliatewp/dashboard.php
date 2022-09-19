<?php $active_tab = affwp_get_active_affiliate_area_tab(); ?>

<div id="affwp-affiliate-dashboard" class="pt-2em pb-3em">

	<?php if ( 'pending' == affwp_get_affiliate_status( affwp_get_affiliate_id() ) ) : ?>

		<p class="has-text-align-center"><strong>Sua inscrição foi enviada com sucesso!</strong> <?php echo do_shortcode('[icone prefixo="fas" nome="heart" cor="rosa"]'); ?>
		<br>Agora é só aguardar. Você receberá um email de confirmação em breve.</p>
		<p class="has-text-align-center"><em>Não esqueça de checar sua caixa de spam, ok?</em></p>

	<?php elseif ( 'inactive' == affwp_get_affiliate_status( affwp_get_affiliate_id() ) ) : ?>

		<p class="has-text-align-center">Sua inscrição não está mais ativa ou foi excluída do sistema.<br>Por favor, entre em contato caso tenha dúvidas.</p>

	<?php elseif ( 'rejected' == affwp_get_affiliate_status( affwp_get_affiliate_id() ) ) : ?>

		<p class="has-text-align-center">Infelizmente sua aplicação foi revogada. :(</p>

	<?php endif; ?>

	<?php if ( 'active' == affwp_get_affiliate_status( affwp_get_affiliate_id() ) ) : ?>

		<?php
		/**
		 * Fires at the top of the affiliate dashboard.
		 *
		 * @since 0.2
		 * @since 1.8.2 Added the `$active_tab` parameter.
		 *
		 * @param int|false $affiliate_id ID for the current affiliate.
		 * @param string    $active_tab   Slug for the currently-active tab.
		 */
		do_action( 'affwp_affiliate_dashboard_top', affwp_get_affiliate_id(), $active_tab );
		?>

		<?php if ( ! empty( $_GET['affwp_notice'] ) && 'profile-updated' == $_GET['affwp_notice'] ) : ?>

			<p class="affwp-notice"><?php _e( 'Your affiliate profile has been updated', 'affiliate-wp' ); ?></p>

		<?php endif; ?>

		<div class="colunas-wrap-dupla">
			<div class="colmenor esq">
				<ul class="afc-menu-afiliadas mb-2em">
					<?php

					$tabs = affwp_get_affiliate_area_tabs();

					if ( $tabs ) {
						$i = 0;
						foreach ( $tabs as $tab_slug => $tab_title ) : $i++; ?>
							<?php
								if ( affwp_affiliate_area_show_tab( $tab_slug ) ) : 
								$tab_ico = '<i class="fa-light fa-link"></i>';

								if ($tab_slug == 'urls') { 
									$tab_title = 'ID e link de afiliada';
								}
								if ($tab_slug == 'settings') { 
									$tab_title = 'Informações de pagamento';
									$tab_ico = '<svg xmlns="http://www.w3.org/2000/svg" style="width:18px;" viewBox="0 0 512 512"><path fill="currentColor" d="M242.4 292.5C247.8 287.1 257.1 287.1 262.5 292.5L339.5 369.5C353.7 383.7 372.6 391.5 392.6 391.5H407.7L310.6 488.6C280.3 518.1 231.1 518.1 200.8 488.6L103.3 391.2H112.6C132.6 391.2 151.5 383.4 165.7 369.2L242.4 292.5zM262.5 218.9C256.1 224.4 247.9 224.5 242.4 218.9L165.7 142.2C151.5 127.1 132.6 120.2 112.6 120.2H103.3L200.7 22.76C231.1-7.586 280.3-7.586 310.6 22.76L407.8 119.9H392.6C372.6 119.9 353.7 127.7 339.5 141.9L262.5 218.9zM112.6 142.7C126.4 142.7 139.1 148.3 149.7 158.1L226.4 234.8C233.6 241.1 243 245.6 252.5 245.6C261.9 245.6 271.3 241.1 278.5 234.8L355.5 157.8C365.3 148.1 378.8 142.5 392.6 142.5H430.3L488.6 200.8C518.9 231.1 518.9 280.3 488.6 310.6L430.3 368.9H392.6C378.8 368.9 365.3 363.3 355.5 353.5L278.5 276.5C264.6 262.6 240.3 262.6 226.4 276.6L149.7 353.2C139.1 363 126.4 368.6 112.6 368.6H80.78L22.76 310.6C-7.586 280.3-7.586 231.1 22.76 200.8L80.78 142.7H112.6z"/></svg>';
								}
								if ($tab_slug == 'creatives') { 
									$tab_title = 'Banners e artes';
									$tab_ico = '<i class="fa-light fa-images"></i>';
								}
								if ($tab_slug == 'stats') { 
									$tab_ico = '<i class="fa-light fa-chart-line"></i>';
								}
								if ($tab_slug == 'visits') { 
									$tab_title = 'Visualizações';
									$tab_ico = '<i class="fa-light fa-eye"></i>';
								}
								if ($tab_slug == 'payouts') { 
									$tab_title = 'Histórico de pagamentos';
									$tab_ico = '<i class="fa-light fa-money-check-dollar-pen"></i>';
								}
								
							?>
								<li class="afc-menu-afiliadas-li<?php if($tab_slug == 'referrals' || $tab_slug == 'graphs') echo ' hidden'; ?>">
									<a class="afc-menu-afiliadas-link"<?php echo $i == 1 ? ' style="border:0"' : ''; ?> href="<?php echo esc_url( affwp_get_affiliate_area_page_url( $tab_slug ) ); ?>">
										<span class="afc-menu-afiliadas-ico"><?php echo $tab_ico; ?></span>
										<span class="afc-menu-afiliadas-txt<?php echo $active_tab == $tab_slug ? ' ativo' : ''; ?>"><?php echo $tab_title; ?></span>
									</a>
								</li>
							<?php endif; ?>
						<?php endforeach;
					}

					/**
					 * Fires immediately after core Affiliate Area tabs are output,
					 * but before the 'Log Out' tab is output (if enabled).
					 *
					 * @since 1.0
					 *
					 * @param int    $affiliate_id ID of the current affiliate.
					 * @param string $active_tab   Slug of the active tab.
					 */
					do_action( 'affwp_affiliate_dashboard_tabs', affwp_get_affiliate_id(), $active_tab );
					
					?>
				</ul>
	
				<div class="has-text-align-center"><a href="<?php echo esc_url( get_permalink( affiliate_wp()->settings->get( 'terms_of_use' ) ) ); ?>" target="_blank" class="botao grafite"><i class="far fa-file-invoice"></i> Termos de uso</a></div>
			</div>
			
			<div class="colmaior">
				<?php
				/**
				 * Fires inside the affiliate dashboard above the tabbed interface.
				 *
				 * @since 0.2
				 * @since 1.8.2 Added the `$active_tab` parameter.
				 *
				 * @param int|false $affiliate_id ID for the current affiliate.
				 * @param string    $active_tab   Slug for the currently-active tab.
				 */
				do_action( 'affwp_affiliate_dashboard_notices', affwp_get_affiliate_id(), $active_tab );
				$pgConta = wc_get_page_permalink( 'myaccount' );
				?>


				<?php
				if ( ! empty( $active_tab ) && affwp_affiliate_area_show_tab( $active_tab ) ) :
					echo affwp_render_affiliate_dashboard_tab( $active_tab );
				endif;
				?>

				<?php
				/**
				 * Fires at the bottom of the affiliate dashboard.
				 *
				 * @since 0.2
				 * @since 1.8.2 Added the `$active_tab` parameter.
				 *
				 * @param int|false $affiliate_id ID for the current affiliate.
				 * @param string    $active_tab   Slug for the currently-active tab.
				 */
				do_action( 'affwp_affiliate_dashboard_bottom', affwp_get_affiliate_id(), $active_tab );
				?>
			</div>
		</div>

		

	<?php endif; ?>

</div>
