
<?php


add_action( 'after_setup_theme', 'potagerparty_theme_setup' );

function potagerparty_theme_setup()
{
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}