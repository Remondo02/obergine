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

    $nameContact = $_POST['name-contact'];
    $surnameContact = $_POST['surname-contact'];
    $emailContact = $_POST['email-contact'];
    $subjectContact = $_POST['subject-contact'];
    $messageContact = $_POST['message-contact'];

    if(!empty($_POST['name-contact'])){
        echo 'Nous avons bien reçu votre demande';
            $wpdb->insert(
                'wp_contact_table',
                array(
                    'name'      => $nameContact,
                    'surname'   => $surnameContact,
                    'mail'      => $emailContact,
                    'subject'   => $subjectContact,
                    'message'   => $messageContact
                ),
                array(
                    '%s',
                )
            );
    }
}

obergine_contact_table_insert();
