document.addEventListener("DOMContentLoaded", function () {

    const menuToggle = document.getElementById("menuToggle");
    const navbarMenu = document.getElementById("navbarMenu");
    const sidebarOverlay = document.getElementById("sidebarOverlay");

    // Open/Close sidebar
    menuToggle.addEventListener("click", () => {
        navbarMenu.classList.toggle("active");
        sidebarOverlay.classList.toggle("active");
    });

    // Click overlay = close sidebar
    sidebarOverlay.addEventListener("click", () => {
        navbarMenu.classList.remove("active");
        sidebarOverlay.classList.remove("active");
    });
});
