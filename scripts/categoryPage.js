function button_event(b) {
    var p = document.getElementById(b);
    var url = p.getAttribute('href');
    window.history.pushState({}, '', url);
    $("#category-products").load(location.href + " #category-products>*", "");
    $("#page-chooser").load(location.href + " #page-chooser>*", "");
}
