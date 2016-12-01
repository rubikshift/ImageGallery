function dzialaj() {
    $("footer").children("p").children("a").children("span").toggle();
}

$(function () {
    $("section").children("#dialog").toggle();
    $("#dialog").dialog({
        autoOpen: false,
        show: {
            effect: "fade",
            duration: 1000
        },
        hide: {
            effect: "puff",
            duration: 1000
        }
    });
    $("footer a").on("click", function () {
        $("#dialog").dialog("open");
    });
});