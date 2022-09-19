<?php
$homeurl = home_url(('/'));
$politicapg = get_option( 'wp_page_for_privacy_policy' );
?>  
 <div class="menu-mobile">
    <div class="menu-mobile-container">
      <ul role="list" class="menu-mob-items">
        <li class="menu-mob-li">
          <a href="<?php echo $homeurl; ?>" class="menu-mob-link w-inline-block">
            <div class="menu-mob-link-ico"><i class="fa-light fa-house"></i></div>
            <div class="menu-mob-link-item"><?php _e( 'Início <span class="menu-mob-link-subitem">página inicial</span>', 'afcwd2022' ); ?></div>
          </a>
        </li>
        <li class="menu-mob-li">
          <a href="/servicos" class="menu-mob-link w-inline-block">
            <div class="menu-mob-link-ico"><i class="fa-light fa-pen-paintbrush"></i></div>
            <div class="menu-mob-link-item"><?php _e( 'Serviços <span class="menu-mob-link-subitem">para seu site</span>', 'afcwd2022' ); ?></div>
          </a>
        </li>
        <li class="menu-mob-li">
          <a href="/projetos" class="menu-mob-link w-inline-block">
            <div class="menu-mob-link-ico"><i class="fa-light fa-presentation-screen"></i></div>
            <div class="menu-mob-link-item"><?php _e( 'Projetos <span class="menu-mob-link-subitem">trabalhos feitos</span>', 'afcwd2022' ); ?></div>
          </a>
        </li>
        <li class="menu-mob-li">
          <a href="/blog" class="menu-mob-link w-inline-block">
            <div class="menu-mob-link-ico"><i class="fa-light fa-blog"></i></div>
            <div class="menu-mob-link-item"><?php _e( 'Blog <span class="menu-mob-link-subitem">dicas e soluções</span>', 'afcwd2022' ); ?></div>
          </a>
        </li>
        <li class="menu-mob-li">
          <a href="/depoimentos" class="menu-mob-link w-inline-block">
            <div class="menu-mob-link-ico"><i class="fa-light fa-message-quote"></i></div>
            <div class="menu-mob-link-item"><?php _e( 'Clientes <span class="menu-mob-link-subitem">depoimentos</span>', 'afcwd2022' ); ?></div>
          </a>
        </li>
        <li class="menu-mob-li">
          <a href="/orcamento-projeto" class="menu-mob-link cotacao w-inline-block">
            <div class="menu-mob-link-ico"><i class="fa-light fa-badge-dollar"></i></div>
            <div class="menu-mob-link-item cotacao"><?php _e( 'Cotação <span class="menu-mob-link-subitem cotacao">orçar projeto</span>', 'afcwd2022' ); ?></div>
          </a>
        </li>
      </ul>
    <?php if (class_exists('Woocommerce')): 
        // $conta = esc_url( wp_login_url( get_permalink() ) );
        // if(is_user_logged_in()) 
        $conta = esc_url(wc_get_page_permalink('myaccount'));
        
        $pgCarrinho = esc_url(wc_get_page_permalink( 'cart' ));
        $numItens = WC()->cart->get_cart_contents_count();
    ?>
      <ul role="list" class="menu-mob-items shop">
        <li class="menu-mob-li shop">
          <a href="/loja/temas/aurora" class="menu-mob-link shop w-inline-block">
            <div class="menu-mob-link-ico shop"><i class="fa-light fa-laptop-arrow-down"></i></div>
            <div class="menu-mob-link-item shop"><?php _e( 'Tema pronto <span class="menu-mob-link-subitem shop">comprou, baixou</span>', 'afcwd2022' ); ?></div>
          </a>
        </li>
        <li class="menu-mob-li shop">
          <a href="<?php echo $conta; ?>" class="menu-mob-link shop w-inline-block">
            <div class="menu-mob-link-ico shop"><i class="fa-light fa-circle-user"></i></div>
            <div class="menu-mob-link-item shop">
              <?php if(is_user_logged_in()): ?>
                <?php _e( 'Conta <span class="menu-mob-link-subitem shop">painel</span>', 'afcwd2022' ); ?>
              <?php else: ?>
                <?php _e( 'Login <span class="menu-mob-link-subitem shop">entrar</span>', 'afcwd2022' ); ?>
              <?php endif; ?>
            </div>
          </a>
        </li>
        <li class="menu-mob-li shop cart">
          <a href="<?php echo $pgCarrinho; ?>" class="menu-mob-link shop w-inline-block">
            <div class="menu-mob-link-ico shop"><i class="fa-light fa-cart-shopping"></i></div>
            <div class="menu-mob-link-item shop"><?php echo $numItens; ?> <span class="menu-mob-link-subitem shop"><?php esc_html_e( 'itens', 'afcwd2022' ); ?></span></div>
          </a>
        </li>
      </ul>

      <?php endif; ?>
      <ul role="list" class="menu-mini-links">
        <li class="toplinks-li">
          <a href="<?php echo get_permalink($politicapg); ?>"><?php esc_html_e( 'Privacidade', 'afcwd2022' ); ?></a>
          <div class="ml-10px cor-verde">●</div>
        </li>
        <li class="toplinks-li">
          <a href="/termos"><?php esc_html_e( 'Termos', 'afcwd2022' ); ?></a>
          <div class="ml-10px cor-verde">●</div>
        </li>
        <li class="toplinks-li">
          <a href="/contato"><?php esc_html_e( 'Contato', 'afcwd2022' ); ?></a>
          <div class="ml-10px cor-verde">●</div>
        </li>
        <li class="toplinks-li">
          <a onclick="openFreshdesk()" href="#ticket"><?php esc_html_e( 'Suporte', 'afcwd2022' ); ?></a>
        </li>
      </ul>
    </div>
</div>