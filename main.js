
let LandingPage = document.querySelector(".landing-page");

let imgArr = ["bg1.jpg", "bg2.jpg", "bg3.jpg", "bg4.jpg", "bg5.jpg"];

let backgroundOption = true;

// interval holder
let bgInterval;

// randomize background function
function randomiz() {
  if (backgroundOption === true) {
    bgInterval = setInterval(function () {
      // get random number
      let randomNumber = Math.floor(Math.random() * imgArr.length);

      LandingPage.style.backgroundImage = 'url("images/' + imgArr[randomNumber] + '")';
    }, 3000);
  }
}


randomiz();



 

