"use strict";
const popupBackground = document.querySelector(".zipCodePopup");

// varisbles

// adding popup form
function seePopup() {
  popupBackground.style.display = "flex";
  document.body.style.overflow = "hidden";
}

window.addEventListener("load", seePopup);

popupBackground.addEventListener("click", function (e) {
  if (
    e.target.classList.contains("zipCodePopup") ||
    e.target.classList.contains("popupBTN")
  ) {
    popupBackground.style.display = "none";
    document.body.style.overflow = "auto";
  }
});
