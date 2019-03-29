<?php
get_header();

// Template : Plantes potagères

get_template_part( 'template-part/searchform-advanced' );


$the_query = new WP_Query( $meta_query );

if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ):
        $the_query->the_post();
        the_title();
        
    endwhile;
endif;

wp_reset_postdata();


$last_post_query = new WP_Query([
    'post_type'         => Custom_Post_Type_Plant::POST_TYPE,
    'posts_per_page'    => -1,
    'orderby'           => 'date',
    'order'             => 'DESC',
    //'post__in'          => $id,
]);


if ( $last_post_query->have_posts() ) :
                
    while ( $last_post_query->have_posts() ) :        
        $last_post_query->the_post();
        
        get_template_part(
            'template-part/content/plantes',
            'list'
        );
        
        
    endwhile;
endif;
wp_reset_postdata();



get_footer();
?>