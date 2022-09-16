<?php 
$bannerNuvem = '6440'; // producao
// $bannerNuvem = '6368'; // local
$fotoAna = '6439'; // producao
// $fotoAna = '6130'; // local
?>
<aside id="lateral-post" class="colmenor flexb-column dir">
    <div class="aside-topo">
        <div class="post-autoria w-clearfix">
            <div class="autoria-foto">
                <?php echo wp_get_attachment_image($fotoAna,'thumbnail', '', [
                    'class' => 'autoria-foto-item',
                    'loading' => 'lazy',
                ]); ?></div>
            <div class="autoria-sobre">
                <h4 class="mb-0"><span class="titulo-cursiva cor-roxo">Ana Flávia</span></h4>
                <div class="autoria-meta"><?php esc_html_e( 'Web designer, 31 anos. Goiás, BR.', 'afcwd2022' ); ?></div>
                <div class="texto-menor"><em><?php esc_html_e( 'Fundadora do studio e a profissional que te guiará para ter o site do seus sonhos.', 'afcwd2022' ); ?></em></div>
            </div>
        </div>
        <div id="indice" class="area-indice">
            <h4><i class="fa-light fa-list-tree cor-roxo mr-10px"></i> <?php esc_html_e( 'Tópicos da publicação', 'afcwd2022' ); ?></h4>
            <ul role="list" class="indice">
                <li class="indice-li hidden">
                    <a href="#" class="indice-li-link"><strong class="indice-num"></strong> <span></span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="aside-final">
        <h3 class="mb-0">Hospedagem <span class="titulo-cursiva cor-verde">para sites</span></h3>
        <p class="mb-10px">Servidores <em>brasileiros</em> de <strong>alta performance</strong>, com suporte 24h e migração
            <em>gratuita.</em></p>
            <a href="https://cliente.nuvemhospedagem.com.br/aff.php?aff=20" target="_blank" class="dblock w-inline-block">
                <?php echo wp_get_attachment_image($bannerNuvem,'medium', '', [
                    'class' => 'fullwidth',
                    'loading' => 'lazy',
                ]); ?>                
            </a>
        <div class="has-text-align-right">
            <a href="https://cliente.nuvemhospedagem.com.br/aff.php?aff=20" target="_blank"
                class="botao-liso verde">Conhecer parceiro <i class="fa-light fa-arrow-right-long bt-seta"></i>
            </a>
        </div>
    </div>
</aside>