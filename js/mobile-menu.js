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

  document.querySelector("#mobile-menu-close")
    .addEventListener("click", closeNav);

  ["top-menu", "aside-menu", "aside-menu-mobile"].forEach(function (menuId) {
    var container = document.getElementById(menuId);
    if (!container) {
      return;
    }

    container.querySelectorAll(".menu-item-has-children").forEach(function (item, index) {
      var link = null;
      var submenu = null;

      Array.prototype.forEach.call(item.children, function (child) {
        if (child.tagName === "A") {
          link = child;
        } else if (child.classList.contains("sub-menu")) {
          submenu = child;
        }
      });

      if (!link || !submenu) {
        return;
      }

      var expanded = item.classList.contains("current-menu-ancestor") ||
        item.classList.contains("current-menu-parent") ||
        item.classList.contains("current-menu-item") ||
        item.classList.contains("menu-open");
      submenu.id = menuId + "-submenu-" + index;
      submenu.hidden = !expanded;
      link.setAttribute("aria-controls", submenu.id);
      link.setAttribute("aria-expanded", String(expanded));
      link.addEventListener("click", function (event) {
        event.preventDefault();
        expanded = !expanded;
        submenu.hidden = !expanded;
        link.setAttribute("aria-expanded", String(expanded));
      });
    });
  });
})();