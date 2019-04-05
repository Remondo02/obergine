<?php
get_header();
?>
<main class="main home-page">
<?php
if ( have_posts() ) :
    
    $i=0;

    while ( have_posts() ) :        

       the_post();

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
<?php
get_footer();