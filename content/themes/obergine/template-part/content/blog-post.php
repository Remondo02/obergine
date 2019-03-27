

    
            
            <div class="home-page__post__head__image">
            <?php the_post_thumbnail( 'post-thumbnail', [ 'class' => 'home-page__post__head__image__img' ] ); ?>    
            <!-- <img src="images/carottes.jpg" alt="" class="home-page__post__head__image__img"> -->
            </div>
            <?php the_author(); ?>
            
            <div class="home-page__post__head__content">
                <div class="home-page__post__head__content__head">
                    <h2 class="home-page__post__head__content__head__title"><?php the_title(); ?></h2>
                    <span class="home-page__post__head__content__head__author"><?php the_author(); ?></span>
                    <p class="home-page__post__head__content__head__date"><?php the_date('d-m-Y'); ?></p>
                </div>
            </div>
        </div>
        
        <div class="home-page__post__main">
            <div class="home-page__post__main__content">
                <p class="home-page__post__main__content__text"><?php the_content(); ?></p>
            </div>
                        
        </div>
    </div>

    
    

    


