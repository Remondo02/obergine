<main class="main articles-list-page">

<!-- <section class="articles-list-page__filters">
    <div class="articles-list-page__filters__filters-list">
        <ul class="articles-list-page__filters__filters-list__list">
            <li class="articles-list-page__filters__filters-list__list__item difficult"><a class="articles-list-page__filters__filters-list__list__item__link" href="#">Difficulté <i class="fa fa-cog" aria-hidden="true"></i></a></li>
            

            <li class="articles-list-page__filters__filters-list__list__item water"><a class="articles-list-page__filters__filters-list__list__item__link" href="#">Eau <i class="fa fa-tint" aria-hidden="true"></i></a></li>

            <li class="articles-list-page__filters__filters-list__list__item location"><a class="articles-list-page__filters__filters-list__list__item__link" href="#">Emplacement <i class="fa fa-map-marker" aria-hidden="true"></i></a></li>

            <li class="articles-list-page__filters__filters-list__list__item family"><a class="articles-list-page__filters__filters-list__list__item__link" href="#">Famille <i class="fa fa-home" aria-hidden="true"></i></a></li>

            <li class="articles-list-page__filters__filters-list__list__item harvest"><a class="articles-list-page__filters__filters-list__list__item__link" href="#">Récolte <i class="fa fa-leaf" aria-hidden="true"></i></a></li>

            <li class="articles-list-page__filters__filters-list__list__item seedling"><a class="articles-list-page__filters__filters-list__list__item__link" href="#">Semis <i class="fa fa-pagelines" aria-hidden="true"></i></a></li>
            
        </ul>
    </div>

</section>  -->

<section class="articles-list-page__main">

    
    <div class="home-page__group">
        
        <div class="home-page__post">
            
            <div class="home-page__post__head">
                
                
                <div class="home-page__post__head__image">
                    <!-- <img src="images/carottes.jpg" alt="" 
                    class="home-page__post__head__image__img"> -->
                    <?php the_post_thumbnail( 'post-thumbnail', [ 'class' => 'home-page__post__head__image__img' ] ); ?> 
                </div>
                
                <div class="home-page__post__head__content">
                    <div class="home-page__post__head__content__head">
                        <h2 class="home-page__post__head__content__head__product"><?php the_title(); ?></h2>
                        <span class="home-page__post__head__content__head__family">Famille</span>
                    </div>
                    
                </div>
            </div>
            
            <div class="home-page__post__main">
                <div class="home-page__post__main__content">
                    <p class="home-page__post__main__content__text"><?php the_excerpt(); ?></p>
                </div>
                
                <div class="home-page__post__main__link">
                    <a href="<?php get_post_permalink(); ?>" class="home-page__post__main__link__read-more">Lire la suite <i class="fa fa-envira" aria-hidden="true"></i></a>
                </div>
            </div>
        
    </div>
</section>
    
    
    
    
    
    
</main>