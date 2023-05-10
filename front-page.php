<!-- landing page for website -->
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

<!-- main Start -->
<section class="home">
      <video
        class="backgroundVideo"
        src="<?= get_template_directory_uri()?>/assets/videos/homepageVideo.mp4"
        autoplay
        loop
        muted
      ></video>

      <div class="blurBackground">
        <img
          class="logoWithText"
          src="<?= get_template_directory_uri()?>/assets/images/icons/LogoWithText.png"
          alt=""
        />
        <span class="captionMain"
          >STRAIGHT BOURBON WHISKEY & STRAIGHT RYE WHISKEY</span
        >
        <div class="discover">
          <span class="nextPageTxt clickable">DISCOVER OUR SPIRITS</span>
          <span class="nextPageBtn clickable"
            ><img
              class="clickable"
              src="<?= get_template_directory_uri()?>/assets/images/icons/skinnyDownArrow.svg"
              alt=""
              srcset=""
          /></span>
        </div>
      </div>
    </section>
    <!-- main end -->
    <!-- //////////////////////////////// -->
    <!-- awarded wiskey section start -->
    <section id="awardWiskey" class="awardWiskey">
      <div class="container">
        <!-- background circle -->
        <div class="backgroundCircle"></div>
        <div class="scrollContainer bourbonSlideShow">
          <div class="rightTxtContainer contentContainer">
            <div class="img">
              <img
                src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/ryeBottleAward.png"
                alt=""
              />
            </div>
            <div class="txt">
              <span>Straight Bourbon Whiskey</span>
              <span>2022 SILVER MEDAL</span>
              <span>SAN FRANCISCO WORLD SPIRITS COMPETITION</span>
            </div>
          </div>
          <!-- /////////////////////////// -->
          <div class="leftTxtContainer contentContainer">
            <div class="img">
              <img
                src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/WhiskeyBottleAward.png"
                alt=""
              />
            </div>
            <div class="txt">
              <span> Straight Rye Whiskey</span>
              <span>2022 SILVER MEDAL</span>
              <span>SAN FRANCISCO WORLD SPIRITS COMPETITION</span>
            </div>
          </div>
        </div>
        <!-- slide btns -->
        <span class="rightSlideBTN slideBTN">></span>
        <span class="leftSlideBTN slideBTN"><</span>
      </div>
    </section>

    <!-- awarded wiskey section end -->
    <!-- //////////////////////////////// -->
    <!-- Our story start -->

    <section id="ourStory" class="ourStory">
      <div class="ourStoryContainer">
        <div class="textSide">
          <span class="title">Our Story</span>
          <span class="desc"
            >Varchas founded and lead his software company for decades. But he
            always wanted to pursue his passion of making great tasting, premium
            American whiskey and taking it around the world for people to
            experience American heritage.</span
          >
          <span class="readMoreBtn"
            ><a href="./ourstory.html">Read More >></a></span
          >
        </div>
        <div class="imgContainer">
          <img src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/shankarProfilePic.png" alt="" srcset="" />
          <div class="imgBorder"></div>
        </div>
      </div>
    </section>

    <!-- Our story end -->
    <!-- //////////////////////////////// -->
    <!-- Signature Recipes start -->

    <section id="signitureRec" class="signitureRec">
      <span class="headingTitle">Signature Recipes</span>
      <div class="recepeMastContainer">
        <!-- first recepie -->
        <div class="recepeContainer">
          <img class="closePopupBtn" src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/xIcon.svg" alt="" />
          <div class="imgContainer">
            <img src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/volfashioned_new.png" alt="" srcset="" />
          </div>
          <div class="popup">
            <div class="popupContainer">
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
              <div class="recepieBtn">View Recipe ></div>
            </div>
          </div>
        </div>
        <!-- second Recipe -->
        <div class="recepeContainer">
          <img class="closePopupBtn" src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/xIcon.svg" alt="" />
          <div class="imgContainer">
            <img src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/lemonvader_new.png" alt="" srcset="" />
          </div>
          <div class="popup">
            <div class="popupContainer">
              <div class="title">The "LemonVader"</div>
              <div class="popupContent">
                <ul>
                  <li>1.5 ounces of Varchas Bourbon</li>
                  <li>4 ounces of lemonade</li>
                  <li>1 slice of lemon to garnish</li>
                  <li>
                    Pour bourbon in rocks glass, add lemonade and ice to fill
                    glass. Stir and garnish.
                  </li>
                </ul>
              </div>
              <div class="recepieBtn">View Recipe ></div>
            </div>
          </div>
        </div>
        <!-- thier receipe -->
        <div class="recepeContainer">
          <img class="closePopupBtn" src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/xIcon.svg" alt="" />
          <div class="imgContainer">
            <img src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/vojito_new.png" alt="" srcset="" />
          </div>
          <div class="popup">
            <div class="popupContainer">
              <div class="title">The "Vojito"</div>
              <div class="popupContent">
                <ul>
                  <li>1 1/2 ounces of Varchas Bourbon</li>
                  <li>1 oz Fresh lime juice</li>
                  <li>2 teaspoons Sugar</li>
                  <li>6 leaves of Mint</li>
                  <li>Soda Water</li>
                  <li>
                    Mint sprigs muddled with sugar and lime juice. Bourbon added
                    and topped with soda water. Garnished with sprig of mint
                    leaves. Served with a straw. A Varchas style Mojito!
                  </li>
                </ul>
              </div>
              <div class="recepieBtn">View Recipe ></div>
            </div>
          </div>
        </div>
        <!-- end of container -->
      </div>
    </section>

    <!-- Signiture recipees end-->
    <!-- //////////////////////////////// -->
    <!--Office Location start-->

    <section id="distillary" class="ourLocation">
      <div class="container">
        <div class="text">
          <span class="title"
            >PERFECT FOR ENTHUSIASTS OF WHISKEY & CRAFT DISTILLING!</span
          >
          <span class="location"
            >300 Enterprise Ct, Bloomfield Twp, MI 48302, US</span
          >
          <div class="content">
            <span class="contentTitle">Hours</span>
            <span class="contentDesc">Monday - Sunday 11 AM - 9 PM</span>
          </div>
          <div class="content">
            <span class="contentTitle">Phone</span>
            <span class="contentDesc">+1 855-827-2427</span>
          </div>
        </div>
        <div class="buttons">
          <span class="bookTourBtn"
            ><a href="./contactUs.html">Book Distillery Tour</a></span
          >
        </div>
      </div>
    </section>
    <!--Office Location end-->
    <!-- //////////////////////////////// -->
    <!--Join the club start-->

    <section id="contact" class="joinTheClub">
      <div class="joinTheClubcontainer">
        <!-- header start -->
        <div class="header">
          <img
            class="backgroundImage"
            src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/BourbonGirl/clucb_bck.png"
            alt=""
            srcset=""
          />
          <span class="title">Join The Club</span>
          <span class="desc"
            >Join our club to stay up to date on local tastings, upcoming
            releases of our whiskeys and more!</span
          >
        </div>
        <!-- header end -->
        <!-- form start -->
        <form action="#" method="post">
          <input
            class="formInput"
            type="text"
            name="fullName"
            id="fullName"
            placeholder="Your Full Name"
          />
          <!-- email start -->

          <input
            class="formInput formContainerStyle"
            type="text"
            name="email"
            id="email"
            placeholder="Email"
          />
          <input
            class="formInput formContainerStyle"
            type="text"
            name="phoneNum"
            id="phoneNum"
            placeholder="Phone Number"
          />

          <!-- email end -->
          <!-- bottm start -->

          <select class="formInput formContainerStyle" name="state" id="state">
            <option value="State">State</option>
            <option value="Ohio">Ohio</option>
            <option value="Texas">Texas</option>
          </select>
          <input
            class="formSubmitBtn"
            type="submit"
            name="submit"
            id="submit"
            placeholder="Submit"
          />

          <!-- bottom end -->
        </form>

        <!-- form end -->
      </div>
    </section>

    <!--Join the club end-->
    <!-- //////////////////////////////// -->


    <?php get_footer(); ?> <!-- calls the footer file though  a bilt in function get_template_part( 'footer' ); -->