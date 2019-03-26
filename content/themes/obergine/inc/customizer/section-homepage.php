<?php
function obergine_register_customizer_section_homepage($wp_customize, $panel_id)
{
    $section_id = 'obergine_theme_section_homepage';
    $wp_customize->add_section(
        'obergine_theme_section_homepage',
        [
            'title' => 'Homepage',
            'panel' => $panel_id
        ]
    );
    $posts_count_setting_id = 'obergine_theme_homepage_posts_count';
    $wp_customize->add_setting(
        $posts_count_setting_id,
        [
            'default' => 6,
            'validate_callback' => 'obergine_customizer_validate_homepage_posts_count'
        ]
    );
    $wp_customize->add_control(
        $posts_count_setting_id,
        [
            'type'    => 'number',
            'label'   => 'Nombre d\'articles',
            'section' => $section_id,
            'input_attrs' => [
                'min'  => 2,
                'max'  => 10,
                'step' => 2
            ]
        ]
    );
   
    
    
}