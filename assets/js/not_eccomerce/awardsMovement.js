"use strict";

const rightBox = document.querySelector(".rightTxtContainer");
const leftbox = document.querySelector(".leftTxtContainer");
const awardsSection = document.querySelector(".awardWiskey");

function transformElement() {
  const centerOfAwards =
    homeSection.getBoundingClientRect().height +
    awardsSection.getBoundingClientRect().height / 2;
  const windowHeight = window.scrollY / 2 + window.pageYOffset;

  let distanceTraveldPercent = Math.abs(
    1 - (centerOfAwards - windowHeight) / centerOfAwards
  );

  const moveAmt =
    distanceTraveldPercent > 1 ? 0 : 200 - 200 * distanceTraveldPercent;

  rightBox.style.transform = `translateX(${-moveAmt}px) translateY(-50px)`;
  leftbox.style.transform = `translateX(${moveAmt}px)`;
}

function moveBottle(entries) {
  const [entry] = entries;
  if (entry.isIntersecting) {
    window.addEventListener("scroll", transformElement);
  } else {
    window.removeEventListener("scroll", transformElement);
  }
}

const bottleMovement = new IntersectionObserver(moveBottle, {
  root: null,
  threshold: 0.1,
});

function bottleMoveAnimation() {
  bottleMovement.observe(awardsSection);
}

function startAnimation() {
  if (window.innerWidth <= 950) {
    window.removeEventListener("scroll", transformElement);
    bottleMovement.unobserve(awardsSection);
    rightBox.style.transform = "translate(0,0)";
    return;
  }
  rightBox.style.transform = "translate(0,-50px)";
  bottleMoveAnimation();
}

// slide show for bourbon bottles

const bourbonSlideShowSection = document.querySelector(".bourbonSlideShow");

const whiskeySection = bourbonSlideShowSection.children[0];
const ryeSection = bourbonSlideShowSection.children[1];

const slideBTNS = document.querySelectorAll(".slideBTN");
let widthChange;

function changeWidthOfSlides() {
  if (window.innerWidth >= 950) {
    ryeSection.style.width = `50%`;
    whiskeySection.style.width = `50%`;
    ryeSection.style.transform = `translate(0,0)`;
    whiskeySection.style.transform = `translate(0, -50px)`;
    return;
  } else {
    whiskeySection.style.transform = `translate(0, 0)`;
  }
  widthChange =
    bourbonSlideShowSection.parentElement.getBoundingClientRect().width;

  ryeSection.style.width = `${widthChange}px`;
  whiskeySection.style.width = `${widthChange}px`;
}
window.addEventListener("resize", changeWidthOfSlides);

function moveSlideShow(evetn) {
  const targetElement = event.target;
  const movement =
    targetElement.classList[0] === "rightSlideBTN" ? `-${widthChange}px` : "0";

  [...bourbonSlideShowSection.children].forEach((child) => {
    child.style.transform = `translateX(${movement})`;
  });
}

slideBTNS.forEach((btn) =>
  btn.addEventListener("click", moveSlideShow.bind(event))
);
changeWidthOfSlides();

function init() {
  window.addEventListener("load", function (e) {
    const href = e.currentTarget.location.href.split("/");
    const page = href[href.length - 1];

    if (page.includes("ourstory")) return;
    console.log("test");
    startAnimation();
    window.addEventListener("resize", startAnimation);
  });
}
init();
