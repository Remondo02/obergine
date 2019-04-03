<?php

do_action( 'potagerparty_theme_setup' );

require get_theme_file_path('inc/setup.php');
require get_theme_file_path('inc/enqueue-scripts.php');
require get_theme_file_path('inc/menus.php');
require get_theme_file_path('inc/cleanup.php');
require get_theme_file_path('inc/customizer.php');
require get_theme_file_path('inc/search-query.php');
require get_theme_file_path('inc/widget.php');
require get_theme_file_path('inc/function-login.php');
require get_theme_file_path('inc/email-cron.php');
require get_theme_file_path('inc/newsletter-table.php');



// function page404_redirection()
// {
//  global $mapage;
//  if(is_404())
//  {
//  wp_redirect(home_url("404-2")); //remplacez "erreur-404" par le nom d'identifiant de votre page
//  exit;
//  }
// }
 
// add_action('wp', 'page404_redirection',1);

//require get_theme_file_path('template-part/searchform-advanced.php');
/* 
 *   Make the Add To Cart buttons appear on the WooCommerce shop page. 
 */

// add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
// remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
// remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

// function obergine_add_woocommerce_support() {
//     add_theme_support( 'woocommerce', array(
//         'thumbnail_image_width' => 150,
//         'single_image_width'    => 200,

//         'product_grid'          => array(
//             'default_rows'    => 3,
//             'min_rows'        => 2,
//             'max_rows'        => 8,
//             'default_columns' => 4,
//             'min_columns'     => 2,
//             'max_columns'     => 5,
//         ),
//     ) );
// }

// add_action( 'after_setup_theme', 'obergine_add_woocommerce_support' );



