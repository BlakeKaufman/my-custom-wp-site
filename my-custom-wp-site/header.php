<?php
/**
 * The header template part.
 *
 * @copyright  Copyright (c) 2020, Danny Cooper
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php 
     wp_head(); 
    // getting currnt file name
	?>
    
  </head>

  <body <?php body_class(); ?>>

  <header>

  <!-- NavBar Start -->
    <nav class="nav">
      <!-- desktop nav begining -->
      <div class="navContainerDesktop">
        <a href="./index.html"
          ><div class="logo">
            <img src="<?= get_template_directory_uri()?>/assets/images/logo.png" alt="" srcset="" />
            <span>VARCHAS</span>
          </div></a
        >
        <ul class="navigationContainer">
          <li class="dropdownItem">
            <div class="dropdownBtn">
              <span><a class="navItem" href="#ourStory">About</a></span>
              <img
                class="arrow"
                src="<?= get_template_directory_uri()?>/assets/images/downArrow.svg"
                alt=""
                srcset=""
              />
            </div>
            <div class="dropdown-content">
              <a href="./ourstory.html">Our Story</a>
              <a href="./team.html">Team</a>
            </div>
          </li>
          <li><a class="navItem" href="distillery.html">Our Distillary</a></li>
          <li class="dropdownItem">
            <div class="dropdownBtn">
              <span
                ><a class="navItem" href="#signitureRec">Our Spirits</a></span
              >
              <img
                class="arrow"
                src="<?= get_template_directory_uri()?>/assets/images/downArrow.svg"
                alt=""
                srcset=""
              />
            </div>
            <div class="dropdown-content">
              <a href="./bourbonWhiskey.html">Straight Bourbon</a>
              <a href="./ryeWhiskey.html">Straight Rye</a>
              <a href="./recipies.html">Recipes</a>
              <a href="./wheretobuy.html">Where To Buy</a>
            </div>
          </li>
          <li class="dropdownItem">
            <div class="dropdownBtn">
              <span class="navItem">Resorces</span>
              <img
                class="arrow"
                src="<?= get_template_directory_uri()?>/assets/images/downArrow.svg"
                alt=""
                srcset=""
              />
            </div>
            <div class="dropdown-content">
              <a href="./news.html">News</a>
              <a href="./events.html">Events & Tastings</a>
              <a href="./blog.html">Blog & Vlog</a>
              <a href="./videos.html">Videos</a>
            </div>
          </li>
          <li><a class="navItem" href="./contactUs.html">Contact Us</a></li>
        </ul>
        <div class="shop-container">
          <div class="imageContainer">
            <img src="<?= get_template_directory_uri()?>/assets/images/shopping-cart.png" alt="" class="cart" />
            <div class="item-count"></div>
          </div>
        </div>
      </div>
      <!-- desktop nav end-->
      <!-- mobile nav start -->
      <div class="navContainerMobile">
        <div class="logo">
          <a href="./index.html"
            ><img src="<?= get_template_directory_uri()?>/assets/images/logo.png" alt="" srcset=""
          /></a>
        </div>
        <div class="shop-container">
          <div class="imageContainer">
            <img src="<?= get_template_directory_uri()?>/assets/images/shopping-cart.png" alt="" class="cart" />
            <div class="item-count"></div>
          </div>
          <img
            class="mobileMenuBtn"
            src="<?= get_template_directory_uri()?>/assets/images/list.svg"
            alt=""
            srcset=""
          />
        </div>
      </div>
      <!-- mobile nav end -->
    </nav>
    <!-- dropdownMobileNav -->
    <div class="movileNavContainer">
      <ul class="navigationContainerMobile">
        <li class="dropdownItemMobile">
          <div class="dropdownBtn">
            <span><a class="navItem drop" href="#ourStory">About</a></span>
            <img
              class="arrow"
              src="<?= get_template_directory_uri()?>/assets/images/plusIcon.svg"
              alt=""
              srcset=""
            />
          </div>
          <div class="dropdown-content">
            <a href="./ourstory.html">Our Story</a>
            <a href="./team.html">Team</a>
          </div>
        </li>
        <li><a class="navItem" href="./distillery.html">Our Distillary</a></li>
        <li class="dropdownItemMobile">
          <div class="dropdownBtn">
            <span
              ><a class="navItem drop" href="#signitureRec"
                >Our Spirits</a
              ></span
            >
            <img
              class="arrow"
              src="<?= get_template_directory_uri()?>/assets/images/plusIcon.svg"
              alt=""
              srcset=""
            />
          </div>
          <div class="dropdown-content">
            <a href="./bourbonWhiskey.html">Straight Bourbon</a>
            <a href="./ryeWhiskey.html">Straight Rye</a>
            <a href="./recipies.html">Recipes</a>
            <a href="./wheretobuy.html">Where To Buy</a>
          </div>
        </li>
        <li class="dropdownItemMobile">
          <div class="dropdownBtn">
            <span><a class="navItem drop" href="#">Resorces</a></span>
            <img
              class="arrow"
              src="<?= get_template_directory_uri()?>/assets/images/plusIcon.svg"
              alt=""
              srcset=""
            />
          </div>
          <div class="dropdown-content">
            <a href="./news.html">News</a>
            <a href="./events.html">Events & Tastings</a>
            <a href="./blog.html">Blog & Vlog</a>
            <a href="./videos.html">Videos</a>
          </div>
        </li>
        <li><a class="navItem" href="./contactUs.html">Contact Us</a></li>
        <li class="buyBtn"><span>Buy Online</span></li>
      </ul>
    </div>
    <!-- NavBar end -->
    <!-- //////////////////////////////// -->
  </header> 
  <!-- ----------------------------------- -->
  <!-- cart slideout -->
  <!-- ----------------------------------- -->
  <section class="cart-slideout">
    <!-- <div class="topbar">
        <div class="logo"></div>
        <img src="<?= get_template_directory_uri()?>/assets/images/x-lg.svg" alt="" class="close-sidebar">
    </div>
    <div class="products-container">
        <div class="product-scroll-container">
           
        </div>
    </div>
    <div class="bottom">
        <div class="sub-total">
            <span>Cart Subtotal</span>
            <span class="total">$99.99</span>
        </div>
        <div class="message">
            <span>Taxes and shipping calculated at checkout</span>
            <span>*Free Shipping on all orders $250+</span>
        </div>
        <div class="checkout-BTN">
            <a href="./checkout-page.php">Check out</a>
        </div>
    </div> -->
    </section>