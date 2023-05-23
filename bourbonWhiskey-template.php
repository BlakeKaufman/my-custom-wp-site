<!-- static page for website -->
<?php
/*
Template Name: Bourbon Whiksey
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
    <!-- //////////////////////////////// -->
    
     <!-- main sectoin start -->
     <section class="main">
      <!-- container start -->
      <div class="container">
        <!-- bourbon container start -->
        <div class="bourbonContainer">
          <div class="contents">
            <div class="left">
              <div class="bourbonImage">
                <div class="backgroundCircle"></div>
                <img
                  src="./assets/images/indexBourbonBottle/Group 193@2x.png"
                  alt=""
                  srcset=""
                />
              </div>
              <div class="buttons">
                <span class="Bourbonbutton">Buy Online</span>
                <a class="Bourbonbutton" href="./wheretobuy.html"
                  >Where To Buy</a
                >
              </div>
            </div>
            <div class="right">
              <!-- title start -->
              <span class="bourbonTitle"
                >Straight <br />
                <span>Bourbon Whiskey </span></span
              >
              <!-- title end -->
              <!-- first attribute line start -->
              <div class="attributeContainer">
                <div class="leftAttribute">
                  <span class="attribute">BODY</span>
                  <span class="attributeDesc">Honey Gold In Color</span>
                </div>
                <div class="rightAttribute">
                  <span class="attribute">AROMA</span>
                  <span class="attributeDesc"
                    >Heavy Caramel, Vanilla & Oak.</span
                  >
                </div>
              </div>
              <!-- first attribute line end -->
              <!-- second attribute line start -->
              <div class="attributeContainer">
                <div class="leftAttribute">
                  <span class="attribute">TASTE</span>
                  <span class="attributeDesc"
                    >Smooth Flavors Of Caramel, Vanilla, Cocoa, & A Little
                    Smoke</span
                  >
                </div>
                <div class="rightAttribute">
                  <span class="attribute">FINISH</span>
                  <span class="attributeDesc"
                    >Balance Of Roasted Nuts, Spice & Caramel</span
                  >
                </div>
              </div>
              <!-- second attribute line end -->
              <span class="alcDescription"
                >90 Proof, 45% Alc/Vol, Available in 750 ml Bottles</span
              >
              <div class="OtherBoubonBtn">
                <a href="./ryeWhiskey.html">
                  You may also like: Straight Rye Whiskey</a
                >
                <img
                  src="./assets/images/skinnyDownArrow.svg"
                  alt=""
                  srcset=""
                />
              </div>
            </div>
          </div>
          <div class="buttonsOutsie">
            <span class="Bourbonbutton">Buy Online</span>
            <a class="Bourbonbutton" href="./wheretobuy.html">Where To Buy</a>
          </div>
        </div>
        <!-- bourbon container end -->
        <!-- awards container start -->
        <div class="awardsContainer">
          <div class="container">
            <div class="awards">
              <img
                src="./assets/images/SilverMedalAward/Group 198.png"
                alt=""
              />
            </div>
            <div class="text">
              <span class="title">2022 SILVER MEDAL</span>
              <span class="desctiption"
                >SAN FRANCISCO WORLD SPIRITS COMPETITION</span
              >
            </div>
          </div>
        </div>
        <!-- awards container end -->
        <!-- testimonials container start -->
        <div class="testimonial">
          <div class="header">What people are saying, about our whiskey.</div>
          <!-- slideshow Start -->
          <div class="slideshowContainer">
            <div class="slidesContainer">
              <!-- slide start-->
              <div class="slideshow">
                <div class="left">
                  <img
                    src="./assets/images/PersonForTextimonial/Group 165.png"
                    alt=""
                  />
                </div>
                <div class="right">
                  <!-- <div class="title">The very greatest whiskey ever!</div> -->
                  <div class="description">
                    The very greatest whiskey ever! I offer everybody in my
                    family and friends this wonderful gift. Every home bar needs
                    one of these!
                  </div>
                  <div class="name">- Paul M</div>
                </div>
              </div>
              <!-- slide end -->
            </div>
            <!-- slideshow End -->
            <div class="slidesBTN">
              <span>--------</span>
              <span>___</span>
              <span>___</span>
            </div>
          </div>
        </div>
        <!-- testimonials container end -->
      </div>
      <!-- container end -->
    </section>

    <!-- main section end -->



    




<?php get_footer(); ?> <!-- calls the footer file though  a bilt in function get_template_part( 'footer' ); -->