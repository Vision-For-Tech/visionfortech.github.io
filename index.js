// Add this to your existing JavaScript

// Toggle visibility of navbar
function toggleMenu() {
    var navbar = document.getElementById("navbar");
    navbar.classList.toggle("active");
  }
  

function SayHello() {
  var hello = document.getElementById("menu-btn");
  console.log("Button Clicked")
}

SayHello();
toggleMenu();