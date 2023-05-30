<!-- static page for website -->
<?php
/*
Template Name: Our Distillary
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

    <section class="main">
      <img
        class="mainBackground"
        src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/OurDistillaryBackground.png"
        alt=""
        srcset=""
      />
      <div class="mainText">
        <div class="textContainer">
          <div class="title">Our Distillary</div>
          <span>
            Shankar Distillers, the production home of Varchas Premium Spirits,
            and is dedicated to creating quality products. We pride ourselves in
            taking the time to craft our spirits to their top potential.

            <div class="lineBreak"></div>

            We utilize only wholesome ingredients, most coming from the state of
            Michigan. Being residents and owning other businesses in Michigan,
            it makes us proud to offer a quality product made with Michigan
            ingredients and produced with Great Lake water, one of the largest
            fresh water sources in the world.
            <div class="lineBreak"></div>

            We started with our whiskeys, Bourbon and Rye, due to our passion
            for their taste. Our plans will include a vodka, gin, and rum, with
            multiple flavor variants. We are glad to share these products with
            you for your enjoyment.
          </span>
        </div>
      </div>
    </section>

    <section class="tastingRooms">
      <span class="subTitle">Tasting Room & Tours</span>
      <span class="description"
        >Immerse yourself in the distillery business. Our tours deliver an into
        the technology and precision of craft distillation. You’ll see our
        grain-to-glass method and taste some fine, distilled spirits. Tours are
        available daily in season and weekly year-round.</span
      >
      <span class="announcement"
        >PLEASE BRING A VALID PHOTO I.D. AND PLAN TO ARRIVE 10-15 MINUTES BEFORE
        YOUR TOUR STARTS, CHILDREN (UNDER 21) ARE WELCOME FREE OF CHARGE</span
      >
    </section>
    <!-- //////////////////////////////// -->
    <!-- main test end -->
    <!-- //////////////////////////////// -->
    <!--Office Location start-->

    <section id="distillary" class="ourLocation">
      <div class="container">
        <span class="title"
          >PERFECT FOR ENTHUSIASTS OF WHISKEY & CRAFT DISTILLING!</span
        >
        <span class="location"
          >300 Enterprise Ct, Bloomfield Twp, MI 48302, US</span
        >
        <div class="content">
          <span class="contentTitle">Hours</span>
          <span class="contentDesc">Monday - Sunday 11 AM - 9 PM</span>
        </div>
        <div class="content">
          <span class="contentTitle">Phone</span>
          <span class="contentDesc">+1 855-827-2427</span>
        </div>
        <div class="buttons">
          <a href="<?= esc_url( get_permalink( get_page_by_title( 'Contact Us' ) ) );?>"
            ><span class="bookTourBtn">Book Distillery Tour</span></a
          >
        </div>
      </div>
    </section>
    <!--Office Location end-->

    <!-- //////////////////////////////// -->
    <!--Join the club start-->

    <section id="contact">
      <div class="container">
        <!-- header start -->
        <div class="header">
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
          <div class="formContainer">
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
          </div>
          <!-- email end -->
          <!-- bottm start -->
          <div class="formContainer">
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
          </div>
          <!-- bottom end -->
        </form>

        <!-- form end -->
      </div>
    </section>

    <!--Join the club end-->
    <!-- //////////////////////////////// -->
    




<?php get_footer(); ?> <!-- calls the footer file though  a bilt in function get_template_part( 'footer' ); -->