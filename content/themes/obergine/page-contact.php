<?php
get_header();
?>
<main class="main contact">
    <div class="contact__container">
        <h1 class="contact__container__title">Contactez-nous</h1>
        <div class="controls">
            <?php
            echo do_shortcode( '[contact-form-7 id="230" title="Contact form" html_class="form"]' );
            ?>
            
        </div>
    </div>
    
  
   
</main>

<div class="back-to-home-container back-to-home-container-home-page back-to-home-container-archive-plant">
    <a class="back-to-home-container-link" href="<?= home_url(); ?>" class="main__container__main-container__back-to-home__link">Retourner à l'accueil <i class="fa fa-home" aria-hidden="true"></i></a>
</div>

<?php
get_footer();
?>