<!-- static shop page for website -->
<?php get_header(); ?> <!-- calls the header file though  a bilt in function get_template_part( 'header' ); -->


<section class="content">

  <?php get_template_part("template-parts/homepage/banner")?>

  <!-- mobile header -->
  <?php get_template_part("template-parts/homepage/mobile_header")?>
  <!-- mobile header -->
  <?php get_template_part("template-parts/homepage/desktop_index_cards")?>
  <?php get_template_part("template-parts/homepage/mobile_index_cards")?>

</section>


<?php get_footer(); ?> <!-- calls the footer file though  a bilt in function get_template_part( 'footer' ); -->
