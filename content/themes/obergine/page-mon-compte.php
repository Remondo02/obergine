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
            <a href="<?php echo home_url(); ?>" class="contact__container__link back-home-link">Retour à l'accueil</a>
        </div>       
    </div>
</main>

<footer class='col-3'>
<h2 class="h2">Mes favoris</h2>
<?php the_clear_favorites_button($site_id = null, $text = null); ?>
<?php the_user_favorites_list($user_id = null, $site_id = null, $include_links = true, $filters = null, $include_button = false, $include_thumbnails = false, $thumbnail_size = 'thumbnail', $include_excerpt = false);?>
</footer>


<?php
get_footer();
?>