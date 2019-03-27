
<?php
add_action( 'after_setup_theme', 'obergine_theme_setup' );

function obergine_theme_setup()
{
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 500, 500, false );
}