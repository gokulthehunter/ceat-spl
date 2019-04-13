jQuery(document).ready(function ($) {
    $(document).on("click", ".exp-btn", function () {
        var _this = $(this),
            _actClass = "state-active";
        _this.prev(".exp-content").slideToggle();
        _this.toggleClass(_actClass);
        if (_this.hasClass(_actClass)) {
            _this.find("span").text("Read Less");
        } else {
            _this.find("span").text("Read More");
        }
    });

    if ($(window).width() > 767) {
        $(".ctr_wrapper_each_poster").stick_in_parent({
            parent: ".ctr_wrapper",
            offset_top: 150
        });
    }
}(jQuery));