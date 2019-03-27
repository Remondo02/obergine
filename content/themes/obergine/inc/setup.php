
<?php
add_action( 'after_setup_theme', 'obergine_theme_setup' );

function obergine_theme_setup()
{
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}