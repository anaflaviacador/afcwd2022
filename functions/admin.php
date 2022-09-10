<?php
add_action('acf/init', 'afc_acfpro_init');
function afc_acfpro_init() {
  $admin = wp_get_current_user();
  
  if (($admin->user_login === 'aninha' || $admin->user_login === 'admin') && function_exists('acf_add_options_page') ) {
    $main_menu = acf_add_options_page(array(
      'page_title'  => __('Whatsapp','afcwd2022'),
      'menu_title'  => __('Whatsapp','afcwd2022'),
      'menu_slug'   => 'afc-whatsapp',
      'capability'  => 'manage_options',
      'icon_url'    => 'dashicons-heart',
      'position'    => 5,
      'redirect'    => false
    ));
  }
}


// ========================================//
// CUSTOM DASHBOARD ITENS PARA LOGADOS
// ========================================// 
function edit_admin_menus(){
  $admin = wp_get_current_user();

  remove_menu_page( 'edit.php' );
  remove_menu_page( 'edit-comments.php' );
  remove_menu_page( 'wc_stripe' ); // stripe

  // somente para full stackagency
  if ( $admin->user_login === 'fullstackagency' ) {
    remove_menu_page( 'edit.php?post_type=acf-field-group' );
    remove_menu_page( 'pprh-plugin-settings' );
    remove_menu_page( 'c4wp-admin-captcha' );
    remove_menu_page( 'wp-mail-smtp');
    remove_menu_page( 'edit.php?post_type=pretty-link');
    remove_submenu_page( 'woocommerce', 'woocommerce-extra-checkout-fields-for-brazil');
    remove_submenu_page( 'woocommerce', 'mercadopago-settings');
    remove_menu_page( 'edit.php?post_type=swp_forms');
    remove_menu_page( 'edit.php?post_type=cookielawinfo');
    remove_menu_page( 'edit.php?post_type=afc_depoimentos');
    remove_menu_page( 'edit.php?post_type=etheme_portfolio');
    remove_submenu_page( 'upload.php', 'webp_express_conversion_page');
    remove_menu_page( 'edit.php?post_type=afc_blog');
    remove_menu_page( 'edit.php?post_type=page');
    remove_menu_page( 'affiliate-wp');
    remove_menu_page( 'woocommerce');
    remove_submenu_page('woocommerce', 'wc-admin');
    remove_menu_page( 'edit.php?post_type=product');
    remove_menu_page( 'upload.php');
    remove_menu_page( 'themes.php');
    remove_menu_page( 'users.php');
    remove_menu_page( 'ai1wm_export');
  }
}
add_action( 'admin_menu', 'edit_admin_menus', 999 );



// ========================================//
// CSS PONTUAIS ADMIN
// ========================================//
add_action('admin_head', 'afc_admin_css_simples',999 );
function afc_admin_css_simples() { ?>
    <style>
      /*ico woo*/
      #adminmenu #toplevel_page_woocommerce > a > div.wp-menu-image.svg {background: none !important;}
      #adminmenu #toplevel_page_woocommerce > a > div.wp-menu-image::before {
        font-family: 'WooCommerce' !important; line-height: 1;
        content: '\e03d'; padding: 7px 0; font-size: 20px; position: relative; top: 7px;
      }
      /*ico whatsapp*/
      .toplevel_page_afc-whatsapp > a > div.dashicons-before::before{
        background-repeat: no-repeat; background-position: center center; background-size: 16px auto; 
        content: ''; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'%3E%3Cpath fill='%23fff' d='M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7A183.9 183.9 0 0 1 39.4 254c0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z'/%3E%3C/svg%3E");
      }
    </style>
  <?php 
}
