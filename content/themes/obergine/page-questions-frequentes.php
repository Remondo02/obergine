<?php

get_header();
?>


<main class="main faq-page">
    <div class="faq-page__container">
        <h1 class="faq-page__container__title page_title">Foire Aux Questions</h1>

        <div class="faq-page__container__question">
            <h2 class="faq-page__container__question__ask"><i class="fa fa-arrow-right" aria-hidden="true"></i> Comment suivre l'avancement de ma commande ?</h2>
            <p class="faq-page__container__question__answer d-none"><i class="fa fa-info-circle" aria-hidden="false"></i> Rendez-vous sur la page <a href="<?php echo home_url(). '/mon-compte/orders';?>">vos commandes</a></p>
        </div>

        <div class="faq-page__container__question">
            <h2 class="faq-page__container__question__ask"><i class="fa fa-arrow-right" aria-hidden="true"></i>Modifier mes informations personnelles</h2>
            <p class="faq-page__container__question__answer d-none"><i class="fa fa-info-circle" aria-hidden="false"></i> Rendez-vous sur la page <a href="<?php echo home_url(). '/mon-compte/edit-account';?>">mon compte</a></p>
        </div>

        <div class="faq-page__container__question">
            <h2 class="faq-page__container__question__ask"><i class="fa fa-arrow-right" aria-hidden="true"></i> Comment obtenir un coupon de réduction ?</h2>
            <p class="faq-page__container__question__answer d-none"><i class="fa fa-info-circle" aria-hidden="false"></i> Code promo : GRATUIT</p>
        </div>

        <div class="faq-page__container__question">
            <h2 class="faq-page__container__question__ask"><i class="fa fa-arrow-right" aria-hidden="true"></i> Qui sommes nous ?</h2>
            <p class="faq-page__container__question__answer d-none"><i class="fa fa-info-circle" aria-hidden="false"></i> Les O'bergines</p>
        </div>
    </div>

    
  
   
</main>

<div class="back-to-home-container back-to-home-container-home-page back-to-home-container-archive-plant">
    <a class="back-to-home-container-link" href="<?= home_url(); ?>" class="main__container__main-container__back-to-home__link">Retourner à l'accueil <i class="fa fa-home" aria-hidden="true"></i></a>
</div>

<?php
get_footer();