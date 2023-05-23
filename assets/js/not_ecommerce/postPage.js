//////////////////////////////
// variables
const postId = location.search.slice(1);
const prevURL = document.referrer;
const postContentContainer = document.querySelector(".contentSide");
const backBTN = document.querySelector(".backBTN");
const postInformation = {};

function getDataFromURL() {
  const urlParts = postId.split("&");
  urlParts.forEach((part) => {
    const splitPart = part.split("=");
    postInformation[splitPart[0]] = splitPart[1];
  });
}

// adding colors to nav based on where you came from
// does't work since people will be directed to page not from home page
// have to base it off of post clicked.

function changeDisplay(postName) {
  //   weeds out other pages to stop error
  let newsOrEvent;
  for (let i = 0; i < allPosts.length; i++) {
    if (allPosts[i].name == postName) {
      newsOrEvent = allPosts[i].type;
      break;
    }
  }
  if (newsOrEvent == "news" || newsOrEvent == "events") {
    //   getts all of the items that need to change
    allChangingBtns = document.querySelectorAll(`.${newsOrEvent}`);
    // changes the items
    allChangingBtns.forEach((button) => {
      button.classList.add("activePage");
    });
    // adding back link
    backBTN.addEventListener("click", function () {
      window.open(`${newsOrEvent}.html`, "_self");
    });
  }
}
function addingContent() {
  let post;
  for (let i = 0; i < allPosts.length; i++) {
    console.log(allPosts[i].postID, Number(postInformation.id));
    if (
      allPosts[i].postID == Number(postInformation.id) &&
      allPosts[i].type == postInformation.type
    ) {
      post = allPosts[i];
      break;
    }
  }

  let html = `
        <div class="content">
              <span class="title">${post.title}</span>
              <div class="dateInformation">
                <span class="date">${post.date}</span>
                <span class="host">By Varchas Team</span>
                <span class="comments">Comments: 0</span>
              </div>
              <div class="imgBanner">
                <img
                  src="${post.img}"
                  alt=""
                />
              </div>
              <span class="description"
                >${post.desc}</span
              >
          </div>
    `;

  postContentContainer.insertAdjacentHTML("afterbegin", html);
}

function loadOtherPosts() {}
getDataFromURL();
addingContent();

// for local host
// changeDisplay(
//   prevURL.slice(prevURL.indexOf("/", 7) + 1, prevURL.indexOf(".html"))
// );

// for actual
// changeDisplay(
//   prevURL.slice(prevURL.indexOf("/", 12) + 1, prevURL.indexOf(".html"))
// );
// changeDisplay(postId);
