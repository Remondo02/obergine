<?php

add_action( 'obergine_after_setup_theme', 'obergine_theme_cleanup' );
function obergine_theme_cleanup()
{
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
}