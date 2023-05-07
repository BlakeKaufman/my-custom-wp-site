const catagoriesSelector = document.querySelector(".catagory_selector");
const catagoryContainer = document.querySelector(".catagories");
console.log(catagoriesSelector);

function displayOptions(event) {
  console.log("test");
  if (catagoryContainer.style.display != "flex") {
    catagoryContainer.style.display = "flex";
    setTimeout(() => {
      catagoryContainer.style.height = "465px";
    }, 1);
  } else {
    catagoryContainer.style.height = "0";
    setTimeout(() => {
      catagoryContainer.style.display = "none";
    }, 500);
  }
}

catagoriesSelector.addEventListener("click", displayOptions.bind(event));
