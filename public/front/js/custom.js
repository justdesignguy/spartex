jQuery(document).ready(function () {
    AOS.init();
    jQuery('.process-menu a').click(function (e) {
        e.preventDefault();
        var href = jQuery(this).attr('href');
        jQuery("html:not(:animated),body:not(:animated)").animate({
            'scrollTop': jQuery(href).offset().top
        }, 700, 'swing');
        return false;
    });
    jQuery(window).scroll(function () {
        var href = jQuery(this).scrollTop();
        jQuery('.process-menu a').each(function (event) {
            if (href >= jQuery(jQuery(this).attr('href')).offset().top - 500) {
                jQuery('.process-menu a').not(this).removeClass('active');
                jQuery(this).addClass('active');
            }
        });
    });
    jQuery('.process-menu a').click(function () {
        jQuery(this).addClass('active');
    });

    jQuery('.toggle').click(function () {
        jQuery('.toggle-button').toggleClass('active');
    });
    jQuery('.toggle').click(function (e) {
        jQuery(this).toggleClass('active');
        jQuery('.site-menu .menu').toggleClass('active');
        jQuery('html,body').toggleClass('scroll-off');
        e.preventDefault();
    });
});
