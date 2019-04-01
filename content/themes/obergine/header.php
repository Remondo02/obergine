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
            
            <?php dynamic_sidebar( 'new-social-widget-area') ; ?>
           
        
        </div>

        <?php
        // Dynamic-title
        require get_theme_file_path('inc/dynamic-title.php');

        ?>

        
        <div class="header__header-up__head">
        <a href="<?php echo home_url(); ?>"><h1 class="header__header-up__head__title"> <span class="header__header-up__head__title__span"><?= $part1; ?></span><?= $part2; ?></h1></a>
        </div>
        
        <div class="header__header-up__log">
            <a class="header__header-up__log__link" href="<?php echo home_url() . '/mon-compte'; ?>
            "><i class="fa fa-user"></i></a>
        </div>
        
        <!-- Navigation menu burger -->
        <div class="header__header-up__nav">
            <nav class="header__header-up__nav navbar navbar-expand-lg navbar-light">
                <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
            <input class="header__header-bot__search-bar__form__input" type="text" value="" placeholder="Rechercher" name="s" id="name" />
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

