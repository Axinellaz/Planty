<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <?php wp_head(); ?>
</head>

	<body   <?php /*body_class();*/ ?>>
  <header class="header">

    <nav id="navigation">



      <a href="<?php echo home_url( '/' ); ?>">
        <img class="logo" src="<?php echo get_stylesheet_directory_uri() . '../img/logo-source.png' ?>" alt="Logo">
      </a> 
    
      <div class="container-menu-btn">


        <?php if(is_user_logged_in()){

          wp_nav_menu( ['theme-location' => 'header-planty']); 
        }  
        else{
          wp_nav_menu( ['theme-location' => 'header-planty']);
        }
        
        ?>
                                  
                            
     <!-- <input type="submit" class="btn-navbar button button-primary" value="Commander"> -->

      <button class="btn-navbar button button-primary">
        <a class="lien-btn-nav" href="http://localhost/planty/commander/">Commannder</a>
      </button>

      </div>

    </nav>


  <?php

/*  if (is_user_logged_in()) {
  // User is logged in
} else {
  // User is not logged in
} */