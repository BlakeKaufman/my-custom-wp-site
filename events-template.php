<!-- static page for website -->
<?php
/*
Template Name: Events
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
<div class="banner">
      <img src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/eventsTopBanner.png" alt="" />
      <!-- <span>Events</span> -->
    </div>
    <section class="mainContent news">
      <form action="#" method="post" class="navigation">
        <select name="month" id="month">
          <option value="" disabled selected hidden>Month</option>
          <option value="january">January</option>
          <option value="febuary">Febuary</option>
        </select>
        <select name="year" id="year">
          <option value="" disabled selected hidden>Year</option>
          <option value="2023">2023</option>
          <option value="2022">2022</option>
        </select>

        <input type="text" name="search" id="search" placeholder="Search" />
      </form>
      <div class="UserContent">
        <!-- <div class="post">
          <div class="imgContainer">
            <img src="" alt="" />
          </div>
          <div class="textContainer">
            <span class="title"></span>
            <div class="dateInfo">
              <div class="dateContainer">
                <div class="img"></div>
                <span class="date"></span>
              </div>
              <div class="dateContainer">
                <div class="img"></div>
                <span class="time"></span>
              </div>
              <div class="dateContainer">
                <div class="img"></div>
                <span class="location"></span>
              </div>
            </div>
            
            <a class="readMoreBtn" href="expandedContent/postName.html"></a>
          </div>
        </div> -->
      </div>
      <div class="pagePagination">
        <span class="leftArrow paginationBTN"><</span>
        <div class="overfowContainer">
          <div class="numbersContainer">
            <!-- where numbers are going -->
          </div>
        </div>
        <span class="rightArrow paginationBTN">></span>
      </div>
    </section>


<?php get_footer(); ?> <!-- calls the footer file though  a bilt in function get_template_part( 'footer' ); -->