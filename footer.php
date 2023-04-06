<?php
$nomesite = get_bloginfo('name');
$urlHome = esc_url(home_url('/'));
$urlTema = get_template_directory_uri();
$ano = date('Y');
$lang = esc_attr(get_bloginfo('language'));
?>

<div class="rodape">
    <div class="container pt-2em">
        <img src="<?php echo $urlTema; ?>/assets/images/flor-preto-1.svg" data-w-id="660bf940-8155-fce1-7619-562564d97dd1" aria-hidden="true" heigh="auto" alt="Grafismo" class="footer-flor-1">
        <img src="<?php echo $urlTema; ?>/assets/images/flor-preto-3.svg" data-w-id="75a8e910-ae4a-ab5a-27a0-7e03324bb703" aria-hidden="true" heigh="auto" alt="Grafismo" class="footer-flor-2">
        <img src="<?php echo $urlTema; ?>/assets/images/flor-preto-2.svg" data-w-id="0c26a4fa-42cf-4fc0-7552-b7edf20b67b8" aria-hidden="true" heigh="auto" alt="Grafismo" class="footer-flor-3">
        

        <div class="rodape-container">
            <?php get_template_part('parts/footer/menu'); ?>

            <div class="rodape-news-infos">
                <?php get_template_part('parts/footer/newsletter'); ?>

                <div class="rodape-infos">
                    <a href="#" class="botao negacao bt-abrir-wts"><?php esc_html_e( 'Orçar projeto', 'afcwd2022' ); ?> <i class="fa-light fa-arrow-right-long bt-seta"></i></a>
                    <div class="copyright">
                        <a href="<?php echo $urlHome; ?>" class="marca-site-rodape w-inline-block">
                            <img src="<?php echo $urlTema; ?>/assets/images/marca-afcwebdesign-negative.svg" alt="Marca AFC Web Design de fundo escuro">
                        </a>
                        <!-- <div class="copyright-txt"><?php // _e( 'CNPJ 24.014.911/0001-36<br>Seg à Sexta, das 14h às 17h', 'afcwd2022' ); ?></div> -->
                        <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
                        <div class="elfsight-app-036facdd-5556-4de4-be29-458ac6c90390"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('parts/footer/selos'); ?>
</div>

<?php get_template_part('parts/whatsapp'); ?>
<?php get_template_part('parts/footer/menu-mobile'); ?>
<?php wp_footer(); ?>

</body>
</html>