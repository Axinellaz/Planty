<?php
function theme_enqueue_styles() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css',  array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
// Déclarer un autre fichier JS
	wp_enqueue_script( 'js-planty', get_stylesheet_directory_uri() . '/js/js-planty.js', array( 'jquery' ), 
    '3.4.1',true);
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


function planty_theme(){
    
    add_theme_support('menus');
    register_nav_menu('header-planty' , 'En tete du menu du site Planty');
}
add_action('after_setup_theme' , 'planty_theme');

function planty_menu_class($classes)
{
    $classes[] = 'nav-item-planty';
    return $classes;
}

function planty_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-link-planty';
    return $attrs;
}

add_filter('nav_menu_css_class', 'planty_menu_class');
add_filter('nav_menu_link_attributes', 'planty_menu_link_class');


function add_link_admin_planty( $menu, $args ) {
    
    if (is_user_logged_in() && $args->theme_location == 'header-planty' ) {
        $menu .= '<li><a class="link-admin-planty" href="'. get_admin_url() .'">Admin</a></li>';
    }
    return $menu;
}

add_filter( 'wp_nav_menu_items', 'add_link_admin_planty', 10, 2);
?>

