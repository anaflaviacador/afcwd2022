<?php global $post; ?>

<?php $titulo = get_field('proposta_orc_titulo'); ?>
<?php $valor = get_field('proposta_orc'); ?>
<?php $urgencia = get_field('proposta_orc_urgente'); ?>

<?php $validade = get_field('proposta_validade'); ?>
<?php $imediato = get_field('proposta_iniciar'); ?>

<?php $titulo2 = get_field('proposta_orc_titulo2'); ?>
<?php $valor2 = get_field('proposta_orc2'); ?>
<?php $urgencia2 = get_field('proposta_orc_urgente2'); ?>

<div id="investimento" class="area-jump"></div>
<section class="container pb-4em">
    <div class="w-layout-hflex prop-investimento-wrap">
        <?php if($imediato) :?><div class="plano-head-label">Início imediado!</div><?php endif; ?>

        <div class="w-layout-vflex pro-investimento-chamada">
            <h2 class="prop-intro-chamada mb-0">Investimento</h2>
            <div>Custo de produção e serviços inclusos.</div>
        </div>

        <div class="w-layout-vflex prop-invest-box">
            <?php if($valor) : if($valor['valor_mensal'] && $valor['valor_vista']) : ?>
                <?php if($titulo) :?>
                    <h3>
                        <?php if($titulo2) : ?><span class="cor-rosa-medio">01.</span> <?php endif; ?>
                        <?php echo wp_strip_all_tags($titulo); ?>
                    </h3>
                <?php endif; ?>
                <h2 class="mb-0">
                    <span class="cor-verde-medio"><?php echo wp_strip_all_tags($valor['valor_mensal']); ?></span> ou 
                    <span class="cor-verde-medio"><?php echo wp_strip_all_tags($valor['valor_vista']); ?></span> <span class="texto-menor cor-verde-medio">à vista</span>
                </h2>
                

                
                <p>
                    <?php if($urgencia) : if($urgencia['valor_mensal'] && $urgencia['valor_vista']) : ?>
                    <i class="fa-regular fa-rocket-launch cor-rosa-medio"></i> 
                    <em>Urgência na entrega? O investimento é de <?php echo wp_strip_all_tags($urgencia['valor_mensal']); ?> ou <?php echo wp_strip_all_tags($urgencia['valor_vista']); ?> à vista</em><br>
                    <?php endif; endif; ?>

                    <i class="fa-regular fa-clock cor-azul-medio"></i> Prazo de produção: <?php echo esc_attr($valor['prazo']); ?> dias <span class="sublinhado">úteis</span>
                    <?php if($urgencia) : if($urgencia['prazo']) : ?> &nbsp;|&nbsp;  Prazo na urgência: <?php echo esc_attr($urgencia['prazo']); ?> dias <span class="sublinhado">corridos</span>.<?php endif; endif; ?>
                </p>
                
            <?php endif; endif; ?>


            <?php if($valor2) : if($valor2['valor_mensal'] && $valor2['valor_vista']) : ?>
                <?php if($titulo2) :?><h3><span class="cor-rosa-medio">02.</span> <?php echo wp_strip_all_tags($titulo2); ?></h3><?php endif; ?>
                <h2 class="mb-0">
                    <span class="cor-verde-medio"><?php echo wp_strip_all_tags($valor2['valor_mensal']); ?></span> ou 
                    <span class="cor-verde-medio"><?php echo wp_strip_all_tags($valor2['valor_vista']); ?></span> <span class="texto-menor cor-verde-medio">à vista</span>
                </h2>
                

                <p>
                    <?php if($urgencia2) : if($urgencia2['valor_mensal'] && $urgencia2['valor_vista']) : ?>
                    <i class="fa-regular fa-rocket-launch cor-rosa-medio"></i> 
                    <em>Urgência na entrega? O investimento é de <?php echo wp_strip_all_tags($urgencia2['valor_mensal']); ?> ou <?php echo wp_strip_all_tags($urgencia2['valor_vista']); ?> à vista</em><br>
                    <?php endif; endif; ?>

                    <i class="fa-regular fa-clock cor-azul-medio"></i> Prazo de produção: <?php echo esc_attr($valor2['prazo']); ?> dias <span class="sublinhado">úteis</span>
                    <?php if($urgencia2) : if($urgencia2['prazo']) : ?> &nbsp;|&nbsp;  Prazo na urgência: <?php echo esc_attr($urgencia2['prazo']); ?> dias <span class="sublinhado">corridos</span>.<?php endif; endif; ?>
                </p>
            <?php endif; endif; ?>

            
            <p>
                <?php $moeda = get_field('proposta_moeda'); ?>
                <?php if($moeda) : ?>
                    <i class="fa-regular fa-building-columns cor-verde-medio"></i> Pagamento em depósito bancário ou transferência na sua moeda local.
                <?php else : ?>
                    <i class="fa-regular fa-money-check-dollar-pen cor-verde-medio"></i> A primeira parcela no Pix é paga no mesmo dia da assinatura do contrato. As demais parcelas (via Pix) são cobradas mensalmente, com a última coincidindo com a entrega.<br>
                    
                    <i class="fa-regular fa-credit-card-front cor-verde-medio"></i> É possível parcelar no cartão de qualquer banco em até 12x de forma integral ou parcial <em>(com acrésimo de juros)</em>, sendo esta 50% de entrada no Pix e o restante no cartão.<br>

                    <?php 
                    $compare_date = strtotime( "2024-06-21" );
                    $post_date    = strtotime( $post->post_date );
                    if($compare_date < $post_date):
                    ?>
                    <svg style="width:20px; height: auto;" width="50" height="27" viewBox="0 0 50 27" fill="none" xmlns="http://www.w3.org/2000/svg" aria-labelledby="logo-svg" role="img"><path fill="#D1C8E2" d="M0.986251 6.99154C1.72072 5.64138 2.82627 4.50871 4.18377 3.71578C5.54119 2.92285 7.09913 2.49972 8.6894 2.49196C8.80595 2.49196 8.91986 2.49196 9.03368 2.49833C7.54537 3.98708 6.74819 5.80799 6.63163 8.59177C6.60621 9.17914 6.63163 12.0425 6.63163 15.2598C6.63163 20.0338 6.63163 25.5861 6.63163 25.5861H0.0297686V14.3147C0.0297686 13.1516 -0.0372108 11.9579 0.0297686 10.7832C0.104768 9.47274 0.343249 8.18661 0.986251 6.99154ZM15.1681 0.000466882C14.0173 -0.0114569 12.8765 0.205129 11.8176 0.636671C10.7588 1.06813 9.80492 1.70507 9.01627 2.50731C13.9355 2.50731 17.12 5.71309 17.2982 10.8191C17.3384 11.9899 17.3517 18.2565 17.3517 18.2565V25.5809H23.9523V15.6816C23.9523 12.6887 23.9778 10.0972 23.7594 8.31353C23.1512 3.33438 19.9681 0.000466882 15.1681 0.000466882ZM49.97 15.4085C50.0374 14.2339 49.97 13.0414 49.97 11.8783V0.606944H43.3709C43.3709 0.606944 43.3709 6.15933 43.3709 10.932C43.3709 14.1455 43.3963 17.0101 43.3709 17.5999C43.2543 20.3851 42.4573 22.2046 40.9689 23.6934C41.0828 23.6934 41.198 23.701 41.3131 23.701C42.9034 23.6934 44.4613 23.2702 45.8188 22.4772C47.1764 21.6843 48.2819 20.5517 49.0161 19.2015C49.6595 18.0026 49.8975 16.7177 49.97 15.4085ZM34.8318 26.19C35.9826 26.2019 37.1234 25.9853 38.1823 25.5538C39.2411 25.1223 40.195 24.4853 40.9836 23.6832C36.0643 23.6832 32.8799 20.4774 32.7017 15.3713C32.6615 14.1993 32.6441 11.2923 32.6441 7.92502V0.600574L26.0476 0.606944V10.5153C26.0476 13.5081 26.0221 16.0997 26.2405 17.8833C26.8514 22.8625 30.0344 26.19 34.8318 26.19Z"></path></svg> <em>Quer parcelar em juros?</em> Para clientes com conta bancária Nubank parcelamos o projeto de forma integral ou parcial em <strong>até 10x sem juros</strong> via NuPay.
                    <?php endif; ?>
                <?php endif; ?>
            </p>

            <hr style="height:3px; background:#222; width:100%; max-width:100%; margin-bottom:1.8em">

            <?php if ( have_rows( 'proposta_servicos' ) ) : ?>
                <h3>Serviços inclusos</h3>
                <ul role="list" class="prop-servicos-lista">
                    <?php while ( have_rows( 'proposta_servicos' ) ) : the_row(); ?>
                        <li class="prop-servicos-ul-li">
                            <i class="fa-regular fa-check-double cor-rosa-medio"></i> <?php echo wp_strip_all_tags(get_sub_field( 'servico' )); ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>


            <?php if ( have_rows( 'proposta_servicos_opc' ) ) : ?>
                <h4 class="mt-20px">Serviços opcionais <small>(cobrança adicional)</small></h4>
                <ul role="list" class="prop-servicos-lista">
                    <?php while ( have_rows( 'proposta_servicos_opc' ) ) : the_row(); ?>
                        <li class="prop-servicos-ul-li">
                            <i class="fa-light fa-circle-plus cor-azul-medio"></i> <?php echo wp_strip_all_tags(get_sub_field( 'servico' )); ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
            

            <a href="https://wa.me/5562996269941?text=Oi%20Ana!%20Vi%20sua%20proposta." target="_blank" class="botao whatsapp prop-bt-contato">
                Fale comigo 
                    <span class="bt-seta">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18px" viewBox="0 0 448 512">
                            <path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7A183.9 183.9 0 0 1 39.4 254c0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                        </svg>
                    </span>
            </a>
            

            <?php if($validade):?>
            <div class="prop-invest-box-timer">Proposta preliminar <u>válida até <?php echo esc_attr( $validade ); ?></u> ou na mudança de requisitos de projeto.</div>
            <?php endif; ?>

            <div class="texto-menor mt-10px"><em class="cor-cinza">Atenção: O studio não trabalha com copywriting, produção de conteúdo ou gestão de mídias sociais.</em></div>
        </div>
    </div>
    <div class="home-servicos-wrap">
        <div class="home-serv-col">
            <h2 class="cor-verde">Design Exclusivo</h2>
            <p class="tw-balance">Desde 2007 produzindo sites e lojas virtuais com design elegante, <strong>inteligente</strong>, com <strong>personalidade</strong> e <strong>propósito</strong> para pequenas empresas, empreendedores autônomos e produtores de conteúdo.</p>
        </div>
        <div class="home-serv-col">
            <h2 class="cor-verde">SEO &amp; Otimização</h2>
            <p class="tw-balance">É seguido à risca as diretrizes e estratégias do seu modelo de negócio, alinhado às <strong>boas práticas de programação</strong>, com código feito do zero e <strong>amigável para buscadores</strong> (SEO), promovendo <strong>alta performance</strong>.</p>
        </div>
        <div class="home-serv-col last">
            <h2 class="cor-verde">Suporte &amp; Garantia</h2>
            <p class="tw-balance">É fornecido orientações técnicas, dicas de boas práticas de gestão e <strong>treinamento para sua dashboard</strong>, através de <strong>video-aulas ou conferência online</strong>. Garantia de 90dias com suporte técnico gratuito.<strong></strong></p>
        </div>
    </div>
    <h2 class="prop-intro-chamada mb-0 has-text-align-center mt-1em">
        <span class="titulo-cursiva">Obrigada</span>
    </h2>
</section>