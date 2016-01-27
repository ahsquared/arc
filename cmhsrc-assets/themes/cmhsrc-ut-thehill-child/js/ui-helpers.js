/* global $ */

(function readMore() {
    $(".read-more").on("click", function scrollToContent() {
        var siteTitle = $("#sitetitle"),
            scrollPos;
        scrollPos = $(".content-start").offset().top;
        $("html, body").animate({
            scrollTop: scrollPos
        }, 500);
    });
})();