


<footer>
      <div class="mainFootContainer">
        <!-- left start -->
        <div class="left">
          <!-- owned start -->
          <div class="ownedOperated">
            <span class="header">Owned and operated by,</span>
		<span><?php echo get_theme_mod('varchas-footer-callout-address')?></span>
          <!--  <span
              >Shankar Distillers LLC, 300 Enterprise Court, Bloomfield Hills,
              MI 48302</span
            > -->
          </div>
          <!-- owned end -->
          <!-- contact start -->
          <div class="contact">
            <div class="container">
              <span class="header">Email:</span>
            <!--  <span class="answer">info@mibourbon.com</span> -->
 	      <span class="answer"><?php echo get_theme_mod('varchas-footer-callout-email')?></span>
            </div>
            <div class="container">
              <span class="header">Phone:</span>
             <!-- <span class="answer">+1 855-827-2428</span> -->
	      <span class="answer"><?php echo get_theme_mod('varchas-footer-callout-phone')?></span>
            </div>
          </div>
          <!-- contact end  -->
          <!-- rights start -->
        </div>
        <!-- left end -->
        <!-- center start -->
        <div class="center">
          <!-- logo start -->
          <div class="logo">
            <img src="<?= get_template_directory_uri()?>/assets/images/icons/logo.png" alt="" srcset="" />
          </div>
          <!-- logo end -->
        </div>
        <!-- center end -->

        <div class="right">
          <div class="NavGroupFooter">
            <ul class="navContainerFooter">
              <li class="navItemFooter">Our Story</li>
              <li class="navItemFooter">Our Distillery</li>
              <li class="navItemFooter">Our Spirits</li>
              <li class="navItemFooter">Recipes</li>
              <li class="navItemFooter">Where To Buy</li>
            </ul>
          </div>
          <div class="NavGroupFooter">
            <ul class="navContainerFooter">
              <li class="navItemFooter">News</li>
              <li class="navItemFooter">Events & Tastings</li>
              <li class="navItemFooter">Blog & Vlog</li>
              <li class="navItemFooter">Contact Us</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="bottom">
        <span class="rights"
          >@ <?php echo get_theme_mod('varchas-footer-callout-copyright')?> Shankar Distillers LLC. – All Rights Reserved</span
        >
        <div class="socials">
          <img src="<?= get_template_directory_uri()?>/assets/images/icons/facebook.svg" alt="" srcset="" />
          <img src="<?= get_template_directory_uri()?>/assets/images/icons/twitter.svg" alt="" srcset="" />
          <img src="<?= get_template_directory_uri()?>/assets/images/icons/linkedin.svg" alt="" srcset="" />
        </div>
        <span class="policies">Privacy Policy | Terms of Use</span>
      </div>
    </footer>




<?php 
wp_footer(); //calls the js
 ?>
	</body>
</html>