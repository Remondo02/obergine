<?php
get_header();

if ( have_posts() ) :
    
    the_post();
    ?>

<main class="main">
    <div class="main__container">

        <div class="main__container__main-head">
            <div class="main__container__main-head__top">
            <div class="main__container__main-head__top__header">
            <h2 class="main__container__main-head__top__header__title"><?php the_title(); ?></h2>

            <div class="main__container__main-head__top__header__button">

                <!-- modif en cours -->
                <button class="main__container__main-head__top__header__button__fav">Ajouter en favoris <i class="main__container__main-head__top__header__fav__icone fa fa-thumbs-up" aria-hidden="true"></i></button>
                
                <button class="main__container__main-head__top__header__button__buy">Acheter des graines <i class="main__container__main-head__top__header__buy__icone fa fa-shopping-cart" aria-hidden="true"></i></button>
            
            </div>
                
            </div>
            <span class="main__container__main-head__top__category"><?php the_field('famille'); ?></span>
        </div>

        <div class="main__container__main-head__image">
            <?php the_post_thumbnail( 'post-thumbnail', [ 'class' => 'main__container__main-head__image__img img-highlighting-post-page' ] ); ?>
        </div>

        <div class="main__container__main-head__top__bot">
            <h3 class="main__container__main-head__top__bot__title">Description</h3>
            <p class="main__container__main-head__top__bot__text"><?php the_content(); ?></p>

        </div>
    </div>

    <div class="main__container__main-container">
        <div class="main__container__main-container__top">
            

            <div class="main__container__main-container__top__content water">
                <span class="main__container__main-container__top__content__span water">Eau :</span>
                <div class="main__container__main-container__top__content__icones water">

                    <i><?php the_field('besoin_en_eau'); ?></i>
                   
                </div>
            </div>

            

            <div class="main__container__main-container__top__content planting-date">
                <span class="main__container__main-container__top__content__span planting-date">Semis/plantation :</span>
                <div class="main__container__main-container__top__content__icones planting-date">
                    <?php the_field('mois_de_semis'); ?>
                    
                </div>
            </div>

            <div class="main__container__main-container__top__content harvest">
                <span class="main__container__main-container__top__content__span harvest">Récolte :</span>
                <div class="main__container__main-container__top__content__icones harvest">
                    
                    <?php the_field('mois_de_recolte'); ?>
                </div>
            </div>

            
        </div>

        <div class="main__container__main-container__bot">
            <div class="main__container__main-container__bot__content">
                <h3 class="main__container__main-container__bot__content__title">Espacement des pieds</h3>
                <span class="main__container__main-container__bot__content__span"></span>
                <div class="main__container__main-container__bot__content__text">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    <div class="mb-2">
                        <?php the_field('espacement_des_pieds'); ?>

                    </div>
                    
                </div>
            </div>

            <div class="main__container__main-container__bot__content">
                <h3 class="main__container__main-container__bot__content__title">Difficulté</h3>
                <span class="main__container__main-container__bot__content__span"></span>
                <div class="main__container__main-container__bot__content__text">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    <div class="mb-2">

                        <?php the_field('difficulte'); ?>
                    </div>
                </div>
            </div>

            <div class="main__container__main-container__bot__content">
                <h3 class="main__container__main-container__bot__content__title">Type</h3>
                <span class="main__container__main-container__bot__content__span"></span>
                <div class="main__container__main-container__bot__content__text">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    <div class="mb-2">
                        <?php the_field('type'); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="main__container__article">
        <h4 class="main__container__article__title">Articles associes</h4>

        <div class="main__container__article__container mb-5">

            <?php
                $last_post_query = new WP_Query([
                'post_type'         => Custom_Post_Type_Plant::POST_TYPE,
                'posts_per_page'    => 4,
                'orderby'           => 'rand',
                'order'             => 'DESC',
                //'post__in'          => $id,
            ]);


            if ( $last_post_query->have_posts() ) :
                
                while ( $last_post_query->have_posts() ) :        
                    $last_post_query->the_post();
                    
                    get_template_part(
                        'template-part/content/articles',
                        'list'
                    );
                    
                    
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>

</div>

    
</main>




<?php
endif;
get_footer();