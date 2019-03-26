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
        get_theme_file_uri( 'public/css/script.css' ),
        [],
        false,
        true
    );
}