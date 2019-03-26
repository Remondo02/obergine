<?php
/*
Plugin Name: Obergine Banner
Author: Obergine Team - NOVA
Version: 1.0
*/


if ( ! defined( 'WPINC' ) ) {
    http_response_code( 404 );
    exit;
}

require plugin_dir_path( __FILE__ ) . 'includes/class-custom-post-type-banner.php';

$cpt_banner = new Custom_Post_Type_Banner;
register_activation_hook(
    __FILE__,
    function () use ( $cpt_banner ) {
        $cpt_banner->register_post_type();
        flush_rewrite_rules();
    }
);
register_deactivation_hook(
    __FILE__,
    function () use ( $cpt_banner ) {
        flush_rewrite_rules();
    }
);