const toggle = document.getElementById('toggleDark');
const body = document.querySelector('body');
const Navbar = document.getElementById('nav');

toggle.addEventListener('click', function(){
    this.classList.toggle('bi-moon');
    if(this.classList.toggle('bi-brightness-high-fill')){
        body.style.background = 'aliceblue';
        body.style.color = 'black';
        body.style.transition = '2s';
    }else{
        body.style.background = 'black';
        body.style.color = 'aliceblue';
        body.style.transition = '2s';
    }
});



window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.scrollY >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

// Humbarger
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".center");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

const navLink = document.querySelectorAll(".nav-link");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}

// auto-type
var typed = new Typed(".auto-type", {
  strings: ["Machine Learning", "Graphic Designer", "Artificial Intelligence", "Full Stack ", "Cloud Computing"],
  typeSpeed: 50,
  backSpeed: 50,
  loop: true,

})