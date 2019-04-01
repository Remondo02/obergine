<?php
get_header();


// Template : article-single
?>

<main class="main mr-5 ml-5  mt-5 mb-5">
<?php

if ( have_posts() ) :

        the_post();


        the_post_thumbnail( 'post-thumbnail', [ 'class' => 'home-pagepostheadimageimg' ] ); ?>
    
    
         <div class="home-page post-main">
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


?>
</main>
<?php

get_footer();

