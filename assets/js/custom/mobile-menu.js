const menu_button = document.querySelector(".mobile-menu-icon");
const mobile_menu = document.querySelector(".mobile-menu");

menu_button.addEventListener("click", () => {
  mobile_menu.classList.toggle("open");
});

document.addEventListener("click", (e) => {
  const el = e.target;

  if (el.matches(".mobile-menu-icon img")) {
    return;
  }

  mobile_menu.classList.remove("open");
});
