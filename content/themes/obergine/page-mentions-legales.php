<?php
get_header();
?>

<main class="main contact">
    <div class="contact__container">
        <h1 class="contact__container__title"><?php the_title(); ?></h1>
        <div class="controls">
            <?php
                if ( have_posts() ) :
                    the_post();
                    the_content();
    
                    wp_reset_postdata();
                endif;
            ?>
          
        </div>
    </div>
</main>

<div class="back-to-home-container back-to-home-container-home-page back-to-home-container-archive-plant">
    <a class="back-to-home-container-link" href="<?= home_url(); ?>" class="main__container__main-container__back-to-home__link">Retourner à l'accueil <i class="fa fa-home" aria-hidden="true"></i></a>
</div>

<?php
get_footer();
