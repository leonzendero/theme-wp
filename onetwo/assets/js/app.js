$(function () {
    $(".bg__button").click(function () {
        $("#exampleModal").modal('show');
    });
});

$(function () {
    $(".sample__active").click(function () {
        $(this).toggleClass('active-button');
    });

    $(".bg__active").click(function () {
        $(this).toggleClass('active-button');
    });
});