document.addEventListener("DOMContentLoaded", function () {
    const loaderWrapper = document.getElementById("loader-wrapper");
    const body = document.body;

    // Fade out loader and reveal body
    setTimeout(() => {
        loaderWrapper.style.transition = "opacity 0.5s ease-out";
        loaderWrapper.style.opacity = "0";

        body.classList.add("body-fade-in");

        setTimeout(() => {
            loaderWrapper.style.display = "none";
        }, 500);
    }, 1500);

    // Intersection Observer for images inside .secondary-content
    const images = document.querySelectorAll(".secondary-content img");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.filter = "grayscale(0%)";
                entry.target.style.opacity = "1"; // Fully visible
            } else {
                entry.target.style.filter = "grayscale(100%)"; // Full grayscale when out of view
                entry.target.style.opacity = "0.5"; // 50% opacity when out of view
            }
        });
    }, { threshold: 0.3 }); // Trigger when 30% of the image is in view

    images.forEach(image => {
        image.style.filter = "grayscale(100%)"; // Start grayscale
        image.style.opacity = "0.5"; // Start at 50% opacity
        observer.observe(image);
    });
});