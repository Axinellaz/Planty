<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <?php wp_head(); ?>
</head>

 <?php body_class(); ?>>
    
    <?php wp_body_open(); ?> 

	<body <?php body_class(); ?>>
  <header class="header">
    <a href="<?php echo home_url( '/' ); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/wp-content/themes/planty/img/logo-source.png " alt="Logo">
    </a>  
  </header>


  <?php

if (is_user_logged_in()) {
  // User is logged in
} else {
  // User is not logged in
}