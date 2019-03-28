<div <?php post_class( 'home-page__group' ); ?>>

    <div class="home-page__post">
        
        <div class="home-page__post__head">
            
            <div class="home-page__post__head__image">
            <?php the_post_thumbnail( 'post-thumbnail', [ 'class' => 'home-page__post__head__image__img' ] ); ?>    
            <!-- <img src="images/carottes.jpg" alt="" class="home-page__post__head__image__img"> -->
            </div>
            
            <div class="home-page__post__head__content">
                <div class="home-page__post__head__content__head">
                    <h2 class="home-page__post__head__content__head__title"><?php the_title(); ?></h2>
                    <span class="home-page__post__head__content__head__author"><?php the_author_posts_link(); ?></span>
                    <p class="home-page__post__head__content__head__date"><?php the_date('d-m-Y'); ?></p>
                </div>
            </div>
        </div>
        
        <div class="home-page__post__main">
            <div class="home-page__post__main__content">
                <p class="home-page__post__main__content__text"><?php the_excerpt(); ?></p>
            </div>
            
            <div class="home-page__post__main__link">
                <a href="<?php the_permalink(); ?>" class="home-page__post__main__link__read-more">Lire la suite <i class="fa fa-envira" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
