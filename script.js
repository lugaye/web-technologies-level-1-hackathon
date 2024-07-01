document.addEventListener("DOMContentLoaded", () => {
  const burgerIcon = document.getElementById("burger-icon");
  const navList = document.getElementById("nav-list");

  burgerIcon.addEventListener("click", () => {
    navList.classList.toggle("show");
  });

  document.addEventListener("click", (event) => {
    if (!navList.contains(event.target) && !burgerIcon.contains(event.target)) {
      navList.classList.remove("show");
    }
  });
});
