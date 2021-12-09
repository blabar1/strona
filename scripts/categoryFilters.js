function filter_event() {
    url+=order;
    window.history.pushState({}, '', url);
    $("#category-products").load(location.href + " #category-products>*", "");
    $("#page-chooser").load(location.href + " #page-chooser>*", "");
}