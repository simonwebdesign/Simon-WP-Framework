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

// Attach HTML + CSS for all browsers
jQuery(document).ready(function () {

    jQuery('<div class="to-top-jquery"><a href="#" onclick="totop();"><img src="'+templateDir+'/to-top-jquery/to-top-jquery.png" width="30" height="30" /></a></div>').appendTo('body');

    if (document.createStyleSheet) {
        document.createStyleSheet("'+templateDir+'/to-top-jquery/to-top-jquery.css");
    } else {
        jQuery("head")
        jQuery('head').append('<link rel="stylesheet" href="'+templateDir+'/to-top-jquery/to-top-jquery.css" type="text/css" />');
    }
});