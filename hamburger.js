const hamburger = document.querySelector(".hamburger");
const content = document.querySelector(".header-content .header-nav ul");


hamburger.addEventListener("click", ()=> {
    hamburger.classList.toggle("active");

    if (hamburger.classList.contains("active") === (false)) {
        hamburger.classList.add("close");
    } else {
        hamburger.classList.remove("close");
    }

    content.classList.toggle("active");

    if (content.classList.contains("active") === (false)) {
        content.classList.add("close");
    } else {
        content.classList.remove("close");
    }
})