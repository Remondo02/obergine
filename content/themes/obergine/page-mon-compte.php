<?php
get_header();
?>

<main class="main contact">
<div class="contact__container">
        <h1 class="contact__container__title"><?php the_title(); ?></h1>
        <div class="controls">

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
        </div>
</div>
</main>



<?php
get_footer();
?>
