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



//$id = array(136, 137, 135, 138);

$last_post_query = new WP_Query([
    'post_type'         => 'post',
    'posts_per_page'    => $posts_count,
    'orderby'           => 'date',
    'order'             => 'DESC',
    //'post__in'          => $id,
]);


if ( $last_post_query->have_posts() ) :
    
    while ( $last_post_query->have_posts() ) :        
        $last_post_query->the_post();
        
        get_template_part(
            'template-part/content/post',
            'home'
        );
           
        
    endwhile;
endif;
wp_reset_postdata();

?>
</main>
<?php 

get_footer();
