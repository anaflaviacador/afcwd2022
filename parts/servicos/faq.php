<div id="faq" class="area-jump">
    <div class="container">
        <div class="servicos-faq">
            <div class="servicos-faq-lista">
                <?php afc_faq('servico','bege'); ?>
            </div>
            <div class="servicos-faq-intro">
                <h2 class="mb-20px">
                    <?php _e( 'Dúvidas <span class="titulo-cursiva cor-bege">frequentes</span>', 'afcwd2022' ); ?>
                </h2>
                <?php _e( '<p>Segue a lista das perguntas mais comuns que o studio recebe sobre os serviços e forma de trabalho.</p>', 'afcwd2022' ); ?>

                <div class="hide-tablet">
                    <?php get_template_part('parts/servicos/faq-txt'); ?>
                </div>

            </div>
            <div class="has-text-align-center show-tablet pt-1em">
                <?php get_template_part('parts/servicos/faq-txt'); ?>
            </div>
        </div>
    </div>
</div>