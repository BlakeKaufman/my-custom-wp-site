<!-- static page for website -->
<?php
/*
Template Name: Full Recipies Page
*/
?>

<?php get_header(); ?> <!-- calls the header file though  a bilt in function get_template_part( 'header' ); -->

    <!-- //////////////////////////////// -->
    <!-- Scroll to top btn start -->
    <!-- //////////////////////////////// -->
    <div class="scrollToTop">
      <span>TOP</span>
    </div>
    <!-- //////////////////////////////// -->
    <!-- Scroll to top btn end -->

<!-- recipie start -->

<section class="recipie">
      <!-- <div class="viewAllRecBTN"><span>View All Recipies</span></div> -->
      <!-- <div class="container">
        <div class="img">
          <img src="./assets/images/lemonvader.webp" alt="" />
        </div>
        <div class="content">
          <div class="topInformation">
            <span class="bourbon_type">Straight Rye Whiskey</span>
            <span class="header">The "v"</span>
            <a href="./recipies.html"
              ><span class="viewAllRecBTN">Back to recipies</span></a
            >
          </div>
          <div class="listContainer">
            <div class="list">
              <ul class="">
                <li>1.5 ounces of Varchas in a rocks glass</li>
                <li>With or without ice, your choice</li>
              </ul>
            </div>
          </div>

          <span class="next_recipie_BTN"
            >View next recipe
            <img src="./assets/images/arrow-right-short.svg" alt="" srcset=""
          /></span>
        </div>
      </div> -->
    </section>

    

    <section class="other_recipies">
      <div class="header">MORE VARCHAS RECIPES</div>

      <div class="othersContainer">
        <div class="othersRecipie">
          <div class="img">
            <img src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/BB_smash.webp" alt="" />
          </div>
          <span class="othersTitle">The "V"</span>
        </div>
        <div class="othersRecipie">
          <div class="img">
            <img src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/BB_smash.webp" alt="" />
          </div>
          <span class="othersTitle">The "V"</span>
        </div>
        <div class="othersRecipie">
          <div class="img">
            <img src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/BB_smash.webp" alt="" />
          </div>
          <span class="othersTitle">The "V"</span>
        </div>
      </div>
    </section>

    <!-- recipie end -->


<?php get_footer(); ?> <!-- calls the footer file though  a bilt in function get_template_part( 'footer' ); -->