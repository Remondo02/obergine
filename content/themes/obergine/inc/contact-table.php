<?php

global $wpdb;

$charset_collate = $wpdb->get_charset_collate();

$contact_table_name = $wpdb->prefix . 'contact_table';

$contact_sql = "CREATE TABLE IF NOT EXISTS $contact_table_name (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(64) NOT NULL,
    `surname` VARCHAR(64) NOT NULL,
    `mail` VARCHAR(255) NOT NULL,
    `subject` VARCHAR(255) NOT NULL,
    `message` LONGTEXT NOT NULL,
	time datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
	PRIMARY KEY  (`id`)
) $charset_collate;";

require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

dbDelta($contact_sql);


function obergine_contact_table_select() {

    global $wpdb;

    $myrows = $wpdb->get_results( "SELECT * FROM wp_contact_table" );

}

obergine_contact_table_select();

function obergine_contact_table_insert() {
    global $wpdb;

    $contact_table_name = $wpdb->prefix . 'contact_table';

    $myrows = $wpdb->get_results( "SELECT * FROM wp_contact_table" );

    dump($_POST);

    // $email = $_POST['email'];
    // dump($email);

    // $userNewsletterMail = [];
    // foreach($myrows as $userNewsletter){
    //     $userNewsletterMail[] = $userNewsletter->mail;
    // }

    // dump($userNewsletterMail);

    // if(isset($email)){
    //     if(in_array($email, $userNewsletterMail)){
    //         echo 'Adresse déjà dans la BDD';
    //     }
    //     else{
    //         echo 'Nouveau mail ajouté';
    //         $wpdb->insert(
    //             'wp_newsletter_table',
    //             array(
    //                 'mail' => $email,
    //             ),
    //             array(
    //                 '%s',
    //             )
    //         );
    //     }
    // }
}

obergine_contact_table_insert();
