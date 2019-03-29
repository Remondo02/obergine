<?php
get_header();



$product_query = new WP_Query([
    'post_type'      => 'product',
    'post_per_page'  => -1,
    'meta_key' => '_sale_price',
    'meta_key' => '_price'
    
]);
if ( $product_query->have_posts() ) {
    
    while ( $product_query->have_posts() ) :        
        $product_query->the_post();
    
       ?> <h1> <?php the_title(); ?></h1>
            <?php echo get_the_post_thumbnail(); ?>
       <p> <?php the_content(); ?></p>
            
        <?php $price = get_post_meta( get_the_ID(), '_price', true ); ?>
        <p><?php echo wc_price( $price ); ?></p>
        <?php
   
        
    
    endwhile;

} else {
    echo __( 'Produit non trouvé' );
}
    wp_reset_postdata(); 


get_footer();
?>