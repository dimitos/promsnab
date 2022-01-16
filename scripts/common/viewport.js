let vpChanged = false;

function setViewport() {
    let windowWidth = Math.min($(window).width(), window.screen.width);
    let minWidth = 500;
    let ratio = windowWidth / minWidth;
    let scrollPosition = $(window).scrollTop();

    if (windowWidth < minWidth) {
        $(`[name="viewport"]`).attr("content", `viewport-fit=cover, initial-scale=${ratio}, maximum-scale=${ratio}, minimum-scale=${ratio}, user-scalable=yes, width=${windowWidth}`);
        vpChanged = true;
    } else if (vpChanged) {
        $(`[name="viewport"]`).attr("content", "viewport-fit=cover, width=device-width");
        vpChanged = false;
    }

    $(window).scrollTop(scrollPosition);
}

setViewport();

$(window).on("resize", setViewport);
