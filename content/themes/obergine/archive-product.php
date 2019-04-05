<?php
get_header();


if ( have_posts() ) :
    
       

        the_post();
       

endif;
wp_reset_postdata();



get_footer();