<?php
add_action( 'init', 'obergine_nav_menus' );
//ajouter une nouvelle zone de menu à mon thème
function obergine_nav_menus()
{
    register_nav_menus([
        'header-menu' => 'Menu du header',
        'footer-menu' => 'Menu du footer'
    ]);
}

// @link https://codex.wordpress.org/Plugin_API/Filter_Reference/nav_menu_css_class
// add_filter( 'nav_menu_css_class', 'ocooking_nav_menu_css_class' );
	
// function ocooking_nav_menu_css_class( $classes )
// {
//     $classes[] = 'menu__list__list-item';

//     return $classes;
// }

// // @link https://codex.wordpress.org/Plugin_API/Filter_Reference/nav_menu_link_attributes
// add_filter(
//     'nav_menu_link_attributes',
//     'ocooking_nav_menu_link_attributes',
//     10,
//     1
// );

// function ocooking_nav_menu_link_attributes( $attributes )
// {
//     if ( ! isset( $attributes['class'] ) ) {
//         $attributes['class'] = '';
//     }

//     $attributes['class'] .= ' menu__list__list-item__link';

//     return $attributes;
// }