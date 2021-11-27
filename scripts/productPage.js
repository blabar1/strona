$(".scrollSpecifications").click(function () {

    $('html,body').animate({
        scrollTop: $(".specifications-span").offset().top
    },
        2000);
});