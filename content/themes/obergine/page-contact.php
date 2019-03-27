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
            
            <a href="<?php echo home_url(); ?>" class="contact__container__link back-home-link">Retour à l'accueil</a>
        </div>
    </div>
    
  
   
</main>

<?php
get_footer();
?>