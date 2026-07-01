const wrapper = document.querySelector(".nav-wrapper");
const dot = document.querySelector(".nav-dot");
const links = document.querySelectorAll(".nav-link");

function moveDot(link) {
    const wrapperRect = wrapper.getBoundingClientRect();

    const linkRect = link.getBoundingClientRect();

    dot.style.left =
        linkRect.left -
        wrapperRect.left +
        linkRect.width / 2 -
        dot.offsetWidth / 2 +
        "px";
}

moveDot(document.querySelector(".active"));

links.forEach((link) => {
    link.addEventListener("mouseenter", () => {
        moveDot(link);
    });
});
