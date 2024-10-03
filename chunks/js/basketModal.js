document.getElementById("basket-link").addEventListener("click", function() {
  document.getElementById("basket-modal-container").classList.add("open");
  document.body.classList.add("no-scroll"); // Отключаем прокрутку
});

document.getElementById("close-modal-btn").addEventListener("click", function() {
  document.getElementById("basket-modal-container").classList.remove("open");
  document.body.classList.remove("no-scroll"); // Включаем прокрутку
});

window.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
      document.getElementById("basket-modal-container").classList.remove("open");
      document.body.classList.remove("no-scroll"); // Включаем прокрутку
  }
});

document.querySelector("#basket-modal-container .basket__box").addEventListener('click', event => {
  event._isClickWithInModal = true;
});

document.getElementById("close-modal-btn").addEventListener("click", function() {
  document.getElementById("basket-modal-container").classList.remove("open");
  document.body.classList.remove("no-scroll"); // Включаем прокрутку
});

window.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
      document.getElementById("basket-modal-container").classList.remove("open");
      document.body.classList.remove("no-scroll"); // Включаем прокрутку
  }
});

document.querySelector("#basket-modal-container .basket__box").addEventListener('click', event => {
  event._isClickWithInModal = true;
});

document.querySelector("#basket-modal-container").addEventListener("click", event => {
    if (event._isClickWithInModal) return;
    event.currentTarget.classList.remove('open');
    document.body.classList.remove("no-scroll"); // Включаем прокрутку
});

// favorite container

document.getElementById("favorite-link").addEventListener("click", function() {
  document.getElementById("favorite-modal-container").classList.add("open");
  document.body.classList.add("no-scroll"); // Отключаем прокрутку
});

document.getElementById("close-favorite-btn").addEventListener("click", function() {
  document.getElementById("favorite-modal-container").classList.remove("open");
  document.body.classList.remove("no-scroll"); // Включаем прокрутку
});

window.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
      document.getElementById("favorite-modal-container").classList.remove("open");
      document.body.classList.remove("no-scroll"); // Включаем прокрутку
  }
});

document.querySelector("#favorite-modal-container .favorite__box").addEventListener('click', event => {
  event._isClickWithInModal = true;
});


document.getElementById("close-favorite-btn").addEventListener("click", function() {
  document.getElementById("favorite-modal-container").classList.remove("open");
  document.body.classList.remove("no-scroll"); // Включаем прокрутку
});

window.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
      document.getElementById("favorite-modal-container").classList.remove("open");
      document.body.classList.remove("no-scroll"); // Включаем прокрутку
  }
});

document.querySelector("#favorite-modal-container .favorite__box").addEventListener('click', event => {
  event._isClickWithInModal = true;
});

document.querySelector("#favorite-modal-container").addEventListener("click", event => {
    if (event._isClickWithInModal) return;
    event.currentTarget.classList.remove('open');
    document.body.classList.remove("no-scroll"); // Включаем прокрутку
});


// search container 

document.getElementById("search-link").addEventListener("click", function () {
  document.getElementById("search-modal-container").classList.add("open");
  document.body.classList.add('no-scroll');
});

document.getElementById("close-search-btn").addEventListener("click", function() {
  document.getElementById("search-modal-container").classList.remove("open");
  document.body.classList.remove("no-scroll"); // Включаем прокрутку
});

window.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
      document.getElementById("search-modal-container").classList.remove("open");
      document.body.classList.remove("no-scroll"); // Включаем прокрутку
  }
});

document.querySelector("#search-modal-container .search__box").addEventListener('click', event => {
  event._isClickWithInModal = true;
});


document.getElementById("close-search-btn").addEventListener("click", function() {
  document.getElementById("search-modal-container").classList.remove("open");
  document.body.classList.remove("no-scroll"); // Включаем прокрутку
});

window.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
      document.getElementById("search-modal-container").classList.remove("open");
      document.body.classList.remove("no-scroll"); // Включаем прокрутку
  }
});

document.querySelector("#search-modal-container .search__box").addEventListener('click', event => {
  event._isClickWithInModal = true;
});

document.querySelector("#search-modal-container").addEventListener("click", event => {
    if (event._isClickWithInModal) return;
    event.currentTarget.classList.remove('open');
    document.body.classList.remove("no-scroll"); // Включаем прокрутку
});




