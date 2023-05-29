let nav = document.querySelector("nav");
window.onscroll = () => {
  if (window.scrollY >= 200) {
    nav.classList.remove("bg-tertiary");
    nav.classList.add("bg-body");
  } else {
    nav.classList.remove("bg-body");
    nav.class.add("bg-tertiary");
  }
};
