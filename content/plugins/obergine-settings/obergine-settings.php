<?php
/*
Plugin Name: Obergine Settings
Author: La team des AS
Version: 1.0
*/
if ( ! defined( 'WPINC' ) ) {
    http_reponse_code( 404 );
    exit;
}
require plugin_dir_path( __FILE__  ) . '/inc/class_custom_post_type_plant.php';

$cpt_plant = new Custom_Post_Type_Plant;

register_activation_hook(
    __FILE__,
    function() use ( $cpt_plant ) {
        // On exécute la fonction contenant la création du custom post type et des custom taxonomies afin que WordPress connaisse les routes à créer avant de rafraîchir les règles de réécriture (rewrite rules)
        $cpt_plant->register_post_type();
        // @link https://codex.wordpress.org/Function_Reference/flush_rewrite_rules
        // On n'exécute pas la fonction flush_rewrite_rules n'importe comment. C'est une opération coûteuse.
        flush_rewrite_rules();
    }
);
register_deactivation_hook(
    __FILE__,
    function() {
        flush_rewrite_rules();
    }
);