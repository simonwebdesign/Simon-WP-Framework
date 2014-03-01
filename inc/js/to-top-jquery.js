// Created by SimonWebDesign.com
// Scroll to top

function totop() {
    jQuery("html, body").animate({scrollTop: 0}, "fast");
    return false;
}

// Fade in and out to top arrow
jQuery(window).bind("scroll", function () {
    if (jQuery(this).scrollTop() > 320) {
        jQuery(".to-top-jquery").fadeIn();
    } else {
        jQuery(".to-top-jquery").stop().fadeOut();
    }
});


