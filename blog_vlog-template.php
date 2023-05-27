<!-- static page for website -->
<?php
/*
Template Name: Blog and Vlog
*/
?>

<?php get_header(); ?> <!-- calls the header file though  a bilt in function get_template_part( 'header' ); -->

<!-- //////////////////////////////// -->
<div class="banner">
      <img src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/blogAndVlogBanner.png" alt="" />
      <!-- <span>Blog</span> -->
    </div>
    <div class="mainBlog">
      <!-- container start -->
      <div class="mainBlogcontainer">
        <div class="blogNavigation">
          <div class="backBtn"></div>
          <span class="title">Varchas Blog</span>
          <div class="searchform">
            <form action="#">
              <input type="text" name="#" id="#" placeholder="Search" />
            </form>
            <div class="SearchIcon">
              <img src="<?= get_template_directory_uri()?>/assets/images/icons/search.svg" alt="" srcset="" />
            </div>
          </div>
        </div>
        <div class="mainBlogContent">
          <!-- left start -->
          <div class="left">
            <!-- <div class="header">
              <span class="mainHeader">Latest Posts</span>
              <span class="SelectionHeader">All Posts</span>
            </div> -->
            <div class="contentOverflowContainer">
              <!-- //////////////////////////// -->
              <!-- puuling posts in from js -->
              <!-- //////////////////////////// -->
            </div>
            <span class="loadMoreBTN">Load More</span>
          </div>
          <!-- left end -->
          <!-- right start -->
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

                <select
                  class="formInput formContainerStyle"
                  name="state"
                  id="state"
                >
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
        </div>
        <!-- container end -->
      </div>
    </div>

    <!-- //////////////////////////////// -->


<?php get_footer(); ?> <!-- calls the footer file though  a bilt in function get_template_part( 'footer' ); -->