<?php
global $wp;
$current = home_url( add_query_arg( array(), $wp->request ) );

$url_servicos = esc_url(home_url().'/servicos');
$url_projetos = esc_url(home_url().'/projetos');
$url_blog = esc_url(home_url().'/blog');
$url_depoimentos = esc_url(home_url().'/depoimentos');
$url_loja = esc_url(home_url().'/loja/temas/aurora');

?>
<ul role="list" class="header-nav" data-current="<?php echo $current; ?>">
    <li class="header-nav-li">
        <a href="<?php echo $url_servicos; ?>" class="<?php echo $current == $url_servicos || strpos($current, 'servico') !== false ? 'botao' : 'header-nav-item' ; ?>"><?php esc_html_e( 'Serviços', 'afcwd2022' ); ?></a>
    </li>
    <li class="header-nav-li">
        <a href="<?php echo $url_projetos;?>" class="<?php echo is_post_type_archive('etheme_portfolio') || is_singular('etheme_portfolio') || is_tax('tipoprojeto') !== false ? 'botao' : 'header-nav-item' ; ?>"><?php esc_html_e( 'Projetos', 'afcwd2022' ); ?></a>
    </li>
    <li class="header-nav-li">
        <a href="<?php echo $url_blog;?>" class="<?php echo is_post_type_archive('afc_blog') || is_singular('afc_blog') || is_tax('categoria_blog') ? 'botao' : 'header-nav-item' ; ?>"><?php esc_html_e( 'Blog', 'afcwd2022' ); ?></a>
    </li>
    <li class="header-nav-li">
        <a href="<?php echo $url_depoimentos;?>" class="<?php echo $current == $url_depoimentos ? 'botao' : 'header-nav-item' ; ?>"><?php esc_html_e( 'Clientes', 'afcwd2022' ); ?></a>
    </li>
    <?php /* ?>
    <li class="header-nav-li">
        <a href="<?php echo $url_loja;?>" class="<?php echo $current == $url_loja ? 'botao' : 'header-nav-item' ; ?>"><?php esc_html_e( 'Template pronto', 'afcwd2022' ); ?></a>
    </li>
    <?php */ ?>
</ul>