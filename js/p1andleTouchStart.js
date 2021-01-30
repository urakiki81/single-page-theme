var container = document.querySelector(".flex-accordion");
var label = document.querySelectorAll(".at-accordion__panel");
var threshold = 150; //required min distance traveled to be considered swipe
var allowedTime = 200; // maximum time allowed to travel that distance
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

  if (Math.abs(diffX) >= threshold && Math.abs(diffY)<= 100) {
    // sliding horizontally
    if (diffX > 0) {
      if (current === sliderImages.length - 1) {
          current = -1;
        }
        slideRight();
    } else {
      if (current === 0) {
          current = sliderImages.length;
        }
       slideLeft();
      
    }  
  }

  initialX = null;
  initialY = null;
  
  e.preventDefault();
};
https://static.pexels.com/photos/14661/pexels-photo-14661.jpeg
document.getElementById('one').onclick = switchGray;
var personOne = document.querySelector(".person-one");
var deOne = document.querySelector("#oneD");
var ready = document.querySelector('.team-container');
var csl = document.querySelector('.containter-team');
//runs through JS and defines switchGray as a function, document refers to everything in the browser, arrays are 0 based, 0=get 1 body element, the first one
function switchGray(){
  if (this.classList.contains('person-selected')) {
    // The box that we clicked has a class of bad so let's remove it and add the good class
    personOne.classList.remove('person-selected');
    deOne.classList.remove('leftD');
    ready.classList.remove('container-ready');
    csl.classList.remove('container-selected');
  } else {
    // The user obviously can't follow instructions so let's alert them of what is supposed to happen next
    personOne.classList.add('person-selected');
    deOne.classList.add('leftD');
    ready.classList.add('container-ready');
    csl.classList.add('container-selected');
  }

}

document.getElementById('two').onclick = switchTwo;
var personTwo = document.querySelector(".person-two");


//runs through JS and defines switchGray as a function, document refers to everything in the browser, arrays are 0 based, 0=get 1 body element, the first one
function switchTwo(){
  if (this.classList.contains('person-selected')) {
    // The box that we clicked has a class of bad so let's remove it and add the good class
    personTwo.classList.remove('person-selected');
    deOne.classList.remove('leftD');
    ready.classList.remove('container-ready');
    csl.classList.remove('container-selected');
  } else {
    // The user obviously can't follow instructions so let's alert them of what is supposed to happen next
    personTwo.classList.add('person-selected');
    deOne.classList.add('leftD');
    ready.classList.add('container-ready');
    csl.classList.add('container-selected');
  }

}
