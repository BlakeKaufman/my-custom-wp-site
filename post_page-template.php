<!-- static page for website -->
<?php
/*
Template Name: Post page
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

<!-- //////////////////////////////// --><!-- //////////////////////////////// -->
    <div class="banner">
      <span>Full Post Page</span>
    </div>

    <section class="fullPost">
      <!-- <div class="navigationContainer">
        <div class="contentContainer">
          <div class="backBTN"><span>BACK</span></div>
          <div class="navigation">
            <div class="text">
              <span class="news">NEWS</span>
              <span class="activePage">&</span>
              <span class="events">EVENTS</span>
            </div>
            <div class="pageBtns">
              <div class="pageBTN news">
                <span class="news"><a href="./news.html">latest news</a> </span>
              </div>
              <div class="pageBTN events">
                <span class="events"
                  ><a href="./events.html">latest events</a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <div class="container">
        <div class="mainContent">
          <!-- WHERE JS CONTENT GOES -->
          <div class="contentSide">
            <div class="socialSide">
              <div class="socials">
                <span>Share:</span>
                <img src="<?= get_template_directory_uri()?>/assets/images/icons/facebook.svg" alt="" />
                <img src="<?= get_template_directory_uri()?>/assets/images/icons/twitter.svg" alt="" />
                <img src="<?= get_template_directory_uri()?>/assets/images/icons/linkedin.svg" alt="" />
              </div>
              <form action="#" method="#">
                <span class="formTitle">Leave Reply</span>
                <span class="formDescription"
                  >Your email address will not be published. Required fields are
                  marked *</span
                >
                <div class="nameContainer">
                  <input type="text" name="#" id="#" placeholder="Name*" />
                  <input type="text" name="#" id="#" placeholder="Email*" />
                </div>
                <textarea
                  name="#"
                  id="#"
                  cols="30"
                  rows="5"
                  placeholder="Comment"
                ></textarea>
              </form>
            </div>
          </div>

          <div class="navAndPostsSide">
            <!-- <div class="stickyContainer"> -->
            <!-- <div class="navigationNavSlide">
              <div class="prev NavSlideBtn"><span>Prev</span></div>
              <div class="next NavSlideBtn"><span>Next</span></div>
            </div> -->
            <span class="otherPostTitle"> Other Blog </span>
            <div class="otherPosts">
              <div class="post">
                <div class="imgContainer">
                  <img
                    src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/colorfulBottles.png"
                    alt=""
                  />
                </div>
                <span class="title">Lansing Bourbon Fest</span>
                <div class="bottomContainer">
                  <span class="date">October 22, 2022</span>
                  <div class="readMoreBtn">
                    <a href="#">Read More</a>
                  </div>
                </div>
              </div>
              <div class="post">
                <div class="imgContainer">
                  <img
                    src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/colorfulBottles.png"
                    alt=""
                  />
                </div>
                <span class="title">Lansing Bourbon Fest</span>
                <div class="bottomContainer">
                  <span class="date">October 22, 2022</span>
                  <div class="readMoreBtn">
                    <a href="#">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- </div> -->
          </div>
        </div>
      </div>
    </section>

    <!-- //////////////////////////////// -->
    <!--Footer start-->

    <?php get_footer(); ?> <!-- calls the footer file though  a bilt in function get_template_part( 'footer' ); -->