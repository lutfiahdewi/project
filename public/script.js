//  Initialize Swiper
var screenWidth = window.innerWidth;
function makeSwiper(screenWidth) {
  if (screenWidth > 576) {
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  } else {
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  }
}
makeSwiper(screenWidth);
window.onresize = makeSwiper(window.innerWidth);

// Ubah gambar utama pada halaman produk
changeImage = function (node) {
  document.getElementById("mainpic").src = document.querySelectorAll(".thumbnail img")[node].src;

  for (let i = 0; i < document.querySelectorAll(".thumbnail img").length; i++) {
    if (i != node) {
      document.querySelectorAll(".thumbnail img")[i].classList.remove("activepic");
    } else {
      document.querySelectorAll(".thumbnail img")[node].classList.add("activepic");
    }
  }
};

//fungsi sidebar & sidebar-sm
moveBig = function () {
  for (let i = 0; i < document.querySelectorAll(".containerSeller").length; i++) {
    document.querySelectorAll(".containerSeller")[i].classList.add("container-side");
    document.querySelectorAll(".containerSeller")[i].classList.remove("container-side-sm");
  }
};
moveSmall = function () {
  for (let i = 0; i < document.querySelectorAll(".containerSeller").length; i++) {
    document.querySelectorAll(".containerSeller")[i].classList.add("container-side-sm");
    document.querySelectorAll(".containerSeller")[i].classList.remove("container-side");
  }
};

//sidebar penjual
if (document.getElementById("sidebar") || document.getElementById("sidebar-sm")) {
  if (screenWidth < 992) {
    document.getElementById("sidebar").classList.add("hidden");
    moveSmall();
  } else {
    document.getElementById("sidebar-sm").classList.add("hidden");
    moveBig();
  }
}

function sidebarNormal() {
  document.getElementById("sidebar").classList.remove("hidden");
  document.getElementById("sidebar-sm").classList.add("hidden");
  moveBig();
}
function sidebarSmall() {
  document.getElementById("sidebar").classList.add("hidden");
  document.getElementById("sidebar-sm").classList.remove("hidden");
  moveSmall();
}

// panjang halaman penjual
var bodyHeight = document.body.scrollHeight;
//var wallHeight = document.querySelector("#wall").scrollHeight;
//var footerHeight = document.querySelector("footer").scrollHeight;
var navbarHeight = document.querySelector("#mainnavbar").scrollHeight;
lengthen = function () {
  for (let i = 0; i < document.querySelectorAll(".containerSeller").length; i++) {
    if (i != document.querySelectorAll(".containerSeller").length - 1) {
      continue;
    } else {
      document.querySelectorAll(".containerSeller")[i].style.height = (window.innerHeight-navbarHeight).toString().concat("px");
    }
  }
};
if (window.innerHeight - 40 > bodyHeight) {
  lengthen();
}
 
// panjang halaman penjual ketika klik button accordion
fitLength = function (node) {
  var wrapperHeight = document.querySelector('#complaint').scrollHeight;
  var currentHeight = document.querySelector(".containerSeller").scrollHeight; // - 40 - 53 - 35
  var itemHeight = document.querySelectorAll(".accordion-item")[node - 1].scrollHeight;
  var hiddenHeight = document.querySelectorAll(".accordion-body")[node - 1].scrollHeight;
  var accordionHeight = document.querySelector(".accordion").scrollHeight;
  var bodyHeight = document.body.scrollHeight;
  /*if (window.innerHeight - 40 < document.body.scrollHeight) {
    document.querySelector(".containerSeller").style.height = document.querySelector(".containerSeller").scrollHeight.toString().concat("px");
  }*/
  console.log('item:' ,itemHeight);
  console.log('hidden:' ,hiddenHeight);
  console.log('acc: ',accordionHeight);
  console.log('cont: ',currentHeight);
  console.log('body: ',bodyHeight);


  if(itemHeight > 125){ //sblmnya > 125 => closing
    console.log('closing');
    if(bodyHeight - hiddenHeight > window.innerHeight - 40 ){
      document.querySelector(".containerSeller").style.height = (currentHeight - hiddenHeight).toString().concat("px");
      console.log('CS dpt dikurangi');
    }else{
      console.log('CS fit window, do nothing');
    }
  }else{ //opening
    console.log('expand');
    if(currentHeight < (accordionHeight + hiddenHeight)){
      document.querySelector('.containerSeller').style.height = (currentHeight + hiddenHeight).toString().concat("px");
      console.log('CS gk cukup, tambah pjg');
    }else{
      console.log('CS cukup, do nothing');
    }
  }
  /*if (currentHeight - 500 < accordionHeight) {
    document.querySelector(".containerSeller").style.height = (document.querySelector(".containerSeller").scrollHeight + 500).toString().concat("px");
  }*/

  /*if (itemHeight < 125) {
    // item expanded
    if (accordionHeight + 500 > currentHeight) {
      document.querySelector(".containerSeller").style.height = (document.querySelector(".containerSeller").scrollHeight + 500).toString().concat("px");
    }
  } else {
    if(currentHeight - 500 > bodyHeight){
      document.querySelector(".containerSeller").style.height = (document.querySelector(".containerSeller").scrollHeight - 500).toString().concat("px");
    }
  }*/
  console.log('----------------------');
};
console.log("JS run till end!");

function previewImg() {
  const sampul = document.querySelector("#foto");
  const imgPreview = document.querySelector(".img-thumbnail");
  const fileSampul = new FileReader();
  fileSampul.readAsDataURL(sampul.files[0]);
  fileSampul.onload = function (e) {
    imgPreview.src = e.target.result;
  };
}
