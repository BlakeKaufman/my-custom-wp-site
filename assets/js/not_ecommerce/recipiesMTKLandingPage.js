"use strict";

let viewAllRecBTN;
const recipeSection = document.querySelector(".recipie");

const othersContainer = document.querySelector(".othersContainer");

const postId = decodeURI(location.search.slice(1));

console.log(postId);

const fullData = [];
ryeContent.forEach((element) => {
  fullData.push(element);
});
bourbonContent.forEach((element) => {
  fullData.push(element);
});

console.log(fullData);

function buttonTarget() {
  let found = false;
  for (let i = 0; i < bourbonContent.length; i++) {
    if (bourbonContent[i].title == postId) {
      found = true;
    }
  }
  if (found) {
    return true;
  } else {
    return false;
  }
}

function getDrink(drink) {
  console.log(drink);
  for (let i = 0; i < fullData.length; i++) {
    if (fullData[i].title == drink) {
      return fullData[i];
    }
  }
  //   fullData.forEach((element) => {
  //     if (element.title == drink) {
  //       console.log(element);
  //       return element;
  //     }
  //   });
}

function loadDrink(post) {
  const drinkDic = getDrink(post);
  console.log(drinkDic);
  let html = `

      <div class="container">
        <div class="img">
          <img src="${template_directory}/assets/images/not_ecommerce/${drinkDic.img}" alt="" />
        </div>
        <div class="content">
          <div class="topInformation">
            <span class="bourbon_type">Straight ${drinkDic.drinkType} Whiskey</span>
            <span class="header">${drinkDic.title}</span>
            <span class="viewAllRecBTN">Back to recipies</span>
          </div>
          <div class="listContainer">
            <div class="list">
              <ul class="">
              `;

  drinkDic.recipe.forEach((recipie) => {
    html += ` <li>${recipie}</li>`;
    console.log(recipie);
  });

  html += ` </ul>
            </div>
          </div>

          <span class="next_recipie_BTN"
            >View next recipe
            <img src="${template_directory}/assets/images/icons/arrow-right-short.svg" alt="" srcset=""
          /></span>
        </div>
      </div>`;

  console.log(html);
  recipeSection.insertAdjacentHTML("beforeend", html);
}
loadDrink(postId);
viewAllRecBTN = document.querySelector(".viewAllRecBTN");

viewAllRecBTN.addEventListener("click", function (e) {
  if (buttonTarget()) {
    // console.log("bourbon");
    // live server
    // window.open("http://127.0.0.1:5500/recipies.html", "_self");
    // real
    // window.open("https://mibourbontest.netlify.app/recipies.html", "_self");

    // wp
    window.open(`${template_directory}/recipies-template.php`);
  } else {
    // console.log("rye");
    // live server
    // window.open("http://127.0.0.1:5500/recipies.html", "_self");
    // real
    // window.open("https://mibourbontest.netlify.app/recipies.html", "_self");

    // wp
    window.open(`${template_directory}/recipies-template.php`);
  }
});

// populating others container

function moreRecipies() {}
