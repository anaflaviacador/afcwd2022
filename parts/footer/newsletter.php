<?php
$politicapg = get_option( 'wp_page_for_privacy_policy' );
?>
<div class="newsletter">
    <h4 class="cor-bege-medio mb-0"><?php esc_html_e( 'Novidades por email', 'afcwd2022' ); ?></h4>
    <div class="texto-menor"><em><?php esc_html_e( 'Ofertas e informações sobre agenda de produção', 'afcwd2022' ); ?></em></div>
    <?php echo do_shortcode('[wpforms id="6510"]'); ?>
    <div class="texto-menor fullwidth has-text-align-left"><em class="cor-cinza texto-menor">
    <?php echo sprintf(
        __( 'Ao deixar o email, estará de acordo com a <a href="%s"><u>política de privacidade</u></a>.', 'afcwd2022' ),
        get_permalink($politicapg),
    ) ?>
    </em></div>
</div>