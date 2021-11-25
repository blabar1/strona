
var buttonList = document.getElementById("js-button-list");
var buttonTiles = document.getElementById("js-button-tiles");
buttonList.addEventListener("click", list);
buttonTiles.addEventListener("click", tiles);
function list() {
    buttonTiles.removeAttribute("disabled");
    buttonList.setAttribute("disabled", "");
}
function tiles() {
    buttonList.removeAttribute("disabled");
    buttonTiles.setAttribute("disabled", "");
}

