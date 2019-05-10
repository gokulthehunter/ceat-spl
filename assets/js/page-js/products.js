"use strict";
function filterActions(){
    // filter reseting
    $(document).on("click",".reset-filter",function(){
        $(".product_filter_each select").niceSelect("destroy");
        $(".product_filter_each select").prop('selectedIndex', 0);
        $(".product_filter_each select").niceSelect();
    });
};
function productSlider(){
    var _sliderSel = '.product-slider',
        _init = new Swiper(_sliderSel,{
        speed: 300,
        effect: 'fade',
        pagination: {
            el: '.slide-dots',
            clickable: true,
        },
        navigation: {
            nextEl: '.slide-next',
            prevEl: '.slide-prev',
        }
    });

    // feature slider[start]
    var _sliderSelF = '.prod_feat_slider',
        _initF = new Swiper(_sliderSelF, {
            speed: 700,
            slidesPerView: 4,
            navigation: {
                nextEl: '.feat-next',
                prevEl: '.feat-prev'
            },
            breakpoints: {
                991: {
                    slidesPerView: 3
                },
                767: {
                    slidesPerView: 1
                },
            },
            on:{
                transitionStart:function(){
                    $(".prod_feat_slider_each").removeClass("no-l-border");
                },
                transitionEnd: function () {
                    $(".prod_feat_slider_each").eq(this.activeIndex).addClass("no-l-border");
                },
            }
        });
    // feature slider[end]
};
function productPageForms(){
    // validator blue print
    function customerRequest(prefix){
        var _sel= {};
        _sel = {
            checkVal: $("input:radio[name ='" + prefix +"-radio']:checked"),
            cCode: $("#" + prefix +"-c-code"),
            phone: $("#" + prefix +"-mob")
        };
        if (_sel.phone.val() == '') {
            _sel.phone.next(".c_field--error").show().text("Please enter your mobile number");
        } else if (!phoneCheck(_sel.phone.val())) {
            _sel.phone.next(".c_field--error").show().text("Please enter a valid mobile number");
        } else {
            var _data = {
                option: _sel.checkVal.val(),
                cCode: _sel.cCode.val(),
                phone: _sel.phone.val()
            }
            formVals.prodAreaRequestForm = _data;
            console.log(prefix+" customer form", formVals.prodAreaRequestForm);
            // clear
            _sel.phone.val('');
        }
    };
    $(document).on("click","#prod-area-submit",function(){
        customerRequest("prod-area");
    });
    $(document).on("click", "#cus-req-submit", function () {
        customerRequest("cus-req");
    });
}

function loadTables(){
    // $.get("../assets/tables/floatmax.html", function (data) {
    //     $("#table-holder").html(data);
        
    // }).done(function () {
    //     var _container = $(".wrap-scrolls"),
    //         _scroller = $("#table-holder");
    //     bindDragScroll(_container, _scroller);
    //     $(".table-loading").fadeOut();
    // });

    var _container = $(".wrap-scrolls"),
        _scroller = $("#table-holder");
    bindDragScroll(_container, _scroller);
    
}
function expandTable(){
    $(document).on("click",".tyre_table--expand",function(e){
        e.stopPropagation();
        var _getTable = $("#table-holder table").clone(),
            _container = $(".expand_table"),
            _scroller = $(".expand_table_inner");

        $("body").addClass("overflow-hidden");
        $(".expand_table").fadeIn();
        $(".expand_table_inner").html(_getTable);
        // scroll trigger
        bindDragScroll(_container, _scroller);
    })
    $(document).on("click", ".expand_table--close", function () {
        $("body").removeClass("overflow-hidden");
        $(".expand_table").fadeOut();
    });
    
    $(document).on("click", ".expand_table_inner",function (e) {e.stopPropagation()});

    $(document).on("click", function () {
        $("body").removeClass("overflow-hidden");
        $(".expand_table").fadeOut();
    });
}
jQuery(document).ready(function(){
    filterActions();
    productSlider();
    productPageForms();
    loadTables();
    expandTable();
})