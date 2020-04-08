
/**** JavaScript Table of Content 
 --------------------------------------------------------------------------------
 1. pageLoader
 2. newsTicker
 3. navIcon
 4. sideMenu
 5. owlCarousel
 6. newsTicker
 7. tab
 8. youtube
 9. datePicker
 10. form
 11. googleMap
 * ---------------------------------------------------------------------------*/

/* global classie, google */

"use strict"; // Start of use strict

/**** Newstricker
 ---------------------------------------------------------------------------- */
function newsTicker() {
    if ($('.newsticker').length) {
        $('.newsticker').newsTicker({
            row_height: 12,
            max_rows: 2,
            speed: 600,
            direction: 'up',
            duration: 4000,
            autostart: 1,
            pauseOnHover: 0,
            prevButton: $('#prev-button'),
            nextButton: $('#next-button'),
            stopButton: $('#stop-button'),
            startButton: $('#start-button')
        });
    }
}
/****  Mobile Menu
 ---------------------------------------------------------------------------- */
//Nav Icon
function navIcon() {
    $('.nav-icon').click(function () {
        $(this).toggleClass('open');
    });
}
//mobile Menu showLeft
var menuLeft = document.getElementById('mobile-menu'),
        showLeft = document.getElementById('showLeft'),
        body = document.body;
var classie;
showLeft.onclick = function () {
    classie.toggle(this, 'active');
    classie.toggle(menuLeft, 'mobile-menu-open');
    disableOther('showLeft');
};
function disableOther(button) {
    if (button !== 'showLeft') {
        classie.toggle(showLeft, 'disabled');
    }
}
// Side Menu
function sideMenu() {
    $('.side-menu').metisMenu();
}

/****   Wow js active
 ---------------------------------------------------------------------------- */
function  wowJs() {
    new WOW().init();
}
/****  Owl Carousel
 ---------------------------------------------------------------------------- */
function owlCarousel() {
    //Carousel Slider Start

    if ($('#news-feed-carousel').length) {
        $("#news-feed-carousel").owlCarousel({
            rtl: true,
            loop: true,
            lazyLoad: true,
            autoplay: true,
            items: 1
        });
    }
    ;
    if ($('#content-slide').length) {
        $("#content-slide").owlCarousel({
            rtl: true,
            loop: true,
            lazyLoad: true,
            nav: true,
            navText: [
                "<i class='fa pe-7s-angle-left'></i>",
                "<i class='fa pe-7s-angle-right'></i>"
            ],
            items: 2,
            responsive: {
                0: {
                    items: 1
                },
                479: {
                    items: 1
                },
                768: {
                    items: 2
                },
                980: {
                    items: 2
                },
                1199: {
                    items: 2
                }
            }
        });
    }
    ;
    if ($('#content-slide-2').length) {
        $("#content-slide-2").owlCarousel({
            rtl: true,
            loop: true,
            nav: true,
            navText: [
                "<i class='fa pe-7s-angle-left'></i>",
                "<i class='fa pe-7s-angle-right'></i>"
            ],
            items: 1,
            responsive: {
                0: {
                    items: 1
                },
                479: {
                    items: 1
                },
                768: {
                    items: 1
                },
                980: {
                    items: 1
                },
                1199: {
                    items: 1
                }
            }
        });
    }
    ;
    if ($('#content-slide-3').length) {
        $("#content-slide-3").owlCarousel({
            rtl: true,
            loop: true,
            nav: true,
            navText: [
                "<i class='fa pe-7s-angle-left'></i>",
                "<i class='fa pe-7s-angle-right'></i>"
            ],
            items: 1,
            responsive: {
                0: {
                    items: 1
                },
                479: {
                    items: 1
                },
                768: {
                    items: 1
                },
                980: {
                    items: 1
                },
                1199: {
                    items: 1
                }
            }
        });
    }
    ;
    if ($('#content-slide-4').length) {
        $("#content-slide-4").owlCarousel({
            rtl: true,
            loop: true,
            autoplay: true,
            nav: true,
            navText: [
                "<i class='fa pe-7s-angle-left'></i>",
                "<i class='fa pe-7s-angle-right'></i>"
            ],
            items: 4,
            responsive: {
                0: {
                    items: 1
                },
                479: {
                    items: 1
                },
                768: {
                    items: 3
                },
                980: {
                    items: 3
                },
                1199: {
                    items: 4
                }
            }
        });
    }
    ;
    if ($('#content-slide-5').length) {
        $("#content-slide-5").owlCarousel({
            rtl: true,
            loop: true,
            nav: true,
            navText: [
                "<i class='fa pe-7s-angle-left'></i>",
                "<i class='fa pe-7s-angle-right'></i>"
            ],
            items: 1,
            responsive: {
                0: {
                    items: 1
                },
                479: {
                    items: 1
                },
                768: {
                    items: 1
                },
                980: {
                    items: 1
                },
                1199: {
                    items: 1
                }
            }
        });
    }
    ;
    if ($('#widget-slider').length) {
        var owl = $("#widget-slider");
        owl.owlCarousel({
            rtl: true,
            loop: true,
            lazyLoad: true,
            autoplay: true,
            items: 1
        });
    }
    ;
}
/**** Tab
 ---------------------------------------------------------------------------- */
function tab() {
    $('.tab-inner ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
    $('.tab-inner ul.tabs li a').click(function (g) {
        var tab = $(this).closest('.tab-inner'),
                index = $(this).closest('li').index();
        tab.find('ul.tabs > li').removeClass('current');
        $(this).closest('li').addClass('current');
        tab.find('.tab_content').find('div.tab-item-inner').not('div.tab-item-inner:eq(' + index + ')').slideUp();
        tab.find('.tab_content').find('div.tab-item-inner:eq(' + index + ')').slideDown();
        g.preventDefault();
    });
}
/**** Youtube Video
 ---------------------------------------------------------------------------- */
function youtube() {
// la magia aquí
// This key only works for this demo on Newspaper
// You must create your own at:
// https://developers.google.com/youtube/v3/getting-started
    var api_key = 'AIzaSyBVtjo9eO4klWhYbHwL9jObfuke4rxSWWc';
// Start all players on the page with default options
    $('.RYPP').rypp('AIzaSyBVtjo9eO4klWhYbHwL9jObfuke4rxSWWc');
// Start two players by ID, with default settings
    $('#rypp-demo-1').rypp(api_key, {
        autoplay: false,
        autonext: false,
        loop: false,
        mute: true
    });
}
/**** Date Picker 
 ---------------------------------------------------------------------------- */
function datePicker() {
    if ($('#from').length) {
        $("#from").datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 3,
            onClose: function (selectedDate) {
                $("#to").datepicker("option", "minDate", selectedDate);
            }
        });
    }
    if ($('#to').length) {
        $("#to").datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 3,
            onClose: function (selectedDate) {
                $("#from").datepicker("option", "maxDate", selectedDate);
            }
        });
    }
}
/**** Form
 ---------------------------------------------------------------------------- */
function form() {
    // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
    if (!String.prototype.trim) {
        (function () {
            // Make sure we trim BOM and NBSP
            var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
            String.prototype.trim = function () {
                return this.replace(rtrim, '');
            };
        })();
    }
    [].slice.call(document.querySelectorAll('input.input_field,textarea.input_field')).forEach(function (inputEl) {
        // in case the input is already filled..
        if (inputEl.value.trim() !== '') {
            classie.add(inputEl.parentNode, 'input--filled');
        }
        // events:
        inputEl.addEventListener('focus', onInputFocus);
        inputEl.addEventListener('blur', onInputBlur);
    });
    function onInputFocus(ev) {
        classie.add(ev.target.parentNode, 'input--filled');
    }
    function onInputBlur(ev) {
        if (ev.target.value.trim() === '') {
            classie.remove(ev.target.parentNode, 'input--filled');
        }
    }
}

/****  Back To Top Animation
 ---------------------------------------------------------------------------- */
$('body').append('<div id="toTop" class="btn btn-info"><span class="fa fa-dot-circle-o top"></span><br>أعلى</div>');
$(window).on('scroll', function () {
    if ($(this).scrollTop() !== 0) {
        $('#toTop').fadeIn();
    } else {
        $('#toTop').fadeOut();
    }
});
$('#toTop').on('click', function () {
    $("html, body").animate({scrollTop: 0}, 600);
    return false;
});
// instance of fuction while Document ready event   
jQuery(document).on('ready', function () {
    (function ($) {
        navIcon();
        sideMenu();
        wowJs();
        owlCarousel();
        newsTicker();
        tab();
        youtube();
        datePicker();
        form();
    })(jQuery);
});
// instance of fuction while Window Load event
jQuery(window).on('load', function () {
    $(".se-pre-con").fadeOut("slow");
    $(".mobile-menu").mCustomScrollbar({theme: "minimal"});
    $(".archive-post").mCustomScrollbar({theme: "minimal-dark"});
});




