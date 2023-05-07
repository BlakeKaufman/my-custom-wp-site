<?php

function varchas_load_custom_styles() {

	$version = wp_get_theme()->get("Version");
    if (is_front_page()) {
        wp_enqueue_style('homepage-styles', get_template_directory_uri() . '/assets/css/homepage.css', array(), $version, "all");
    } elseif (is_page('services')) {
        wp_enqueue_style('services-styles', get_template_directory_uri() . '/css/services-styles.css');
    } elseif (is_page('contact')) {
        wp_enqueue_style('contact-styles', get_template_directory_uri() . '/css/contact-styles.css');
    }

wp_enqueue_style('index-styles', get_template_directory_uri() . "/style.css", array(), $version, "all");

}
add_action('wp_enqueue_scripts', 'varchas_load_custom_styles');


function varchas_register_scripts(){

$version = wp_get_theme()->get("Version");

    if (is_front_page()) {
        wp_enqueue_script('varchas-slideingNav', get_template_directory_uri(). "/assets/js/add-to-cart.js", array(), $version, true); //true places script in footer
        wp_enqueue_script('varchas-navBar', get_template_directory_uri() . "/assets/js/nav-bar.js", array(), $version, true); //true places script in footer
        wp_enqueue_script('varchas-hompage_mobileHeader', get_template_directory_uri() . "/assets/js/mobileHeader.js", array(),$version, true); //true places script in footer

    } 



} // calls when  wp_head() is called

add_action('wp_enqueue_scripts', "varchas_register_scripts" );









// register_nav_menus( array(
//     'menu-1' => __( 'Primary Menu', 'my-custom-theme' ),
// )); // Navbar function  




// function my_custom_theme_sidebar() {
//     register_sidebar( array(
//         'name' => __( 'Primary Sidebar', 'my-custom-theme' ),
//         'id'   => 'sidebar-1',
//     ) );
// }
// add_action( 'widgets_init', 'my_custom_theme_sidebar' ); //sidebar function




// add_theme_support( 'post-thumbnails' ); //adding post thumbnaisl
// add_image_size( 'my-custom-image-size', 640, 999 ); // changing base image dimensions



// function my_custom_theme_enqueue() {
//     wp_enqueue_style( 'my-custom-theme', get_stylesheet_uri() );
//     wp_enqueue_script( 'my-scripts', get_template_directory_uri() . '/js/scripts.js' );
//     } //adding sryles and js to page

//     add_action( 'wp_enqueue_scripts', 'my_custom_theme_enqueue' );



?>