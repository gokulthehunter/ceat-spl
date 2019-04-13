"use strict";

// banner 
function bannerSlider(sel){
    var interleaveOffset = 0.5;
    var popSlider = new Swiper(sel, {
        // init: false,
        centeredSlides: true,
        slidesPerView: 1,
        speed: 1000,
        watchSlidesProgress: true,
        navigation: {
            prevEl: '.slide-prev',
            nextEl: '.slide-next',
        },
        pagination: {
            el: '.slide-dots',
            clickable: true,
        },
        on: {
            progress: function () {
                let swiper = this;
                for (let i = 0; i < swiper.slides.length; i++) {
                    let slideProgress = swiper.slides[i].progress,
                        innerOffset = swiper.width * interleaveOffset,
                        innerTranslate = slideProgress * innerOffset;
                    swiper.slides[i].querySelector(".hero_slider_each--img").style.transform =
                        "translate3d(" + innerTranslate + "px, 0, 0)";
                }
            },
            touchStart: function () {
                let swiper = this;
                for (let i = 0; i < swiper.slides.length; i++) {
                    swiper.slides[i].style.transition = "";
                }
            },
            setTransition: function (speed) {
                let swiper = this;
                for (let i = 0; i < swiper.slides.length; i++) {
                    swiper.slides[i].style.transition = speed + "ms";
                    swiper.slides[i].querySelector(".hero_slider_each--img").style.transition =
                        speed + "ms";
                }
            }
        }
    });
};
function eventSlide(sel) {
    var popSlider = new Swiper(sel, {
        centeredSlides: true,
        slidesPerView: 1,
        speed: 1000,
        navigation: {
            prevEl: '.event-slide-prev',
            nextEl: '.event-slide-next',
        },
        pagination: {
            el: '.slide-dots',
            clickable: true,
        },
    });
}


jQuery(document).ready(function($){
    bannerSlider(".hero_slider"); // init banner slider
    eventSlide(".event_img_slider");

}(jQuery))