"use strict";
const scrollBTN = document.querySelector(".scrollToTop");
const footerHeight = document
  .querySelector("footer")
  .getBoundingClientRect().height;
const path = window.location.pathname;

const page = path.split("/").pop();

window.addEventListener("scroll", function (e) {
  // finding if we are on the index page or not

  let height = page != "index.html" ? 50 : window.innerHeight;

  //   displaying the button if we are past scroll height

  if (window.pageYOffset < height) {
    scrollBTN.style.display = "none";
    return;
  }
  //   stesing if we have hit the footer or not
  if (
    window.pageYOffset >
    document.body.scrollHeight - (window.innerHeight + footerHeight)
  ) {
    scrollBTN.style.display = "flex";
    scrollBTN.style.position = "absolute";
    scrollBTN.style.top = `${
      document.body.scrollHeight - (footerHeight + 80)
    }px`;
    return;
  }
  //   everything else
  scrollBTN.style.display = "flex";
  scrollBTN.style.position = "fixed";
  scrollBTN.style.top = "unset";

  scrollBTN.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
});
