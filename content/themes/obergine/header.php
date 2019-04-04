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
<header class="header">
    <div class="header__header-up">

        <div class="header__header-up__social-links">
            
            <?php dynamic_sidebar( 'new-social-widget-area' ) ; ?>
           
        
        </div>

        <?php
        // Dynamic-title
        require get_theme_file_path('inc/dynamic-title.php');
        ?>

        
        <div class="header__header-up__head">
            <a href="<?php echo home_url(); ?>"><h1 class="header__header-up__head__title"> <span class="header__header-up__head__title__span"><?= $part1; ?></span><?= $part2; ?></h1></a>
        </div>


        <div class="header__header-up__log">
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
                <form class="form-inline my-2 my-lg-0" method="get" id="advanced-searchform" role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>">                
                    <input type="hidden" name="search" value="advanced">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" id="searchsubmit" value="Search" type="submit">Search</button>
                </form>
                </div>
            </nav>
        </div>
    </div>

    <div class="header__header-bot mobile-hide">
        <div class="header__header-bot__search-bar">
            <form class="header__header-bot__search-bar__form" method="get" id="advanced-searchform" role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="hidden" name="search" value="advanced">
            <input class="header__header-bot__search-bar__form__input" type="text" value="" placeholder="Rechercher" name="s" id="name" /><button class="input-group-text" type="submit" form="advanced-searchform" name="s" value="" id="name"><i class="fa fa-search text-white"
        aria-hidden="true"></i></button>
                <!-- <input class="header__header-bot__search-bar__form__input" type="search" placeholder="Search" aria-label="Search" > -->
                <!-- <input class="border-0 bg-muted rounded text-light" type="submit" id="searchsubmit" value="Search" /> -->

            </form>
        </div>

        <div class="header__header-bot__menu">
                <?php wp_nav_menu( array('theme_location' => 'header-menu') ); ?>
        </div>
  </div>
        
</header>
<body <?php body_class(); ?>>