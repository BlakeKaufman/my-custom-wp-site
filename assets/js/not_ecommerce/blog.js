"use strict";

// Variables
const blogContentContainer = document.querySelector(
  ".contentOverflowContainer"
);

// dictionary

const postContent = [
  {
    img: "/assets/images/not_ecommerce/cocktailsBlogImg.png",
    date: "Jan 19, 2023",
    title: "Sherry Cocktails – Lower Your ABV",
    desc: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
    postID: 1,
    type: "blog",
  },
  {
    img: "/assets/images/not_ecommerce/colorfulBottles.png",
    date: "Jan 10, 2023",
    title: "Black Friday Whiskey 2022",
    desc: "It’s Black Friday, yet again. The strange, American-exported shopping holiday, packed with deals and occasional scrums in department stores. We’re not fans of fighting over whisky, so have again – for a 6th year –…",
    postID: 2,
    type: "blog",
  },
  {
    img: "/assets/images/not_ecommerce/whiskeyBlogImg.png",
    date: "Dec 25, 2022",
    title: "Whiskey 101 – Part One: A Begginer's Guide",
    desc: "The world of whisky is wide and can be confusing. Here’s a short guide to help you interpret what’s on a label and make sure you are picking up the right bottle.",
    postID: 3,
    type: "blog",
  },
  {
    img: "/assets/images/not_ecommerce/cocktailsBlogImg.png",
    date: "Jan 19, 2023",
    title: "Sherry Cocktails – Lower Your ABV",
    desc: "Dropping the spirits from your Friday night cocktail, doesn’t have to mean compromising on flavour. Fortified wines deliver complexity in the same way spirits do without the alcoholic heft. Sherry in particular, with its flavour",
    postID: 4,
    type: "blog",
  },
  {
    img: "/assets/images/not_ecommerce/colorfulBottles.png",
    date: "Jan 10, 2023",
    title: "Black Friday Whiskey 2022",
    desc: "It’s Black Friday, yet again. The strange, American-exported shopping holiday, packed with deals and occasional scrums in department stores. We’re not fans of fighting over whisky, so have again – for a 6th year –…",
    postID: 5,
    type: "blog",
  },
  {
    img: "/assets/images/not_ecommerce/whiskeyBlogImg.png",
    date: "Dec 25, 2022",
    title: "Whiskey 101 – Part One: A Begginer's Guide",
    desc: "The world of whisky is wide and can be confusing. Here’s a short guide to help you interpret what’s on a label and make sure you are picking up the right bottle.",
    postID: 6,
    type: "blog",
  },
];

// function

function loadContent() {
  blogContentContainer.innerHTML = "";
  let index = 0;
  // while (index < postContent.length) {
  //   let hmtl = `
  //   <div class="${index == postContent.length - 1 ? "post last" : "post"}">
  //       <div class="img"></div>
  //       <div class="text">
  //           <div class="date">Jul 20, 2022</div>
  //           <div class="desc">The Iconic Mint Julep</div>
  //       </div>
  //   </div>`;

  postContent.forEach((post) => {
    console.log(post);
    let html = `
        <div class="post">
          <div class="imgContainer">
            <img
              src="${template_directory}${post.img}"
              alt=""
              srcset=""
            />
            <span class="date">${post.date}</span>
          </div>
          <div class="text">
          `;

    if (post.title.length < 33) {
      html += `
            <span class="title title_mb_auto">${post.title}</span>
            `;
    } else {
      html += `
            <span class="title">${post.title}</span>
            `;
    }

    if (post.desc.length > 250) {
      html += `
           
      <span class="desc"
        >${post.desc.slice(0, 250)}...</span
      >
      `;
    } else {
      html += `
           
            <span class="desc"
              >${post.desc}</span
            >
            `;
    }

    html += `
    <a href="${post_link}?id=${post.postID}&type=${post.type}">
            <span class="postBTN">Continue reading »</span></a>
          </div>
        </div>
              `;
    blogContentContainer.insertAdjacentHTML("beforeend", html);
  });

  // }
}

loadContent();
function addMarginToFooter() {
  const mainBlogHeight = document
    .querySelector(".mainBlog")
    .getBoundingClientRect().height;
  const footerHeight = document
    .querySelector(".footer")
    .getBoundingClientRect().height;
  let marginTop = window.innerHeight - mainBlogHeight - footerHeight;
  if (marginTop <= 0) marginTop = "10px";

  document.querySelector(".footer").style.marginTop = `${marginTop}px`;
}
addMarginToFooter();
window.addEventListener("resize", addMarginToFooter);
