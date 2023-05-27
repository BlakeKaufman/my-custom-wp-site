<!-- static page for website -->
<?php
/*
Template Name: Contact Us
*/
?>

<?php get_header(); ?> <!-- calls the header file though  a bilt in function get_template_part( 'header' ); -->
<!-- //////////////////////////////// -->

<section class="mainContact">
      <img
        class="backgroundContact"
        src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/OurDistillaryBackground.png"
        alt=""
        srcset=""
      />
      <!-- <span class="title">Contact Us</span> -->
      <!-- <div class="formSelector"> -->
      <!-- form 1 -->
      <div class="container">
        <!-- <div class="Popdown signUpPopdown select-contact"> -->
        <!-- <div class="content-contact">
            <div class="content"> -->
        <!-- <div class="closePopupBtn contact">X</div> -->
        <!-- right -->
        <div class="left">
          <span class="Title">HI THERE</span>
          <span class="desc"
            >Let’s get this conversation started. Tell us what your problem is,
            and we’ll get in touch as soon as we can.</span
          >
        </div>
        <form class="contactaForm" action="#">
          <input type="text" name="#" id="#" placeholder="Your Full Name" />

          <div class="email__phone">
            <input
              type="text"
              class="email__phone__INPT"
              name="#"
              id="#"
              placeholder="Email"
            />
            <input
              type="text"
              class="email__phone__INPT"
              name="#"
              id="#"
              placeholder="Phone"
            />
          </div>

          <textarea
            name="message"
            id="message"
            rows="5"
            placeholder="Message"
          ></textarea>

          <input type="submit" value="Submit" />
        </form>
        <!-- </div>
          </div> -->
        <!-- </div> -->
      </div>
      <!-- signup popdown end -->
      <!-- </div> -->
    </section>
    <!-- form 2 -->
    <section class="container-distillary">
      <div class="contentContainer">
        <div class="textContainer">
          <span class="formTitle bold gold"
            >PERFECT FOR ENTHUSIASTS OF WHISKEY & CRAFT DISTILLING!</span
          >
          <span class="adress"
            >300 Enterprise Ct, Bloomfield Twp, MI 48302, US</span
          >
          <div class="mainContent">
            <div class="infoContainer">
              <span class="bold gold">Hours</span>
              <span>Monday - Sunday 11 AM - 9 PM</span>
            </div>
            <div class="infoContainer">
              <span class="bold gold">Phone</span>
              <span>+1 855-827-2427</span>
            </div>
          </div>
        </div>

        <span class="distillaryBTN distillary">Book Distillery Tour</span>
      </div>
    </section>
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

          <select class="formInput formContainerStyle" name="state" id="state">
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
    <!-- distillary popdown start -->
    <div class="Popdown distillaryPopdown select-distillary">
      <div class="content-distillary"><span>IFRAME</span></div>
    </div>
    <!-- distillary popdown end -->
    <!-- signup popdown start -->

    <!-- //////////////////////////////// -->


<?php get_footer(); ?> <!-- calls the footer file though  a bilt in function get_template_part( 'footer' ); -->