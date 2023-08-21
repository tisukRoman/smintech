/*
 * Highlithing anchor links
 */

const setActiveLinks = () => {
  const hashLink = window.location.hash;
  const links = [...document.querySelectorAll(".menu__list-item a")];

  links.forEach((link) => {
    const linkValue = "#" + link.href.split("#")[1];

    if (!hashLink && linkValue === "#") {
      link.classList.add("active");
    }

    if (linkValue === hashLink) {
      link.classList.add("active");
    }
  });
};

const resetActiveLinks = () => {
  const links = [...document.querySelectorAll(".menu__list-item a")];
  links.forEach((link) => link.classList.remove("active"));
};

const menus = [...document.querySelectorAll(".menu")];

menus.forEach((menu) => {
  menu.addEventListener("click", (e) => {
    if (e.target.nodeName !== "A") return;

    setTimeout(() => {
      resetActiveLinks();
      setActiveLinks();
    }, 100);
  });
});
