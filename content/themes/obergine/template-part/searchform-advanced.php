<form class="pr-3 pl-3 articles-list-page__filters__filters-list" method="get" id="advanced-searchform" role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>">





       <!-- PASSING THIS TO TRIGGER THE ADVANCED SEARCH RESULT PAGE FROM functions.php -->
       <input type="hidden" name="search" value="advanced">



               <label for="s" class=""><?php _e( 'Recherche: ', 'textdomain' ); ?></label><br>
               <div class="search-container">
               <input type="text" value="" placeholder="<?php _e( 'Rechercher une plante', 'textdomain' ); ?>" name="s" id="name" />

               <input class="search-button border-0 bg-muted rounded text-dark" type="submit" id="searchsubmit" value="Rechercher" />

           </div>

           <hr>
    <h6>Type</h6>

           <select class="badge badge-light" name="type" id="type">
        
        <option value=""><?php _e( 'Choisissez un type', 'textdomain' ); ?></option>
        <option value="Aromates"><?php _e( 'Aromates', 'textdomain' ); ?></option>
        <option value="Fruits"><?php _e( 'Fruits', 'textdomain' ); ?></option>
        <option value="Légumes"><?php _e( 'Légumes', 'textdomain' ); ?></option>
        <option value="Plantes"><?php _e( 'Plantes', 'textdomain' ); ?></option>

    </select>
    <hr>
    <h6>Famille</h6>
    <select class="badge badge-light" name="family" id="family">
        
        <option value=""><?php _e( 'Choisissez une famille', 'textdomain' ); ?></option>
        <option value="Alliacées"><?php _e( 'Alliacées', 'textdomain' ); ?></option>
        <option value="Amaryllidacées"><?php _e( 'Amaryllidacées', 'textdomain' ); ?></option>
        <option value="Apiacées"><?php _e( 'Apiacées', 'textdomain' ); ?></option>
        <option value="Astéracées"><?php _e( 'Astéracées', 'textdomain' ); ?></option>
        <option value="Brassicacées"><?php _e( 'Brassicacées', 'textdomain' ); ?></option>
        <option value="Chénopodiacées"><?php _e( 'Chénopodiacées', 'textdomain' ); ?></option>
        <option value="Fabiacées"><?php _e( 'Fabiacées', 'textdomain' ); ?></option>
        <option value="Labiées"><?php _e( 'Labiées', 'textdomain' ); ?></option>
        <option value="Solanacées"><?php _e( 'Solanacées', 'textdomain' ); ?></option>
        <option value="Autres"><?php _e( 'Autres', 'textdomain' ); ?></option>

    </select>

    <hr>
    <h6>Besoin en eau</h6>


    <select class="badge badge-light" name="water" id="water">        
        <option value=""><?php _e( 'Choisissez le besoin en eau', 'textdomain' ); ?></option>
        <option value="faible"><?php _e( 'Faible', 'textdomain' ); ?></option>
        <option value="moyen"><?php _e( 'Moyen', 'textdomain' ); ?></option>
        <option value="fort"><?php _e( 'Fort', 'textdomain' ); ?></option>
    </select>

    <hr>
    <h6>Emplacement</h6>

    <select class="badge badge-light" name="place" id="place">        
        <option value=""><?php _e( 'Choisissez l\'emplacement' ,'textdomain' ); ?></option>
        <option value="Extérieur"><?php _e( 'Extérieur', 'textdomain' ); ?></option>
        <option value="En pleine terre"><?php _e( 'En pleine terre', 'textdomain' ); ?></option>
        <option value="Pépinière"><?php _e( 'Pépinière', 'textdomain' ); ?></option>
        <option value="Sous-abri"><?php _e( 'Sous-abri', 'textdomain' ); ?></option>
    </select>

    <hr>
    <h6>Difficulté</h6>

    <select class="badge badge-light" name="difficulty" id="difficulty">        
        <option value=""><?php _e( 'Choisissez la difficulté', 'textdomain' ); ?></option>
        <option value="Facile"><?php _e( 'Facile', 'textdomain' ); ?></option>
        <option value="Moyenne"><?php _e( 'Moyenne', 'textdomain' ); ?></option>
        <option value="Importante"><?php _e( 'Importante', 'textdomain' ); ?></option>
    </select>

    <hr>
    <h6>Espacement des pieds</h6>
    <select class="badge badge-light" name="spacing" id="spacing">        
        <option value=""><?php _e( 'Choisissez l\'espacement des pieds', 'textdomain' ); ?></option>
        <option value="0 - 10 cm"><?php _e( '0 à 10 cm', 'textdomain' ); ?></option>
        <option value="10 - 20 cm"><?php _e( '10 à 20 cm', 'textdomain' ); ?></option>
        <option value="20 - 30 cm"><?php _e( '20 à 30 cm', 'textdomain' ); ?></option>
        <option value="30 - 40 cm"><?php _e( '30 à 40 cm', 'textdomain' ); ?></option>
        <option value="40 - 50 cm"><?php _e( '40 à 50 cm', 'textdomain' ); ?></option>
        <option value="50 - 60 cm"><?php _e( '50 à 60 cm', 'textdomain' ); ?></option>
        <option value="60 - 70 cm"><?php _e( '60 à 70 cm', 'textdomain' ); ?></option>
        <option value="70 - 80 cm"><?php _e( '70 à 80 cm', 'textdomain' ); ?></option>
        <option value="Supérieur à 80 cm"><?php _e( 'Supérieur à 80 cm', 'textdomain' ); ?></option>
    </select>

    <hr>
    <h6>Saison de semis</h6>
    <select class="badge badge-light" name="plant_season" id="plant_season">        
        <option value=""><?php _e( 'Choisissez une saison de semi', 'textdomain' ); ?></option>
        <option value="Printemps"><?php _e( 'Printemps', 'textdomain' ); ?></option>
        <option value="Été"><?php _e( 'Été', 'textdomain' ); ?></option>
        <option value="Automne"><?php _e( 'Automne', 'textdomain' ); ?></option>
        <option value="Hiver"><?php _e( 'Hiver', 'textdomain' ); ?></option>
    </select>
    <hr>
    <h6>Saison de récolte</h6>
    <select class="badge badge-light" name="harvest_season" id="harvest_season">        
        <option value=""><?php _e( 'Choisissez une saison de récolte', 'textdomain' ); ?></option>
        <option value="Printemps"><?php _e( 'Printemps', 'textdomain' ); ?></option>
        <option value="Été"><?php _e( 'Été', 'textdomain' ); ?></option>
        <option value="Automne"><?php _e( 'Automne', 'textdomain' ); ?></option>
        <option value="Hiver"><?php _e( 'Hiver', 'textdomain' ); ?></option>
    </select>

    

</form>


