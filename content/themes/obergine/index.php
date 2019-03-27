<?php

get_header();


// get_template_part( 'template-part/searchform' );

get_template_part( 'template-part/searchform-advanced' );

echo('Template page plantes');




$the_query = new WP_Query( $meta_query );

if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ):
        $the_query->the_post();
        the_title();
        
    endwhile;
endif;

wp_reset_postdata();





get_footer();

// ?>