const hamburger = document.querySelector(".hamburger");
const content = document.querySelector(".header-content .header-nav ul");
// const side = document.querySelector(".hamburger-sidebar");

hamburger.addEventListener("click", ()=> {
    hamburger.classList.toggle("active");
    content.classList.toggle("active");
    // side.classList.toggle("active");
})