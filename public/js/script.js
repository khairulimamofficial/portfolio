// Responsive Navbar
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

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
// End of Responsive Navbar


// // const navMenu = document.querySelector(".nav-menu");
// const detailBtn = document.querySelector(".see-more-detail-achievements");
// const showDetails = document.querySelector(".flex-container-achievements__in");

// hamburger.addEventListener("click", toggleActiveClass);

// //See more on achivements
// function toggleActiveClass() {
//     showDetails.classList.toggle("show-details");
//   }