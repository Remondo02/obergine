<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head></head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title><?php bloginfo('name'); ?></title>
 
</head>
<body>
  <!-- Header -->
<header class="header" id="ancre-home">
    <div class="header__header-up">

        <div class="header__header-up__social-links">
            
            <?php dynamic_sidebar( 'new-social-widget-area' ) ; ?>
           
        
        </div>

        <?php
        // Dynamic-title
        require get_theme_file_path('inc/dynamic-title.php');

        
        // Browser Detection

        require get_theme_file_path('inc/browser-detection.php');


        ?>

        
        <div class="header__header-up__head">
            
            <a href="<?php echo home_url(); ?>"><img class="header__header-up__head__image <?= $nav ?>" src="http://92.243.16.243/potager-party/content/uploads/2019/04/logo_vert_clean_sans_titre_png.png " alt=""><h1 class="header__header-up__head__title"> <span class="header__header-up__head__title__<?= $nav2 ?>"><?= $part1; ?></span><?= $part2; ?></h1></a>
        </div>


        <div class="header__header-up__log">

        <!-- Show cart contents  -->
            <?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    
                $count = WC()->cart->cart_contents_count;
                    ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php 
                        if ( $count > 0 ) {
                            ?>
                            <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
                    <?php
                                    }
                    ?></a>

            <?php } ?>


            <?php
            function my_header_add_to_cart_fragment( $fragments ) {
            
                ob_start();
                    $count = WC()->cart->cart_contents_count;
                    ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php
                    if ( $count > 0 ) {
                        ?>
                        <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
                        <?php            
                    }
                        ?></a><?php

                    $fragments['a.cart-contents'] = ob_get_clean();
                    
                    return $fragments;
                }
                add_filter( 'woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment' );
            ?>
              <!-- Navigation Panier et Mon compte  -->

            <a class="header__header-up__log__link" href="<?php echo home_url() . '/panier'; ?>"><i class="fa fa-shopping-basket"></i></a>
            <a class="header__header-up__log__link" href="<?php echo home_url() . '/mon-compte'; ?>"><i class="fa fa-user"></i></a>

            

        </div>

        <!-- Navigation menu burger -->
        <div class="header__header-up__nav">

            <button class="burger-menu btn btn-light"><i class="fa fa-bars"></i></button>
        </div>

        <div class="header__header-up__nav overlay d-none">
            <button class="burger-menu ovleray__cross btn btn-light"><i class="fa fa-times"></i></button>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">

                    <?php wp_nav_menu( array('theme_location' => 'header-menu') ); ?>
                    </li>
                    <li class="nav-item dropdown">
                    
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                    </li>
                    
                </ul>
                <form class="header__header-bot__search-bar__form" method="get" id="advanced-searchform" role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="hidden" name="search" value="advanced">
            <input class="header__header-bot__search-bar__form__input col-7" type="text" value="" placeholder="<?php _e( 'Rechercher une plante', 'textdomain' ); ?>" name="s" id="name" />
            <button class="input-group-text btn btn-outline-success my-0 my-sm-0" type="submit" id="searchsubmit"><i class="form-group fa fa-search text-white"
        aria-hidden='true'></i></button>            
            </form>
                </div>
            </nav>
        </div>
    </div>

   

    <div class="header__header-bot mobile-hide">
        <div class="header__header-bot__search-bar">
            <form class="header__header-bot__search-bar__form" method="get" id="advanced-searchform" role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="hidden" name="search" value="advanced">
            <input class="header__header-bot__search-bar__form__input" type="text" value="" placeholder="<?php _e( 'Rechercher une plante', 'textdomain' ); ?>" name="s" id="name" />
            <button class="input-group-text" type="submit" id="searchsubmit"><i class="form-group fa fa-search text-white"
        aria-hidden='true'></i></button>            
            </form>
        </div>


        <div class="header__header-bot__menu">
                <?php wp_nav_menu( array('theme_location' => 'header-menu') ); ?>
        </div>
  </div>
        
</header>
<body <?php body_class(); ?>>


