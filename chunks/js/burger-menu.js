// JavaScript
var burgerMenu = document.getElementById("burger-menu");
var overlay = document.getElementById("menu");
var body = document.body;

burgerMenu.addEventListener("click", function () {
  this.classList.toggle("close");
  overlay.classList.toggle("overlay");

  if (overlay.classList.contains("overlay")) {
    body.classList.add("no-scroll"); // Запрещаем скроллинг
  } else {
    body.classList.remove("no-scroll"); // Возвращаем скроллинг
  }
});

// Предотвращаем закрытие меню при клике на само меню
overlay.addEventListener("click", function (event) {
  event.stopPropagation();
});
