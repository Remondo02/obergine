<?php

add_action( 'pre_get_posts', 'advanced_search_query' );

function advanced_search_query( $query ) {
    
    if ( isset( $_REQUEST['search'] ) && $_REQUEST['search'] == 'advanced' && ! is_admin() && $query->is_search && $query->is_main_query() ){
            
        
        $query->set( 'post_type', [ 'plant' , 'post'] );

        $array_meta_queries = [];

        if (!empty($_GET['water'])) {

            $array_meta_queries[] = ['key' => 'besoin_en_eau', 'value' => $_GET['water'], 'compare' => 'LIKE'];
        }

        if (!empty($_GET['place'])) {

            $array_meta_queries[] = ['key' => 'emplacement', 'value' => $_GET['place'], 'compare' => 'LIKE'];
        }

        if (!empty($_GET['family'])) {

            $array_meta_queries[] = ['key' => 'famille', 'value' => $_GET['family'], 'compare' => 'LIKE'];
        }

        if (!empty($_GET['type'])) {

            $array_meta_queries[] = ['key' => 'type', 'value' => $_GET['type'], 'compare' => 'LIKE'];
        }

        if (!empty($_GET['difficulty'])) {

            $array_meta_queries[] = ['key' => 'difficulte', 'value' => $_GET['difficulty'], 'compare' => 'LIKE'];
        }

        if (!empty($_GET['spacing'])) {

            $array_meta_queries[] = ['key' => 'espacement_des_pieds', 'value' => $_GET['spacing'], 'compare' => 'LIKE'];
        }

        if (!empty($_GET['harvest_season'])) {

            $array_meta_queries[] = ['key' => 'saison_de_recolte', 'value' => $_GET['harvest_season'], 'compare' => 'LIKE'];
        }

        if (!empty($_GET['plant_season'])) {

            $array_meta_queries[] = ['key' => 'saison_de_semis', 'value' => $_GET['plant_season'], 'compare' => 'LIKE'];
        }

        
        
        // $_water = $_GET['water'] != '' ? $_GET['water'] : '';
        // $_place = $_GET['place'] != '' ? $_GET['place'] : '';
        // $_family = $_GET['family'] != '' ? $_GET['family'] : '';
        // $_type = $_GET['type'] != '' ? $_GET['type'] : '';
        // $_difficulty = $_GET['difficulty'] != '' ? $_GET['difficulty'] : '';
        // $_spacing = $_GET['spacing'] != '' ? $_GET['spacing'] : '';
        // $_plant_season = $_GET['plant_season'] != '' ? $_GET['plant_season'] : '';
        // $_harvest_season = $_GET['harvest_season'] != '' ? $_GET['harvest_season'] : '';

        
        

        $meta_query =  array(                  
            //'post_type' => Custom_Post_Type_Plant::POST_TYPE,
            'meta_query' => $array_meta_queries
        ); 
    
        $query->set( 'meta_query', $meta_query );
        // $query = new WP_Query( array( 's' => 'tomate' ) );
        
    //     echo '<pre>';
    //    var_dump($query);
    //    die();      
    return $query; 
    }
}





