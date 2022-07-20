jQuery(document).ready(function () {
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
});
