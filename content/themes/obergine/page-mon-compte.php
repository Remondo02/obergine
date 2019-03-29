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


<?php
get_footer();
?>