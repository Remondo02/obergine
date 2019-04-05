<?php
get_header();
?>

<main class="main contact">
    <div class="contact__container">
        <h1 class="contact__container__title page_title"><?php the_title(); ?></h1>
        <div class="controls">
        <?php
            echo do_shortcode('[woocommerce_my_account]');
            
        ?>
        </div>       
    </div>
    
    
    <div class='fav-bot'>
        <h2 class="h2">Mes favoris</h2>
        <?php the_clear_favorites_button($site_id = null, $text = null); ?>
        <?php the_user_favorites_list($user_id = null, $site_id = null, $include_links = true, $filters = null, $include_button = false, $include_thumbnails = false, $thumbnail_size = 'thumbnail', $include_excerpt = false);?>
        
    </div>
</main>

<div class="back-to-home-container back-to-home-container-home-page back-to-home-container-archive-plant">
    <a class="back-to-home-container-link" href="<?= home_url(); ?>" class="main__container__main-container__back-to-home__link">Retourner à l'accueil <i class="fa fa-home" aria-hidden="true"></i></a>
</div>

<?php
get_footer();
?>