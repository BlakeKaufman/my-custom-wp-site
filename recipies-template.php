<!-- static page for website -->
<?php
/*
Template Name: Recipies
*/
?>

<?php get_header(); ?> <!-- calls the header file though  a bilt in function get_template_part( 'header' ); -->

<!-- togle display -->
<div class="banner">
      <img src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/recipiesBanner.png" alt="" />
      <!-- <span>Recipies</span> -->
    </div>
    <div class="toggle">
      <div class="container">
        <div class="optionContainer">
          <span class="activeTogle">BOURBON WHISKEY</span>
        </div>
        <!-- <div class="toggleSwitch">
          <label class="switch">
            <input type="checkbox" />
            <span class="slider round"></span>
          </label>
        </div> -->
        <div class="optionContainer">
          <span>RYE WHISKEY</span>
        </div>
      </div>
    </div>
    <section class="signitureRec">
      <div class="signitureRecContainer">
        <!-- <div class="recepeContainer">
          <img class="closePopupBtn" src="./assets/images/xIcon.svg" alt="" />
          <div class="imgContainer">
            <img src="./assets/images/volfashioned_new.png" alt="" srcset="" />
          </div>
          <div class="popup">
            <div class="popupContainer">
              <img
                class="closePopupBtn"
                src="./assets/images/xIcon.svg"
                alt=""
              />
              <div class="title">The "Old Vashioned"</div>
              <div class="popupContent">
                <ul>
                  <li>1.5 ounces of Varchas Bourbon</li>
                  <li>2 spoons of simple syrup</li>
                  <li>
                    3 dashes of bitters 1 or 2 Luxardo Maraschino Cherries (your
                    choice)
                  </li>
                  <li>
                    Add simple syrup, bitters and cherries to rocks glass and
                    muddle.
                  </li>
                  <li>
                    Add in Varchas Bourbon and stir. Add ice to your liking. A
                    Varchas Old Fashioned!
                  </li>
                </ul>
              </div>
              <div class="recepieBtn">View Recipe</div>
            </div>
          </div>
        </div> -->
      </div>
    </section>


<?php get_footer(); ?> <!-- calls the footer file though  a bilt in function get_template_part( 'footer' ); -->