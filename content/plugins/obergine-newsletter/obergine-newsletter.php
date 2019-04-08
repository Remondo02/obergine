<?php
/*
Plugin Name: Obergine Newsletter
Author: La team des AS
Version: 1.0
*/

// Style CSS

add_action( 'admin_print_styles' , 'obergine_newsletter_admin_style' );
  
function obergine_newsletter_admin_style() {
  
  wp_enqueue_style(
    'obergine_newsletter_plugin_style',
    plugins_url('obergine-newsletter/css/style.css')
  );
}

// JS

add_action( 'admin_enqueue_scripts', 'obergine_newsletter_admin_script' );

function obergine_newsletter_admin_script(){

  wp_enqueue_script(
    'obergine_newsletter_plugin_script',
    plugins_url('obergine-newsletter/js/app.js')
  );

}

// Function pour récupérer les e-mails dans la BDD
function obergine_newsletter_table_selection() {

    global $wpdb;

    $myrows = $wpdb->get_results( "SELECT mail FROM wp_newsletter_table" );

    $userNewsletterMail = [];
    foreach($myrows as $userNewsletter){
        echo '<li class="newsletter-mail">' . $userNewsletter->mail . '</li>';
    }
}

add_action('admin_menu','newsletter_plugin_setup_menu');

function newsletter_plugin_setup_menu(){

      add_menu_page(
          'Newsletter contacts', 
          'Newsletter', 
          'manage_options', 
          'newsletter-plugin', 
          'display_menu',
          'dashicons-email-alt',
          8
        );

}

function display_menu(){

      ?>

      <div class="newsletter">
        <h3 class="newsletter-title">Voici les incriptions reçues à la newsletter</h3>
        <ul class="newsletter-ul">
            <?php
            obergine_newsletter_table_selection();
            ?>
        </ul>
      </div>
      <?php

}





