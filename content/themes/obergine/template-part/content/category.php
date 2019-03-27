<?php
get_header();


if ( have_posts() ) :
   
    while ( have_posts() ) :
      
        the_post();
       ?> <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1> 
            <div><?php the_excerpt(); ?></div>
            <div><?php the_date(); ?></div>
            <?php the_post_thumbnail(); ?>
      
        
<?php
    endwhile;
endif;
wp_reset_postdata();




get_footer();
