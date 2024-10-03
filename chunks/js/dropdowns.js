function showDropdown() {
    document.getElementById("sortDropdown").classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches('.sort-dropbtn')) {
        var dropdowns = document.getElementsByClassName("sort-dropdown-content");
        var i;

        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains("show")) {
                openDropdown.classList.remove("show");
            }
        }
    }
}

function showCategoryDropDown() {
    document.getElementById("categoryDropDown").classList.toggle("isCategory");
  }
  
  window.onclick = function(event) {
    if (!event.target.matches('.category-dropbtn')) {
        var dropdowns = document.getElementsByClassName("category-dropdown-content");
        var i;
  
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains("isCategory")) {
                openDropdown.classList.remove("isCategory");
            }
        }
    }
  }
