(function () {
  function openNav() {
    document.body.classList.add("mobile-menu-opened");
  }

  function closeNav() {
    document.body.classList.remove("mobile-menu-opened");
  }

  var toggler = document.querySelector("#mobile-menu-toggler");
  toggler.addEventListener("click", openNav);

  document.querySelector("#sidebar-mobile-overlay")
    .addEventListener("click", closeNav);

  document.querySelector("#sidebar-mobile .close")
    .addEventListener("click", closeNav);
})();