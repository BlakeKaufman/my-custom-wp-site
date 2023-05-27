"use strict";
const videoSectionContainer = document.querySelector(".allVideoContainer");

const allVideos = [
  {
    src: "/assets/videos/testVideo.mp4",
    title: "Varchas Whiskty",
    vidId: 1,
  },
  {
    src: "/assets/videos/testVideo.mp4",
    title: "Launch of Varchas",
    vidId: 2,
  },
  {
    src: "/assets/videos/testVideo.mp4",
    title: "Varchas Whiskty",
    vidId: 3,
  },
  {
    src: "/assets/videos/testVideo.mp4",
    title: "Varchas Whiskty",
    vidId: 4,
  },
];

// inserting videos
function createVideos() {
  allVideos.forEach((video) => {
    let hmtl = `
    <div class="videoContainer">
        <video
          class="video"
          src="${template_directory}${video.src}"
          muted
        ></video>

        <div class="title">${video.title}</div>
      
        <div class="lenOfVideo"></div>
        <span class="hoverPopup">Keep Hovering to Play</span>
        
    
    </div>
    `;
    videoSectionContainer.insertAdjacentHTML("beforeend", hmtl);
  });
}
createVideos();
// video circle
/* <div class="videoCircle">
<img src="./assets/images/play-circle.svg" alt="" srcset="" />
</div> */

// adding len to video
const video = document.querySelectorAll(".video");

let loadVideoTime;
loadVideoTime = setInterval(function () {
  const total = video.length;
  let count = 0;
  video.forEach((video) => {
    if (video.readyState >= 3) {
      count++;
    }
  });
  if (count == total) {
    clearInterval(loadVideoTime);
    video.forEach((video) => {
      let duration = video.duration;
      if (duration / 60 > 1 && duration / 60 < 60) {
        duration = duration / 60;
      } else if (duration / 60 > 60) {
        let hours = Math.round(duration / 60 / 60, 0);
        let min = Math.round((duration / 60) % 60, 0);

        duration = `${
          String(hours).length == 1 ? "0" + String(hours) : hours
        }.${String(min).length == 1 ? "0" + String(min) : min}`;
      }
      let lenCaption = video.parentElement.children[2];
      lenCaption.innerHTML = duration;
      lenCaption.style.opacity = "1";
    });
  }
}, 250);

let hovertimeout;
// true is enter
function changeState(e, position) {
  const videoContainer = e.target.parentElement;
  const durationTxt = e.target.parentElement.children[2];
  const hoverTxt = e.target.parentElement.children[3];
  const video = e.target.parentElement.children[0];
  const videoTitle = e.target.parentElement.children[1];
  if (position) {
    //   mouse in
    videoContainer.style.zIndex = "98";
    durationTxt.style.opacity = "0";
    durationTxt.style.transition = "0";
    hoverTxt.style.opacity = "1";
    hoverTxt.style.transition = "0";
    videoTitle.style.display = "none";
    hovertimeout = setTimeout(function () {
      video.style.borderRadius = "10px";
      hoverTxt.style.opacity = "0";
      videoContainer;
      videoContainer.style.transform = "scale(1.25)";
      videoContainer;
      videoContainer.style.transition =
        " 1s cubic-bezier(0, 0.54, 0.37, 1.03) 0s";
      videoContainer.style.boxShadow = "0 1px 10px";
      e.target.play();
    }, 1000);
  } else {
    //   mouse out
    videoContainer.style.zIndex = "2";
    durationTxt.style.opacity = "1";
    hoverTxt.style.opacity = "0";
    video.style.borderRadius = "10px";
    videoTitle.style.display = "block";
    clearTimeout(hovertimeout);
    videoContainer.style.transform = "scale(1)";
    videoContainer.style.transition = "unset";
    videoContainer.style.boxShadow = "unset";
    e.target.load();
  }
}

// // adding event listenter
// video.forEach((video) => {
//   // mouse over
//   video.addEventListener("mouseover", function (e) {
//     changeState(e, true);
//   });
//   //   mouse out
//   video.addEventListener("mouseout", function (e) {
//     changeState(e, false);
//   });
// });

if (window.innerWidth <= 850) {
  video.forEach((video) => {
    // mouse over
    video.removeEventListener("mouseover", function (e) {
      changeState(e, true);
    });
    //   mouse out
    video.removeEventListener("mouseout", function (e) {
      changeState(e, false);
    });
  });
} else {
  video.forEach((video) => {
    // mouse over
    video.addEventListener("mouseover", function (e) {
      changeState(e, true);
    });
    //   mouse out
    video.addEventListener("mouseout", function (e) {
      changeState(e, false);
    });
  });
}
