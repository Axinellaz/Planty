<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <?php wp_head(); ?>
</head>

	<body>
    <header class="header">

      <nav id="navigation">

        <a href="<?php echo home_url( '/' ); ?>">
          <img class="logo" src="<?php echo get_stylesheet_directory_uri() . '../img/logo-source.png' ?>" alt="Logo">
        </a> 
      
        <div class="toggle">

          <img class=" icone-nav-responsive ouvrir" src="<?php echo get_stylesheet_directory_uri() . '../img/menu-ouvrir.png' ?>" alt="icone bars ouverture menu mobile">
          <img class="icone-nav-responsive fermer" src="<?php echo get_stylesheet_directory_uri() . '../img/menu-fermer.png' ?>" alt="icone croix fermeture menu mobile">
        </div>

        <div class="container-menu-btn">

          <?php wp_nav_menu( ['theme_location' => 'header-planty', ]); ?>

        <button class="btn-navbar button button-primary " type="button">
          <a class="lien-btn-nav" href="http://localhost/planty/commander/">Commander</a>
        </button>
        </div>

      </nav>

