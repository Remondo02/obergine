<?php

add_action( 'pre_get_posts', 'advanced_search_query' );
function advanced_search_query( $query ) {
    
    if ( isset( $_REQUEST['search'] ) && $_REQUEST['search'] == 'advanced' && ! is_admin() && $query->is_search && $query->is_main_query() ){
            
        echo 'bonjour';
        
        $query->set( 'post_type', 'plant' );

        // var_dump($query);
        
        $_water = $_GET['water'] != '' ? $_GET['water'] : '';
        
         $meta_query =  array(
                           array(
                            'key'     => 'besoin_en_eau', // assumed your meta_key is 'car_model'
                            'value'   => $_water,
                            'compare' => 'LIKE', // finds models that matches 'model' from the select field
                           )
                          );  
        
        $query->set( 'meta_query', $meta_query );

        
        var_dump($meta_query[0]['key']);
    }
}
