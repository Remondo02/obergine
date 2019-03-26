<?php

get_header();


get_template_part( 'template-part/searchform' );

get_template_part( 'template-part/searchform-advanced' );

echo('Template page plantes');




$the_query = new WP_Query( $meta_query );

if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ):
        $the_query->the_post();
        the_title();
        
    endwhile;
endif;

wp_reset_postdata();

?>


<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <?php if(isset($_GET['post_type'])) {
        $type = $_GET['post_type'];
           if($type == 'plant') {
               
               the_title();
               the_content();           
               
               } ?>
    
<?php } endwhile; else: ?>

 <?= 'Pas de résultats' ?>

<?php endif; 


get_footer();

// ?>