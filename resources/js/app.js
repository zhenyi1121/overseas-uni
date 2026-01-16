import './bootstrap';

window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar-area");

    if (window.scrollY > 80) {
        navbar.classList.add("sticky");
    } else {
        navbar.classList.remove("sticky");
    }
});
