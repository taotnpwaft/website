/* ------------------------------------------------------------
* Only works nice in fullscreen :I
* Test it out, just open the link in the corner in a new tab!
> ------------------------------------------------------------
*/

$(document).jQuery(function() {
    $("body").width(window.innerWidth).height(window.innerHeight);
    $("#abutton").on("click");

    function taot() {
        $("h1").html(
            '<span>Oh</span> <span>gosh</span><span>,</span> <span>it</span> <span>crashed!</span><span>"!"+!</span>'
        );
        $("span, button").attr("style", "cursor:move !important;");
        $("body").jGravity({
            target: "span",
            ignoreClass: "dontMove",
            weight: 25,
            depth: 100,
            drag: true,
        });
        $("#abutton").off("click", taot);
    }
});