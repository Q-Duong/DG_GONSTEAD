$(document).click(function () {
    $(".language-dropdown-menu").fadeOut("fast");
});

$(".button-languages").click(function (e) {
    e.stopPropagation();
    $(".language-dropdown-menu").fadeIn("fast");
});