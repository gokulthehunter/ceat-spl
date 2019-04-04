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
jQuery(document).ready(function(){
    filterActions();
    productSllider();
})