<?php

get_header();


// get_template_part( 'template-part/searchform' );

get_template_part( 'template-part/searchform-advanced' );

echo('Template page plantes');

if ( have_posts() ) :
    while ( have_posts() ):
        the_post();
        the_title();
        
    endwhile;
endif;

wp_reset_postdata();





get_footer();

// ?>