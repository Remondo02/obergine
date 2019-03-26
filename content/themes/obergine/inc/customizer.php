<?php

require get_theme_file_path( 'inc/customizer/section-homepage.php' );

add_action( 'customize_register', 'obergine_customize_register' );

function obergine_customize_register( $wp_customize )
{
    $panel_id = 'obergine_theme_panel';
    /*
    Panel : outil le plus haut de classement de nos settings
    @link https://developer.wordpress.org/reference/classes/wp_customize_manager/add_panel/
    */
    $wp_customize->add_panel(
        $panel_id,
        [
            'title'       => 'Configuration du thème obergine',
            'description' => 'Options de configuration du thème obergine',
            'priority'    => 1
        ]
    );
    //obergine_register_customizer_section_footer($wp_customize, $panel_id);
    obergine_register_customizer_section_homepage($wp_customize, $panel_id);
}