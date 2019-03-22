<form method="get" id="advanced-searchform" role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>">

    <h3><?php _e( 'Advanced Search', 'textdomain' ); ?></h3>

    <!-- PASSING THIS TO TRIGGER THE ADVANCED SEARCH RESULT PAGE FROM functions.php -->
    <input type="hidden" name="search" value="advanced">

    <label for="s" class=""><?php _e( 'Name: ', 'textdomain' ); ?></label><br>
    <input type="text" value="" placeholder="<?php _e( 'Rechercher une plante', 'textdomain' ); ?>" name="s" id="name" />

    <label for="water" class=""><?php _e( 'Besoin en eau : ', 'textdomain' ); ?></label><br>
    <select name="water" id="water">
        
        <option value=""><?php _e( 'Defaut', 'textdomain' ); ?></option>
        <option value="Faible"><?php _e( 'Faible', 'textdomain' ); ?></option>
        <option value="Moyen"><?php _e( 'Moyen', 'textdomain' ); ?></option>
        <option value="Fort"><?php _e( 'Fort', 'textdomain' ); ?></option>

    </select>

    <input type="submit" id="searchsubmit" value="Search" />

</form>

