const keyword = document.getElementById("keyword");
const searchContainer = document.getElementById("search-container");

// event ketika mengetik keyword

keyword.onkeyup = function () {
  fetch("ajax/search.php?keyword=" + keyword.value)
    .then((response) => response.text())
    .then((text) => (searchContainer.innerHTML = text));
};
