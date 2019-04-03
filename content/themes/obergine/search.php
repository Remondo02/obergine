<?php

get_header();


// Template : search

?>

<main class="main articles-list-page">


    <?php

    get_template_part( 'template-part/searchform-advanced' );

    ?>
    <div <?php post_class( 'home-page__group search-page-container' ); ?>>
        <?php

        if ( have_posts() ) :
            while ( have_posts() ):
                the_post();
                

                get_template_part(
                    'template-part/content/post',
                    'search'
                );
                

                
            endwhile;
        endif;

        wp_reset_postdata();

        ?>
    </div>

</main>

<?php

get_footer();

?>