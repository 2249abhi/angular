jQuery(document).ready(function () {
    jQuery(window).scroll(function () {
        if (!jQuery('#fixed_sidebar')){
            return;
        }
        var scrollTop = jQuery(window).scrollTop();
        var elementOffset = jQuery('#fixed_sidebar').offset().top;
        var distance = (elementOffset - scrollTop);
        if (distance <= 0) {
            jQuery('#fixed_sidebar').addClass('fix');
        } else
        {
            jQuery('#fixed_sidebar').removeClass('fix');
        }
    });
});	