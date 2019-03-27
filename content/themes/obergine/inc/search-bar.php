<?php

function searchfilter($query) {
    if ($query->is_search && !is_admin() ) {
        if(isset($_GET['post_type'])) {
            $type = $_GET['post_type'];
                if($type == 'plant') {
                    $query->set('post_type',array('plant'));
                }                
        }       
    }
return $query;
}
add_filter('pre_get_posts','searchfilter');