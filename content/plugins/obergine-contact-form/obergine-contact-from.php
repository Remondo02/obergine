<?php
/*
Plugin Name: Obergine Contact Form
Author: La team des AS
Version: 1.0
*/

// Style CSS

add_action( 'admin_print_styles' , 'obergine_contact_form_admin_style' );
  
function obergine_contact_form_admin_style() {
  
  wp_enqueue_style(
    'obergine_contact-form_plugin_style',
    plugins_url('obergine-contact-form/css/style.css')
  );
}

// JS

add_action( 'admin_enqueue_scripts', 'obergine_contact_form_admin_script' );

function obergine_contact_form_admin_script(){

  wp_enqueue_script(
    'obergine_contact-form_plugin_script',
    plugins_url('obergine-contact-form/js/app.js')
  );

}

// Function pour supprimer un utilisateur
if(!empty($_POST['id-contact'])) {


      $idContact = $_POST['id-contact'];
      
      $wpdb->delete( 'wp_contact_table' , array( 'id' => $idContact ) );
      

}

// Function pour récupérer les e-mails dans la BDD
function obergine_contact_table_selection() {

    global $wpdb;

    $myrows = $wpdb->get_results( "SELECT * FROM wp_contact_table" );

    foreach($myrows as $userContact){

        $idContact = $userContact->id;
        echo '<tr class="contact-table-row">';
        echo '<td>' . $userContact->name . '</td>';
        echo '<td>' . $userContact->surname . '</td>';
        echo '<td>' . $userContact->mail . '</td>';
        echo '<td>' . $userContact->subject . '</td>';
        echo '<td>' . $userContact->message .'</td>';
        echo '<td class="contact-button"><a class="contact-response" href="mailto:' . $userContact->mail . '">Répondre</a> 
        <form method="post" action="'. $_SERVER['PHP_SELF']. '?page=contact-form-plugin'. '">
          <input type="hidden" name="id-contact" value="'.$idContact.'">
          <input type="submit" class="contact-delete" name="select" value="Supprimer la demande" />
        </form>';
        echo '</tr>';

    }

}

add_action('admin_menu','contact_form_plugin_setup_menu');

function contact_form_plugin_setup_menu(){

      add_menu_page(
          'Formulaire de contacts', 
          'Formulaire de contacts', 
          'manage_options', 
          'contact-form-plugin', 
          'display_infos',
          'dashicons-testimonial',
          9
        );

}

function display_infos(){
?>  
      <div class="contact">
        <h3 class="contact-title">Voici les demandes :</h3>
          <table class="contact-table">
            <thead>
              <tr class="contact-table-row">
                <td>Nom</td>
                <td>Prénom</td>
                <td>Adresse Email</td>
                <td>Sujet</td>
                <td class="contact-message" colspan="2">Message</td>
              </tr>
            </thead>
          <tbody>
            <?php
            obergine_contact_table_selection();
            ?>
          </tbody>
        </table>
      </div>
      <?php

}




