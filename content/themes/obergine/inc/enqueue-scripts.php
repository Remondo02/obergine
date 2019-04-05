<?php
add_action( 'wp_enqueue_scripts', 'obergine_enqueue_scripts' );
function obergine_enqueue_scripts()
{
    wp_enqueue_style(
        'obergine-style',
        get_theme_file_uri( 'public/css/style.css' )
    );
    wp_enqueue_script(
        'obergine-script',
        get_theme_file_uri( 'public/js/app.js' ),
        [],
        false,
        true
    );
    wp_enqueue_script(
        'obergine-script-burger-menu',
        get_theme_file_uri( 'public/js/burger.js' ),
        [],
        false,
        true
    );
    wp_enqueue_script(
        'obergine-script-rellax',
        get_theme_file_uri( 'public/js/rellax.js' ),
        [],
        false,
        true
    );
    wp_enqueue_script(
        'obergine-script-meteo',
        get_theme_file_uri( 'public/js/meteo.js' ),
        [],
        false,
        true
    );
}