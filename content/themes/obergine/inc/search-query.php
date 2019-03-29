<?php

add_action( 'pre_get_posts', 'advanced_search_query' );

function advanced_search_query( $query ) {
    
    if ( isset( $_REQUEST['search'] ) && $_REQUEST['search'] == 'advanced' && ! is_admin() && $query->is_search && $query->is_main_query() ){
            
        
        $query->set( 'post_type', 'plant' );
        
        $_water = $_GET['water'] != '' ? $_GET['water'] : '';
        $_place = $_GET['place'] != '' ? $_GET['place'] : '';
        $_family = $_GET['family'] != '' ? $_GET['family'] : '';
        $_type = $_GET['type'] != '' ? $_GET['type'] : '';
        $_difficulty = $_GET['difficulty'] != '' ? $_GET['difficulty'] : '';
        $_spacing = $_GET['spacing'] != '' ? $_GET['spacing'] : '';
        $_plant_season = $_GET['plant_season'] != '' ? $_GET['plant_season'] : '';
        $_harvest_season = $_GET['harvest_season'] != '' ? $_GET['harvest_season'] : '';

        
        

            $meta_query =  array(                  
            'post_type' => Custom_Post_Type_Plant::POST_TYPE,
            'meta_query' => array(
                    array('key' => 'besoin_en_eau', 'value' => $_water, 'compare' => 'LIKE' ),                          
                    array('key' => 'emplacement', 'value' => $_place, 'compare' => 'LIKE'),
                    array('key' => 'famille', 'value' => $_family, 'compare' => 'LIKE'),
                    array('key' => 'type', 'value' => $_type, 'compare' => 'LIKE'),
                    array('key' => 'difficulte', 'value' => $_difficulty, 'compare' => 'LIKE'),
                    array('key' => 'espacement_des_pieds', 'value' => $_spacing, 'compare' => 'LIKE'),
                    array('key' => 'saison_de_semis', 'value' => $_plant_season, 'compare' => 'LIKE'),
                    array('key' => 'saison_de_recolte', 'value' => $_harvest_season, 'compare' => 'LIKE'),                   
                    
            )       

        ); 
    
        
        $query->set( 'meta_query', $meta_query );
        

    return $query; 
    }
}





