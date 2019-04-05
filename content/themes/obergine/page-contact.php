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
                                <option value="Ajout d'une plante">Ajout d'une plante</option>
                                <option value="Autre demande">Autre demande</option>
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
   

    <a href="#" class="contact__container__link back-home-link">Retour à l'accueil</a>
</div>




</main>

<?php
get_footer();
?>