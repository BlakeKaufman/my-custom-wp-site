<?php

// ----------------------------------------------
// Loading stylesheets for differnt pages
// ----------------------------------------------
<?php echo esc_url( get_permalink( get_page_by_title( 'Shop' ) ) ); ?>
function varchas_load_custom_styles() {
    // ----------------------------------------------
    // Not Ecommerce Pages
    // ----------------------------------------------
    if (is_front_page()) {

        wp_enqueue_style('homepageAwards-styles', get_template_directory_uri() . '/assets/css/not_ecommerce/awards.css');
        wp_enqueue_style('homepageContactForm-styles', get_template_directory_uri() . '/assets/css/not_ecommerce/contactForm.css');
        wp_enqueue_style('homepageRecipies-styles', get_template_directory_uri() . '/assets/css/not_ecommerce/recipies-homepage.css');
        wp_enqueue_style('homepageScrollToTopBTN-styles', get_template_directory_uri() . '/assets/css/not_ecommerce/scrollToTopBTN.css');
        wp_enqueue_style('homepage-styles', get_template_directory_uri() . '/assets/css/not_ecommerce/homepage.css');

    } elseif (is_page('our-story')) {
        // wp_enqueue_style('services-styles', get_template_directory_uri() . 'assets/css/ecommerce/services-styles.css');
    } elseif (is_page('team')) {
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    } elseif (is_page('our-distillary')) {
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }elseif (is_page('straight-bourbon')) {
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }elseif (is_page('seraight-rye')) {
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }elseif (is_page('recipies')) {
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }elseif (is_page('where-to-buy')) {
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }elseif (is_page('news')) {
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }elseif (is_page('events-and-tastings')) {
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }elseif (is_page('blog-and-vlog')) {
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }elseif (is_page('videos')) {
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }elseif (is_page('contact-us')) {
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }
    // ----------------------------------------------
    //  Ecommerce Pages
    // ----------------------------------------------
    else if (is_page("shop")){
        // wp_enqueue_style('e_commerceHomepage-styles', get_template_directory_uri() . '/assets/css/ecommerce/Homepage.css');
    } else if (is_page("product-pages")){
        // wp_enqueue_style('e_commerceHomepage-styles', get_template_directory_uri() . '/assets/css/ecommerce/Homepage.css');
    } else if (is_page("singular-product")){
        // wp_enqueue_style('e_commerceHomepage-styles', get_template_directory_uri() . '/assets/css/ecommerce/Homepage.css');
    } else if (is_page("shop")){
        // wp_enqueue_style('e_commerceHomepage-styles', get_template_directory_uri() . '/assets/css/ecommerce/Homepage.css');
    } else if (is_page("checkout-page")){
        // wp_enqueue_style('e_commerceHomepage-styles', get_template_directory_uri() . '/assets/css/ecommerce/Homepage.css');
    } else if (is_page("cart-page")){
        // wp_enqueue_style('e_commerceHomepage-styles', get_template_directory_uri() . '/assets/css/ecommerce/Homepage.css');
    } else if (is_page("thank-you-page")){
        // wp_enqueue_style('e_commerceHomepage-styles', get_template_directory_uri() . '/assets/css/ecommerce/Homepage.css');
    }


    wp_enqueue_style('varchas-blake-coding', get_template_directory_uri(). "/style.css", array(), "1.0", 'all');

}
add_action('wp_enqueue_scripts', 'varchas_load_custom_styles');


// ----------------------------------------------
// Loading javaScript for differnt pages
// ----------------------------------------------
function varchas_register_scripts(){

    // ----------------------------------------------
    // Not Ecommerce Pages
    // ----------------------------------------------
    if (is_front_page()) {
        
        wp_enqueue_script('varchas-homepageRecipieDisplay', get_template_directory_uri(), "/assets/js/not_ecommerce/recipeDisplay.js", array(), "1.0", true); 
        wp_enqueue_script('varchas-homepage', get_template_directory_uri(), "/assets/js/not_ecommerce/homepage.js", array(), "1.0", true);
        wp_enqueue_script('varchas-homepageAwardsMovement', get_template_directory_uri(), "/assets/js/not_ecommerce/awardsMovement.js", array(), "1.0", true);  
       
    } elseif (is_page('our-story')) {
        // wp_enqueue_style('services-styles', get_template_directory_uri() . 'assets/css/ecommerce/services-styles.css');
    } elseif (is_page('team')) {
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    } elseif (is_page('our-distillary')) {
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }elseif (is_page('straight-bourbon')) {
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }elseif (is_page('seraight-rye')) {
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }elseif (is_page('recipies')) {
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }elseif (is_page('where-to-buy')) {
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }elseif (is_page('news')) {
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }elseif (is_page('events-and-tastings')) {
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }elseif (is_page('blog-and-vlog')) {
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }elseif (is_page('videos')) {
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }elseif (is_page('contact-us')) {
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }
    // ----------------------------------------------
    //  Ecommerce Pages
    // ----------------------------------------------
    else if (is_page("shop")){
        wp_enqueue_script('varchas-hompage_mobileNav', get_template_directory_uri(), "/assets/js/ecommerce/mobbileHeader.js", array(), "1.0", true); //true places script in footer
    }else if (is_page("product-pages")){
        // wp_enqueue_style('e_commerceHomepage-styles', get_template_directory_uri() . '/assets/css/ecommerce/Homepage.css');
    } else if (is_page("singular-product")){
        // wp_enqueue_style('e_commerceHomepage-styles', get_template_directory_uri() . '/assets/css/ecommerce/Homepage.css');
    } else if (is_page("shop")){
        // wp_enqueue_style('e_commerceHomepage-styles', get_template_directory_uri() . '/assets/css/ecommerce/Homepage.css');
    } else if (is_page("checkout-page")){
        // wp_enqueue_style('e_commerceHomepage-styles', get_template_directory_uri() . '/assets/css/ecommerce/Homepage.css');
    } else if (is_page("cart-page")){
        // wp_enqueue_style('e_commerceHomepage-styles', get_template_directory_uri() . '/assets/css/ecommerce/Homepage.css');
    } else if (is_page("thank-you-page")){
        // wp_enqueue_style('e_commerceHomepage-styles', get_template_directory_uri() . '/assets/css/ecommerce/Homepage.css');
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




// get_permalink(123); how to link to another page once you have assigned a page id
//is_page(42) see which page is which to addign differnt syle sheets etc.











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



?>