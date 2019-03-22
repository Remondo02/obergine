<?php

get_header();


get_template_part( 'advanced', 'searchform' );


$args = array(
    'post_type' => Custom_Post_Type_Plant::POST_TYPE,
    'meta_query' => array(
        array(
            'meta_key'   => 'besoin_en_eau',
            'meta_value' => 'faible',
            'compare'    => 'LIKE' // finds models that matches 'model' from the select field
        ),
    ),
);

// $the_query = new WP_Query($args);

$the_query = new WP_Query( $args );

var_dump($the_query);


// var_dump($the_query->the_title());
// var_dump($the_query->have_posts->the_post());
if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ):
        $the_query->the_post();
        the_title();
    // $the_query->the_post();
    // $the_query->the_title();
    endwhile;
endif;

wp_reset_postdata();


get_footer();


// <?php
// $last_recipe_query = new WP_Query([
//     'post_type'      => Custom_Post_Type_Recipe::POST_TYPE,
//     'posts_per_page' => 1,
//     'orderby'        => 'date',
//     'order'          => 'DESC',
// ]);
// if ( $last_recipe_query->have_posts() ) :
//     $last_recipe_query->the_post();
//     get_template_part(
//         'template-parts/content/recipe',
//         'home'
//     );
// endif;
// ?>