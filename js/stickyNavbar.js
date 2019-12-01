var navbar = document.getElementById("topNavbar");
var menuButtons = document.getElementsByClassName("main-menu");
var navbarBrand = document.getElementById("navbarBrand");
var myLogo = document.getElementById("myLogo");

// var sticky = navbar.offsetTop;

// function myFunction() {
//   if (window.pageYOffset >= 50) {
//   	console.log('kki');
//     navbar.classList.add("stick");
//   } else {
//     navbar.classList.remove("stick");
//   }
// }

// navbar.classList.add("stick");


var stickIt = function(){
	  if (window.pageYOffset >= 100) {
	  	myLogo.classList.remove("logo-up-animation");
		myLogo.classList.add("my-logo", "animation");
	    navbar.classList.add("stick", "animation");
	    navbarBrand.classList.add("sticky-navbar-brand", "animation");
		  for(var i=0; i<menuButtons.length; i++){
		    	menuButtons[i].classList.add("sticky-buttons", "animation");	
    	}
  } else {
    navbar.classList.remove("stick");
    navbarBrand.classList.remove("sticky-navbar-brand");
    myLogo.classList.remove("my-logo", "animation");
    myLogo.classList.add("logo-up-animation");
    for(var i2=0; i2<menuButtons.length; i2++){
    	menuButtons[i2].classList.remove("sticky-buttons");	
    }
  }
};

window.addEventListener("scroll", stickIt);


