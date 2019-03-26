<footer class="footer">
    <nav class="footer__nav">
        <ul class="footer__nav__list">
        <?php wp_nav_menu( array('theme_location' => 'footer-menu') ); ?>
        </ul>
    </nav>

    <div class="footer__social-link">
        <i class="fa fa-facebook-f"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
    </div>

    <div class="footer__newsletter">
        <span class="footer__newsletter__span">Abonnez-vous à la newsletter</span>
        <form method="post" action="" class="footer__newsletter__form">
        <input class="footer__newsletter__form__input" type="email" name="email" placeholder="Votre email" required>
        <button><i class="fa fa-check" aria-hidden="true"></i></button>
        </form>
    </div>

</footer>
<?php wp_footer(); ?>

    <script src="js/app.js"></script>
</body>
</html>