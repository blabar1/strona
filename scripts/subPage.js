
$(document).ready(function () {
    $('.c-subPage-tile').hover(
        function () {
            $('.c-subPage-tile__description').addClass('slide-in-blurred-bottom')
        },
        function () {
            $('.c-subPage-tile__description').removeClass('slide-in-blurred-bottom')
        }
    )
});
