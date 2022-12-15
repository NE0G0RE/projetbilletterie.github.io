$(".hidden_nav").mouseleave(function () {
    $(".hidden_nav").removeClass("animate-right");
    $(".hr2").removeClass("translate1");
    $(".hr1").removeClass("rotate1");
    $(".hr3").removeClass("rotate2");
    $(".box_bar").removeClass("d_none");
});

$(".box_bar").click(function () {
    $(".hidden_nav").toggleClass("animate-right");
    $(".hr2").toggleClass("translate1");
    $(".hr1").toggleClass("rotate1");
    $(".hr3").toggleClass("rotate2");
    $(this).addClass("d_none");
});
document.getElementsByClass(calendar - days).innerHTML("8");
