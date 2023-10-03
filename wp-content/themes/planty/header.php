<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <?php wp_head(); ?>
</head>

	<body <?php body_class(); ?>>
  <header class="header">

    <nav id="navigation">



      <a href="<?php echo home_url( '/' ); ?>">
        <img src="../img/logo-source.png " alt="Logo">
      </a> 
    
      <div class="container-menu-btn">


        <?php if(is_user_logged_in()){

          wp_nav_menu( ['theme-location' => 'header-plantyAdmin']); 
        }  
        else{
          wp_nav_menu( ['theme-location' => 'header-planty']);
        }
        
        ?>
                                  
                            
      <input type="submit" class="btn-navbar button button-primary" value="Commander"> 

      </div>

    </nav>


  <?php

/*  if (is_user_logged_in()) {
  // User is logged in
} else {
  // User is not logged in
} */