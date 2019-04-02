<footer class="footer">
    <nav class="footer__nav">

        <ul class="footer__nav__list">
        <?php wp_nav_menu( array('theme_location' => 'footer-menu') ); ?>
        </ul>
    </nav>

    <div class="footer__social-link">
    <?php dynamic_sidebar( 'new-social-widget-area') ; ?>
    </div>

    <div class="footer__newsletter">
        <span class="footer__newsletter__span">Abonnez-vous à la newsletter</span>
        <?php
            echo do_shortcode( '[contact-form-7 id="297" title="Contact form Newsletter" html_class="form"]' );
        ?>
    </div>

        
    
</footer>
<?php wp_footer(); ?>

    <script src="js/app.js"></script>
</body>
</html>