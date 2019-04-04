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
require get_theme_file_path('inc/single-product.php');










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



// function isa2_add_cron_recurrence_interval( $schedules ) {
 
//     $schedules['every_three_minutes'] = array(
//             'interval'  => 60,
//             'display'   => __( 'Every 3 Minutes', 'textdomain' )
//     );
     
//     return $schedules;
// }
// add_filter( 'cron_schedules', 'isa2_add_cron_recurrence_interval' );

// if ( ! wp_next_scheduled( 'your_three_minute_action_hook' ) ) {
//     wp_schedule_event( time(), 'every_three_minutes', 'your_three_minute_action_hook' );
// }


// add_action('your_three_minute_action_hook', 'my_function');
 
// function my_function() {
//     if (is_user_logged_in()){ 

//         $user_posts_ids = get_user_favorites();
//         foreach($user_posts_ids as $id) {  
//             $plant_month = get_field( "mois_de_semis", $id); 
            
//             foreach($plant_month as $key) {                   
                
//                 $key = strtolower($key); 
//                 $month = date_i18n('F');
                
//                 $month = '<span class="main__container__main-container__top__content__icones__month__march planting-date date-valid date-icone">'.$month.'</span>';         
                
                
//                 if( $key == $month) {
//                     $item = get_the_title($id) . ', ' . $item ;
                    
//                 }
                
//             }
            
//         }
//         $message = 'Légumes et fruits à planter:' . $item;
            
//         $to = 'emma.marceau@gmail.com';
//         $subject = 'Dis moi que ça marche !';
//         wp_mail( $to, $subject, $message );
//     };

 
// } 



// function isa_add_cron_recurrence_interval( $schedules ) {
 
//     $schedules['every_three_minutes'] = array(
//             'interval'  => 60,
//             'display'   => __( 'Every 1 Minutes', 'textdomain' )
//     );
     
//     return $schedules;
// }
// add_filter( 'cron_schedules', 'isa_add_cron_recurrence_interval' );

// if ( ! wp_next_scheduled( 'your_three_minute_action_hook' ) ) {
//     wp_schedule_event( time(), 'every_three_minutes', 'your_three_minute_action_hook' );
// }


// add_action('your_three_minute_action_hook', 'isa_test_cron_job_send_mail');
 
// function isa_test_cron_job_send_mail() {

//     // if (is_user_logged_in()){ 

//         $user_posts_ids = get_user_favorites();
//         foreach($user_posts_ids as $id) {  
//             $plant_month = get_field( "mois_de_semis", $id); 
            
//             foreach($plant_month as $key) {                   
                
//                 $key = strtolower($key); 
//                 $month = date_i18n('F');
                
//                 $month = '<span class="main__container__main-container__top__content__icones__month__march planting-date date-valid date-icone">'.$month.'</span>';         
                
                
//                 if( $key == $month) {
//                     $item = get_the_title($id) . ', ' . $item ;
                    
//                 }
                
//             }
            
//         }
        
//         $message = 'Légumes et fruits à planter:' . $item;
//         $to = '';
//         $subject = 'Dis moi que ça marche !';
//         wp_mail( $to, $subject, $message );

// // };

//     // $to = 'emma.marceau@gmail.com';
//     // $subject = 'Test my 3-minute cron job';
//     // $message = 'If you received this message, it means that your 3-minute cron job has worked! <img draggable="false" class="emoji" alt="🙂" src="https://s.w.org/images/core/emoji/11.2.0/svg/1f642.svg"> ';
 
//     // wp_mail( $to, $subject, $message );
 

// }

