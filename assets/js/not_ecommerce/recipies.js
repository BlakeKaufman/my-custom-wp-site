"use strict";

// slider variables
const RecipieOptions = document.querySelectorAll(".optionContainer");
const options = document.querySelectorAll(".optionContainer");

console.log(template_directory);

// changing content variables
const bourbonContent = [
  {
    title: 'The "V"',
    recipe: [
      "1.5 ounces of Varchas in a rocks glass",
      " With or without ice, your choice",
    ],
    img: "V.webp",
    drinkType: "bourbon",
  },
  {
    title: 'The "Vule"',
    recipe: [
      "2 ounces of Varchas Bourbon",
      "½ ounce lime juice or ½ of a lime",
      "Ginger beer to top",
      "Garnish with slice of lime or mint sprig",
      "Pour bourbon in copper mug, add lime juice and ice to fill. Add in ginger beer to top of mug. Stir and garnish. (Our take on the Kentucky Mule)",
    ],
    img: "vule.webp",
    drinkType: "bourbon",
  },
  {
    title: 'The "LemonVader"',
    recipe: [
      "1.5 ounces of Varchas Bourbon",
      "4 ounces of lemonade",
      " 1 slice of lemon to garnish",
      " Pour bourbon in rocks glass, add lemonade and ice to fill glass. Stir and garnish.",
    ],
    img: "lemonvader.webp",
    drinkType: "bourbon",
  },
  {
    title: 'The "Old Vashioned"',
    recipe: [
      "1.5 ounces of Varchas Bourbon",
      "2 spoons of simple syrup",
      "3 dashes of bitters 1 or 2 Luxardo Maraschino Cherries (your choice)",
      "Add simple syrup, bitters and cherries to rocks glass and muddle.",
      "Add in Varchas Bourbon and stir. Add ice to your liking. A Varchas Old Fashioned!",
    ],
    img: "volfashioned_new.png",
    drinkType: "bourbon",
  },
  {
    title: 'The "Perfect Mint Vulep"',
    recipe: [
      "2 ounces of Varchas Bourbon",
      "1.5 tsp of sugar (or 1.5 packets)",
      "Fresh mint leaves (3-5 + sprig)",
      "Water",
      "Place mint leaves, sugar, and a splash of water in a tall glass and muddle. Add bourbon and fill glass with ice. Top with water, stir and garnish with mint sprig. (Our take on the Mint Julep)",
    ],
    img: "vulep.webp",
    drinkType: "bourbon",
  },
  {
    title: 'The "Vojito"',
    recipe: [
      "1 1/2 ounces of Varchas Bourbon",
      " 1 oz Fresh lime juice",
      " 2 teaspoons Sugar",
      " 6 leaves of Mint",
      "Soda Water",
      "Mint sprigs muddled with sugar and lime juice. Bourbon added and topped with soda water. Garnished with sprig of mint leaves. Served with a straw. A Varchas style Mojito!",
    ],
    img: "vojito_new.png",
    drinkType: "bourbon",
  },
  {
    title: "Varchas Bourbon Smash",
    recipe: [
      "2 oz Varchas Bourbon Whiskey",
      "1/4 lemon, sliced into 2 wedges",
      "4 large mint leaves",
      "1 oz (2 tablespoons) simple syrup",
      "Soda Water",
      "Place the lemon wedges and mint leaves in a cocktail shaker. Muddle to extract flavor.  Add the bourbon and syrup and fill the shaker with ice. Add a splash of soda water. Shake until cold and strain into an Old-Fashioned glass. Serve with crushed ice.",
    ],
    img: "smash.webp",
    drinkType: "bourbon",
  },
  {
    title: "Varchas Gold Rush",
    recipe: [
      "2 oz Varchas Bourbon Whiskey",
      "1 oz (2 tablespoons) fresh lemon juice",
      "¾ ounce (1 ½ tablespoons) honey syrup",
      "lemon wedge",
      "Add the bourbon, lemon juice, and honey syrup to a cocktail shaker. Fill with a handful of ice and shake until very cold. Strain the drink into a lowball or Old-Fashioned glass. Serve with ice and a lemon wedge.",
    ],
    img: "gold_rush.webp",
    drinkType: "bourbon",
  },
  {
    title: "Varchas Bourbon Blackberry Smash",
    recipe: [
      "1/4 lime, cut into 2 wedges",
      "8 blackberries",
      "5 large mint leaves",
      "2 oz Varchas Bourbon Whiskey",
      "½ oz (1 tablespoon) or simple syrup",
      "Soda Water",
      "Place the lime, berries, and mint leaves in cocktail shaker. Muddle to extract flavor. Add the bourbon, syrup and 4 ice cubes. Shake until cold, then pour everything into a tall glass. Add a splash of soda water. Serve with crushed ice.",
    ],
    img: "BB_smash.webp",
    drinkType: "bourbon",
  },
  {
    title: "Varchas Vanilla",
    recipe: [
      "1 1/2 oz Varchas Bourbon Whiskey",
      "1/2 oz Vanilla liqueur",
      "1/2 oz tamarind syrup",
      "1 oz club soda",
      "3 Maraschino cherries, speared",
      "Add all ingredients except the club soda into a cocktail shaker with ice and shake until well-chilled.  Strain into a rocks glass filled with fresh ice.  Top with club soda.  Garnish with three brandied cherries on a pick.",
    ],
    img: "vanilla.webp",
    drinkType: "bourbon",
  },
  {
    title: "Varchas Hot Apple Surprise",
    recipe: [
      "1 1/2 oz Varchas Bourbon",
      "6 oz of hot Apple Cider",
      "Cinnamon Sticks",
      "Pour 1.5 oz of Varchas Bourbon in mug, add in 5-6 oz of hot apple cider. Add cinnamon sticks to flavor and garnish.",
      "For an added taste, rim the glass with sugar & nutmeg mix.",
    ],
    img: "vanilla.webp",
    drinkType: "bourbon",
  },
];

// //////////////////////////
// //////////////////////////
// //////////////////////////
// //////////////////////////
// //////////////////////////
const ryeContent = [
  {
    title: "Neat / Rocks",
    recipe: [
      "1.5 ounces of Varchas Rye in a rocks glass",
      "With or without ice, your choice",
    ],
    img: "neat_rocks.webp",
    drinkType: "rye",
  },
  {
    title: "Whiskey Sour",
    recipe: [
      "1.5 ounces of Varchas Rye",
      "4 ounces of sour mix",
      "1 ounce of soda",
      "Cherry garnish",
      "Combine Rye, sour mix and soda with ice in shaker, shake and pour in rocks glass, garnish with cherry.",
    ],
    img: "whiskey_sour.webp",
    drinkType: "rye",
  },
  {
    title: 'The "V & G"',
    recipe: [
      "1.5 ounces of Varchas Rye",
      "4 ounces of Ginger Ale",
      "Lemon twist to garnish",
      "Cherry garnish",
      "Fill rocks glass with ice, pour in Varchas Rye, fill with Ginger Ale, stir gently, garnish with lemon twist.",
    ],
    img: "v_n_g.webp",
    drinkType: "rye",
  },
  {
    title: 'Michigan "Vule"',
    recipe: [
      "1.5 ounces of Varchas Rye",
      ".5 ounces of lime juice (or half of a lime squeezed)",
      "6 ounces of ginger beer",
      "Lime wedge garnish",
      "Fill copper mug with ice, pour in Varchas Rye, add lime juice and fill with ginger beer.  Stir gently and add lime wedge garnish.",
    ],
    img: "mi_vule.webp",
    drinkType: "rye",
  },
  {
    title: 'Varchas Rye "Vanhattan"',
    recipe: [
      "Our take on the Manhattan.",
      "1.5 ounces of Varchas Rye",
      ".5 ounces of sweet vermouth",
      "3 dashes of aromatic bitters",
      "2 Luxardo Cherries (or others)",
      "Fill shaker with ice, pour in Varchas Rye, add sweet vermouth and bitters.  Stir, strain into rocks glass and add cherries.",
    ],
    img: "vanhatten.webp",
    drinkType: "rye",
  },
  {
    title: "Rip Van Varchas",
    recipe: [
      "1.5 oz. Varchas Rye Whiskey",
      "3 oz. pineapple juice",
      "1 oz. cranberry juice",
      "Slice of pineapple for garnish",
      "Combine Varchas Rye, pineapple juice, and cranberry in a shaker.  Shake well.  Strain into a rocks glass filled with ice and add garnish.",
    ],
    img: "rip_van.webp",
    drinkType: "rye",
  },
  {
    title: "Varchas Citrus Splash",
    recipe: [
      "1 oz. Varchas Rye",
      ".5 oz. dry vermouth",
      ".5 oz. fresh lemon juice or 1/4 lemon squeezed",
      ".25 oz. grenadine",
      "1 dash orange bitters",
      "Lemon twist",
      "Combine ingredients in a shaker with ice. Shake well. Strain into a chilled Rocks glass",
    ],
    img: "citrus_splash.webp",
    drinkType: "rye",
  },
  {
    title: "Varchas Whip",
    recipe: [
      "2 ½ ounces Varchas Rye whiskey",
      "¾ ounce fresh lemon juice or ¼ lemon squeezed",
      "¾ ounce fresh orange juice",
      "1 teaspoon grenadine",
      "For the garnish: Orange wedge, cocktail cherry or Luxardo chery",
      "Lemon twist",
      "Place the rye whiskey, lemon juice, orange juice, and grenadine in a cocktail shaker. Add 2 handfuls of ice and shake until cold.",
      "Strain the drink into a cocktail or martini glass. Garnish with an orange wedge and cocktail cherry if desired.",
    ],
    img: "gold_rush.webp",
    drinkType: "rye",
  },
  {
    title: "Varchas Sour (New York Style)",
    recipe: [
      "2 oz Varchas Rye Whiskey",
      "1 ounce lemon juice, freshly squeezed",
      "3/4 ounce <a class='recipeLink' href='https://www.liquor.com/recipes/simple-syrup/'>simple syrup</a>",
      "1 egg white (optional)",
      "1/2 oz red wine",
      "Add the whiskey, lemon juice, simple syrup and egg white (optional) into a shaker with ice and shake hard until well-chilled.  Strain into rocks glass over fresh ice.  Slowly pour the red wine over the back of a bar spoon so that the wine floats on top of the drink.",
    ],
    img: "BB_smash.webp",
    drinkType: "rye",
  },
];
const sigRec = document.querySelector(".signitureRecContainer");
// //////////////////////////////////////////////////////
// // helper function

function removeStylesFromOptions() {
  options.forEach((option) => {
    option.children[0].classList.remove("activeTogle");
  });
}
// //////////////////////////////////////////////////////
function changeContent(option) {
  option.forEach((recipe) => {
    // console.log(recipe);
    let recipeList = "";
    recipe.recipe.forEach((recipe) => {
      recipeList += `<li> ${recipe} </li>`;
    });
    let html = `
        <div class="recepeContainer">
          <img class="closePopupBtn" src="${template_directory}/assets/images/icons/xIcon.svg" alt="" />
          <div class="imgContainer">
            <img src="${template_directory}/assets/images/not_ecommerce/${recipe.img}" alt="" srcset="" />
          </div>
          <div class="popup">
            <div class="popupContainer">
              <div class="title">${recipe.title}</div>
              <div class="popupContent">

                <ul>
                ${recipeList}
              </ul>
            </div>
            <div class="recepieBtn">View Recipe</div>
          </div>
        </div>
      </div>
      `;
    html = `
        <div class="recepeContainer">
          <div class="imgContainer">
            <img src="${template_directory}/assets/images/not_ecommerce/${recipe.img}" alt="" srcset="" />
          </div>
          <span class="title">${recipe.title}</span>
          <a href='${full_recipie_link}?${recipe.title}'class="recepieBtn">View Recipe</a>
          </div>
        </div>
      `;
    sigRec.insertAdjacentHTML("beforeend", html);
  });
}
// //////////////////////////////////////////////////////

function declareVariables() {
  popup = document.querySelectorAll(".popup");
  recipieBtn = document.querySelectorAll(".recepieBtn");
  drinkContent = document.querySelectorAll(".popupContent");
  closePopupBtn = document.querySelectorAll(".closePopupBtn");
}
// //////////////////////////////////////////////////////
// //////////////////////////////////////////////////////
changeContent(bourbonContent);
// popup animation variables
let popup = document.querySelectorAll(".popup");

let recipieBtn = document.querySelectorAll(".recepieBtn");
let drinkContent = document.querySelectorAll(".popupContent");
let closePopupBtn = document.querySelectorAll(".closePopupBtn");
// popupDisplay();
// //////////////////////////////////////////////////////
// changin content
// true = left
let side = false;
let TTT;
let ZZZ;

RecipieOptions.forEach((option) => {
  option.addEventListener("click", function (e) {
    if (e.target.classList.contains("activeTogle")) return;
    sigRec.style.opacity = "0";
    sigRec.style.transition = "0.75s";
    // changing selector
    removeStylesFromOptions();
    if (side == true) {
      TTT = 0;
      ZZZ = bourbonContent;
    } else {
      TTT = 1;
      ZZZ = ryeContent;
    }
    options[TTT].children[0].classList.add("activeTogle");

    // changing content throgh opacity

    setTimeout(function () {
      sigRec.style.opacity = "1";
      sigRec.innerHTML = "";

      changeContent(ZZZ);
      declareVariables();
      // popupDisplay();

      side = !side;
    }, 750);
  });
});

// //////////////////////////////////////////////////////
// popup animation

// functions
// adding popup display fucntionality to home page
// popupDisplay();
// preloading images
var images = [];
ryeContent.forEach((content) => {
  images.push(content.img);
});

function preload() {
  for (var i = 0; i < images.length; i++) {
    const n_image = new Image();
    n_image.src = `${template_directory}/assets/images/not_ecommerce/${images[i]}`;
  }
}
preload();
