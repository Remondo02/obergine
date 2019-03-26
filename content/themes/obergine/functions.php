<?php

do_action( 'potagerparty_theme_setup' );

require get_theme_file_path('inc/setup.php');
require get_theme_file_path('inc/enqueue-scripts.php');
require get_theme_file_path('inc/menus.php');
require get_theme_file_path('inc/cleanup.php');
require get_theme_file_path('inc/search-query.php');


/* 
 *   Make the Add To Cart buttons appear on the WooCommerce shop page. 
 */

add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );