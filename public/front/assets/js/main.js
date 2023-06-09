$(document).ready(function() {
    $('#rootwizard').bootstrapWizard();
});
(function(e) {
    var n = function(d, k) {
        d = e(d);
        var a = this,
            g = [],
            c = e.extend({}, e.fn.bootstrapWizard.defaults, k),
            f = null,
            b = null;
        this.rebindClick = function(h, a) { 
            h.unbind("click", a).bind("click", a)
        };
        this.fixNavigationButtons = function() {
            f.length || (b.find("a:first").tab("show"), f = b.find('li:has([data-toggle="tab"]):first'));
            e(c.previousSelector, d).toggleClass("disabled", a.firstIndex() >= a.currentIndex());
            e(c.nextSelector, d).toggleClass("disabled", a.currentIndex() >= a.navigationLength());
            e(c.backSelector, d).toggleClass("disabled", 0 == g.length);
            a.rebindClick(e(c.nextSelector, d), a.next);
            a.rebindClick(e(c.previousSelector, d), a.previous);
            a.rebindClick(e(c.lastSelector, d), a.last);
            a.rebindClick(e(c.firstSelector, d), a.first);
            a.rebindClick(e(c.backSelector, d), a.back);
            if (c.onTabShow && "function" === typeof c.onTabShow && !1 === c.onTabShow(f, b, a.currentIndex())) return !1
        };
        this.next = function(h) {
            if (d.hasClass("last") || c.onNext && "function" === typeof c.onNext && !1 === c.onNext(f, b, a.nextIndex())) return !1;
            h = a.currentIndex();
            $index = a.nextIndex();
			if($index == 3){
				$('.next-btn').hide();
				$('.last-btn').show();
			}
			
            $index >
                a.navigationLength() || (g.push(h), b.find('li:has([data-toggle="tab"]):eq(' + $index + ") a").tab("show"))
        };
        this.previous = function(h) {
            if (d.hasClass("first") || c.onPrevious && "function" === typeof c.onPrevious && !1 === c.onPrevious(f, b, a.previousIndex())) return !1;
            h = a.currentIndex();
            $index = a.previousIndex();
			if($index < 3){
				$('.next-btn').show();
				$('.last-btn').hide();
			}
            0 > $index || (g.push(h), b.find('li:has([data-toggle="tab"]):eq(' + $index + ") a").tab("show"))
        };
        this.first = function(h) {
            if (c.onFirst && "function" === typeof c.onFirst && !1 === c.onFirst(f, b, a.firstIndex()) || d.hasClass("disabled")) return !1;
            g.push(a.currentIndex());
            b.find('li:has([data-toggle="tab"]):eq(0) a').tab("show")
        };
        this.last = function(h) {
            if (c.onLast && "function" === typeof c.onLast && !1 === c.onLast(f, b, a.lastIndex()) || d.hasClass("disabled")) return !1;
            g.push(a.currentIndex());
            b.find('li:has([data-toggle="tab"]):eq(' + a.navigationLength() + ") a").tab("show")
        };
        this.back = function() {
            if (0 == g.length) return null;
            var a = g.pop();
            if (c.onBack && "function" === typeof c.onBack && !1 === c.onBack(f, b, a)) return g.push(a), !1;
            d.find('li:has([data-toggle="tab"]):eq(' +
                a + ") a").tab("show")
        };
        this.currentIndex = function() {
            return b.find('li:has([data-toggle="tab"])').index(f)
        };
        this.firstIndex = function() {
            return 0
        };
        this.lastIndex = function() {
            return a.navigationLength()
        };
        this.getIndex = function(a) {
            return b.find('li:has([data-toggle="tab"])').index(a)
        };
        this.nextIndex = function() {
            return b.find('li:has([data-toggle="tab"])').index(f) + 1
        };
        this.previousIndex = function() {
            return b.find('li:has([data-toggle="tab"])').index(f) - 1
        };
        this.navigationLength = function() {
            return b.find('li:has([data-toggle="tab"])').length -
                1
        };
        this.activeTab = function() {
            return f
        };
        this.nextTab = function() {
            return b.find('li:has([data-toggle="tab"]):eq(' + (a.currentIndex() + 1) + ")").length ? b.find('li:has([data-toggle="tab"]):eq(' + (a.currentIndex() + 1) + ")") : null
        };
        this.previousTab = function() {
            return 0 >= a.currentIndex() ? null : b.find('li:has([data-toggle="tab"]):eq(' + parseInt(a.currentIndex() - 1) + ")")
        };
        this.show = function(b) {
            b = isNaN(b) ? d.find('li:has([data-toggle="tab"]) a[href=#' + b + "]") : d.find('li:has([data-toggle="tab"]):eq(' + b + ") a");
            0 < b.length &&
                (g.push(a.currentIndex()), b.tab("show"))
        };
        this.disable = function(a) {
            b.find('li:has([data-toggle="tab"]):eq(' + a + ")").addClass("disabled")
        };
        this.enable = function(a) {
            b.find('li:has([data-toggle="tab"]):eq(' + a + ")").removeClass("disabled")
        };
        this.hide = function(a) {
            b.find('li:has([data-toggle="tab"]):eq(' + a + ")").hide()
        };
        this.display = function(a) {
            b.find('li:has([data-toggle="tab"]):eq(' + a + ")").show()
        };
        this.remove = function(a) {
            var c = "undefined" != typeof a[1] ? a[1] : !1;
            a = b.find('li:has([data-toggle="tab"]):eq(' + a[0] +
                ")");
            c && (c = a.find("a").attr("href"), e(c).remove());
            a.remove()
        };
        var l = function(d) {
                var g = b.find('li:has([data-toggle="tab"])');
                d = g.index(e(d.currentTarget).parent('li:has([data-toggle="tab"])'));
                g = e(g[d]);
                if (c.onTabClick && "function" === typeof c.onTabClick && !1 === c.onTabClick(f, b, a.currentIndex(), d, g)) return !1
            },
            m = function(d) {
                $element = e(d.target).parent();
                d = b.find('li:has([data-toggle="tab"])').index($element);
                if ($element.hasClass("disabled") || c.onTabChange && "function" === typeof c.onTabChange && !1 === c.onTabChange(f,
                        b, a.currentIndex(), d)) return !1;
                f = $element;
                a.fixNavigationButtons()
            };
        this.resetWizard = function() {
            e('a[data-toggle="tab"]', b).off("click", l);
            e('a[data-toggle="tab"]', b).off("shown shown.bs.tab", m);
            b = d.find("ul:first", d);
            f = b.find('li:has([data-toggle="tab"]).active', d);
            e('a[data-toggle="tab"]', b).on("click", l);
            e('a[data-toggle="tab"]', b).on("shown shown.bs.tab", m);
            a.fixNavigationButtons()
        };
        b = d.find("ul:first", d);
        f = b.find('li:has([data-toggle="tab"]).active', d);
        b.hasClass(c.tabClass) || b.addClass(c.tabClass);
        if (c.onInit && "function" === typeof c.onInit) c.onInit(f, b, 0);
        if (c.onShow && "function" === typeof c.onShow) c.onShow(f, b, a.nextIndex());
        e('a[data-toggle="tab"]', b).on("click", l);
        e('a[data-toggle="tab"]', b).on("shown shown.bs.tab", m)
    };
    e.fn.bootstrapWizard = function(d) {
        if ("string" == typeof d) {
            var k = Array.prototype.slice.call(arguments, 1);
            1 === k.length && k.toString();
            return this.data("bootstrapWizard")[d](k)
        }
        return this.each(function(a) {
            a = e(this);
            if (!a.data("bootstrapWizard")) {
                var g = new n(a, d);
                a.data("bootstrapWizard",
                    g);
                g.fixNavigationButtons()
            }
        })
    };
    e.fn.bootstrapWizard.defaults = {
        tabClass: "nav nav-pills",
        nextSelector: ".wizard li.next",
        previousSelector: ".wizard li.previous",
        firstSelector: ".wizard li.first",
        lastSelector: ".wizard li.last",
        backSelector: ".wizard li.back",
        onShow: null,
        onInit: null,
        onNext: null,
        onPrevious: null,
        onLast: null,
        onFirst: null,
        onBack: null,
        onTabChange: null,
        onTabClick: null,
        onTabShow: null
    }
})(jQuery);



// When the user scrolls down 20px from the top of the document, slide down the navbar
// When the user scrolls to the top of the page, slide up the navbar (50px out of the top view)
window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        document.getElementById("test").style.top = "0";
    } else {
        document.getElementById("test").style.top = "-400px";
    }
}

function myFunction() {
    var x = document.getElementById("Myinput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}




































(function($) {
     "use strict";


      /*======== Doucument Ready Function =========*/
    jQuery(document).ready(function () {
     //CACHE JQUERY OBJECTS
      $("#status").fadeOut();
      $("#preloader").delay(200).fadeOut("slow");
      $("body").delay(200).css({ "overflow": "visible" });

      
      /* Init Wow Js */
      new WOW().init();

    });

     //search categories
    $('a[href="#search1"]').on('click', function(event) {
         event.preventDefault();
         $('#search1').addClass('open');
         $('#search1 > form > input[type="search"]').focus();
     });
     $('#search1, #search1 button.close').on('click keyup', function(event) {
         if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
             $(this).removeClass('open');
         }
     });

    jQuery(document).ready(() => {
         jQuery('.js-video-button').modalVideo({
             channel: 'vimeo'
         });
     });

     // Range sliders activation
     $(".range-slider-ui").each(function() {
         var minRangeValue = $(this).attr('data-min');
         var maxRangeValue = $(this).attr('data-max');
         var minName = $(this).attr('data-min-name');
         var maxName = $(this).attr('data-max-name');
         var unit = $(this).attr('data-unit');
         $(this).slider({
             range: true,
             min: minRangeValue,
             max: maxRangeValue,
             values: [minRangeValue, maxRangeValue],
             slide: function(event, ui) {
                 event = event;
                 var currentMin = parseInt(ui.values[0]);
                 var currentMax = parseInt(ui.values[1]);
                 $(this).children(".min-value").text(currentMin + " " + unit);
                 $(this).children(".max-value").text(currentMax + " " + unit);
                 $(this).children(".current-min").val(currentMin);
                 $(this).children(".current-max").val(currentMax);
             }
         });
     });


     /* ------------------------------------------------------------------------ */
     /* BACK TO TOP
    /* ------------------------------------------------------------------------ */
     $(document).on('click', '#back-to-top, .back-to-top', () => {
         $('html, body').animate({
             scrollTop: 0
         }, '500');
         return false;
     });
     $(window).on('scroll', () => {
         if ($(window).scrollTop() > 500) {
             $('#back-to-top').fadeIn(200);
         } else {
             $('#back-to-top').fadeOut(200);
         }
     });

     // Slick SLider
     $('.slider-store').slick({
         slidesToShow: 1,
         slidesToScroll: 1,
         direction: 'vertical',
         arrows: false,
         dots: false,
         fade: true,
         autoplay: true,
         asNavFor: '.slider-thumbs'
     });
    

     $('.slider-thumbs').slick({
         slidesToShow: 5,
         slidesToScroll: 1,
         asNavFor: '.slider-store',
         dots: false,
         arrows: true,
         autoplay: true,
         direction: 'vertical',
         centerMode: true,
         focusOnSelect: true,
         responsive: [{
             breakpoint: 800,
             settings: {
                 arrows:false,
             }
         }]

     });

     $('.review-slider').slick({
         infinite: true,
         slidesToShow: 3,
         slidesToScroll: 1,
         arrows: false,
         dots: true,
         rows:0,
         autoplay: true,
         speed: 2000,
         loop:true,
         responsive: [{
             breakpoint: 916,
             settings: {
                 slidesToShow: 1
             }
         }]
     });

     $('.review-slider1').slick({
         infinite: true,
         slidesToShow: 3,
         slidesToScroll: 1,
         arrows: false,
         dots: false,
         rows:0,
         autoplay: true,
         speed: 5000,
         loop:true,
         responsive: [{
             breakpoint: 1100,
             settings: {
                 slidesToShow: 1
             }
         }]
     });

     $('.about-slider').slick({
         infinite: true,
         slidesToShow: 1,
         slidesToScroll: 1,
         arrows: false,
         dots: false,
         autoplay: true,
         rows:0,
         speed: 4000,
         loop:true,
         responsive: [{
             breakpoint: 700,
             settings: {
                 arrows:false
             }
         }]
     });

     $('.side-slider').slick({
         infinite: true,
         slidesToShow: 5,
         slidesToScroll: 1,
         arrows: false,
         rows:0,
         dots: false,
         autoplay: true,
         speed: 4000,
         loop:true,
          responsive: [{
             breakpoint: 1000,
             settings: {
                 slidesToShow: 3
             }
         }, 
         {
             breakpoint: 811,
             settings: {
                 slidesToShow: 2
            }
         }, 
         {
             breakpoint: 500,
             settings: {
                 slidesToShow: 1
             }
         }]
     });

      $('.attract-slider').slick({
         infinite: true,
         slidesToShow: 6,
         slidesToScroll: 1,
         arrows: false,
         dots: false,
         speed: 2000,
         rows:0,
         autoplay: true,
         draggable:false,
         responsive: [{
             breakpoint: 1000,
             settings: {
                 slidesToShow: 3
             }
         }, 
         {
             breakpoint: 600,
             settings: {
                 slidesToShow: 2
            }
         }, 
         {
             breakpoint: 500,
             settings: {
                 slidesToShow: 2
             }
         }]
     });

     $('.team-slider').slick({
         infinite: true,
         slidesToShow: 3,
         slidesToScroll: 1,
         arrows: true,
         dots: false,
         autoplay: true,
         speed: 1000,
         rows:0,
         loop:true,
         responsive: [{
             breakpoint: 1000,
             settings: {
                 slidesToShow: 2
             }
         }, {
             breakpoint: 750,
             settings: {
                 slidesToShow: 1
             }
         }]
     });

     $('.item-slider').slick({
         infinite: true,
         slidesToShow: 3,
         slidesToScroll: 1,
         arrows: true,
         dots: false,
         autoplay: true,
         speed: 2000,
         rows:0,
         loop:true,
         responsive: [{
             breakpoint: 1000,
             settings: {
                 slidesToShow: 2
             }
         }, {
             breakpoint: 750,
             settings: {
                 slidesToShow: 1
             }
         }]
     });

     $('.shop-slider').slick({
         infinite: true,
         slidesToShow: 4,
         slidesToScroll: 1,
         arrows: false,
         dots: false,
         autoplay: true,
         speed: 8000,
         rows:0,
         loop:true,
         responsive: [{
             breakpoint: 1000,
             settings: {
                 slidesToShow: 2
             }
         }, {
             breakpoint: 800,
             settings: {
                 slidesToShow: 2
             }
         }, {
             breakpoint: 600,
             settings: {
                 slidesToShow: 1
             }
         }]
     });

     $('.banner-slider').slick({
         infinite: true,
         slidesToShow: 4,
         slidesToScroll: 1,
         arrows: false,
         dots: true,
         autoplay: true,
         speed: 2000,
         rows:0,
         cursor: false,
         loop:true,
         responsive: [{
             breakpoint: 1000,
             settings: {
                 slidesToShow: 2
             }
         }, {
             breakpoint: 800,
             settings: {
                 slidesToShow: 1
             }
         }]
     });

     // Slick Testimonial Slider
        $('.sl-testimonial-slider').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          vertical: true,
          verticalSwiping: true,
          autoplay: true,
          Speed: 8000,
          rows:0,
          infinite: true,
          arrows: false,
          dots: false,
          adaptiveHeight: true
        });

     $('.partner-slider').slick({
         infinite: true,
         slidesToShow: 5,
         slidesToScroll: 1,
         arrows: false,
         dots: false,
         autoplay: true,
         speed: 2000,
         rows:0,
         loop:true,
         responsive: [{
             breakpoint: 1000,
             settings: {
                 slidesToShow: 3
             }
         }, {
             breakpoint: 800,
             settings: {
                 slidesToShow: 2
             }
         }, {
             breakpoint: 500,
             settings: {
                 slidesToShow: 1
             }
         }]
     });


     $("#contactform2").validate({      
      submitHandler: function() {
        
        $.ajax({
          url : 'mail/contact.php',
          type : 'POST',
          data : {
            fname : $('input[name="first_name"]').val(),
            lname : $('input[name="last_name"]').val(),
            email : $('input[name="email"]').val(),
            phone : $('input[name="phone"]').val(),
            comments : $('textarea[name="comments"]').val(),
          },
          success : function( result ){
            $('#contactform-error-msg').html( result );
            $("#contactform2")[0].reset();
          }     
        });

      }
    });

    // burgermenu


    $(document).on( 'click', '.menu-ham' , function(){
        $('.menu').animate({right: '0px'}, 50)
        $('.header_sidemenu_in .overlay').addClass('show').removeClass('hide');
    });

    $(document).on( 'click', '.close-menu' , function(){
        $('.menu').animate({right: '-500px'}, 50)
        $('.header_sidemenu_in .overlay').addClass('hide').removeClass('show');
    });

    $(document).on( 'click', '.header_sidemenu_in .overlay' , function(){
        $('.header_sidemenu_in .overlay').addClass('hide').removeClass('show');
        $('.menu').animate({right: '-500px'}, 50)
    });

    // bubbles ----------------- 
    var bArray = [];
    var sArray = [2, 4, 6, 8];
    for (var i = 0; i < $('.bubbles').width(); i++) {
        bArray.push(i);
    }
    function randomValue(arr) {
        return arr[Math.floor(Math.random() * arr.length)];
    }
    setInterval(function () {
        var size = randomValue(sArray);
        $('.bubbles').append('<div class="individual-bubble" style="left: ' + randomValue(bArray) + 'px; width: ' + size + 'px; height:' + size + 'px;"></div>');
        $('.individual-bubble').animate({
            'bottom': '100%',
            'opacity': '-=0.7'
        }, 4000, function () {
            $(this).remove()
        });
    }, 350);

     //search categories
    $('a[href="#search1"]').on('click', function(event) {
         event.preventDefault();
         $('#search1').addClass('open');
         $('#search1 > form > input[type="search"]').focus();
     });
     $('#search1, #search1 button.close').on('click keyup', function(event) {
         if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
             $(this).removeClass('open');
         }
     });

    /*--------------------------------------------
    Wicked Picker
    --------------------------------------------*/  

    $('.set-time').wickedpicker();
    $('.selector').wickedpicker({

      // current time
      now: new Date(),

      // 12- or 24-hour format
      twentyFour: false,

      // CSS classes
      upArrow: 'wickedpicker__controls__control-up',
      downArrow: 'wickedpicker__controls__control-down',
      close: 'wickedpicker__close',
      hoverState: 'hover-state',

      // title

      title: 'Timepicker'

    });
    
     /*-----------------------------------------------------------------------------------*/
    /*  COUNTDOWN
    /*-----------------------------------------------------------------------------------*/

     $(document).ready(() => {
         loopcounter('coming-counter');
     });

    /*-----------------------------------------------------------------------------------*/
    /*  COUNTER UP
    /*-----------------------------------------------------------------------------------*/
    $('.value').counterUp({
        delay: 50,
        time: 1000
    });
    /*-----------------------------------------------------------------------------------*/
    /*  MASONRY
    /*-----------------------------------------------------------------------------------*/
    
     $('.blog-main').masonry({
         // options
         itemSelector: '.mansonry-item',
     });

     $('.trend-box1').masonry({
         // options
         itemSelector: '.mansonry-item1',
     });

     // Nice Select JS
     $('.niceSelect').niceSelect();

     $('a[href="#search1"]').on('click', function(event) {
         event.preventDefault();
         $('#search1').addClass('open');
         $('#search1 > form > input[type="search"]').focus();
     });
     $('#search1, #search1 button.close').on('click keyup', function(event) {
         if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
             $(this).removeClass('open');
         }
     });
     //Do not include! This prevents the form from submitting for DEMO purposes only!
     $('form').submit(function(event) {
         event.preventDefault();
         return false;
     });

 })(jQuery);

 /*Title: Cool Modal Popup Sign In/Out Form*/

$(function() {
  //defining all needed variables
  var $overlay = $('.overlay');
  var $mainPopUp = $('.main-popup')
  var $signIn = $('#sign-in');
  var $register = $('#register');
  var $formSignIn = $('form.sign-in');
  var $formRegister = $('form.register');
  
  var $firstChild = $('nav ul li:first-child');
  var $secondChild = $('nav ul li:nth-child(2)');
  var $thirdChild = $('nav ul li:nth-child(3)');
  
  //defining function to create underline initial state on document load
  function initialState() {
    $('.underline').css({
      "width": $firstChild.width(),
      "left": $firstChild.position().left,
      "top": $firstChild.position().top + $firstChild.outerHeight(true) + 'px'
    });
  }
  initialState(); //() used after calling function to call function immediately on doc load
  
  //defining function to change underline depending on which li is active
  function changeUnderline(el) {
    $('.underline').css({
      "width": el.width(),
      "left": el.position().left,
      "top": el.position().top + el.outerHeight(true) + 'px'
    });
  } //note: have not called the function...don't want it called immediately
  
  $firstChild.on('click', function(){
    var el = $firstChild;
    changeUnderline(el); //call the changeUnderline function with el as the perameter within the called function
    $secondChild.removeClass('active');
    $thirdChild.removeClass('active');
    $(this).addClass('active');
  });
  
  $secondChild.on('click', function(){
    var el = $secondChild;
    changeUnderline(el); //call the changeUnderline function with el as the perameter within the called function
    $firstChild.removeClass('active');
    $thirdChild.removeClass('active');
    $(this).addClass('active');
  });
  
  $thirdChild.on('click', function(){
    var el = $thirdChild;
    changeUnderline(el); //call the changeUnderline function with el as the perameter within the called function
    $firstChild.removeClass('active');
    $secondChild.removeClass('active');
    $(this).addClass('active');
  });
  
  
  $('button').on('click', function(){
    $overlay.addClass('visible');
    $mainPopUp.addClass('visible');
    $signIn.addClass('active');
    $register.removeClass('active');
    $formRegister.removeClass('move-left');
    $formSignIn.removeClass('move-left');
  });
  $overlay.on('click', function(){
    $(this).removeClass('visible');
    $mainPopUp.removeClass('visible');
  });
  $('#popup-close-button a').on('click', function(e){
    e.preventDefault();
    $overlay.removeClass('visible');
    $mainPopUp.removeClass('visible');
  });
  
  $signIn.on('click', function(){
    $signIn.addClass('active');
    $register.removeClass('active');
    $formSignIn.removeClass('move-left');
    $formRegister.removeClass('move-left');
  });
  
  $register.on('click', function(){
    $signIn.removeClass('active');
    $register.addClass('active');
    $formSignIn.addClass('move-left');
    $formRegister.addClass('move-left');
  });
  
  $('input').on('submit', function(e){
    e.preventDefault(); //used to prevent submission of form...remove for real use
  });
});



 jQuery(window).on('resize load', () => {
     resize_eb_slider();
 }).resize();
 /**
  * Resize slider
  */
 function resize_eb_slider() {
     let bodyheight = jQuery(this).height();
     if (jQuery(window).width() > 1400) {
         bodyheight *= 0.90;
         jQuery('.slider').css('height', `${bodyheight}px`);
     }
 }



