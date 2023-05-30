"use Strict";
/////////////////////////////
// variables
const readableContent = document.querySelector(".UserContent");
const pageName = window.location.pathname;
/////////////////////////////
// dictionarys
const eventsContent = [
  {
    img: "/assets/images/not_ecommerce/newsPostBackground.png",
    date: "November 5, 2022",
    time: "5:30pm IST",
    title: "Bourbon Fest",
    name: "YpsilantiBourbonFest",
    type: "events",
    location: "City Hall, Bangalore",
    desc: " Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
    BTNText: "More Details",
    postID: 1,
    type: "News_Events",
  },
  {
    img: "/assets/images/not_ecommerce/newsPostBackground.png",
    date: "September 5, 2022",
    time: "5:30pm IST",
    title: "Bourbon Fest",
    name: "YpsilantiBourbonFest",
    type: "events",
    location: "City Hall, Bangalore xxxxxxx",
    desc: " The Ypsilanti bourbon fest was a huge success. Between the location and atmosphere, this event was a blast.",
    BTNText: "More Details",
    postID: 2,
    type: "News_Events",
  },
  {
    img: "/assets/images/not_ecommerce/newsPostBackground.png",
    date: "Febuary 25, 2022",
    time: "5:30pm IST",
    title: "Bourbon Fest",
    name: "YpsilantiBourbonFest",
    type: "events",
    location: "City Hall, Bangalore",
    desc: "The Ypsilanti bourbon fest was a huge success. Between the location and atmosphere, this event was a blast.",

    type: "News_Events",
    BTNText: "More Details",
    postID: 3,
    type: "News_Events",
  },
  {
    img: "/assets/images/not_ecommerce/newsPostBackground.png",
    date: "November 5, 2022",
    time: "5:30pm IST",
    title: "Bourbon Fest",
    name: "YpsilantiBourbonFest",
    type: "events",
    location: "City Hall, Bangalore",
    desc: "The Ypsilanti bourbon fest was a huge success. Between the location and atmosphere, this event was a blast.",

    type: "News_Events",
    BTNText: "More Details",
    postID: 4,
  },
];
const newsContent = [
  {
    img: "/assets/images/not_ecommerce/newsPostBackground.png",
    date: "November 5, 2022",
    title: "Total Beverage Liquor – Tasting",
    desc: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
    type: "news",
    BTNText: "Read More",
    postID: 5,
    type: "News_Events",
  },
  {
    img: "/assets/images/not_ecommerce/newsPostBackground.png",
    date: "November 5, 2022",
    title: "Total Beverage Liquor – Tasting",
    desc: "The Ypsilanti bourbon fest was a huge success. Between the location and atmosphere, this event was a blast.",
    type: "news",
    BTNText: "Read More",
    postID: 6,
    type: "News_Events",
  },
  {
    img: "/assets/images/not_ecommerce/newsPostBackground.png",
    date: "November 5, 2022",
    title: "Total Beverage Liquor – Tasting",
    desc: "The Ypsilanti bourbon fest was a huge success. Between the location and atmosphere, this event was a blast.",
    type: "news",
    BTNText: "Read More",
    postID: 7,
    type: "News_Events",
  },
  {
    img: "/assets/images/not_ecommerce/newsPostBackground.png",
    date: "November 5, 2022",
    title: "Total Beverage Liquor – Tasting",
    desc: "The Ypsilanti bourbon fest was a huge success. Between the location and atmosphere, this event was a blast.",
    type: "news",
    BTNText: "Read More",
    postID: 8,
    type: "News_Events",
  },
  {
    img: "/assets/images/not_ecommerce/newsPostBackground.png",
    date: "November 5, 2022",
    title: "Total Beverage Liquor – Tasting",
    desc: "The Ypsilanti bourbon fest was a huge success. Between the location and atmosphere, this event was a blast.",
    type: "news",
    BTNText: "Read More",
    postID: 9,
    type: "News_Events",
  },
];

/////////////////////////////
// functions
function addPostsToPage(postDictonary) {
  let dictionary;
  if (postDictonary == "eventsContent") {
    dictionary = eventsContent;
  } else {
    dictionary = newsContent;
  }

  dictionary.forEach((post) => {
    let html = `
      
         <div class="post">
          <div class="imgContainer">
            <img src="${template_directory}${post.img}" alt="" />
          </div>
          <div class="textContainer">
            <span class="title">${post.title}</span>
            <div class="dateInfo">
            `;
    if (postDictonary == "eventsContent") {
      html += `
              <div class="dateContainer">
                <div class="img"></div>
                <span class="date">${post.date}</span>
              </div>
              <div class="dateContainer">
                <div class="img"></div>
                <span class="time">${post.time}</span>
              </div>
              <div class="dateContainer">
                <div class="img"></div>
                <span class="location">${post.location}</span>
              </div>
              `;
    } else {
      html += `
              <div class="dateContainer">
                <div class="img"></div>
                <span class="date">${post.date}</span>
              </div>
              `;
    }
    html += `
            </div>
            <span class="description">

            `;
    let Pdesc = post.desc;
    const PdescLen = Pdesc.length;
    if (PdescLen >= 175) {
      PdescNew = Pdesc.slice(0, 173) + "...";

      html += `
     ${PdescNew}
     `;
    } else {
      html += `
      ${post.desc}
      `;
    }

    html += `</span>
            <div class="readMoreBtn">
            <a href="${post_link}/?id=${post.postID}&type=${post.type}">${post.BTNText}
            </a>
            <img src="${template_directory}/assets/images/icons/arrow-right-short.svg" alt="" />
            
          </div>
        </div>
          `;
    readableContent.insertAdjacentHTML("beforeend", html);
  });
}
/////////////////////////////
// calling functions
addPostsToPage(
  `${pageName.slice(pageName.indexOf("/") + 1, pageName.indexOf("."))}Content`
);
