<!-- landing page for website -->
<?php get_header(); ?> <!-- calls the header file though  a bilt in function get_template_part( 'header' ); -->


<section class="content">

  <?php get_template_part("./template-parts/homepage/banner.php")?>

  <!-- mobile header -->
  <?php get_template_part("./template-parts/homepage/mobile_header.php")?>
  <!-- mobile header -->
  <?php get_template_part("./template-parts/homepage/desktop_index_cards.php")?>
  <?php get_template_part("./template-parts/homepage//mobile_index_cards.php")?>

</section>


<?php get_footer(); ?> <!-- calls the footer file though  a bilt in function get_template_part( 'footer' ); -->
