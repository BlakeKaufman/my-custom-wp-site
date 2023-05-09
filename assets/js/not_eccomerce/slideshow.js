// "use strict";
// // adding slideshow fumtionality

// const slides = document.querySelectorAll(".slideshow");
const slideShowContainer = document.querySelector(".slidesContainer");
const testimonials = document.querySelector(".testimonial");

// console.log(slides);

// //  global vairables
// let slideIndex = 0;
// // functions
// function initSlides() {
//   for (let i = 0; i < slides.length; i++) {
//     slides[i].style.transform = `translateX(${0}%)`;
//     slides[i].style.display = `flex`;
//   }
// }

// initSlides();

// function changeSlides() {
//   if (slideIndex < slides.length - 1) {
//     if (slideIndex < slides.length) {
//       slides[slideIndex].style.transform = `translateX(${-100}%)`;
//       slides[slideIndex].style.display = "none";
//     }
//     slideIndex++;
//   } else {
//     slideIndex = 0;
//     initSlides();
//   }
// }
// const slideTimer = setInterval(changeSlides, 5000);

const masterWhiskeyDic = {
  bourbonwhiskey: [
    {
      Description: "Everyone who I share it with loves it !",
      Name: "- Blake K",
      img: "./assets/images/PersonForTextimonial/Group 165.png",
    },
    {
      Description:
        "I offer everybody in my family and friends this wonderful gift. Every home bar needs one of these!",
      img: "./assets/images/PersonForTextimonial/Group 165.png",
      Name: "- Paul A",
    },
    {
      Description: "Would 100% give to anyone who loves whiskey",
      img: "./assets/images/PersonForTextimonial/Group 165.png",
      Name: "- Anthony S",
    },
  ],
  ryewhiskey: [
    {
      Description: "Rye whiskey destiption 1",
      img: "./assets/images/PersonForTextimonial/Group 165.png",
      Name: "- Blake K",
    },
    {
      Description: "Rye whiskey destiption 2",
      img: "./assets/images/PersonForTextimonial/Group 165.png",
      Name: "- Paul A",
    },
    {
      Description: "Rye whiskey destiption 3",
      img: "./assets/images/PersonForTextimonial/Group 165.png",
      Name: "- Anthony S",
    },
  ],
};

let slideIndex = 0;
let slideChanger, documentPage, reviewsArray, arrayLen;

function writeSlide() {
  documentPage = document.location.pathname;
  // for local host
  // reviewsArray = documentPage.slice(
  //   documentPage.indexOf("/") + 1,
  //   documentPage.indexOf(".")
  // );

  // for website
  reviewsArray = documentPage.slice(documentPage.indexOf("/") + 1);

  arrayLen = masterWhiskeyDic[reviewsArray].length;
  if (slideIndex == arrayLen) slideIndex = 0;
  //   if (masterWhiskeyDic[reviewsArray][slideIndex].Description.length > 90) {
  //     masterWhiskeyDic[reviewsArray][slideIndex].Description =
  //       masterWhiskeyDic[reviewsArray][slideIndex].Description.slice(0, 90) + "..";
  //   }

  html = `
        <div class="slideshow">
          <div class="left">
            <img
              src="${masterWhiskeyDic[reviewsArray][slideIndex].img}"
              alt=""
            />
          </div>
          <div class="right">
            <!-- <div class="title">The very greatest whiskey ever!</div> -->
            <div class="description">
            ${masterWhiskeyDic[reviewsArray][slideIndex].Description}
            </div>
            <div class="name">${masterWhiskeyDic[reviewsArray][slideIndex].Name}</div>
          </div>
        </div>
    
  `;
  slideShowContainer.innerHTML = html;

  slideIndex++;
}

// adding start functinlaity to it
function startSlideshow(entries) {
  const [entry] = entries;
  if (entry.isIntersecting) slideChanger = setInterval(writeSlide, 5000);
  else clearInterval(slideChanger);
}

const testimonialsObs = new IntersectionObserver(startSlideshow, {
  root: null,
  threshhold: 0.1,
});

writeSlide();
testimonialsObs.observe(testimonials);
