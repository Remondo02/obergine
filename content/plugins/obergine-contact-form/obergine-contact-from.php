<?php
/*
Plugin Name: Obergine Contact Form
Author: La team des AS
Version: 1.0
*/

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
        <style type=text/css>
        .contact {
            margin: 1rem 3rem;
        }
        .contact-title {
          padding-bottom: 1rem;
          border-bottom: 2px dotted black;
        }
        .contact-table {
          border: 1px solid black;
          border-collapse: collapse;
          min-width: 100%;
          max-width: 100%;
          text-align: center;
          vertical-align: center;
        }
        td {
          border: 1px solid black;
          padding: .1rem;
          height: 2rem;
        }
        tr:hover {
          background-color: #f8f8f8;
        }
        .contact-message {
          width: 60%;
        }
        thead {
          font-weight: bold;
          font-size: .9rem;
          padding: 5rem;
        }
        .contact-response {
          text-decoration: none;
          font-size: .8rem;
          color: white;
          background-color: green;
          border-radius: 1.3rem;
          padding: .2rem;
        }
        
        .contact-delete {
          font-size: .8rem;
          margin: .3rem;
          background-color: red;
          color: white;
          border-radius: 1.3rem;
          padding: .2rem;
          text-decoration: none;
        }
        .contact-delete:hover, .contact-response:hover {
              color: white;
            }
        .contact-button {
          min-width: 30%;
          width: 30%;
        }
        .title-delete {
          margin: 1rem 6rem;
        }
        
        </style>
        
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




