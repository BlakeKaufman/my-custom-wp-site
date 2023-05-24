<!-- static page for website -->
<?php
/*
Template Name: Our Story
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
    <!-- //////////////////////////////// -->
     <!-- //////////////////////////////// -->
    <!-- main test start -->
    <div class="banner">
      <img
        src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/ourStoryBanner.png"
        alt=""
        class="backgroundImage"
      />
      <!-- <span class="mainTitle">Our Story</span> -->
    </div>
    <section class="mainTextContainer">
      <div class="allText">
        <span class="mainDescription">
          <p>
            Varchas founded and lead his software company for decades. But he
            always wanted to pursue his passion of making great tasting, premium
            American whiskey and taking it around the world for people to
            experience American heritage.
          </p>
          <p>
            Varchas comes from the historic city of Mysore in South India. The
            success of South India came from many wars won by the Kings of
            Mysore. His own success as an immigrant came from amazing
            opportunities found in coming to America and fighting his own wars
            in business, so he wanted to create something that would encompass
            these stories and his life.
          </p>
          <p>
            The stories come together through the intriguing and sexy packaging.
            Starting with the unique logo, the double headed eagle, a winning
            symbol of the Mysore Kingdom with a collectible metallic American
            Eagle stopper, symbolizing the success in America.
          </p>
          <p>
            The Varchas brand will continue to release a series of aged bourbon
            and rye with a variety of finishes that will make our brand unique.
          </p>
          <p>Shankar Distillers, LLC is a certified Minority Owned Business.</p>
        </span>

        <div class="image">
          <img src="<?= get_template_directory_uri()?>/assets/images/OurStoryShankarPicture.png" alt="" />
        </div>
      </div>
    </section>
    <!-- main text end -->
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
                src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/WhiskeyBottleAward.png"
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
                src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/ryeBottleAward.png"
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
    <!-- //////////////////////////////// -->
    <!--Join the club start-->

    <section id="contact" class="joinTheClub">
      <div class="joinTheClubcontainer">
        <!-- header start -->
        <div class="header">
          <img
            class="backgroundImage"
            src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/clucb_bck.png"
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