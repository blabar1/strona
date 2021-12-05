function select_event() {
    var p = document.getElementById('order');
    var url = p.getAttribute('href');
    var order = p.value;
    url+=order;
    window.history.pushState({}, '', url);
    $("#category-products").load(location.href + " #category-products>*", "");
    $("#page-chooser").load(location.href + " #page-chooser>*", "");
    p.blur;
    p.val(order);
}