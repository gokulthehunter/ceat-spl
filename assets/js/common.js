"use strict";
// global Vars[start]
var winW = $(window).width(),
    desktop = winW > 768,
    mobile = winW < 768,
    formVals = {};
// global Vars[end]
// nav action[start]
function navAction() {
  $(document).on("click",".has-drop",function(e){
    e.stopPropagation();
    $(".has-drop").removeClass("open");
    $(".header_top_nav_ul_li_sub").hide();

    $(this).addClass("open");
    $(this).next().show();
  });
  $(document).on("click",".header_top_nav_ul_li_sub",function(e){
    e.stopPropagation();
  });
  // search pop
  $(document).on("click",".btn_search",function(e){
    e.stopPropagation();
    $(".search_pop").fadeIn();
  })
  $(document).on("click",".search_pop--close",function(){
    $(".search_pop").fadeOut();
  });
  $(document).on("click",".search_pop_holder",function(e){
    e.stopPropagation();
  });
  // mobile menu action
  $(document).on("click",".hamburger",function(e){
    e.stopPropagation();
    $(this).toggleClass("open");
    $("main,.header,.mob_panel,footer").toggleClass("menu-open")
  });
  $(document).on("click",".mob-drops",function(){
    if ($(this).next(".mob_panel_nav_ul_li_sub").is(":visible")){
      $(".mob_panel_nav_ul_li_sub").slideUp();
      $(".mob-drops").removeClass("opened");
    }else{
      $(".mob_panel_nav_ul_li_sub").slideUp();
      $(".mob-drops").removeClass("opened");
      $(this).addClass("opened");
      $(this).next(".mob_panel_nav_ul_li_sub").slideDown();
    }
  });
  $(document).on("click",".mob_panel",function(e){ 
    e.stopPropagation();
  });
  $(document).on("click", ".find_tyre",function(e){
    e.stopPropagation();
    $(".header_down").fadeToggle();
  });
  $(document).on("click", ".header_down",function(e){
    e.stopPropagation();
  });

  // header scroll action[start]
  // var lastScrollTop = 0;
  // $(window).on("scroll",function () {
  //   var st = $(this).scrollTop();
  //   if (st > lastScrollTop) {
  //     // downscroll code
  //     $("header").addClass("state-down");
  //   } else {
  //     // upscroll code
  //     // $("header").removeClass("state-down");
  //   }
  //   lastScrollTop = st;
  //});
  $(window).on('mousewheel DOMMouseScroll', function (e) {
    var direction = (function () {
      var delta = (e.type === 'DOMMouseScroll' ?
        e.originalEvent.detail * -40 :
        e.originalEvent.wheelDelta);
      return delta > 0 ? 0 : 1;
    }());

    if (direction === 1) {
      // scroll down
      $("header").addClass("state-down");
    }
    if (direction === 0) {
      // scroll up
      $("header").removeClass("state-down");
    }
  });
  // header scroll action[end]
};
// nav action[end]
// clear on doc clicks
function docClicks(){
  $(document).on("click",function(){
    $(".has-drop").removeClass("open");
    $(".header_top_nav_ul_li_sub").hide();
    if(mobile){
      $(".header_down").fadeOut();
    }
    // search pop rmover
    $(".search_pop").fadeOut();
    if(mobile){
      $(".hamburger").removeClass("open");
      $("main,.header,.mob_panel,footer").removeClass("menu-open");
    }
  })
};
// form validations and actions[start]
function formActions(){
  // email validator 
  function ValidateEmail(mail) {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) {
      return true
    }
    return false
  };
  // phone validator
  function phoneCheck(str) {
    if (/^(1\s|1|)?((\(\d{3}\))|\d{3})(\-|\s)?(\d{3})(\-|\s)?(\d{4})$/.test(str)) {
      return true
    }
    return false
  };
  // common keyup clear
  $(".input-holder input").on("keyup", function () {
    $(this).next(".error-msg").hide();
  });
  // footer subscribe validator
  $(document).on("click","#footer-subscribe",function(){
    var _subVal = $("#footer-sub-email");
    if (_subVal.val() == ''){
      _subVal.next(".val-msg").show().text("Please enter your Email ID");
    } else if (!ValidateEmail( _subVal.val() )){
      _subVal.next(".val-msg").show().text("Please enter a valid Email ID");
    }
    else{
      _subVal.next(".val-msg").show().text("Thank you for the subscription");
      formVals.footerSubscribe = _subVal.val();
      console.log("posted data ==> ",formVals.footerSubscribe);
      _subVal.val('');
      setTimeout(function() {
        _subVal.next(".val-msg").hide();
      }, 3000);
    }
  })
};
// form validations and actions[end]


jQuery(document).ready(function ($) {
  multiImg(); // multi imaging for mobile and desk img
  selectfileCustom(); //custom select box
  numericOnlyInput(); //making inputbox numeric only
  navAction(); //navigation actions
  formActions(); //form actions
  //imgSvgConvert(); //custom img to svg loader
  //inputBoxAnim(); //input box animation
  docClicks(); //doc clicks
}(jQuery));
// multi imaging for mobile and desk img[start]
function multiImg() {
  $(".multi-img").each(function () {
    var _this = $(this);
    var imgD = _this.attr("data-d"),
      imgM = _this.attr("data-m");
    if (isMobile()) { _this.attr("src", imgM); } else { _this.attr("src", imgD) };
  });
};
// multi imaging for mobile and desk img[end]
// select box customization[start]
function selectfileCustom(){
  // init
  $("select").each(function(){
    $(this).niceSelect();
  });
  // country chooser
  var _seltext = $(".country-selector").next(".nice-select").find(".current"),
      _seltextData = _seltext.text();
  _seltext.text(_seltextData.slice(0,3));
  $(".country-selector").on("change",function(){
      var _changeData = $(this).val();
      _seltext.text(_changeData.slice(0,3))
  })
}; 
// select box customization[end]
// numeric only input[start]
function numericOnlyInput() {
  $(".numeric-only").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
      // Allow: Ctrl+A, Command+A
      (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
      // Allow: home, end, left, right, down, up
      (e.keyCode >= 35 && e.keyCode <= 40)) {
      // let it happen, don't do anything
      return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
      e.preventDefault();
    }
  });
};
// numeric only input[end]