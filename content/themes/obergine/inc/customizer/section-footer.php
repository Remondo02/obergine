<?php
function obergine_register_customizer_section_footer($wp_customize, $panel_id)
{
    $section_id = 'obergine_theme_section_footer';

    $wp_customize->add_section(
        $section_id,
        [
            'title' => 'Footer',
            'description' => 'Options de configuration du footer du thème obergine',
            'panel' => $panel_id
        ]
    );

    $wp_customize->add_setting(
        'obergine_theme_footer_active',
        [
            'type'    => 'chekbox',
            'label'   => 'Activer le footer',
            'section' => $section_id
        ]
    );
}