<!-- static page for website -->
<?php
/*
Template Name: Where to buy
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
    <!-- //////////////////////////////// -->
<div class="banner">
      <img src="<?= get_template_directory_uri()?>/assets/images/not_ecommerce/shopBanner.png" alt="" />
      <!-- <span>Where To Buy</span> -->
    </div>
    <!-- ///////////////////// -->
    <section class="mainContent">
      <div class="storeLocations">
        <div class="announcementBar">
          <span>NOW AVAILABLE IN GEORGIA & NEW JERSEY!</span>
        </div>
        <div class="stores">
          <!--  <div class="storeList"> -->
          <div class="header">
            <!-- top start -->
            <form class="distanceForm" action="#">
              <div class="searchContainer">
                <label for="search">Search</label>
                <input
                  type="text"
                  name="search"
                  id=""
                  placeholder="Search by ZIP, name or adress"
                />
              </div>
              <div class="responsiveContainer">
                <div class="inputContainer">
                  <label for="distanceDropdown">Distance</label>
                  <select name="distanceDropdown" id="">
                    <option value="10">10 Miles</option>
                    <option value="25">25 Miles</option>
                    <option value="50">50 Miles</option>
                  </select>
                </div>
                <div class="inputContainer">
                  <label for="sortStore">Sort</label>

                  <select name="sortStore" id="#">
                    <option value="Distance">By Distnace</option>
                    <option value="asc">Ascending (A-Z)</option>
                    <option value="desc">Descending (Z-A)</option>
                  </select>
                </div>
              </div>
            </form>
            <!-- top end  -->
            <!-- bottom start -->
            <div class="warning">
              <span
                >*Some retailers listed may have ordered, but do not yet have it
                in stock.</span
              >
            </div>
            <!-- bottom end -->
          </div>
          <div class="storeOverflowContainer">
            <div class="storeLocationContainer">
              <div class="store">
                <div class="adressSide">
                  <span class="storeTitle">VINTAGE WINE SHOPPE </span>
                  <span class="adress"
                    >4133 ORCHARD LAKE ORCHARD LAKE, MI, 48324</span
                  >
                  <span class="distanceAway">0.6 Miles</span>
                  <span class="getDirectionBTN">Get Directions</span>
                </div>
                <!-- <div class="img">
                <img src="./assets/images/logo.png" alt="" />
              </div> -->
              </div>
              <!-- //////// -->
              <div class="store">
                <div class="adressSide">
                  <span class="storeTitle">VINTAGE WINE SHOPPE </span>
                  <span class="adress"
                    >4133 ORCHARD LAKE ORCHARD LAKE, MI, 48324</span
                  >
                  <span class="distanceAway">0.6 Miles</span>
                  <span class="getDirectionBTN">Get Directions</span>
                </div>
                <!-- <div class="img">
                <img src="./assets/images/logo.png" alt="" />
              </div> -->
              </div>
              <!-- ///////// -->
              <div class="store">
                <div class="adressSide">
                  <span class="storeTitle">VINTAGE WINE SHOPPE </span>
                  <span class="adress"
                    >4133 ORCHARD LAKE ORCHARD LAKE, MI, 48324</span
                  >
                  <span class="distanceAway">0.6 Miles</span>
                  <span class="getDirectionBTN">Get Directions</span>
                </div>
                <!-- <div class="img">
                <img src="./assets/images/logo.png" alt="" />
              </div> -->
              </div>
              <!-- ///////// -->
              <div class="store">
                <div class="adressSide">
                  <span class="storeTitle">VINTAGE WINE SHOPPE </span>
                  <span class="adress"
                    >4133 ORCHARD LAKE ORCHARD LAKE, MI, 48324</span
                  >
                  <span class="distanceAway">0.6 Miles</span>
                  <span class="getDirectionBTN">Get Directions</span>
                </div>
                <!-- <div class="img">
                <img src="./assets/images/logo.png" alt="" />
              </div> -->
              </div>
            </div>
            <!-- </div> -->
            <!-- <div class="storeMap"></div> -->
          </div>
        </div>
      </div>
      <div class="map"></div>
    </section>

    <section class="contactSection">
      <div class="sellingSignUp">
        <div class="left">
          <span class="header">Are You Interested in Selling Varchas?</span>
          <span class="sellingDesc desc"
            >If you are interested in selling our premium whiskeys, please fill
            out the form below and we will be in touch with you shortly.</span
          >
          <span class="orderDesc desc"
            >If you are interested in ordering our bourbon, it is in the RNDC
            catalog under “Varchas Straight BBN Whiskey”</span
          >
          <span class="productCode desc">Product code 24279.</span>
        </div>
        <form action="#">
          <input type="text" name="" id="" placeholder="Your Full Name" />
          <div class="name_email">
            <input type="text" name="" id="" placeholder="Email" />
            <input type="text" name="" id="" placeholder="Phone Number" />
          </div>

          <textarea
            name=""
            id=""
            cols="30"
            rows="6"
            placeholder="Message"
          ></textarea>
          <!-- <div class="captcha"></div> -->
          <input type="submit" value="Submit" />
        </form>
      </div>
    </section>

    <!-- popup styling -->
    <div class="zipCodePopup">
      <div class="content">
        <span>Please enter a zip code to find our products near you.</span>
        <form action="#">
          <input type="text" placeholder="Enter Zip Code" />
          <input class="popupBTN" type="submit" value="Submit" />
        </form>
      </div>
    </div>

    <!-- //////////////////////////////// -->


<?php get_footer(); ?> <!-- calls the footer file though  a bilt in function get_template_part( 'footer' ); -->