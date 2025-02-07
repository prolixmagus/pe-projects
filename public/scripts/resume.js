document.addEventListener("DOMContentLoaded", function () {
    const startingContainer = document.querySelector(".burbank");
    let offsetPercentage = 0;
    console.log(innerWidth);

    if (innerWidth < 768) {
        offsetPercentage = 2;
    } else if (innerWidth > 768) {
        offsetPercentage = 8;
    }

    if (startingContainer) {
        const offset = (window.innerWidth / 100) * offsetPercentage;
        console.log(window.innerWidth);
        const timelineWrapper = document.querySelector(".timeline-wrapper");

        if (timelineWrapper) {
            startingContainer.scrollIntoView({ behavior: "auto" });

            timelineWrapper.scrollBy({ left: -offset, behavior: "auto" });

            window.scrollTo({ top: 0, behavior: auto });
        }
    }
});
