"use strict";

const contactBtn = document.querySelector(".distillaryBTN");

const closePopUpBtns = document.querySelectorAll(".closePopupBtn");

const popdown = document.querySelector(".Popdown");

contactBtn.addEventListener("click", function (e) {
  document.body.style.overflow = "hidden";
  const formType = e.target.classList[1];
  const formSelector = document.querySelector(
    `.select-${e.target.classList[1]}`
  );

  formSelector.style.opacity = "1";
  formSelector.style.zIndex = "1";
  setTimeout(function () {
    document.querySelector(`.content-${formType}`).style.top = "max(15%, 80px)";
  }, 10);
});

// closing popdown

popdown.addEventListener("click", function (e) {
  if (e.target.classList.contains("distillaryPopdown")) {
    const targetElement = document.querySelector(`.${e.target.classList[1]}`);
    document.body.style.overflow = "auto";
    targetElement.style.opacity = "0";
    targetElement.style.zIndex = "-1";
    document.querySelector(
      `.${e.target.classList[2].replace("select", "content")}`
    ).style.top = "-50%";
  }
});

// closePopUpBtns.forEach((button) => {
//   button.addEventListener("click", function (e) {
//     const formSelector = document.querySelector(
//       `.select-${e.target.classList[1]}`
//     );
//     document.body.style.overflow = "auto";
//     formSelector.style.opacity = "0";
//     formSelector.style.zIndex = "-1";

//     document.querySelector(`.content-${e.target.classList[1]}`).style.top =
//       "-50%";
//   });
// });
