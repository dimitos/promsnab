import {windowHeight} from "./global";

export let arcticmodal_settings = {
    overlay: {css: {opacity: .9}}
};

arcticmodal_settings["beforeOpen"] = function (data, el) {
    arcticModalMaxHG(el);
};

window.arcticmodal_settings = arcticmodal_settings;

$(window).resize(function () {
    arcticModalMaxHG(".intopModal:visible");
});

function arcticModalMaxHG(modal) {
    let modalParent = $(modal).parent();
    let maxHg = windowHeight() - modalParent.padding("top") - modalParent.padding("bottom");
    $(modal).css("max-height", maxHg);
}

window.alert = function(content) {
    $(".intopModal-alert .intopModal__whiteContent").html(content).parents(".intopModal-alert").arcticmodal(arcticmodal_settings);
};


$("[data-modal]").click(function (event) {
    event.preventDefault();

    let $modal = $(".intopModal-" + $(this).data("modal"));

    if ($modal.length > 0) {
        $modal.arcticmodal(arcticmodal_settings);
    }
});
