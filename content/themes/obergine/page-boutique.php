<?php
get_header();
?>


<main class="main contact">
    <div class="contact__container">
        <h1 class="contact__container__title"><?php the_title(); ?></h1>
        
        <?php

        echo do_shortcode( '[products columns="3" class="test"]' ); 

        ?>

    </div>
</main>
<?php
get_footer();
?>