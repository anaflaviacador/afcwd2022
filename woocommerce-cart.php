<?php /* Template Name: Carrinho */
get_header(); ?>
<?php $endpoint = WC()->query->get_current_endpoint(); ?>
<main id="pag-simples" class="flexb-column">
	<div class="container">

		<div class="jornada-cart">
			<div class="jornada-cart-item com-link">
				<div class="jornada-cart-ico" aria-label="<?php esc_html_e('Loja','afcwd2022'); ?>">
					<i class="fa-light fa-store"></i>
				</div>
				<div class="jornada-cart-txt"><?php esc_html_e('Loja','afcwd2022'); ?></div>
				<a href="<?php echo wc_get_page_permalink( 'shop' ); ?>" class="jornada-cart-item-link"></a>
			</div>

			<div class="jornada-cart-item<?php if(is_cart()) : ?> ativo<?php else: ?> com-link<?php endif; ?>">
				<div class="jornada-cart-ico" aria-label="<?php esc_html_e('Carrinho','afcwd2022'); ?>">
					<i class="fa-light fa-cart-circle-check"></i>
				</div>
				<div class="jornada-cart-txt"><?php esc_html_e('Carrinho','afcwd2022'); ?></div>
				<a href="<?php echo wc_get_page_permalink( 'cart' ); ?>" class="jornada-cart-item-link"></a>
			</div>

			<div class="jornada-cart-item<?php if(is_checkout() && $endpoint !== 'order-received') : ?> ativo<?php endif; ?>">
				<div class="jornada-cart-ico" aria-label="<?php esc_html_e('Pagamento','afcwd2022'); ?>">
					<i class="fa-light fa-money-bill-wave"></i>
				</div>
				<div class="jornada-cart-txt"><?php esc_html_e('Pagamento','afcwd2022'); ?></div>
			</div>

			<div class="jornada-cart-item last<?php if(is_checkout() && $endpoint === 'order-received') : ?> ativo<?php endif; ?>">
				<div class="jornada-cart-ico" aria-label="<?php esc_html_e('Confirmação','afcwd2022'); ?>">
					<i class="fa-light fa-badge-check"></i>
				</div>
				<div class="jornada-cart-txt"><?php esc_html_e('Confirmação','afcwd2022'); ?></div>
			</div>
		</div>

		<div class="pt-2em">
			<?php the_content(); ?>
		</div>

	</div>
</main>

<div class="rodape">
    <div class="rodape-selos">
      <div class="container">
        <div class="selos-container fonte-caixa-alta">
          <div>CNPJ 24.014.911/0001-36 <span class="cor-bege">●</span> <?php esc_html_e( 'Seg à sexta, das 14h às 17h', 'afcwd2022' ); ?></div>
          <a href="/"><?php esc_html_e( 'voltar ao site', 'afcwd2022' ); ?></a>
        </div>
      </div>
    </div>
</div>

<?php get_template_part('parts/whatsapp'); ?>
<?php get_template_part('parts/footer/menu-mobile'); ?>
<?php wp_footer(); ?>

</body>
</html>