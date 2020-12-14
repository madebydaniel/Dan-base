function sticky_relocate() {
    var window_top = jQuery(window).scrollTop();
    var div_top = jQuery('#sticky-anchor').offset().top;
    var div_top_plus = div_top + 50;
    var nav_height = jQuery('.nav-main').outerHeight();

    if (window_top > div_top_plus) {
        jQuery('.nav-main').addClass('stick');
        //jQuery('#sticky-anchor').css('height', nav_height);
    } 
    else {
        jQuery('.nav-main').removeClass('stick');
        //jQuery('#sticky-anchor').css('height', 0);
    }

    if (window_top > div_top_plus) {
        jQuery('.nav-main').addClass('shrink');
    } else {
        jQuery('.nav-main').removeClass('shrink');
    }
}