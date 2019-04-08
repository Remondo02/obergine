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

<div class="back-to-home-container back-to-home-container-home-page back-to-home-container-archive-plant">
    <a class="back-to-home-container-link" href="<?= home_url(); ?>" class="main__container__main-container__back-to-home__link">Retourner à l'accueil <i class="fa fa-home" aria-hidden="true"></i></a>
</div>
<?php

get_footer();

