<?php
/*
Plugin Name: Obergine Contact Form
Author: La team des AS
Version: 1.0
*/

// Function pour récupérer les e-mails dans la BDD
function obergine_contact_table_selection() {

    global $wpdb;

    $myrows = $wpdb->get_results( "SELECT * FROM wp_contact_table" );

    foreach($myrows as $userContact){
        echo '<li class="newsletter-mail">' . $userContact->name . '</li>';
    }
}

add_action('admin_menu','contact_form_plugin_setup_menu');

function contact_form_plugin_setup_menu(){

      add_menu_page(
          'Formulaire de contacts', 
          'Questions', 
          'manage_options', 
          'contact-form-plugin', 
          'test2',
          'dashicons-testimonial',
          9
        );

}

function test2(){

      ?>
      <style type=text/css>
      .contact {
          margin: 1rem 3rem;
      }
      .contact-title {
        padding-bottom: 1rem;
        border-bottom: 2px dotted black;
      }
      </style>
      <div class="contact">
        <h3 class="contact-title">Voici les demandes :</h3>
        <ul class="contact-ul">
            <?php
            obergine_contact_table_selection();
            ?>
        </ul>
      </div>
      <?php

}




