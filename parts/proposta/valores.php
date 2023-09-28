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

                    <i class="fa-regular fa-clock cor-azul-medio"></i> Prazo de produção: <?php echo esc_attr($valor['prazo']); ?> dias <span class="sublinhado">úteis</span>
                    <?php if($urgencia2) : if($urgencia2['prazo']) : ?> &nbsp;|&nbsp;  Prazo na urgência: <?php echo esc_attr($urgencia2['prazo']); ?> dias <span class="sublinhado">corridos</span>.<?php endif; endif; ?>
                </p>
            <?php endif; endif; ?>

            
            <p>
                <i class="fa-regular fa-money-check-dollar-pen cor-verde-medio"></i> A primeira parcela é paga no mesmo dia da assinatura do contrato.<br>

                <?php $moeda = get_field('proposta_moeda'); ?>
                <?php if($moeda) : ?>
                    <i class="fa-regular fa-building-columns cor-verde-medio"></i> Pagamento em depósito bancário ou transferência na sua moeda local.
                <?php else : ?>
                    <i class="fa-regular fa-credit-card-front cor-verde-medio"></i> É possível parcelar no cartão em até 12x (com juros). <em class="texto-menor cor-cinza">Solicite uma simulação!</em>
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
            <p class="tw-balance">Desde 2007 produzindo sites e lojas virtuais com design elegante, <strong>inteligente</strong>, com <strong>personalidade</strong> e <strong>propósito</strong> para pequenas empresas, empreendedoras autônomas e produtoras de conteúdo.</p>
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