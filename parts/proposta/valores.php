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
                    <span class="cor-verde-medio"><?php echo wp_kses_post($valor['valor_mensal']); ?></span> ou 
                    <span class="cor-verde-medio"><?php echo wp_kses_post($valor['valor_vista']); ?></span> <span class="texto-menor cor-verde-medio">à vista</span>
                </h2>
                

                
                <p>
                    <?php if($urgencia) : if($urgencia['valor_mensal'] && $urgencia['valor_vista']) : ?>
                    <i class="fa-regular fa-rocket-launch cor-rosa-medio"></i> 
                    <em>Urgência na entrega? O investimento é de <?php echo wp_kses_post($urgencia['valor_mensal']); ?> ou <?php echo wp_kses_post($urgencia['valor_vista']); ?> à vista</em><br>
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
                    <i class="fa-regular fa-building-columns cor-verde-medio"></i> Pagamento via depósito bancário em nossa conta internacional, em dólar ou euro, ou; <br>
                    
                    <svg  style="width:auto; height: 14px;" width="50" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" clip-rule="evenodd" viewBox="0 0 83 20">
  <path fill="#ADDEF3" d="M64.0048 8.7171c-.2478 1.6272-1.4904 1.6272-2.6924 1.6272h-.6836l.4796-3.0379a.3776.3776 0 01.3731-.3186h.3136c.8178 0 1.5909 0 1.9892.4658.2383.279.3105.6924.2205 1.2635zm-.5234-4.2445h-4.5326a.6294.6294 0 00-.6218.5314l-1.8329 11.6224a.3776.3776 0 00.3731.4366h2.3256a.4405.4405 0 00.4353-.3721l.52-3.295a.6296.6296 0 01.6218-.5317h1.4343c2.9857 0 4.7087-1.4447 5.159-4.3084.2028-1.2524.0081-2.2366-.5784-2.9256-.6443-.7573-1.7868-1.1576-3.3034-1.1576z"/>
  <path fill="#fff" d="M31.6766 8.7171c-.2477 1.6272-1.4903 1.6272-2.692 1.6272h-.684l.4797-3.0379a.3778.3778 0 01.373-.3186h.3137c.8181 0 1.5908 0 1.9891.4658.2387.279.3106.6924.2205 1.2635zm-.523-4.2445H26.621a.63.63 0 00-.6221.5314L24.166 16.6264a.378.378 0 00.3731.4366h2.1643a.63.63 0 00.6222-.5314l.4944-3.1357a.63.63 0 01.6221-.5317h1.4343c2.9854 0 4.7087-1.4447 5.1591-4.3084.2027-1.2524.008-2.2366-.5785-2.9256-.6446-.7573-1.7871-1.1576-3.3034-1.1576zM41.6762 12.8894c-.2097 1.2403-1.1942 2.0728-2.4496 2.0728-.6296 0-1.1334-.2023-1.4574-.5858-.321-.3802-.442-.9217-.3402-1.5247.1956-1.2288 1.1956-2.0883 2.4322-2.0883.6164 0 1.117.2044 1.4473.5912.3324.39.4629.9351.3677 1.5348zm3.0248-4.224h-2.1703a.3773.3773 0 00-.3731.319l-.0958.6066-.1516-.2198c-.47-.6823-1.5176-.9102-2.5636-.9102-2.3979 0-4.4462 1.817-4.8449 4.3655-.2073 1.2716.087 2.4863.808 3.3343.6622.7792 1.6074 1.1035 2.7337 1.1035 1.9327 0 3.0046-1.2416 3.0046-1.2416l-.0968.6033a.3779.3779 0 00.3731.437h1.9546a.629.629 0 00.6218-.5314l1.1734-7.43a.3773.3773 0 00-.3731-.4363z"/>
  <path fill="#ADDEF3" d="M74.0044 12.8894c-.2098 1.2403-1.1943 2.0728-2.4497 2.0728-.6299 0-1.1334-.2023-1.4577-.5858-.321-.3802-.4417-.9217-.3399-1.5247.1953-1.2288 1.1956-2.0883 2.4322-2.0883.6161 0 1.117.2044 1.447.5912.3324.39.4632.9351.368 1.5348zm3.0244-4.224h-2.1704a.3773.3773 0 00-.373.319l-.0955.6066-.1516-.2198c-.4702-.6823-1.5176-.9102-2.5636-.9102-2.3979 0-4.4462 1.817-4.8448 4.3655-.2074 1.2716.087 2.4863.8077 3.3343.6624.7792 1.6076 1.1035 2.7336 1.1035 1.9327 0 3.0046-1.2416 3.0046-1.2416l-.0965.6033a.3775.3775 0 00.3731.437h1.9542a.6297.6297 0 00.6222-.5314l1.1734-7.43a.3777.3777 0 00-.3734-.4363z"/>
  <path fill="#fff" d="M56.2605 8.6653h-2.1814a.629.629 0 00-.521.276l-3.0093 4.432-1.2752-4.2589a.6295.6295 0 00-.6034-.449h-2.1444c-.2588 0-.4413.2544-.3576.4994l2.4019 7.0508-2.259 3.1881c-.1776.2501.0013.5963.3081.5963h2.1794c.2064 0 .4-.1012.5177-.2712L56.571 9.2583c.1734-.2505-.0057-.593-.3106-.593"/>
  <path fill="#ADDEF3" d="M79.587 4.7915l-1.8601 11.8349a.3778.3778 0 00.373.4366h1.8713a.63.63 0 00.6218-.5314l1.8342-11.6224a.3776.3776 0 00-.373-.4366h-2.0938a.378.378 0 00-.3734.319"/>
  <path fill="#fff" d="M8.5868 19.1758l.609-3.8633.0394-.2141a.7923.7923 0 01.2685-.479.7943.7943 0 01.5153-.1906h.484c.8064 0 1.5475-.086 2.2023-.2558.6988-.1811 1.3203-.4635 1.847-.838.5586-.3972 1.0278-.9108 1.3945-1.526.3873-.649.6713-1.4304.845-2.3222.1533-.7875.1819-1.4927.0858-2.0957-.1022-.6373-.3476-1.1811-.7298-1.6164-.2315-.2639-.5277-.4924-.8806-.6796l-.0084-.0044-.0003-.01c.1233-.7863.1186-1.442-.0138-2.0064-.1334-.5657-.403-1.075-.8255-1.5559C13.5442.5211 11.953.0156 9.6896.0156H3.4734a.8753.8753 0 00-.5677.2094.8757.8757 0 00-.2951.528L.022 17.1666a.5166.5166 0 00.118.4168.5163.5163 0 00.3936.1818H4.39l-.0034.0182-.2648 1.6796a.4504.4504 0 00.1028.363.45.45 0 00.3425.1583H7.802a.7616.7616 0 00.495-.1828.7633.7633 0 00.2579-.4605l.032-.165"/>
  <path fill="#fff" d="M6.3708 5.1018a.778.778 0 01.4325-.5808.7782.7782 0 01.3358-.076h4.8724c.5775 0 1.1156.038 1.6077.117.1408.0228.2773.0487.4104.0783.1331.0296.2619.0622.3869.0991.0625.0182.1237.037.1842.0572.2417.0803.4665.1748.6736.2847.244-1.556-.0017-2.6147-.843-3.5733C13.5046.4522 11.831 0 9.6896 0H3.4734a.889.889 0 00-.8783.7506L.0066 17.1642a.5336.5336 0 00.527.6167h3.8376L6.3708 5.1018"/>
  <path fill="#ADDEF3" d="M15.2743 5.0813a9.2502 9.2502 0 01-.0636.364c-.8194 4.2086-3.624 5.6636-7.206 5.6636H6.1804c-.4376 0-.807.3187-.8752.751l-1.199 7.6006A.4668.4668 0 004.5671 20H7.802a.7775.7775 0 00.7683-.6568l.032-.1643.609-3.864.0393-.2135a.7784.7784 0 01.7684-.6568h.484c3.1337 0 5.5874-1.2732 6.3043-4.955.2995-1.5385.1449-2.8225-.6473-3.7253-.2397-.273-.5378-.4992-.8857-.683"/>
  <path fill="#E6F4FC" d="M14.4165 4.7394a5.8016 5.8016 0 00-.3869-.0991 7.2268 7.2268 0 00-.4104-.0783c-.492-.079-1.0302-.117-1.6077-.117H7.1391a.7782.7782 0 00-.3358.076.778.778 0 00-.4325.5808l-1.0356 6.5664-.03.1916c.0683-.4322.4377-.7509.8753-.7509h1.8241c3.582 0 6.3867-1.455 7.2061-5.6636a9.2502 9.2502 0 00.0636-.364c-.207-.11-.432-.2044-.6736-.2847a4.9128 4.9128 0 00-.1842-.0572"/>
</svg>
 Pagamento via Paypal (fatura em moeda BRL) com acréscimo de 5%. <em>Obs: Podem ocorrer outras cobranças referentes à sua prestadora do seu cartão de crédito devido à transação internacional.</em>
                <?php else : ?>
                    <i class="fa-regular fa-money-check-dollar-pen cor-verde-medio"></i> A primeira parcela no Pix é paga no ato da assinatura do contrato. As demais parcelas são cobradas em espaço de tempo proporcional ao longo da produção do projeto, com a última coincidindo com a entrega.<br>
                    
                    <i class="fa-regular fa-credit-card-front cor-verde-medio"></i> É possível parcelar no cartão de qualquer banco em até 12x de forma integral ou parcial <em>(com acrésimo de juros)</em>, sendo esta 50% de entrada no Pix e o restante no cartão.<br>

                    <?php 
                    $compare_date = strtotime( "2024-06-21" );
                    $post_date    = strtotime( $post->post_date );
                    if($compare_date < $post_date):
                    ?>
                    <svg style="width:20px; height: auto;" width="50" height="27" viewBox="0 0 50 27" fill="none" xmlns="http://www.w3.org/2000/svg" aria-labelledby="logo-svg" role="img"><path fill="#D1C8E2" d="M0.986251 6.99154C1.72072 5.64138 2.82627 4.50871 4.18377 3.71578C5.54119 2.92285 7.09913 2.49972 8.6894 2.49196C8.80595 2.49196 8.91986 2.49196 9.03368 2.49833C7.54537 3.98708 6.74819 5.80799 6.63163 8.59177C6.60621 9.17914 6.63163 12.0425 6.63163 15.2598C6.63163 20.0338 6.63163 25.5861 6.63163 25.5861H0.0297686V14.3147C0.0297686 13.1516 -0.0372108 11.9579 0.0297686 10.7832C0.104768 9.47274 0.343249 8.18661 0.986251 6.99154ZM15.1681 0.000466882C14.0173 -0.0114569 12.8765 0.205129 11.8176 0.636671C10.7588 1.06813 9.80492 1.70507 9.01627 2.50731C13.9355 2.50731 17.12 5.71309 17.2982 10.8191C17.3384 11.9899 17.3517 18.2565 17.3517 18.2565V25.5809H23.9523V15.6816C23.9523 12.6887 23.9778 10.0972 23.7594 8.31353C23.1512 3.33438 19.9681 0.000466882 15.1681 0.000466882ZM49.97 15.4085C50.0374 14.2339 49.97 13.0414 49.97 11.8783V0.606944H43.3709C43.3709 0.606944 43.3709 6.15933 43.3709 10.932C43.3709 14.1455 43.3963 17.0101 43.3709 17.5999C43.2543 20.3851 42.4573 22.2046 40.9689 23.6934C41.0828 23.6934 41.198 23.701 41.3131 23.701C42.9034 23.6934 44.4613 23.2702 45.8188 22.4772C47.1764 21.6843 48.2819 20.5517 49.0161 19.2015C49.6595 18.0026 49.8975 16.7177 49.97 15.4085ZM34.8318 26.19C35.9826 26.2019 37.1234 25.9853 38.1823 25.5538C39.2411 25.1223 40.195 24.4853 40.9836 23.6832C36.0643 23.6832 32.8799 20.4774 32.7017 15.3713C32.6615 14.1993 32.6441 11.2923 32.6441 7.92502V0.600574L26.0476 0.606944V10.5153C26.0476 13.5081 26.0221 16.0997 26.2405 17.8833C26.8514 22.8625 30.0344 26.19 34.8318 26.19Z"></path></svg> <strong>Tem conta + cartão Nubank?</strong> Parcelamos o projeto em <strong><u>até 10x sem juros através da NuPay</u></strong>, o gateway de pagamento da Nubank.
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