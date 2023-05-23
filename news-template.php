<!-- static page for website -->
<?php
/*
Template Name: News
*/
?>

<?php get_header(); ?> <!-- calls the header file though  a bilt in function get_template_part( 'header' ); -->


<!-- //////////////////////////////// -->
<div class="banner">
      <img src="./assets/images/NewsTopBanner/Top Banner.png" alt="" />
      <!-- <span>News</span> -->
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
        <!-- puuling posts from JS -->
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

    <!-- //////////////////////////////// -->


<?php get_footer(); ?> <!-- calls the footer file though  a bilt in function get_template_part( 'footer' ); -->