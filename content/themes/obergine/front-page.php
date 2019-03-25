<?php 

  get_header(); ?>

<main class="main home-page">

<?php 

$banner_query = new WP_Query([
    'post_type'      => Custom_Post_Type_Banner::POST_TYPE,
    'post_per_page'  => 1,
    'orderby'        => 'date',
    'order'          => 'DESC'
]);
if ( $banner_query->have_posts() ) :
    $banner_query->the_post();
    get_template_part(
        'template-part/content/banner-home',
        'home'
    );
    endif;
    wp_reset_postdata();
?>


<?php 
$last_post_query = new WP_Query([
    'post_type'         => 'post',
    'posts_per_page'    => 1, // @TODO: $count
    'orderby'           => 'date',
    'order'             => 'DESC',
]);

if ( $last_post_query->have_posts() ) :
    
    while ( $last_post_query->have_posts() ) :        
        $last_post_query->the_post();

        get_template_part(
            'template-part/content/post',
            'home'
        );
    
    endwhile;
    wp_reset_postdata();
endif;

?>
</main>
<?php 

get_footer();
