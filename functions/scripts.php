<?php
function afc_load_styles() { 
    // variacoes declaradas
    $urltheme = get_template_directory_uri();
    $vs = '7sEr4pd';

    ////////// css principal de layout
    wp_enqueue_style('layout', $urltheme . '/assets/css/layout.css?v='.$vs, array(), '', 'all', null); 
    
    ////////// jquery atualizado
    wp_deregister_script( 'jquery-core' );
    wp_register_script( 'jquery-core', $urltheme . '/assets/js/jquery.min.js', array(), '' );
    wp_deregister_script( 'jquery-migrate' );
    wp_register_script( 'jquery-migrate', $urltheme . '/assets/js/jquery-migrate.min.js', array(), '' );

    ////////// frameworks
    wp_enqueue_script( 'fancyb0x', $urltheme . '/assets/js/fancybox.min.js', array('jquery-core'), '', true);
    wp_enqueue_script( 'splider', $urltheme . '/assets/js/splide.min.js?v='.$vs, array('jquery-core'), '', true);
    wp_enqueue_script( 'webflow', $urltheme . '/assets/js/webflow.js?v='.$vs, array('jquery-core'), '', true); 
    wp_enqueue_script( 'mas0nry', $urltheme . '/assets/js/masonry.js?v='.$vs, array('jquery-core'), '', true); 
    // wp_enqueue_script( 'googlefonts', $urltheme . '/assets/js/gfont.js?v='.$vs, array('jquery-core'), '', true); 
    wp_enqueue_script( 'googlefonts', '//ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js', array('jquery-core'), '', false); 


    ////////// scripts
    wp_enqueue_script( 'texto-animado', $urltheme . '/assets/js/texto-animado.js?v='.$vs, array('jquery-core'), '', true);
    wp_enqueue_script( 'whatsapp', $urltheme . '/assets/js/whatapp.js?v='.$vs, array('jquery-core'), '', true);
    // wp_enqueue_script( 'loader', $urltheme . '/assets/js/loader.js?v='.$vs, array('jquery-core'), '', true);
    if(is_singular('afc_blog')) wp_enqueue_script( 'indice', $urltheme . '/assets/js/indice.js?v='.$vs, array('jquery-core'), '', true);
    wp_enqueue_script( 'scripts', $urltheme . '/assets/js/app.js?v='.$vs, array('jquery-core'), '', true);

    ////////// comments
    wp_deregister_script('comment-reply');

    //////// PADRAO WP REMOVE ESTILOS
    // wp_dequeue_style( 'global-styles' ); // remove estilos globais wp 5.9
    // wp_dequeue_style( 'wp-block-library' );
    // wp_dequeue_style( 'wp-block-library-theme' );
    // wp_dequeue_style( 'global-styles' );
    
    ////////// REMOVE itens
    wp_deregister_style( 'swpcss' );
    wp_deregister_script( 'swpjs' );
    remove_action('wp_enqueue_scripts', 'add_sendy_scripts'); // retirar scripts do sendy

    // retira masonry do ALM pq ja tem por padrao no tema
    wp_deregister_script('ajax-load-more-masonry');
}


// ========================================//
// SCRIPTS HEAD
// ========================================// 
function afc_load_scripts_head() {
    $urltheme = get_template_directory_uri();

    // força o .hidden
    echo '<style>.hidden{display:none!important}</style>';

    // gfonts
    echo '<script type="text/javascript">WebFont.load({  google: {    families: ["Work Sans:regular,500,600,italic,500italic,600italic"]  }});</script>';
    echo '<script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>';

    //////// pixel fb
    // rastreia quem acessou a home
    if (is_front_page()) echo "<script type='text/plain' data-cli-class='cli-blocker-script' data-cli-script-type='advertisement' data-cli-block='true' data-cli-element-position='head'>fbq('trackCustom', 'Home');</script>";

    // rastreia quem leu artigo do blog
    if (is_singular('afc_blog')) echo "<script type='text/plain' data-cli-class='cli-blocker-script' data-cli-script-type='advertisement' data-cli-block='true' data-cli-element-position='head'>fbq('trackCustom', 'PostBlogView');</script>";

    // rastreia quem buscou entrar em contato
    if (is_page('contato')) echo "<script type='text/plain' data-cli-class='cli-blocker-script' data-cli-script-type='advertisement' data-cli-block='true' data-cli-element-position='head'>fbq('track', 'Contact');</script>";

    if (class_exists('Woocommerce')) {
        // pag produto
        if(is_product()) echo "<script type='text/plain' data-cli-class='cli-blocker-script' data-cli-script-type='advertisement' data-cli-block='true' data-cli-element-position='head'>fbq('track', 'ProdutoView'); fbq('track', 'ViewContent');</script>";
        // pag carrinho
        if(is_cart()) echo "<script type='text/plain' data-cli-class='cli-blocker-script' data-cli-script-type='advertisement' data-cli-block='true' data-cli-element-position='head'>fbq('track', 'AddToCart');</script>";
        // pag pagamento
        if(is_checkout() && ! is_wc_endpoint_url( 'order-received' )) echo "<script type='text/plain' data-cli-class='cli-blocker-script' data-cli-script-type='advertisement' data-cli-block='true' data-cli-element-position='head'>fbq('track', 'InitiateCheckout');</script>";

        // pag de confirmacao de pgto
        if(is_wc_endpoint_url( 'order-received' )) {
            $order_key = $_GET['key'];
            $order_id = wc_get_order_id_by_order_key($order_key);
            $order = new WC_Order( $order_id );

            $currency = $order->get_order_currency();
            $checkout_subtotal = $order->get_subtotal();

            echo "<script type='text/plain' data-cli-class='cli-blocker-script' data-cli-script-type='advertisement' data-cli-block='true' data-cli-element-position='head'>fbq('track', 'Purchase', {value: $checkout_subtotal, currency: '$currency'});</script>";
        }
    }


    // google tradutor para qdo nao tiver o multilinguas
    if(!class_exists('SitePress')) {
      ?><div id="google_translate_element2"></div><script type="text/javascript">function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'pt',autoDisplay: false}, 'google_translate_element2');}</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script><script type="text/javascript">/* <![CDATA[ */ eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{})) /* ]]> */ </script><?php
      echo '<style>';  
        echo 'body{ top: 0 !important }';
        echo '#goog-gt-tt {display:none !important;}';
        echo '.goog-te-banner-frame {display:none !important;}';
        echo '.goog-te-menu-value:hover {text-decoration:none !important;}';
        echo '#google_translate_element2 {display:none!important;}';
      echo '</style>';
  }
}

// ========================================//
// SCRIPTS FOOTER
// ========================================// 
function afc_load_scripts_footer() { 
  $classes = get_body_class();
  // if(is_singular('etheme_portfolio')) { echo '<script async defer src="//assets.pinterest.com/js/pinit.js"></>'; }


  // widget freshdeskt - exceto pag WPForms conversacional
  if (! in_array('wpforms-conversational-form-custom-logo',$classes)) {
    // freshdesk - helpdesk da loja
    echo '<script>window.fwSettings = { \'widget_id\':70000001417 }; !function(){if("function"!=typeof window.FreshworksWidget){var n=function(){n.q.push(arguments)};n.q=[],window.FreshworksWidget=n}}() </script>';
    echo '<script type=\'text/javascript\' src=\'https://widget.freshworks.com/widgets/70000001417.js\' async defer></script>';

    echo '<script>function openFreshdesk() { FreshworksWidget(\'open\'); } window.fwSettings = { \'widget_id\': 70000001417 }; !function(){if("function"!=typeof window.FreshworksWidget){var n=function(){n.q.push(arguments)};n.q=[],window.FreshworksWidget=n}}()</script>';

  }


  // configuracoes da barra de admin, caso exista
  if (is_admin_bar_showing()) {
    echo '<style>';
    echo '@media screen and (max-width: 782px) { html{ margin-top: 0 !important; } body{ margin-top: 46px !important; } }';
    echo '@media screen and (max-width: 600px) { #wpadminbar {position: fixed} }';
    echo '.cli-modal.cli-blowup {z-index: 2147483002}';
    echo '.menu-mobile {top: 80px;}';
    echo '</style>'; 
  }

  // css custom para wpforms conversational ROXO
  if (in_array('wpforms-conversational-form-custom-logo',$classes)) echo '<link rel="stylesheet" href="'.get_template_directory_uri(  ).'/assets/css/wpforms-color-scheme-purple.css" type="text/css" media="all" />';
}