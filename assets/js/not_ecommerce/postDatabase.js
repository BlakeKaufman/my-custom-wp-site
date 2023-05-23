"use strict";
const allPosts = [
  {
    img: "./assets/images/newsPostBackground/cheers.png",
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
    img: "./assets/images/newsPostBackground/group.png",
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
    img: "./assets/images/newsPostBackground/group.png",
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
    img: "./assets/images/newsPostBackground/group.png",
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
  {
    img: "./assets/images/newsPostBackground/group.png",
    date: "November 5, 2022",
    title: "Total Beverage Liquor – Tasting",
    desc: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
    type: "news",
    BTNText: "Read More",
    postID: 5,
    type: "News_Events",
  },
  {
    img: "./assets/images/newsPostBackground/group.png",
    date: "November 5, 2022",
    title: "Total Beverage Liquor – Tasting",
    desc: "The Ypsilanti bourbon fest was a huge success. Between the location and atmosphere, this event was a blast.",
    type: "news",
    BTNText: "Read More",
    postID: 6,
    type: "News_Events",
  },
  {
    img: "./assets/images/newsPostBackground/group.png",
    date: "November 5, 2022",
    title: "Total Beverage Liquor – Tasting",
    desc: "The Ypsilanti bourbon fest was a huge success. Between the location and atmosphere, this event was a blast.",
    type: "news",
    BTNText: "Read More",
    postID: 7,
    type: "News_Events",
  },
  {
    img: "./assets/images/newsPostBackground/group.png",
    date: "November 5, 2022",
    title: "Total Beverage Liquor – Tasting",
    desc: "The Ypsilanti bourbon fest was a huge success. Between the location and atmosphere, this event was a blast.",
    type: "news",
    BTNText: "Read More",
    postID: 8,
    type: "News_Events",
  },
  {
    img: "./assets/images/newsPostBackground/group.png",
    date: "November 5, 2022",
    title: "Total Beverage Liquor – Tasting",
    desc: "The Ypsilanti bourbon fest was a huge success. Between the location and atmosphere, this event was a blast.",
    type: "news",
    BTNText: "Read More",
    postID: 9,
    type: "News_Events",
  },
  {
    img: "./assets/images/sherryCocktailsBLOGimg/NoPath - Copy@2x.png",
    date: "Jan 19, 2023",
    title: "Sherry Cocktails – Lower Your ABV",
    desc: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
    postID: 1,
    type: "blog",
  },
  {
    img: "./assets/images/BlackFridayBLOGimg/NoPath - Copy (2)@2x.png",
    date: "Jan 10, 2023",
    title: "Black Friday Whiskey 2022",
    desc: "It’s Black Friday, yet again. The strange, American-exported shopping holiday, packed with deals and occasional scrums in department stores. We’re not fans of fighting over whisky, so have again – for a 6th year –…",
    postID: 2,
    type: "blog",
  },
  {
    img: "./assets/images/Whiskey101Blogimg/NoPath - Copy (3)@2x.png",
    date: "Dec 25, 2022",
    title: "Whiskey 101 – Part One: A Begginer's Guide",
    desc: "The world of whisky is wide and can be confusing. Here’s a short guide to help you interpret what’s on a label and make sure you are picking up the right bottle.",
    postID: 3,
    type: "blog",
  },
  {
    img: "./assets/images/sherryCocktailsBLOGimg/NoPath - Copy@2x.png",
    date: "Jan 19, 2023",
    title: "Sherry Cocktails – Lower Your ABV",
    desc: "Dropping the spirits from your Friday night cocktail, doesn’t have to mean compromising on flavour. Fortified wines deliver complexity in the same way spirits do without the alcoholic heft. Sherry in particular, with its flavour",
    postID: 4,
    type: "blog",
  },
  {
    img: "./assets/images/BlackFridayBLOGimg/NoPath - Copy (2)@2x.png",
    date: "Jan 10, 2023",
    title: "Black Friday Whiskey 2022",
    desc: "It’s Black Friday, yet again. The strange, American-exported shopping holiday, packed with deals and occasional scrums in department stores. We’re not fans of fighting over whisky, so have again – for a 6th year –…",
    postID: 5,
    type: "blog",
  },
  {
    img: "./assets/images/Whiskey101Blogimg/NoPath - Copy (3)@2x.png",
    date: "Dec 25, 2022",
    title: "Whiskey 101 – Part One: A Begginer's Guide",
    desc: "The world of whisky is wide and can be confusing. Here’s a short guide to help you interpret what’s on a label and make sure you are picking up the right bottle.",
    postID: 6,
    type: "blog",
  },
];
