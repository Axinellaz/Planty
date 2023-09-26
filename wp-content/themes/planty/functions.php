<?php

/**
** activation theme
**/


add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));

}

?>

<?php

function planty_theme(){
    
    add_theme_support('menus'); 
    add_theme_support('custom-logo');
    register_nav_menu('header-planty' , 'En tete du menu du site Planty');
}


add_action('after_setup_theme' , 'planty_theme');

?>