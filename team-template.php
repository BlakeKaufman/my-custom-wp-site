<!-- static page for website -->
<?php
/*
Template Name: Team
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
    <!-- team container start -->
    <section class="teamContainer">
      <div class="banner">
        <img
          src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/teamBanner.png"
          alt=""
          class="backgroundImage"
        />
        <!-- <span class="mainTitle">Our Story</span> -->
      </div>
      <div class="team">
        <!-- member 1 -->
        <div class="member">
          <div class="img">
            <img src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/VarchasTeamImg.png" alt="" />
          </div>
          <span class="name">VARCHAS SHANKAR</span>
          <span class="position">FOUNDER & CEO</span>
        </div>
        <!-- member 2 -->
        <div class="member">
          <div class="img">
            <img src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/ScottTeamImg.png" alt="" />
          </div>
          <span class="name">SCOTT BLAINE</span>
          <span class="position">VP OPERATIONS</span>
        </div>
        <!-- member 3 -->
        <div class="member">
          <div class="img">
            <img src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/RayTeamImg.png" alt="" />
          </div>
          <span class="name">RAY DRZALA</span>
          <span class="position">MARKETING DIRECTOR</span>
        </div>
        <!-- member 4 -->
        <div class="member">
          <div class="img">
            <img src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/MikeTeamImg.png" alt="" />
          </div>
          <span class="name">MIKE MORRIS</span>
          <span class="position">CREATIVE DIRECTOR</span>
        </div>
        <!-- member 5 -->
        <div class="member">
          <div class="img">
            <img src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/MarkTeamImg.png" alt="" />
          </div>
          <span class="name">MARK MENARD</span>
          <span class="position">ADVISOR</span>
        </div>
        <!-- member 6 -->
        <div class="member">
          <div class="img">
            <img src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/BlakeTeamImg.png" alt="" />
          </div>
          <span class="name">BLAKE MURRAY</span>
          <span class="position">SALES</span>
        </div>
      </div>
    </section>
    <!-- team container end -->
    <!-- //////////////////////////////// -->





<?php get_footer(); ?> <!-- calls the footer file though  a bilt in function get_template_part( 'footer' ); -->