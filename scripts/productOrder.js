function select_event() {
    p = document.getElementById('order');
    order = p.value;
    checkboxes = document.querySelectorAll('input[name="filters[]"]:checked');
    filtres = "";
    if (checkboxes.length != 0) {
        $ilosc = checkboxes.length;
        for ($i = 0; $i < $ilosc; $i++) {
            filtres += "&filters[]=" + checkboxes[$i].value;
        }
    }
    url = "categoryProducts.php?search=" + document.getElementById('srch').value + "&category=" + document.getElementById('kat').value + "&page=1&order=" + order + filtres;
    window.history.pushState({}, '', url);
    $("#category-products").load(location.href + " #category-products>*", "");
    $("#page-chooser").load(location.href + " #page-chooser>*", "");
    $("#filtry").load(location.href + " #filtry>*", "");
    p.blur;
}