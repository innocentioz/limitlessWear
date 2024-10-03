function openTab(evt, tabName) {
  var i, tabContent, tablinks;

  // Скрыть весь контент табов
  tabContent = document.getElementsByClassName("tabContent");
  for (i = 0; i < tabContent.length; i++) {
    tabContent[i].style.display = "none";
  }

  // Убрать класс "active" у всех табов
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" show", "");
  }

  // Показать текущий таб и добавить класс "active" к кнопке
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " show";

  // Переместить подчеркивание
  var underline = document.getElementById("underline");
  underline.style.width = evt.currentTarget.offsetWidth + "px";
  underline.style.left = evt.currentTarget.offsetLeft + "px";
}

// По умолчанию открываем shippingMethod
document.addEventListener("DOMContentLoaded", function() {
  document.querySelector(".tablinks").click(); // Кликаем на первый таб при загрузке
});
