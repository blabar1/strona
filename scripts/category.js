function category_event(b) {
    var p = document.getElementById(b);
    var url = p.getAttribute('href');
    window.history.pushState({}, '', url);
    $("#categoryTitles").load(location.href + " #categoryTitles>*", "");
}