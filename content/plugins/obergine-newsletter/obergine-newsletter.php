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
        echo '<ul>';
        echo '<li>' . $userNewsletter->mail . '</li>';
        echo '<ul>';
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
      <h3 class="newsletter-title">Voici les incriptions à la newsletter</h3>

      <?php
      obergine_newsletter_table_selection();

}
?>



