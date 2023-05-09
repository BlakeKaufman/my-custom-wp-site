"use strict";
/////////////////////////////////////////////
// variables
const nextPageBtn = document.querySelector(".discover");
const navContainer = document.querySelector(".navigationContainer");
const nav = document.querySelector(".nav");

// // section
// const awardWiskey = document.querySelector(".awardWiskey");
// const ourStory = document.querySelector(".ourStoryContainer");

/////////////////////////////////////////////
// functions

// function scrollUp(entries, obsurver) {
//   const [entry] = entries;
//   if (entry.isIntersecting && entry.boundingClientRect.y > 0) {
//     entry.target.style.transform = "translateY(-100px)";
//   }
// }
/////////////////////////////////////////////
// event listenrs
// nav functionality
navContainer.addEventListener("click", function (e) {
  const targetElement = e.target;
  if (!targetElement.classList.contains("navItem")) return;
  if (e.target.href === undefined) return;
  const index = e.target.href.indexOf("#");
  if (index != -1) {
    e.preventDefault();

    const targetId = e.target.href.slice(index + 1);
    const targetPage = document
      .getElementById(`${targetId}`)
      .getBoundingClientRect();

    window.scrollTo({
      top: targetPage.top + window.pageYOffset,
      left: targetPage.left,
      behavior: "smooth",
    });
  }
});

// next page btn
nextPageBtn.addEventListener("click", function (e) {
  if (!e.target.classList.contains("clickable")) return;
  e.preventDefault();
  const location = document
    .getElementById("awardWiskey")
    .getBoundingClientRect();

  const stopPos = window.innerWidth <= 950 ? 90 : 0;

  window.scrollTo({
    top: location.top + window.pageYOffset - stopPos,
    left: location.left,
    behavior: "smooth",
  });
});

// // adding animation
// making video play only when you are on it
// makign varchas fade out
function playVideoAndNav(entries) {
  const [entry] = entries;
  if (entry.isIntersecting) {
    video.play();
    nav.style.display = "none";
    window.addEventListener("scroll", fadeVarchasAnimation);
  } else {
    nav.style.display = "flex";
    video.pause();
    window.removeEventListener("scroll", fadeVarchasAnimation);
  }
}

const varchasLogo = document.querySelector(".blurBackground");

const homeSection = document.querySelector(".home");
const video = document.querySelector(".backgroundVideo");

const playVideoOBS = new IntersectionObserver(playVideoAndNav, {
  root: null,
  threshold: 0.1,
  rootMargin: "26px",
});

playVideoOBS.observe(homeSection);

// fading out varchas

// scroll fade animation
const element = document.querySelector(".blurBackground");
const stopPos = document.querySelector(".home").getBoundingClientRect().bottom;

function fadeVarchasAnimation() {
  const elapsed = (stopPos - window.pageYOffset) / stopPos;
  // const offset = 1 - (stopPos - 50) / stopPos;
  if (window.pageYOffset < 50) {
    element.style.opacity = `1`;
    return;
  }
  if (elapsed < 0) {
    element.style.opacity = `0`;
    element.style.display = "none";
    return;
  }

  // console.log(offset);
  element.style.display = "flex";
  element.style.opacity = `${elapsed}`;
}

window.addEventListener("load", function () {
  if (window.pageYOffset > homeSection.getBoundingClientRect().height) {
    element.style.opacity = `0`;
    element.style.display = "none";
  }
});

popupDisplay();
