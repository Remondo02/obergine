<?php

do_action( 'potagerparty_theme_setup' );

require get_theme_file_path('inc/setup.php');
require get_theme_file_path('inc/enqueue-scripts.php');
require get_theme_file_path('inc/menus.php');
require get_theme_file_path('inc/cleanup.php');
require get_theme_file_path('inc/customizer.php');
require get_theme_file_path('inc/search-query.php');
require get_theme_file_path('inc/search-bar.php');
require get_theme_file_path('inc/widget.php');


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

add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
