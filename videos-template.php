<!-- static page for website -->
<?php
/*
Template Name: Videos
*/
?>

<?php get_header(); ?> <!-- calls the header file though  a bilt in function get_template_part( 'header' ); -->
<!-- //////////////////////////////// -->

<!-- //////////////////////////////// -->
    <!-- Scroll to top btn start -->
    <!-- //////////////////////////////// -->
    <div class="scrollToTop">
      <span>TOP</span>
    </div>
    <!-- //////////////////////////////// -->
    <!-- Scroll to top btn end -->

<section class="videos">
      <div class="backgroundVideo">
        <video
          src="<?= get_template_directory_uri()?>/assets/videos/MainBackVid.mp4"
          autoplay
          loop
          muted
        ></video>
        <!-- <img src="./assets/images/play-circle.svg" alt="" srcset="" /> -->
      </div>
      <span class="mainTitle">VARCHAS PROMO</span>
      <div class="allVideoContainer"></div>
      <!-- <div class="videoContainer">
        <iframe
          class="video"
          src="https://www.youtube.com/embed/4WwTw-6nNtA"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>

        <div class="title">Join the Varchas Club - Premium Bourbon</div>

        <div class="lenOfVideo"></div>
        <span class="hoverPopup">Keep Hovering to Play</span>
      </div> -->
    </section>

    <!-- //////////////////////////////// -->


<?php get_footer(); ?> <!-- calls the footer file though  a bilt in function get_template_part( 'footer' ); -->