"use strict";
function filterActions(){
    // filter reseting
    $(document).on("click",".reset-filter",function(){
        $(".product_filter_each select").niceSelect("destroy");
        $(".product_filter_each select").prop('selectedIndex', 0);
        $(".product_filter_each select").niceSelect();
    });
};
function productSllider(){
    var _sliderSel = '.product-slider';

    var _init = new Swiper(_sliderSel,{
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
    })
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
    $.get("../assets/tables/floatmax.html", function (data) {
        $("#table-holder").html(data);
        
    }).done(function () {
        var _container = $(".wrap-scrolls"),
            _scroller = $("#table-holder");
        bindDragScroll(_container, _scroller);
        $(".table-loading").fadeOut();
    });
    
}
jQuery(document).ready(function(){
    filterActions();
    productSllider();
    productPageForms();
    loadTables();
})