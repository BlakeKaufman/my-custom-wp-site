"use strict";
window.addEventListener("load", function () {
  const desktopDropdown = document.querySelectorAll(".dropdownItem");

  const mobileDropdowns = document.querySelectorAll(".drop");

  const allDropdown = document.querySelectorAll(".dropdown-content");

  const hamBtn = document.querySelectorAll(".mobileMenuBtn");
  const mobileMenu = document.querySelector(".movileNavContainer");

  // making all dropdowns display none
  function removeDropdowns() {
    allDropdown.forEach((element) => {
      element.style.display = "none";
    });

    mobileDropdowns.forEach((element) => {
      const icon = element.parentElement.parentElement.children[1];
      icon.src =
        "<?= get_template_directory_uri()?>/assets/images/icons/plusIcon.svg";
    });
  }
  removeDropdowns();

  function showingMobileDrop(event) {
    const dropdown_content =
      event.target.parentElement.parentElement.parentElement.children[1];

    if (dropdown_content.style.display != "flex") {
      dropdown_content.style.display = "flex";
    } else {
      dropdown_content.style.display = "none";
    }
  }

  // adding dropdown functionality to mobile nav
  mobileDropdowns.forEach((drop) => {
    drop.addEventListener("click", showingMobileDrop.bind(event));
  });
  // adding dropdown functionality to nav
  desktopDropdown.forEach((dropdown) => {
    dropdown.addEventListener("mouseenter", function (e) {
      const targetElement = e.target;
      if (!targetElement.classList.contains("dropdownItem")) return;
      // targetElement.children[1].style.animation = "navDropdown linear 0.5s";
      targetElement.children[1].style.display = "flex";
      targetElement.children[0].children[1].src = `${up_icon_img}`;
    });
  });

  desktopDropdown.forEach((dropdown) => {
    dropdown.addEventListener("mouseleave", function (e) {
      const targetElement = e.target;
      if (!targetElement.classList.contains("dropdownItem")) return;

      targetElement.children[1].style.display = "none";
      targetElement.children[0].children[1].src = `${donw_icon_img}`;
    });
  });

  // mobile nav
  let displayed = false;
  hamBtn.forEach((btn) => {
    btn.addEventListener("click", function () {
      removeDropdowns();
      if (!displayed) {
        mobileMenu.style.display = "flex";
        document.body.style.overflow = "hidden";
      } else {
        mobileMenu.style.display = "none";
        document.body.style.overflow = "auto";
      }
      displayed = !displayed;
    });
  });

  // making mobile nav dissapeear on scroll
  window.addEventListener("resize", function (e) {
    const width = e.currentTarget.innerWidth;
    if (width > 850) {
      mobileMenu.style.display = "none";
      displayed = false;
      document.body.style.overflow = "auto";
    }
  });
});
