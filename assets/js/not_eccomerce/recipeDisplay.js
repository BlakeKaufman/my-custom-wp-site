"use strict";
function popupDisplay() {
  const popup = document.querySelectorAll(".popup");

  const recipieBtn = document.querySelectorAll(".recepieBtn");
  const drinkContent = document.querySelectorAll(".popupContent");
  const closePopupBtn = document.querySelectorAll(".closePopupBtn");

  // functions

  function initPopup() {
    popup.forEach((popup) => {
      popup.style.height = "22%";
    });
    drinkContent.forEach((drinkContent) => {
      drinkContent.style.display = "none";
    });
  }
  initPopup();

  recipieBtn.forEach((recipieBtns) => {
    recipieBtns.addEventListener("click", function (e) {
      let popupTarget = e.target.parentElement.parentElement;
      let popupContainer = e.target.parentElement;
      let closePopupBtnTarget =
        e.target.parentElement.parentElement.parentElement.children[0];
      let title = e.target.parentElement.children[0];
      let popupContent = e.target.parentElement.children[1];
      let image =
        e.target.parentElement.parentElement.parentElement.children[1];

      popupTarget.style.height = "100%";
      popupContainer.style.justifyContent = "space-between";

      image.style.opacity = "0";

      // popupContainer.style.background = ` transparent linear-gradient(216deg, #505050 0%, #000000 100%) 0%
      // 0% no-repeat padding-box`;

      popupContent.style.display = "block";

      popupContent.style.opacity = "1";

      // changing border
      title.style.borderTop = "unset";
      title.style.padding = "0 0 10px 0 ";
      title.style.borderBottom = "1px solid gold";

      e.target.style.opacity = "0";
      e.target.style.transition = "unset";
      title.style.marginTop = "60px";

      // setting overflow scroll
      if (
        popupTarget.parentElement.getBoundingClientRect().height <
        title.getBoundingClientRect().height +
          60 +
          popupContent.children[0].getBoundingClientRect().height +
          30
      ) {
        popupContainer.style.overflowY = "scroll";
        popupTarget.parentElement.style.width = "330px";
        popupTarget.parentElement.style.transition = "0.25s";
      }
      setTimeout(function () {
        closePopupBtnTarget.style.transition = "all .75s";
        closePopupBtnTarget.style.opacity = "1";
      }, 1000);
    });
  });

  closePopupBtn.forEach((closePopupBtn) => {
    closePopupBtn.addEventListener("click", function (e) {
      let popupTarget = e.target.parentElement.children[2];
      let popupContainer = e.target.parentElement.children[2].children[0];
      let title = e.target.parentElement.children[2].children[0].children[0];
      let popupContent =
        e.target.parentElement.children[2].children[0].children[1];
      let viewRecpBtn =
        e.target.parentElement.children[2].children[0].children[2];

      let img = e.target.parentElement.children[1];

      popupTarget.style.height = "22%";

      e.target.style.opacity = "0";
      e.target.style.transition = "unset";
      title.style.marginTop = "0";

      popupContent.style.opacity = "0";
      popupContent.style.transition = "all 0.75s";

      // changing border
      title.style.borderTop = "1px solid gold";
      title.style.padding = "10px 0 0 0 ";
      title.style.borderBottom = "unset";

      img.style.opacity = "1";

      // setting overflow scroll
      if (
        popupTarget.parentElement.getBoundingClientRect().height <
        title.getBoundingClientRect().height +
          60 +
          popupContent.children[0].getBoundingClientRect().height +
          30
      ) {
        popupContainer.style.overflowY = "unset";
        popupTarget.parentElement.style.width = "325px";
      }

      setTimeout(function () {
        viewRecpBtn.style.opacity = "1";
        viewRecpBtn.style.transition = "all 1s";

        popupContent.style.display = "none";

        popupContainer.style.background = "unset";
      }, 1000);
    });
  });
}
