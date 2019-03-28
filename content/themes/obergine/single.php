<?php
get_header();

// Template : article-single

if ( have_posts() ) :

        the_post();


        the_post_thumbnail( 'post-thumbnail', [ 'class' => 'home-pagepostheadimageimg' ] ); ?>


         <div class="home-pagepostmain">
            <h1> <?php the_title(); ?></h1>
            <p> écrit par <?php the_author(); ?> le <?php the_date(); ?> </p>
            <div class="home-pagepostmaincontent">
                <p class="home-pagepostmaincontent__text"><?php the_content(); ?> </p>
                <?php the_category(); ?>

            </div>
        </div>

<?php

endif;
wp_reset_postdata();




get_footer();