$(document).ready(function () {
    $(".scrollSpecifications").click(function (event) {
        $('html, body').animate({ scrollTop: $('.specifications-span').position().top - 150 }, 2000);
    });
});