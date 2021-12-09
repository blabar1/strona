function filter_event() {
    checkboxes = document.querySelectorAll('input[name="filters[]"]:checked');
    filtres="";
    if(checkboxes.length != 0){
        $ilosc = checkboxes.length;
        for($i=0;$i<$ilosc;$i++){
            filtres += "&filters[]="+checkboxes[$i].value;
        }
    }
    url1 = "categoryProducts.php?category=9&page=1";
    url = url1 + filtres;
    window.history.pushState({}, '', url);
    $("#category-products").load(location.href + " #category-products>*", "");
    $("#page-chooser").load(location.href + " #page-chooser>*", "");
}