<?php

// ----------------------------------------------
// Loading stylesheets for differnt pages
// ----------------------------------------------

// echo esc_url( get_permalink( get_page_by_title( 'Shop' ) ) );  how you link to anohter page based on theme title

function varchas_load_custom_styles() {
    // ----------------------------------------------
    // Not Ecommerce Pages
    // ----------------------------------------------
    if (is_front_page()) {

        wp_enqueue_style('homepageAwards-styles', get_template_directory_uri() . '/assets/css/not_ecommerce/awards.css',array(), "1.0", 'all');
        wp_enqueue_style('homepageContactForm-styles', get_template_directory_uri() . '/assets/css/not_ecommerce/contactForm.css',array(), "1.0", 'all');
        wp_enqueue_style('homepageRecipies-styles', get_template_directory_uri() . '/assets/css/not_ecommerce/recipies-homepage.css',array(), "1.0", 'all');
        wp_enqueue_style('homepageScrollToTopBTN-styles', get_template_directory_uri() . '/assets/css/not_ecommerce/scrollToTopBTN.css',array(), "1.0", 'all');
        wp_enqueue_style('homepage-styles', get_template_directory_uri() . '/assets/css/not_ecommerce/homepage.css',array(), "1.0", 'all');

    } elseif (is_page('our-story')) {
        wp_enqueue_style('ourstory-styles-awards', get_template_directory_uri() . '/assets/css/not_ecommerce/awards.css',array(), "1.0", 'all');
        wp_enqueue_style('ourstory-styles-contactForm', get_template_directory_uri() . '/assets/css/not_ecommerce/contactForm.css',array(), "1.0", 'all');
        wp_enqueue_style('ourstory-styles-ourstory', get_template_directory_uri() . '/assets/css/not_ecommerce/ourstory.css',array(), "1.0", 'all');
        wp_enqueue_style('ourstory-styles-ScrollToTopBTN', get_template_directory_uri() . '/assets/css/not_ecommerce/scrollToTopBTN.css',array(), "1.0", 'all');

    } elseif (is_page('team')) {
        wp_enqueue_style('team-style-team', get_template_directory_uri() . '/assets/css/not_ecommerce/team.css',array(), "1.0", 'all');
        wp_enqueue_style('team-style-ScrollToTopBTN', get_template_directory_uri() . '/assets/css/not_ecommerce/scrollToTopBTN.css',array(), "1.0", 'all');

    } elseif (is_page('our-distillery')) {
        wp_enqueue_style('distillary-style-distillary', get_template_directory_uri() . '/assets/css/not_ecommerce/distillery.css',array(), "1.0", 'all');
        wp_enqueue_style('distillary-style-ScrollToTopBTN', get_template_directory_uri() . '/assets/css/not_ecommerce/scrollToTopBTN.css',array(), "1.0", 'all');

    }elseif (is_page('straight-bourbon')) {
        wp_enqueue_style('straight_bourbon-style', get_template_directory_uri() . '/assets/css/not_ecommerce/rye&bourbon.css',array(), "1.0", 'all');
        wp_enqueue_style('stright_bourbon-style-ScrollToTopBTN', get_template_directory_uri() . '/assets/css/not_ecommerce/scrollToTopBTN.css',array(), "1.0", 'all');

    }elseif (is_page('straight-rye')) {
        wp_enqueue_style('straight_rye-style', get_template_directory_uri() . '/assets/css/not_ecommerce/rye&bourbon.css',array(), "1.0", 'all');
        wp_enqueue_style('straight_rye-style-ScrollToTopBTN', get_template_directory_uri() . '/assets/css/not_ecommerce/scrollToTopBTN.css',array(), "1.0", 'all');

    }elseif (is_page('recipies')) {
        wp_enqueue_style('recipies-style-recipiespage', get_template_directory_uri() . '/assets/css/not_ecommerce/recipies-recipiespage.css',array(), "1.0", 'all');
        wp_enqueue_style('recipies-style-ScrollToTopBTN', get_template_directory_uri() . '/assets/css/not_ecommerce/scrollToTopBTN.css',array(), "1.0", 'all');

    }elseif (is_page("full-recipes-page")){

        wp_enqueue_style('full-recipies-page', get_template_directory_uri() . '/assets/css/not_ecommerce/recipiesMTKLandingPage.css',array(), "1.0", 'all');
        wp_enqueue_style('full_page_recipies-ScrollToTopBTN', get_template_directory_uri() . '/assets/css/not_ecommerce/scrollToTopBTN.css',array(), "1.0", 'all');



    }elseif (is_page('where-to-buy')) {
        wp_enqueue_style('where_to_buy-style-wheretobuy', get_template_directory_uri() . '/assets/css/not_ecommerce/wheretobuy.css',array(), "1.0", 'all');
        wp_enqueue_style('where_to_buy-ScrollToTopBTN', get_template_directory_uri() . '/assets/css/not_ecommerce/scrollToTopBTN.css',array(), "1.0", 'all');

    }elseif (is_page('news')) {
        wp_enqueue_style('news-style-index', get_template_directory_uri() . '/assets/css/not_ecommerce/news&eventsIndex.css',array(), "1.0", 'all');
        wp_enqueue_style('news-style-news', get_template_directory_uri() . '/assets/css/not_ecommerce/news.css',array(), "1.0", 'all');
        wp_enqueue_style('news-ScrollToTopBTN', get_template_directory_uri() . '/assets/css/not_ecommerce/scrollToTopBTN.css',array(), "1.0", 'all');

    }elseif (is_page('events')) {
        wp_enqueue_style('events-style-index', get_template_directory_uri() . '/assets/css/not_ecommerce/news&eventsIndex.css',array(), "1.0", 'all');
        wp_enqueue_style('events-style-events', get_template_directory_uri() . '/assets/css/not_ecommerce/events.css',array(), "1.0", 'all');
        wp_enqueue_style('events-ScrollToTopBTN', get_template_directory_uri() . '/assets/css/not_ecommerce/scrollToTopBTN.css',array(), "1.0", 'all');

    }elseif (is_page('blog-and-vlog')) {
        wp_enqueue_style('blog-style-blog', get_template_directory_uri() . '/assets/css/not_ecommerce/blog.css',array(), "1.0", 'all');
        wp_enqueue_style('blog-ScrollToTopBTN', get_template_directory_uri() . '/assets/css/not_ecommerce/scrollToTopBTN.css',array(), "1.0", 'all');
        wp_enqueue_style('blog-styles-contactForm', get_template_directory_uri() . '/assets/css/not_ecommerce/contactForm.css',array(), "1.0", 'all');

    }elseif (is_page('Post Page')) {
        wp_enqueue_style('events-news-index', get_template_directory_uri() . '/assets/css/not_ecommerce/news&eventsIndex.css',array(), "1.0", 'all');
        wp_enqueue_style('postPage-index', get_template_directory_uri() . '/assets/css/not_ecommerce/postPage.css',array(), "1.0", 'all');

    }elseif (is_page('videos')) {
        wp_enqueue_style('videos-style-videos', get_template_directory_uri() . '/assets/css/not_ecommerce/videos.css',array(), "1.0", 'all');
        wp_enqueue_style('videos-ScrollToTopBTN', get_template_directory_uri() . '/assets/css/not_ecommerce/scrollToTopBTN.css',array(), "1.0", 'all');

    }elseif (is_page('contact-us')) {
        wp_enqueue_style('contactUs-style-contact', get_template_directory_uri() . '/assets/css/not_ecommerce/contactUs.css',array(), "1.0", 'all');
        wp_enqueue_style('contactUs-styles-contactForm', get_template_directory_uri() . '/assets/css/not_ecommerce/contactForm.css',array(), "1.0", 'all');
        wp_enqueue_style('contactUs-ScrollToTopBTN', get_template_directory_uri() . '/assets/css/not_ecommerce/scrollToTopBTN.css',array(), "1.0", 'all');

    }
    // ----------------------------------------------
    //  Ecommerce Pages
    // ----------------------------------------------
    else if (is_page("shop")){
        wp_enqueue_style('shop-styles-homepage', get_template_directory_uri() . '/assets/css/ecommerce/Homepage.css',array(), "1.0", 'all');

    } else if (is_page("product-pages")){
        // wp_enqueue_style('e_commerceHomepage-styles', get_template_directory_uri() . '/assets/css/ecommerce/Homepage.css');
    } else if (is_page("singular-product")){
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
        
        wp_enqueue_script('varchas-homepageRecipieDisplay', get_template_directory_uri() . "/assets/js/not_ecommerce/recipeDisplay.js", array(), "1.0", true); 
        wp_enqueue_script('varchas-homepage', get_template_directory_uri() .  "/assets/js/not_ecommerce/homepage.js", array(), "1.0", true);
        wp_enqueue_script('varchas-homepageAwardsMovement', get_template_directory_uri()  . "/assets/js/not_ecommerce/awardsMovement.js", array(), "1.0", true);  
       
    } elseif (is_page('our-story')) {
        // wp_enqueue_style('services-styles', get_template_directory_uri() . 'assets/css/ecommerce/services-styles.css');
    } elseif (is_page('team')) {
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    } elseif (is_page('our-distillary')) {
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }elseif (is_page('straight-bourbon')) {
        wp_enqueue_script('varchas-bourbonWhiskeySlideshow', get_template_directory_uri()  . "/assets/js/not_ecommerce/slideshow.js", array(), "1.0", true);  
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }elseif (is_page('seraight-rye')) {
        wp_enqueue_script('varchas-ryeWhiskeySlideshow', get_template_directory_uri()  . "/assets/js/not_ecommerce/slideshow.js", array(), "1.0", true);  
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }elseif (is_page('recipies')) {
        wp_enqueue_script('varchas-recipiesDisplay', get_template_directory_uri()  . "/assets/js/not_ecommerce/recipeDisplay.js", array(), "1.0", true); 
        wp_enqueue_script('varchas-recipiesindex', get_template_directory_uri()  . "/assets/js/not_ecommerce/recipies.js", array(), "1.0", true);   



        $tempate_directory = get_template_directory_uri();
        $full_page_recipie = esc_url( get_permalink( get_page_by_title( 'Full Recipes Page' ) ) );
        wp_localize_script("varchas-recipiesindex", "template_directory", $tempate_directory);
        wp_localize_script("varchas-recipiesindex", "full_recipie_link", $full_page_recipie);

        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }elseif (is_page("full-recipes-page")){
        wp_enqueue_script('varchas-recipiesindex', get_template_directory_uri()  . "/assets/js/not_ecommerce/recipies.js", array(), "1.0", true);
        wp_enqueue_script('varchas-fullPageRcipie', get_template_directory_uri()  . "/assets/js/not_ecommerce/recipiesMTKLandingPage.js", array(), "1.0", true); 


        $tempate_directory = get_template_directory_uri();
        $recipies_page = esc_url( get_permalink( get_page_by_title( 'Recipies' ) ) );

        wp_localize_script("varchas-recipiesindex", "template_directory", $tempate_directory);
        wp_localize_script("varchas-fullPageRcipie", "template_directory", $tempate_directory);
        wp_localize_script("varchas-fullPageRcipie", "recipies_page", $recipies_page);
        



    }elseif (is_page('where-to-buy')) {
        wp_enqueue_script('varchas-whereToBuyPopdown', get_template_directory_uri()  . "/assets/js/not_ecommerce/DropdownPopdown.js", array(), "1.0", true); 
        wp_enqueue_script('varchas-whereToBuyIndex', get_template_directory_uri()  . "/assets/js/not_ecommerce/wheretobuy.js", array(), "1.0", true); 

        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }elseif (is_page('news') || is_page('events') ) {
        wp_enqueue_script('varchas-news', get_template_directory_uri()  . "/assets/js/not_ecommerce/news&events.js", array(), "1.0", true); 
        wp_enqueue_script('varchas-newsPagination', get_template_directory_uri()  . "/assets/js/not_ecommerce/eventsPagination.js", array(), "1.0", true); 

        $tempate_directory = get_template_directory_uri();
        $link_to_post_page = esc_url( get_permalink( get_page_by_title( 'Post Page' ) ) );

        
        wp_localize_script("varchas-news", "template_directory", $tempate_directory);
        wp_localize_script("varchas-news", "post_link", $link_to_post_page);

        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }elseif (is_page('blog-and-vlog')) {
        wp_enqueue_script('varchas-blogIndex', get_template_directory_uri()  . "/assets/js/not_ecommerce/blog.js", array(), "1.0", true); 


        $tempate_directory = get_template_directory_uri();
        $link_to_post_page = esc_url( get_permalink( get_page_by_title( 'Post Page' ) ) );
       

        
        wp_localize_script("varchas-blogIndex", "template_directory", $tempate_directory);
        wp_localize_script("varchas-blogIndex", "post_link", $link_to_post_page);
        


        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }elseif (is_page('Post Page')) {

       

        wp_enqueue_script('varchas-postDatabase', get_template_directory_uri()  . "/assets/js/not_ecommerce/postDatabase.js", array(), "1.0", true); 
        wp_enqueue_script('varchas-postPageIndex', get_template_directory_uri()  . "/assets/js/not_ecommerce/postPage.js", array(), "1.0", true); 

    }elseif (is_page('videos')) {
        wp_enqueue_script('varchas-videosIndex', get_template_directory_uri()  . "/assets/js/not_ecommerce/videos.js", array(), "1.0", true); 

        $tempate_directory = get_template_directory_uri();
        
        wp_localize_script("varchas-videosIndex", "template_directory", $tempate_directory);
        
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }elseif (is_page('contact-us')) {
        wp_enqueue_script('varchas-contactDropdown', get_template_directory_uri()  . "/assets/js/not_ecommerce/DropdownPopdown.js", array(), "1.0", true); 
        // wp_enqueue_style('contact-styles', get_template_directory_uri() . 'assets/css/ecommerce/contact-styles.css');
    }
    // ----------------------------------------------
    //  Ecommerce Pages
    // ----------------------------------------------
    else if (is_page("shop")){
        wp_enqueue_script('varchas-hompage_mobileNav', get_template_directory_uri() . "/assets/js/ecommerce/mobbileHeader.js", array(), "1.0", true); //true places script in footer
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

    // ----------------------------------------------
    // scroll to top button
    // ----------------------------------------------

    wp_enqueue_script('varchas-scrollToTopBTN-js', get_template_directory_uri() . "/assets/js/not_ecommerce/scrollToTopBTN.js", array(), "1.0", true); //
   

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



function varchas_theme_setup(){
	add_theme_support('menus');

	//register_nav_menus('primary', 'Primary header navigation');



}

add_action('init','varchas_theme_setup');

//add_theme_support('custom-background');
//add_theme_support('custom-header');



function varchas_footer_callout($wp_customize){
	$wp_customize->add_section('varchas-footer-callout-section',array(
		'title' => 'Footer callout'
	));


	//----------------------//
	//Footer adress
	//---------------------//

	$wp_customize->add_setting('varchas-footer-callout-address',array(
		//'default'=> 'Example header text'
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'varchas-footer-callout-address-control',array(
	'label'=>'Address',
	'section'=>'varchas-footer-callout-section',
	'settings'=>'varchas-footer-callout-address'
	)));

	//----------------------//
	//Footer email|phone
	//---------------------//

	$wp_customize->add_setting('varchas-footer-callout-email',array(
		//'default'=> 'Example header text'
	));

	$wp_customize->add_setting('varchas-footer-callout-phone',array(
		//'default'=> 'Example header text'
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'varchas-footer-callout-email-control',array(
	'label'=>'Email',
	'section'=>'varchas-footer-callout-section',
	'settings'=>'varchas-footer-callout-email'
	)));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'varchas-footer-callout-phone-control',array(
	'label'=>'Phone Number',
	'section'=>'varchas-footer-callout-section',
	'settings'=>'varchas-footer-callout-phone'
	)));

	//----------------------//
	//Footer adress
	//---------------------//

	$wp_customize->add_setting('varchas-footer-callout-copyright',array(
		//'default'=> 'Example header text'
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'varchas-footer-callout-copyright-control',array(
	'label'=>'Copyright Year',
	'section'=>'varchas-footer-callout-section',
	'settings'=>'varchas-footer-callout-copyright'
	)));


}

add_action('customize_register','varchas_footer_callout');





/**
 * Register a custom menu page.
 */
function wpdocs_register_my_custom_menu_page(){
	add_menu_page( 
		__( 'Custom Menu Title', 'textdomain' ), // title
		'Varchas', // title of menu item
		'manage_options',
		'my-top-level-slug', //menus slug to add sub menus too
		'my_custom_menu_page', //Calls the other function to get page description
		plugins_url( 'myplugin/images/icon.png' ),
		59 //location on admin sidebar
	); 
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );

/**
 * Display a custom subm menu page
 */
function my_custom_menu_page(){
	// require_once  get_template_directory().''; // call location of php custom file

	esc_html_e( get_template_directory(), 'textdomain' );	
}



add_submenu_page( 'my-top-level-slug', 'Dashboard', 'Dashboard',
	'manage_options','/template_dashboard.php'); //last one is the location of the file that it opens
add_submenu_page( 'my-top-level-slug', 'Template Attributes', 'Template Attributes',
	'manage_options', '/template_admin_parts/attributes.php');









//-------------------//
//seperating post types in wordpress
//-------------------//

function add_custom_submenu(){
	
	add_submenu_page(
		'edit.php',
		'recipies_menu',
		'Recipies',
		'manage_options',
		'recipies-menu',
		'recipies_submenu_callback',
		2
	);


}

function recipies_submenu_callback(){
	$admin_url = network_admin_url();
	
	if (current_user_can('edit_posts')){
		// create a custom page where you can see only recipies, takes you to an edit function, and also quick edit
		echo '<h1> Custom submenu content</h1>';
		echo '<a href="' .$admin_url . '/post-new.php' . ';?>">Testing</a>';

		

	}else{
		echo '<h1> You cannot edit posts </h1>';
	}


}

add_action('admin_menu', 'add_custom_submenu', 999);



//------------------------------------//
// Rcipies menu page
//------------------------------------//


if (isset($_POST['submit_button'])){

	$my_post = array(
		'post_title' => 'My post',
		'post_content' => 'testing post',
		'post_status' => 'publilsh',
		'post_author' => 1,
		'post_catagory' => array(8,39)

);

wp_insert_post($my_post);

}else{
	$test = "no";
}

/**
 * Register a custom menu page.
 */
function wpdocs_register_recipies_custom_menu_page(){
	add_menu_page( 
		__( 'Custom Menu Title', 'textdomain' ), // title
		'Recipies', // title of menu item
		'manage_options',
		'/template_admin_parts/recipies.php', //menus slug to add sub menus too
		'', //Calls the other function to get page description
		plugins_url( 'myplugin/images/icon.png' ),
		4 //location on admin sidebar
	); 
}
add_action( 'admin_menu', 'wpdocs_register_recipies_custom_menu_page' );

/**
 * Display a custom subm menu page
 */
function recipies_custom_menu_page(){
	// require_once  get_template_directory().''; // call location of php custom file

   //require get_admin_url(). '/template_admin_parts/recipies.php';
	

	//$test = "<h1> TEst </h1>";


	//esc_html_e( $test, 'textdomain' );	
esc_html_e( get_template_directory(), 'textdomain' );	


}



add_submenu_page( 'recipies-top-level-slug', 'Dashboard', 'Dashboard',
	'manage_options','/template_dashboard.php'); //last one is the location of the file that it opens
add_submenu_page( 'recipies-top-level-slug', 'Template Attributes', 'Template Attributes',
	'manage_options', '/template_admin_parts/attributes.php');



?>