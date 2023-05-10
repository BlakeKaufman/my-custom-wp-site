<?php

function varchas_load_custom_styles() {
    if (is_front_page()) {
        wp_enqueue_style('homepageAwards-styles', get_template_directory_uri() . '/assets/css/not_ecommerce/awards.css');
        wp_enqueue_style('homepageContactForm-styles', get_template_directory_uri() . '/assets/css/not_ecommerce/contactForm.css');
        wp_enqueue_style('homepageRecipies-styles', get_template_directory_uri() . '/assets/css/not_ecommerce/recipies-homepage.css');
        wp_enqueue_style('homepageScrollToTopBTN-styles', get_template_directory_uri() . '/assets/css/not_ecommerce/scrollToTopBTN.css');
        wp_enqueue_style('homepage-styles', get_template_directory_uri() . '/assets/css/not_ecommerce/homepage.css');
    } elseif (is_page('services')) {
        // wp_enqueue_style('services-styles', get_template_directory_uri() . 'assets/css/ecommerce/services-styles.css');
    } elseif (is_page('contact')) {
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    } else if (is_page("e_commerceHomepage")){
        wp_enqueue_style('e_commerceHomepage-styles', get_template_directory_uri() . '/assets/css/ecommerce/e_commerceHomepage.css');
    }


    wp_enqueue_style('varchas-blake-coding', get_template_directory_uri(). "/style.css", array(), "1.0", 'all');

}
add_action('wp_enqueue_scripts', 'varchas_load_custom_styles');


function varchas_register_scripts(){
    if (is_front_page()) {
        wp_enqueue_script('varchas-homepageRecipieDisplay', get_template_directory_uri(), "/assets/js/not_ecommerce/recipeDisplay.js", array(), "1.0", true); 
        wp_enqueue_script('varchas-homepageRecipieDisplay', get_template_directory_uri(), "/assets/js/not_ecommerce/homepage.js", array(), "1.0", true);
        wp_enqueue_script('varchas-homepageRecipieDisplay', get_template_directory_uri(), "/assets/js/not_ecommerce/awardsMovement.js", array(), "1.0", true);  
       
    } elseif (is_page('services')) {
        // wp_enqueue_style('services-styles', get_template_directory_uri() . '/css/services-styles.css');
    } elseif (is_page('contact')) {
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . '/css/contact-styles.css');
    } else if (is_page("e_commerceHomepage")){
        wp_enqueue_script('varchas-hompage_mobileNav', get_template_directory_uri(), "/assets/js/ecommerce/mobbileHeader.js", array(), "1.0", true); //true places script in footer
    }

    // ----------------------------------------------
    // gives the ability to add the x icon in js for the add to cart icon
    // ----------------------------------------------
    wp_enqueue_script('add-to-cart', get_template_directory_uri() . '/assets/js/combined/add-to-cart.js',array(), '1.0', true);
    $x_icon = get_template_directory_uri() . '/assets/images/icons/x-lg.svg';
    $slideOut_cart_logo = get_template_directory_uri() . '/assets/images/icons/logo.png';

    wp_localize_script('add-to-cart', 'x_icon', $x_icon);
    wp_localize_script('add-to-cart', 'logo_img', $slideOut_cart_logo);

    // ----------------------------------------------
    // giving navbar the ability to switch between up and down arrow icons
    // ----------------------------------------------
    wp_enqueue_script('varchas-navBar', get_template_directory_uri() . "/assets/js/combined/nav-bar.js", array(), "1.0", true); //true places script in footer

    $up_arrow_icon = get_template_directory_uri() . '/assets/images/icons/upArrow.svg';
    $down_arrow_icon = get_template_directory_uri() . '/assets/images/icons/downArrow.svg';
    $plus_icon = get_template_directory_uri() . '/assets/images/icons/plusIcon.svg';

    wp_localize_script('varchas-navBar', 'up_icon_img', $up_arrow_icon );
    wp_localize_script('varchas-navBar', 'down_icon_img', $down_arrow_icon);
    wp_localize_script('varchas-navBar', 'plus_icon_img', $plus_icon );

    wp_enqueue_script('varchas-homepageRecipieDisplay', get_template_directory_uri(), "/assets/js/not_ecommerce/scrollToTopBTN.js", array(), "1.0", true); //
    



    
   

} // calls when  wp_head() is called

add_action('wp_enqueue_scripts', "varchas_register_scripts" );




// pushing img links to js
function varchas_custom_scripts() {


    // gives the ability to add the x icon in js for the add to cart icon
    wp_enqueue_script('add-to-cart', get_template_directory_uri() . '/assets/js/combined/add-to-cart.js',array(), '1.0', true);
    $x_icon = get_template_directory_uri() . '/assets/images/icons/x-lg.svg';
    $slideOut_cart_logo = get_template_directory_uri() . '/assets/images/icons/logo.png';

    wp_localize_script('add-to-cart', 'x_icon', $x_icon);
    wp_localize_script('add-to-cart', 'logo_img', $slideOut_cart_logo);

    // giving navbar the ability to switch between up and down arrow icons


}
add_action('wp_enqueue_scripts', 'varchas_custom_scripts');









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