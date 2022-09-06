<?php

// ========================================//
// CUSTOM DASHBOARD ITENS PARA LOGADOS
// ========================================// 
function edit_admin_menus(){
  $admin = wp_get_current_user();

  remove_menu_page( 'edit.php' );
  remove_menu_page( 'edit-comments.php' );
  remove_menu_page( 'wc_stripe' ); // stripe

  // somente para Ana
  if ($admin->user_login === 'aninha') {
  }

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
function afc_admin_css_simples() {
    echo '<style>';
      echo '#adminmenu #toplevel_page_woocommerce > a > div.wp-menu-image.svg {background: none !important;}';
      echo '#adminmenu #toplevel_page_woocommerce > a > div.wp-menu-image::before {';
        echo 'font-family: \'WooCommerce\' !important; line-height: 1;';
        echo 'content: \'\e03d\'; padding: 7px 0; font-size: 20px; position: relative; top: 7px;';
      echo '}';
    echo '</style>';
}
