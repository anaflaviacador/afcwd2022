<?php
$urlTema = get_template_directory_uri();
$img = '6141';
?>

<div id="como-funciona" class="container <?php if(is_post_type_archive('etheme_portfolio')) :?>padding-0<?php else: ?>area-jump<?php endif; ?>">
    <div class="pro-criativo">
        <div class="pro-criativo-cnt">
            <div class="pro-criativo-header">
                <h2><?php _e( 'Como <span class="titulo-cursiva cor-azul">funciona</span>', 'afcwd2022' ); ?></h2>
                <p class="pro-criativo-txt">
                    <?php _e( 'Conheça as <em>8 etapas</em> de produção, desde o primeiro contato com o studio até o site ir ao ar!', 'afcwd2022' ); ?>
                </p>
            </div>
            <div class="pro-criativo-slider">
                <div id="processo-criativo" class="splide">
                    <div class="splide__track">
                        <div class="splide__list">
                            <div class="splide__slide">
                                <div class="pro-criativo-item-cnt"><img src="<?php echo $urlTema; ?>/assets/images/org-azul-2.svg" loading="lazy" alt="Grafismo" aria-hidden="true" class="pro-criativo-item-fundo">
                                    <div class="pro-criativo-item-num">1</div>
                                    <h3 class="mb-0"><?php esc_html_e( 'Contato e Orçamento', 'afcwd2022' ); ?></h3>
                                    <p class="pro-criativo-item-cnt-txt">
                                        <?php _e( 'Entre em contato com o studio através da nossa <strong>calculadora de cotação</strong>, <strong>email</strong> ou <strong>whatsapp</strong> para você ter <em>noção inicial de seu investimento</em> e disponibilidade da agenda de produção. É enviada a proposta comercial e podemos combinar a data de produção.', 'afcwd2022' ); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="splide__slide pro-criativo-item">
                                <div class="pro-criativo-item-cnt"><img src="<?php echo $urlTema; ?>/assets/images/org-azul-2.svg" loading="lazy" alt="Grafismo" aria-hidden="true" class="pro-criativo-item-fundo inverso">
                                    <div class="pro-criativo-item-num">2</div>
                                    <h3 class="mb-0"><?php esc_html_e( 'Briefing', 'afcwd2022' ); ?></h3>
                                    <p class="pro-criativo-item-cnt-txt">
                                        <?php _e( 'Hora de <strong>conhecer sua empresa</strong>, seus objetivos, desejos, sonhos, metas e preferências. São direcionadas perguntas específicas para conseguirmos traçar o seu perfil e <strong>conhecer suas reais necessidades</strong>. <em>É nesta fase que conseguimos chegar no valor definitivo do investimento de seu projeto.</em>', 'afcwd2022' ); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="splide__slide pro-criativo-item">
                                <div class="pro-criativo-item-cnt"><img src="<?php echo $urlTema; ?>/assets/images/org-azul-2.svg" loading="lazy" alt="Grafismo" aria-hidden="true" class="pro-criativo-item-fundo">
                                    <div class="pro-criativo-item-num">3</div>
                                    <h3 class="mb-0"><?php esc_html_e( 'Contrato e pagamento', 'afcwd2022' ); ?></h3>
                                    <p class="pro-criativo-item-cnt-txt">
                                        <?php _e( 'É redigido o contrato com informações sobre tudo o que será feito, obrigações, termos de uso, informes sobre garantia e licença do layout. A assinatura do contrato é feita digitalmente, com <strong>validade jurídica</strong>! E no mesmo dia do acordo, você já poderá realizar o a <strong>primeira parte do pagamento</strong>.', 'afcwd2022' ); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="splide__slide pro-criativo-item">
                                <div class="pro-criativo-item-cnt"><img src="<?php echo $urlTema; ?>/assets/images/org-azul-2.svg" loading="lazy" alt="Grafismo" aria-hidden="true" class="pro-criativo-item-fundo inverso">
                                    <div class="pro-criativo-item-num">4</div>
                                    <h3 class="mb-0"><?php esc_html_e( 'Fase de Design', 'afcwd2022' ); ?></h3>
                                    <p class="pro-criativo-item-cnt-txt">
                                        <?php _e( 'Aqui é fase de pesquisa e produção de layout com base nos requisitos do briefing. É produzida a <strong>proposta das principais páginas do seu site</strong>, principalmente a página inicial. A produção das demais telas irão depender do seu tipo de site.', 'afcwd2022' ); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="splide__slide pro-criativo-item">
                                <div class="pro-criativo-item-cnt"><img src="<?php echo $urlTema; ?>/assets/images/org-azul-2.svg" loading="lazy" alt="Grafismo" aria-hidden="true" class="pro-criativo-item-fundo">
                                    <div class="pro-criativo-item-num">5</div>
                                    <h3 class="mb-0"><?php esc_html_e( 'Avaliação', 'afcwd2022' ); ?></h3>
                                    <p class="pro-criativo-item-cnt-txt">
                                        <?php _e( 'Aqui você irá <strong>analisar a proposta</strong> de layout e ter o direito de até <em>3 lista de modificações</em> para o projeto ficar bem alinhado com a estética e estratégias que você espera que seu público vivencie em seu site. Não avançamos para a próxima fase enquanto esta não for aprovada!', 'afcwd2022' ); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="splide__slide pro-criativo-item">
                                <div class="pro-criativo-item-cnt"><img src="<?php echo $urlTema; ?>/assets/images/org-azul-2.svg" loading="lazy" alt="Grafismo" aria-hidden="true" class="pro-criativo-item-fundo inverso">
                                    <div class="pro-criativo-item-num">6</div>
                                    <h3 class="mb-0"><?php esc_html_e( 'Fase de Código', 'afcwd2022' ); ?></h3>
                                    <p class="pro-criativo-item-cnt-txt">
                                        <?php _e( 'É aqui que a mágica acontece! Nesta fase é feita a <strong>programação do seu layout</strong>, composta pelo front-end, que codifica a parte visual (posições, colunas, cores, imagens etc) e o back-end, que une o design com a linguagem do painel de controle Wordpress, sendo responsável em cumprir as tarefas e funcionalidades do site.', 'afcwd2022' ); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="splide__slide pro-criativo-item">
                                <div class="pro-criativo-item-cnt"><img src="<?php echo $urlTema; ?>/assets/images/org-azul-2.svg" loading="lazy" alt="Grafismo" aria-hidden="true" class="pro-criativo-item-fundo">
                                    <div class="pro-criativo-item-num">7</div>
                                    <h3 class="mb-0"><?php esc_html_e( 'Refinamento', 'afcwd2022' ); ?></h3>
                                    <p class="pro-criativo-item-cnt-txt">
                                        <?php _e( 'Com a finalização de todo o código do site, chega a <strong>etapa de testes</strong>. Aqui você têm acesso a um ambiente controlado para <strong>ver seu site funcionando</strong> e explorar seu painel antes de colocarmos no ar! Nesta fase você poderá <strong>pedir mudanças finas</strong> que você não conseguiu enxergar na primeira avaliação.', 'afcwd2022' ); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="splide__slide pro-criativo-item">
                                <div class="pro-criativo-item-cnt"><img src="<?php echo $urlTema; ?>/assets/images/org-azul-2.svg" loading="lazy" alt="Grafismo" aria-hidden="true" class="pro-criativo-item-fundo inverso">
                                    <div class="pro-criativo-item-num">8</div>
                                    <h3 class="mb-0"><?php esc_html_e( 'Site no ar!', 'afcwd2022' ); ?></h3>
                                    <p class="pro-criativo-item-cnt-txt">
                                        <?php _e( 'Com seu site totalmente refinado, é hora de <strong>coloca-lo em sua hospedagem</strong> e começar a receber visitas! Sua <strong>garantia de 3 meses</strong> começa no dia da implementação e, nesta mesma data, é gerada sua nota fiscal. E, logo nos primeiros dias online, são gravadas suas video-aulas para você ter o treinamento completo de seu painel!', 'afcwd2022' ); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="splide-nav cor-azul">
                        
                        <div class="splide__arrows hide-mobile">
                            <button class="splide__arrow splide__arrow--prev">
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 40 40">
                                    <path fill="currentColor" d="M30.03 20.06a2 2 0 0 1-.25.76l-18.06 18.9c-.5.36-1 .36-1.5 0-.34-.48-.34-.93 0-1.35l17.42-18.45L10.22 1.74c-.34-.49-.34-1.01 0-1.5.5-.34 1-.34 1.5 0L29.78 19.3c.17.24.25.52.25.77Z"></path>
                                </svg>
                            </button>
                            <ul class="splide__pagination splide__pagination--ltr">
                            </ul>
                            <button class="splide__arrow splide__arrow--next">
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 40 40">
                                    <path fill="currentColor" d="M30.03 20.06a2 2 0 0 1-.25.76l-18.06 18.9c-.5.36-1 .36-1.5 0-.34-.48-.34-.93 0-1.35l17.42-18.45L10.22 1.74c-.34-.49-.34-1.01 0-1.5.5-.34 1-.34 1.5 0L29.78 19.3c.17.24.25.52.25.77Z"></path>
                                </svg>
                            </button>
                        </div>
                        
                        <div class="hide-desk">
                            <div class="botao-liso azul">
                                <?php esc_html_e( 'role para o lado e descubra', 'afcwd2022' ); ?>
                                <i class="fa-light fa-arrow-right-long ml-10px"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php echo wp_get_attachment_image($img,'full', '', [
            'class' => 'pro-criativo-img',
            'loading' => 'lazy',
        ]); ?>
    </div>
</div>