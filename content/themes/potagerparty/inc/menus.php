<?php

add_action( 'init', 'obergine_nav_menus' );

//ajouter une nouvelle zone de menu à mon thème

function obergine_nav_menus()
{  
  register_nav_menus([
    'header-menu'  =>  'Menu du header',
    'footer-menu' =>  'Menu du footer'
  ]);
}
  
