let cardsData = [
    {
        image: "./images/check.png",
        alt: "account",
        title: "د حساب مدیریت",
        lists: [
            "اډمین او کارکوونکی کولی شی د مشتریانوحسابونه جوړ تازه اویا حذف کړی",
            "هر حساب به ځانګړی حساب نمبر لري",
            "مشتریان به کولی شي خپل حساب بیالنس او حالت په حقیقي وخت کې وګوري"
        ],
        button: "حساب مدیریت"
    },
    {
        image: "./images/transfer.png",
        alt: "transaction",
        title: "د معاملو مدیریت",
        lists: [
            "یمفلویی به د مشتریانو پیسی زخیره کو ی را ویباسی او انتقال کوی یی",
            "د هری معاملې وروسته به بیالنسونه په اتومات ډول نوی کیږی",
            "د بریالی معاملی وروسته به مشتری ته د ایمیل یا مسیج له لاری خبر ورکړل شي"
        ],
        button: "معاملو مدیریت"
    },
    {
        image: "./images/loan.png",
        alt: "loan",
        title: "د پور مدیریت",
        lists: [
            "مشتریان کولی شی د پور غوښتنه وکړی",
            "کارکوونکی به د پور غوښتنی وڅېړی",
            "اډمین به پور ومنی یا رد کړي"
        ],
        button: "پور مدیریت"
    },

    {
        image: "./images/customer-satisfaction.png",
        alt: "customer",
        title: "د مشتریانو معلومات",
        lists: [
            "کارکوونکي به معلومات زیات او حذف کولی شي",
            "سیسټم به نوم، پته او ایمیل ذخیره کړي",
            "Backup به اخیستل کېږي"
        ],
        button: "مشتریانو مدیریت"
    },

    {
        image: "./images/health-check.png",
        alt: "report",
        title: "د راپور جوړونه",
        lists: [
            "اډمین به مالی راپورونه جوړ کړي",
            "معاملې او پورونه به شامل وي",
            "کارکوونکی محدود لاسرسی لري"
        ],
        button: "راپور جوړونه"
    },
    {
        image: "./images/security.png",
        alt: "security",
        title: "د امنیت مدیریت",
        lists: [
            "سیسټم به ټول فعالیتونه ثبت ساتي",
            "اډمین به logs وګوري",
            "معلومات به encrypted وي"
        ],
        button: "امنیت مدیریت"
    }
];
let section = document.querySelector(".grid_contener");

cardsData.forEach((cardData) => {
    let article = document.createElement("article");
    article.classList.add("card");
    let listItems = "";

    cardData.lists.forEach((item) => {
        listItems += `
        <li>${item}</li>
        `;
    });
    article.innerHTML= `
    
        <img src="${cardData.image}" alt="${cardData.alt}">

        <h3>${cardData.title}</h3>

        <ul>
            ${listItems}
        </ul>

        <button id="Features_Button">
            ${cardData.button}
        </button>
    `;
    section.append(article);
});

// declere section
let imagesData = {
    
    headerImage: "./images/Website-Header--1536x320.jpg.webp",
    cricketImages: [
        "./images/1 crick.webp",
        "./images/2 crock.webp",
        "./images/3 crick.png",
        "./images/4 crick.webp"
    ]
};

//section of declear  
let photoSection = document.querySelector(".section_photo_img");
let imgDiv = document.createElement("div");
imgDiv.classList.add("img_div");

let headerImage = document.createElement("img");
headerImage.src = imagesData.headerImage;
headerImage.alt = "photo";
headerImage.classList.add("photo_headder");

imgDiv.append(headerImage);

let declereSection = document.createElement("section");
declereSection.classList.add("declere");

imagesData.cricketImages.forEach((image) => {

    let cricketPhoto = document.createElement("img");
    cricketPhoto.src = image;
    cricketPhoto.alt = "cricket photo";
    cricketPhoto.classList.add("crick_photo");

    declereSection.append(cricketPhoto);

});
photoSection.append(imgDiv);
photoSection.append(declereSection);

// demo section
const videoData = {
    videoSrc:"./images/What_is_Investment_Banking_(1080p).mp4"
};

let demoVideoSection =document.querySelector(".demo_video");
let videoContainer =document.createElement("div");
videoContainer.classList.add("video_contener");

let video =document.createElement("video");
video.src = videoData.videoSrc;
video.controls = true;

videoContainer.append(video);
demoVideoSection.append(videoContainer);

// openian section 
let openiansData=[
    {
        image:"/images/darman1.png",
        alt:"customer_photo",
        Text:" د بانک منجمنټ سیسټم واقعاً ډیر مسلکي او عصري جوړ شوی دی. زموږ ټول مالي کارونه یې ډیر اسانه او منظم کړل.",
        name:"عاطف الله",
        role:" مالي څانګی مدیر ",
        rating:"⭐⭐⭐⭐⭐"
    },
     {
        image:"./images/darman2.png",
        alt:"customer_photo",
        Text:"  موږ له دی سیسټم څخه ډیر راضي یو. ډیزاین یی ساده خو ډیر ښکلی دی او کارول یی ډیر اسانه دي .",
        name:"بلال محمود",
        role:"   د عملیاتو مدیر ",
        rating:"⭐⭐⭐⭐⭐"
    },
     {
        image:"./images/darman3.jpg",
        alt:"customer_photo",
        Text:" دا سیسټم زموږ د کار کیفیت ډیر لوړ کړ. ټول معلومات په خوندي ډول ذخیره کیږي او راپورونه ډیر ژر ترلاسه کیږي. ",
        name:" عجب خان",
        role:"   ای ټي مسول ",
        rating:"⭐⭐⭐⭐⭐"
    },
     {
        image:"./images/darman4.jpg",
        alt:"customer_photo",
        Text:" تر دی مخکی مو ډیر سیستمونه کارولي، خو دا تر ټولو غوره دی. هم سرعت لري، هم امنیت، او هم ډیر منظم دی..",
        name:" محمد نسیم",
        role:"  بانک څانګې مدیر ",
        rating:"⭐⭐⭐⭐⭐"
    }
];

let openianSection=document.querySelector(".customer_opinion");
openiansData.forEach((opinion)=>{
    let card=document.createElement("div");
    card.classList.add("opinion_card");
    card.innerHTML=`
    <img
    src="${opinion.image}"
    alt="${opinion.alt}"
    class="cuostomer_photo"
    >
    <p>${opinion.Text}</p>

    <span class="customer_name">${opinion.name}</span>
    <span class="cust">${opinion.role}</span>
    <span>${opinion.rating}</span>
    
    `;
    openianSection.append(card);
});

// FAQ Qestions?
let faqData = [
    {
        question: "څنګه کولی شم حساب جوړ کړم؟",
        answer: "تاسو کولی شی فورم ډک کړی وروسته اډمین تایید کوي."
    },
    {
        question: "که پاسورډ دری ځله غلط داخل کړم څه کیږي؟",
        answer: "سیسټم به د امنیت لپاره ستاسو حساب موقتی بند کړي."
    },
    {
        question: "ایا هر حساب ځانګړی نمبر لري؟",
        answer: "هو هر حساب یو ځانګړی نمبر لری."
    },
    {
        question: "ایا کولی شم پیسی انتقال کړم؟",
        answer: "هو کارکوونکی ستاسو لپاره انتقال ترسره کوي او بیالنس په اوتومات ډول بدلیږي."
    },
    {
        question: "د پور غوښتنه څنګه کول کیږی؟",
        answer: "تاسو باید فورم ډک کړی وروسته به کارکوونکی او اډمین پریکړه وکړي."
    },
    {
        question: "ایا زما معلومات خوندي دي؟",
        answer: "هو ستا ټول معلومات د اینکریفشن له لارې خوندي ساتل کیږي."
    }
];

// section FAQ_Section
let faqSection =document.querySelector(".FAQ_Section");

let heading =document.createElement("h2");
heading.classList.add("h2_des");
heading.textContent ="ډیر پوښتل شوی سوالونه";
faqSection.append(heading);

let faqContainer =document.createElement("div");
faqContainer.classList.add("FAQ");

faqData.forEach((faq) => {

    let faqItem =document.createElement("div");
    faqItem.classList.add("faq-item");

    let question =document.createElement("h3");
    question.textContent =faq.question;
    let content=document.createElement("div");

    content.classList.add("content");
    let answer =document.createElement("p");

    answer.textContent =faq.answer;
    content.append(answer);
    faqItem.append(question);
    faqItem.append(content);
    faqContainer.append(faqItem);

});
faqSection.append(faqContainer);