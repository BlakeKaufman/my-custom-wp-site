const postContainer = [...document.querySelector(".UserContent").children];
const numbersContainer = document.querySelector(".numbersContainer");

const paginationBTNs = document.querySelectorAll(".paginationBTN");

const postArrary = [];
let currentPage = 0;

function addNumbers() {
  const numPages = Math.ceil(postContainer.length / 3);
  let html;
  for (let i = 1; i <= numPages; i++) {
    if (i === 1) {
      html = `
      <div class="numbers activePageNumber">${i}</div>
        `;
    } else {
      html = `
        <div class="numbers">${i}</div>`;
    }
    numbersContainer.insertAdjacentHTML("beforeend", html);
  }
}

function createPostSeperation() {
  let counter = -1;
  for (let i = 0; i < postContainer.length; i++) {
    if (i % 3 === 0 || i < 0) {
      postArrary.push([]);
      counter++;
    }
    postArrary[counter].push(postContainer[i]);
  }
}

function clearPosts() {
  postContainer.forEach((post) => {
    post.style.display = "none";
  });
}

function showCurrentPagePosts() {
  postArrary[currentPage].forEach((post) => {
    post.style.display = "flex";
  });
}

function switchCurrentNumber() {
  [...numbersContainer.children].forEach((number) => {
    number.classList.remove("activePageNumber");
  });
  numbersContainer.children[currentPage].classList.add("activePageNumber");

  //   console.log(postArrary[currentPage].length);

  if (postArrary[currentPage].length !== 1) return;
  window.scrollTo({
    top: 0,
    left: 0,
  });
  window.screenY = 0;
  //   window.screenTop = 0;
}

function switchPage(direction) {
  if (direction === "leftArrow" && currentPage > 0) {
    currentPage--;
  } else if (
    direction === "rightArrow" &&
    currentPage < postArrary.length - 1
  ) {
    currentPage++;
  }
  clearPosts();
  showCurrentPagePosts();
  switchCurrentNumber();
}

paginationBTNs.forEach((btn) => {
  btn.addEventListener("click", function (e) {
    switchPage(e.target.classList[0]);
  });
});

function switchBasedOnNumbers() {
  const numbers = [...numbersContainer.children];
  numbers.forEach((number) => {
    number.addEventListener("click", function (e) {
      currentPage = e.target.innerHTML - 1;

      clearPosts();
      showCurrentPagePosts();
      switchCurrentNumber();
    });
  });
}

function init() {
  createPostSeperation();
  addNumbers();
  clearPosts();
  showCurrentPagePosts();
  switchBasedOnNumbers();
}

init();
