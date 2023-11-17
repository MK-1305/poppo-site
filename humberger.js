const humberger = document.querySelector(".humberger");
const side = document.querySelector(".humberger-sidebar");
const content = document.querySelector(".header-content ul");
console.log(content);

humberger.addEventListener("click", ()=> {
    humberger.classList.toggle("active");
    side.classList.toggle("active");
    content.classList.toggle("active");
})