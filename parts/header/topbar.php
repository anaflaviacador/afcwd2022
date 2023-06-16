<?php
$nomesite = get_bloginfo('name');
$nomeslogan = get_bloginfo('description');
$homeurl = home_url(('/'));
$urlTema = get_template_directory_uri();
$politicapg = get_option( 'wp_page_for_privacy_policy' );
?>  
  
<div class="topbar">
    <div class="container flexb-justify-space-between">
        <ul role="list" class="toplinks">
            <li class="toplinks-li"><img src="<?php echo $urlTema;?>/assets/images/house-chimney-solid.svg" width="14" alt="" aria-hidden="true" class="toplinks-ico">
                <a href="<?php echo $homeurl; ?>" aria-current="page"><?php esc_html_e( 'Início', 'afcwd2022' ); ?></a>
                <div class="cor-bege ml-10px">●</div>
            </li>
            <?php if ( $politicapg ) : ?>
                <li class="toplinks-li">
                    <a href="<?php echo get_permalink($politicapg); ?>" target="_blank"><?php esc_html_e( 'Privacidade', 'afcwd2022' ); ?></a>
                    <div class="cor-bege ml-10px">●</div>
                </li>                
            <?php endif; ?>             
            <li class="toplinks-li">
                <a href="/termos"><?php esc_html_e( 'Termos de uso', 'afcwd2022' ); ?></a>
                <div class="cor-bege ml-10px">●</div>
            </li>
            <li class="toplinks-li">
                <a href="/contato">Contato</a>
                <!-- <div class="cor-bege ml-10px">●</div> -->
            </li>
        </ul>
        
        <?php get_template_part('parts/header/linguas-moedas'); ?>

        <div id="abre-nav-mobile" data-w-id="eb49a3b3-d711-b197-e4ba-f681ade60438" class="bt-menu-mob">
            <div class="bt-menu-abrir">Menu</div>
            <div class="bt-menu-fechar"><?php esc_html_e( 'Fechar', 'afcwd2022' ); ?></div><img src="<?php echo $urlTema;?>/assets/images/ico-menu.svg" alt="Grafismo"
                class="bt-menu-mob-ico"><img src="<?php echo $urlTema;?>/assets/images/ico-menu-close.svg" alt="Grafismo"
                class="bt-menu-mob-ico-fechar">
        </div>
    </div>
</div>