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
require get_theme_file_path('inc/contact-table.php');
require get_theme_file_path('inc/single-product.php');
require get_theme_file_path('inc/show-cart-content.php');





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


add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}