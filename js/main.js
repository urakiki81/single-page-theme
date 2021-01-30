
window.onscroll = function () {
    
  "use strict";
  
  // Vars
  
  var winScrollTop = window.pageYOffset,
      navBar = document.getElementById("nav"),
      theAboutSec = document.getElementById("about"),
      theSkillsSec = document.getElementById("skills"),
      theWorksSec = document.getElementById("works"),
      theDesignSec = document.getElementById("design"),
      theContactSec = document.getElementById("contact"),
      theLIst = document.getElementById("list_ul"),
      goUp = document.getElementById("goup");
  
  // Nav fixed to scroll and sscroll to fixed
  
  if (winScrollTop > 0) {
      navBar.classList.remove("fixed");
      navBar.classList.add("scroll");
  } else {
      navBar.classList.remove("scroll");
      navBar.classList.add("fixed");
  }
  

  // Change link color when scroll
  
  if (winScrollTop >= theAboutSec.offsetTop - 60 && winScrollTop < theSkillsSec.offsetTop - 60) {
      theLIst.firstElementChild.classList.add("act");
  } else {
      theLIst.firstElementChild.classList.remove("act");
  }
  
  if (winScrollTop >= theSkillsSec.offsetTop - 60 && winScrollTop < theWorksSec.offsetTop - 60) {
      theLIst.children[1].classList.add("act");
  } else {
      theLIst.children[1].classList.remove("act");
  }
  
  if (winScrollTop >= theWorksSec.offsetTop - 60 && winScrollTop < theDesignSec.offsetTop - 60) {
      theLIst.children[2].classList.add("act");
  } else {
      theLIst.children[2].classList.remove("act");
  }
  
  if (winScrollTop >= theDesignSec.offsetTop - 60 && winScrollTop < theContactSec.offsetTop - 60) {
      theLIst.children[3].classList.add("act");
  } else {
      theLIst.children[3].classList.remove("act");
  }
  
  if (winScrollTop >= theContactSec.offsetTop - 60) {
      theLIst.children[4].classList.add("act");
  } else {
      theLIst.children[4].classList.remove("act");
  }
  
  // Show and hide the Go Up button
  
  if (winScrollTop > theWorksSec.offsetTop) {
      goUp.style.display = "block";
  } else {
      goUp.style.display = "none";
  }
};

// function to scroll to the sections

function scroll(toElement, speed) {
  
  "use strict";
  
  var winObject = window,
      windowTopScroll = winObject.pageYOffset,
      pointer =  toElement.getAttribute('href').slice(1),
      elem = document.getElementById(pointer),
      elemOffset = elem.offsetTop,
      counter = setInterval(function () {
          
          windowTopScroll;
          // From button to top
          if (windowTopScroll > elemOffset) {
              winObject.scrollTo(0, windowTopScroll);
              windowTopScroll -= speed;
              if (windowTopScroll <= elemOffset) {
                  clearInterval(counter);
                  winObject.scrollTo(0, elemOffset);
              }
              // From top to button
          } else {
              winObject.scrollTo(0, windowTopScroll);
              windowTopScroll += speed;
              if (windowTopScroll >= elemOffset) {
                  clearInterval(counter);
                  winObject.scrollTo(0, elemOffset);
              }
          }
      }, 7);
}

var links = document.querySelectorAll("a[data-scroll]"),
  i;

for (i = 0; i < links.length; i = i + 1) {
  links[i].onclick = function (e) {
      
      "use strict";
      scroll(this, 28);
      e.preventDefault();
  };
}

// Responsive Navbar button

var navButton = document.getElementById("nav_button");
navButton.onclick = function () {
  "use strict";
  var listDiv = document.getElementById("main_list");
  listDiv.classList.toggle("show");
  navButton.classList.toggle("acti");
};
// reveal point from bottom and top of the window
function debounce(func, wait = 10, immediate = true){
  var timeout;
  return function(){
    var context = this, args = arguments;
    var later = function(){
      timeout = null;
      if(!immediate) func.apply(context, args);
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if(callNow) func.apply(context,args);
  };
};
var revealerpoint = 150;
window.addEventListener('scroll', debounce(reveal));
reveal();

function reveal() {
  var revealers = document.querySelectorAll('.revealer');
  for (var i = 0; i < revealers.length; i++) {
      var windowheight = window.innerHeight;
      var revealertop = revealers[i].getBoundingClientRect().top;
      var revealerbottom = revealers[i].getBoundingClientRect().bottom;
      //console.log("revealertop: " + revealertop);
      //console.log("revealerbottom: " + revealerbottom);
      if (revealertop < windowheight - revealerpoint) {
          revealers[i].classList.add('actives')
      }
  } 
};




    // code...
  
    let sliderImages = document.querySelectorAll(".slide"),
    current = 0;
  
  // Clear all images
  function reset() {
    for (let i = 0; i < sliderImages.length; i++) {
      sliderImages[i].classList.remove('is-open');
    }
  }
  
  // Init slider
  function startSlide() {
    reset();
    sliderImages[0].classList.add('is-open');
  }
  // Show prev
function slideLeft() {
    reset();
    sliderImages[current - 1].classList.add('is-open');
    current--;
  }
  
  // Show next
  function slideRight() {
    reset();
    sliderImages[current + 1].classList.add('is-open');
    current++;
  }
  startSlide();

  var container = document.querySelector(".flex-accordion");
  var label = document.querySelectorAll(".at-accordion__panel");
  container.addEventListener("touchstart", startTouch, false);
  container.addEventListener("touchmove", moveTouch, false);

  // Swipe Up / Down / Left / Right
  var initialX = null;
  var initialY = null;

  function startTouch(e) {
    initialX = e.touches[0].clientX;
    initialY = e.touches[0].clientY;
  };

  function moveTouch(e) {
    if (initialX === null) {
      return;
    }

    if (initialY === null) {
      return;
    }

    var currentX = e.touches[0].clientX;
    var currentY = e.touches[0].clientY;

    var diffX = initialX - currentX;
    var diffY = initialY - currentY;

    if (Math.abs(diffX) > Math.abs(diffY)) {
      // sliding horizontally
      if (diffX > 0) {
        if (current === sliderImages.length - 1) {
            current = -1;
          }
          slideRight();
          e.preventDefault();
      } else {
        if (current === 0) {
            current = sliderImages.length;
          }
         slideLeft();
         e.preventDefault();
      }  
    }

    initialX = null;
    initialY = null;
    
    
  };

