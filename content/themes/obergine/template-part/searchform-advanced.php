<form class="pr-3 pl-3" method="get" id="advanced-searchform" role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>">

    

    <!-- PASSING THIS TO TRIGGER THE ADVANCED SEARCH RESULT PAGE FROM functions.php -->
    <input type="hidden" name="search" value="advanced">

    <label for="s" class=""><?php _e( 'Recherche: ', 'textdomain' ); ?></label><br>
    <input type="text" value="" placeholder="<?php _e( 'Rechercher une plante', 'textdomain' ); ?>" name="s" id="name" />

<!-- Type -->

    <select class="badge badge-light" name="type" id="type">

        <option value="">Type</option>
                <?php $field = get_field_object('type'); 
                if( $field['choices'] ) : ?>
                        <?php foreach( $field['choices'] as $item): ?>
        <option value="<?php echo $item ?>"><?php echo $item; ?></option>
                        <?php endforeach; ?>
                <?php endif; ?>
            
    </select>
    
    <!-- Famille -->
    
    <select class="badge badge-success" name="family" id="family">

        <option value="">Famille</option>
                <?php $field = get_field_object('famille'); 
                if( $field['choices'] ) : ?>
                        <?php foreach( $field['choices'] as $item): ?>
        <option value="<?php echo $item ?>"><?php echo $item; ?></option>
                        <?php endforeach; ?>
                <?php endif; ?>

    </select>


<!-- Eau -->

<select class="badge badge-primary" name="type" id="type">

<option value="">Besoin en Eau</option>
        <?php $field = get_field_object('besoin_en_eau'); 
        if( $field['choices'] ) : ?>
                <?php foreach( $field['choices'] as $item): ?>
<option value="<?php echo $item ?>"><?php echo $item; ?></option>
                <?php endforeach; ?>
        <?php endif; ?>
    
</select>


<!-- Emplacement -->

<select class="badge badge-secondary" name="type" id="type">

<option value="">Emplacement</option>
        <?php $field = get_field_object('emplacement'); 
        if( $field['choices'] ) : ?>
                <?php foreach( $field['choices'] as $item): ?>
<option value="<?php echo $item ?>"><?php echo $item; ?></option>
                <?php endforeach; ?>
        <?php endif; ?>
    
</select>


<!-- Difficulté -->

<select class="badge badge-danger" name="type" id="type">

<option value="">Difficulté</option>
        <?php $field = get_field_object('difficulte'); 
        if( $field['choices'] ) : ?>
                <?php foreach( $field['choices'] as $item): ?>
<option value="<?php echo $item ?>"><?php echo $item; ?></option>
                <?php endforeach; ?>
        <?php endif; ?>
</select>
    

<!-- Espacement -->

<select class="badge badge-warning" name="type" id="type">

<option value="">Espacement</option>
        <?php $field = get_field_object('espacement_des_pieds'); 
        if( $field['choices'] ) : ?>
                <?php foreach( $field['choices'] as $item): ?>
<option value="<?php echo $item ?>"><?php echo $item; ?></option>
                <?php endforeach; ?>
        <?php endif; ?>
</select>

<!-- Saison de semi-->

<select class="badge badge-info" name="type" id="type">

<option value="">Saison de semis</option>
        <?php $field = get_field_object('saison_de_semis'); 
        if( $field['choices'] ) : ?>
                <?php foreach( $field['choices'] as $item): ?>
<option value="<?php echo $item ?>"><?php echo $item; ?></option>
                <?php endforeach; ?>
        <?php endif; ?>
</select>


<!-- Saison de récolte-->

<select class="badge badge-info" name="type" id="type">

<option value="">Saison de récolte</option>
        <?php $field = get_field_object('saison_de_recolte'); 
        if( $field['choices'] ) : ?>
                <?php foreach( $field['choices'] as $item): ?>
<option value="<?php echo $item ?>"><?php echo $item; ?></option>
                <?php endforeach; ?>
        <?php endif; ?>
</select>





    <input class="border-0 bg-muted rounded text-light" type="submit" id="searchsubmit" value="Search" />

</form>


