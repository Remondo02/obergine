<section class="banner" style="background-image: src=<?php the_post_thumbnail_url(); ?>">
        
        <div class="banner__container">
            <h1 class="banner__container__title"><?php the_title(); ?></h1>
            <button class="banner__container__button"><?php the_content(); ?></button>
        </div>
</section>