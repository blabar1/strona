
var buttonList = document.getElementById("js-button-list");
var buttonTiles = document.getElementById("js-button-tiles");
buttonList.addEventListener("click", list);
buttonTiles.addEventListener("click", tiles);
function list() {
  buttonTiles.removeAttribute("disabled");
  buttonList.setAttribute("disabled", "");
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    document.getElementById("category-products").innerHTML =
      this.responseText;
  }
  xhttp.open("POST", "elements/element-categoryProduct.-list.php");
  xhttp.send();
}
function tiles() {
  buttonList.removeAttribute("disabled");
  buttonTiles.setAttribute("disabled", "");
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    document.getElementById("category-products").innerHTML =
      this.responseText;
  }
  xhttp.open("POST", "elements/element-categoryProduct.-tiles.php");
  xhttp.send();
}


function loadDoc() {

}


$(document).ready(function () {
  $("#js-filters-button").click(function () {
    $(".overlay").toggle();
    $('.c-categoryProduct-filters').toggleClass("animation-right");

  });
});