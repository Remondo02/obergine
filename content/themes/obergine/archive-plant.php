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

        $the_query = new WP_Query( $meta_query );

        if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ):
                $the_query->the_post();
                the_title();
                
            endwhile;
        endif;

<<<<<<< HEAD
        wp_reset_postdata();
        ?>
    </section>
    <section class="articles-list-page__main">
        <?php
=======
get_template_part( 'template-part/searchform-advanced' );


$the_query = new WP_Query( $meta_query );

if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ):
        $the_query->the_post();
        the_title();
        
    endwhile;
endif;

wp_reset_postdata();
>>>>>>> 23fa9d2567d93726badbe3ccba03213d110db169


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
<?php

get_footer();
?>