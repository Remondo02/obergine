<?php
get_header();
?>
<main class="main contact">

<div class="contact__container">
    <h1 class="contact__container__title">Contactez-nous</h1>

    <form id="contact-form" method="post" action="" role="form">

            <div class="messages"></div>
        
            <div class="controls">
        
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Prénom</label>
                            <input id="form_name" type="text" name="name-contact" class="form-control" placeholder="Entrez votre prénom" required="required" data-error="Firstname is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Nom</label>
                            <input id="form_lastname" type="text" name="surname-contact" class="form-control" placeholder="Entrez votre nom" required="required" data-error="Lastname is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Email </label>
                            <input id="form_email" type="email" name="email-contact" class="form-control" placeholder="Entrez votre email" required="required" data-error="Valid email is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Sujet </label>
                            <Select id="form_email" name="subject-contact" class="form-control">
                                <option value="" selected disabled hidden>Choisissez le sujet de votre demande</option>
                                <option value="Ajout d'une plante">Ajouter une plante</option>
                                <option value="Autre demande">Autre demande</option>
                                <option value="Annuler une commande">Annuler une commande</option>
                                <option value="Modifier une commande">Modifier une commande</option>
                                <option value="Problème de commande">Problème de commande</option>
                            </Select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Message</label>
                            <textarea id="form_message" name="message-contact" class="form-control" placeholder="Votre message" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-success btn-send" value="Envoyer">
                    </div>
                </div>
            </div>
        </form>
</div>




</main>

<div class="back-to-home-container back-to-home-container-home-page back-to-home-container-archive-plant">
    <a class="back-to-home-container-link" href="<?= home_url(); ?>" class="main__container__main-container__back-to-home__link">Retourner à l'accueil <i class="fa fa-home" aria-hidden="true"></i></a>
</div>

<?php
get_footer();
?>