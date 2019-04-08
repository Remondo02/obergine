<?php 

  get_header(); ?>

<main class="main home-page">

    <?php 

    $banner_query = new WP_Query([
        'post_type'      => Custom_Post_Type_Banner::POST_TYPE,
        'posts_per_page'  => 1,
        'orderby'        => 'date',
        'order'          => 'DESC'
    ]);
    if ( $banner_query->have_posts() ) :
        $banner_query->the_post();
        get_template_part(
            'template-part/content/banner',
        'home'
        );
        endif;
        wp_reset_postdata();
    ?>


    <?php 

    $posts_count = get_theme_mod( 'obergine_theme_homepage_posts_count', 6 );





    $last_post_query = new WP_Query([
        'post_type'         => 'post',
        'posts_per_page'    => $posts_count,
        'orderby'           => 'date',
        'order'             => 'DESC',
        
    ]);


    if ( $last_post_query->have_posts() ) :
        
        $i=0;

        while ( $last_post_query->have_posts() ) :        

            $last_post_query->the_post();

            $i++;
            
            

            if ($i %2 == 0) {

                get_template_part(
                    'template-part/content/post',
                    'home-hr'
                );
            } else {

                get_template_part(
                    'template-part/content/post',
                    'home'
                );
            }
            
            
        endwhile;
    endif;
    wp_reset_postdata();

    ?>


</main>
<div class="back-to-home-container back-to-home-container-home-page back-to-home-container-archive-plant">
    <a class="back-to-home-container-link" href="#ancre-home" class="main__container__main-container__back-to-home__link">Retourner en haut de page <i class="fa fa-arrow-up" aria-hidden="true"></i></a>
</div>
<?php 

get_footer();
