// Add this to your existing JavaScript

// Toggle visibility of navbar
function toggleMenu() {
    var navbar = document.getElementById("navbar");
    navbar.classList.toggle("active");
  }
  

function SayHello() {
  var hello = document.getElementById("button");
  document.addEventListener('click');
  alert('button clicked');
  console.log("Button Clicked")
}

SayHello();
toggleMenu();