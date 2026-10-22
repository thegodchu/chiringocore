const wrapper = document.querySelector(".nav-wrapper");
const dot     = document.querySelector(".nav-dot");
const links   = document.querySelectorAll(".nav-link");

function moveDot(link) {
  if (!link) return;
  const wrapperRect = wrapper.getBoundingClientRect();
  const linkRect    = link.getBoundingClientRect();

  dot.style.left =
    linkRect.left - wrapperRect.left +
    linkRect.width / 2 -
    dot.offsetWidth / 2 + "px";
}

function setActive(link) {
  links.forEach(l => l.classList.remove("active"));
  link.classList.add("active");
  moveDot(link);
}

// ---- Hover preview ----
links.forEach(link => {
  link.addEventListener("mouseenter", () => moveDot(link));

  link.addEventListener("click", (e) => {
    setActive(link);

    const href = link.getAttribute("href");
    if (href && href.startsWith("#")) {
      e.preventDefault();
      document.querySelector(href)?.scrollIntoView({ behavior: "smooth" });
    }
  });
});

// Reset dot to current active when leaving the nav
wrapper.addEventListener("mouseleave", () => {
  moveDot(document.querySelector(".nav-link.active"));
});

// ---- Scroll spy: dot follows the section in view ----
const sections = document.querySelectorAll("section[id]");

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (!entry.isIntersecting) return;

    const id   = entry.target.id;
    const link = document.querySelector(`.nav-link[href="#${id}"]`);
    if (link) setActive(link);
  });
}, {
  // Trigger when a section crosses the vertical middle of the viewport
  rootMargin: "-50% 0px -50% 0px",
  threshold: 0
});

sections.forEach(s => observer.observe(s));

// ---- Init + resize ----
window.addEventListener("load", () => {
  moveDot(document.querySelector(".nav-link.active"));
});
window.addEventListener("resize", () => {
  moveDot(document.querySelector(".nav-link.active"));
});