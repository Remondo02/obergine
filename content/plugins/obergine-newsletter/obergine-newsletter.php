<?php
/*
Plugin Name: Obergine Newsletter
Author: La team des AS
Version: 1.0
*/

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
          'test-plugin', 
          'display_menu',
          'dashicons-email-alt',
          8
        );

}

function display_menu(){

      ?>
      <style type=text/css>
      .newsletter {
          margin: 1rem 3rem;
      }
      .newsletter-title {
        padding-bottom: 1rem;
        border-bottom: 2px dotted black;
      }
      </style>
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




