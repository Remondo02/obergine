<?php

global $wpdb;

$charset_collate = $wpdb->get_charset_collate();

$newsletter_table_name = $wpdb->prefix . 'newsletter_table';

$newsletter_sql = "CREATE TABLE IF NOT EXISTS $newsletter_table_name (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `mail` VARCHAR(64) NOT NULL,
	time datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
	PRIMARY KEY  (`id`)
) $charset_collate;";

require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

dbDelta($newsletter_sql);




function obergine_newsletter_table_insert() {
    global $wpdb;

    $newsletter_table_name = $wpdb->prefix . 'newsletter_table';

    $email = $_POST['email'];
    dump($email);
    if(isset($email)){
        $wpdb->insert(
            'wp_newsletter_table',
            array(
                'mail' => $email,
            ),
            array(
                '%s',
            )
        );
        echo 'define';
    }
    else {
        echo 'non défini';
    }
}

obergine_newsletter_table_insert();

// function obergine_newsletter_table_select() {

//     global $wpdb;

//     dump($wpdb);

//     $myrows = $wpdb->get_results( "SELECT mail FROM wp_newsletter_table" );

//     echo $myrows;

// }

// obergine_newsletter_table_select();

