<!-- static shop page for website -->
<?php
/*
Template Name: Shop
*/
?>

<?php get_header(); ?> <!-- calls the header file though  a bilt in function get_template_part( 'header' ); -->


<section class="content">

  <?php get_template_part("template-parts/ecommerce/homepage/banner")?>

  <!-- mobile header -->
  <?php get_template_part("template-parts/ecommerce/homepage/mobile_header")?>
  <!-- mobile header -->
  <?php get_template_part("template-parts/ecommerce/homepage/desktop_index_cards")?>
  <?php get_template_part("template-parts/ecommerce/homepage/mobile_index_cards")?>

</section>


<?php get_footer(); ?> <!-- calls the footer file though  a bilt in function get_template_part( 'footer' ); -->