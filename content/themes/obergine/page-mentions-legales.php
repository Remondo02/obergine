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
            <a href="<?php echo home_url(); ?>" class="contact__container__link back-home-link">Retour à l'accueil</a>
        </div>
    </div>
</main>

<?php
get_footer();
