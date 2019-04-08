<?php
get_header();

// Template : Plantes potagères

?>
<main class="main articles-list-page">
    <?php
    ?>
    <section class="articles-list-page__filters">
        <?php
        get_template_part( 'template-part/searchform-advanced' );

        

        ?>
    </section>
    <section class="articles-list-page__main">
        <?php


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

        ?>
    </section>
    
</main>
<div class="back-to-home-container back-to-home-container-home-page back-to-home-container-archive-plant">
    <a class="back-to-home-container-link" href="<?= home_url(); ?>" class="main__container__main-container__back-to-home__link">Retourner à l'accueil <i class="fa fa-home" aria-hidden="true"></i></a>
</div>
<?php


get_footer();
?>