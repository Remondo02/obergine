<?php
get_header();
?>

<?php

if ( have_posts() ):
    while ( have_posts() ):
        the_post();
        ?>
        <h3><?= the_title(); ?></h3>
        <p><?= the_content(); ?></p>
    <?php
    endwhile;
endif;
?>

<?php
get_footer();
?>