<?php
get_header();


if ( have_posts() ) :

        the_post();
        
      
        the_post_thumbnail( 'post-thumbnail', [ 'class' => 'home-page__post__head__image__img' ] ); ?>
        
        
         <div class="home-page__post__main">
         <h1> <?php the_title(); ?></h1>
         <p> écrit par <?php the_author(); ?> le <?php the_date(); ?> </p>
            <div class="home-page__post__main__content">
         <p class="home-page__post__main__content__text"><?php the_content(); ?> </p>
        <?php the_category(); ?>

        </div>
        </div>
      
<?php   

endif;
wp_reset_postdata();




get_footer();
