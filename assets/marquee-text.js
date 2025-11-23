document.addEventListener("DOMContentLoaded", () => {
    const marquees = document.querySelectorAll(".marquee-wrapper, .marquee-wrapper-header");

    marquees.forEach((marquee) => {
        const pauseButton = marquee.querySelector(".marquee-pauseButton");
        const closeButton = marquee.querySelector(".marquee-close-button");
        const track = marquee.querySelector(".marquee-text-track");

        let paused = false;

        pauseButton.addEventListener("click", () => {
            paused = !paused;
            track.style.animationPlayState = paused ? "paused" : "running";
            pauseButton.classList.toggle("paused");
        });

        closeButton.addEventListener("click", () => {
            marquee.style.display = "none";
        });
    });
});