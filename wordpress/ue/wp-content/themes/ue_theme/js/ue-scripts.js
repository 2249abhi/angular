/*jQuery(window).bind("load", function() {
 var current = jQuery(document).scrollTop();
 window.scrollTo(window.scrollX, current - 200);
 });	*/

jQuery(document).ready(function () {

    jQuery(".question").click(function () {
        var id = jQuery(this).attr('id');
        if (jQuery(document).width() < 768) {
            var totalHeight = jQuery('header').height() + jQuery('#sidebar-options').height();
        } else {
            var totalHeight = jQuery('header').height();
        }
        jQuery('html, body').animate({
            scrollTop: jQuery("#" + id).offset().top - totalHeight - 20
        }, 500);
    });
    if (window.location.href.indexOf("collapse") > -1) {

        var collapse_id = window.location.hash;
        jQuery('.question_block').removeClass('active');
        jQuery('.collapse').removeClass('show');
        jQuery(collapse_id).closest('.collapse').addClass('show');
        jQuery(collapse_id).closest('.question_block').addClass('active');
        if (jQuery(document).width() < 768) {
            var totalHeight = jQuery('header').height() + jQuery('#sidebar-options').height();
        } else {
            var totalHeight = jQuery('header').height();
        }
        jQuery('html, body').animate({
            scrollTop: jQuery(collapse_id).offset().top - totalHeight - 60
        }, 500);

    }

    jQuery('.faq-filter').click(function () {
        jQuery('.question_block').fadeOut();
        jQuery('.' + jQuery(this).attr('data-target')).fadeIn();
    });

    //Filter for faqs

    jQuery('#search-criteria').keyup(function () {
        jQuery('.question_block').hide();
        var txt = jQuery('#search-criteria').val();
        jQuery('.question_block').each(function () {
            if (jQuery(this).text().toUpperCase().indexOf(txt.toUpperCase()) != -1) {
                jQuery(this).show();
            }
        });
    });

    jQuery('#sidebar-options').change(function () {
        var elem = jQuery('#sidebar-options').find(":selected");
        if (jQuery(elem).hasClass('url-switch')) {
            window.location.href = jQuery(elem).attr('data-target');
        } else {
            jQuery('.question_block').fadeOut();
            jQuery('.' + jQuery(elem).attr('data-target')).fadeIn();
        }
    });



    /*$("#product-form").validate({
     error: function(label) {
     $(this).addClass("validateerror");
     },
     });*/


//00Ni000000Em9fi 00Ni000000Em9fs

    /*document.addEventListener('invalid', (function () {
     return function (e) {
     e.preventDefault();
     document.getElementById("00Ni000000Em9fi").focus();
     };
     })(), true);*/

     jQuery(".form-control, input[type='text'], input[type='email']").focus(function () {

        jQuery(this).removeClass('validateerror');
         
    });


    jQuery('#captchaFormid').submit(function (e) {

        jQuery('#captchaFormid').attr('novalidate', '');

        var emailaddress = jQuery('#email').val();

        if (!validateWBEmail(emailaddress)) {
            e.preventDefault(e);
            jQuery('#email').addClass('validateerror');
        }


        jQuery(".form-control").each(function () {
            if (jQuery(this).val() == "") {
                e.preventDefault(e);
                jQuery(this).addClass('validateerror');

            }
        });
    });


    /*    jQuery('#fullpage').fullpage({
     'verticalCentered': true,
     'css3': true,
     'paginationClickable': true,
     'mousewheelControl': true,
     'keyboardControl': true,
     'navigation': true,
     'scrollBar': true,
     'navigationPosition': 'right',
     'scrollingSpeed': 2000,
     //        anchors: ['register','step1', 'step2', 'step3', 'step4', 'step5','step6','step7','step8','step9','step10'],
     
     anchors: ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'twelve'],
     menu: '#menu',
     scrollingSpeed: 1000
     });*/



//    jQuery('input').iCheck({
//        checkboxClass: 'icheckbox_square-blue',
//        radioClass: 'iradio_square-blue',
//        increaseArea: '20%' // optional
//    });
    jQuery(".card-header a").click(function () {
        if (jQuery(this).parent().parent().parent().hasClass('active')) {
            jQuery('.question_block').removeClass('active');
        } else {
            jQuery(this).parent().parent().parent().addClass('active');
        }
        jQuery('.question_block').removeClass('active');
        jQuery(this).parent().parent().parent().addClass('active');
    });

    jQuery('.support-type').click(function () {
        var id = jQuery(this).attr("id");
        if (id == 'all')
        {
            jQuery('.question_block').show();
        } else
        {
            jQuery('.question_block').hide();
            jQuery('.' + id).show();
        }
    });

    jQuery(window).scroll(function () {

        if (jQuery('#fixed_sidebar').length === 0) {
            return;
        }
        var scrollTop = jQuery(window).scrollTop();
        var elementOffset = jQuery('#fixed_sidebar').offset().top;
        var distance = (elementOffset - scrollTop);
        if (distance <= 80) {
            jQuery('#fixed_sidebar').addClass('fix');
        } else
        {
            jQuery('#fixed_sidebar').removeClass('fix');
        }
    });


    jQuery('#register-product').click(function (e) {
        e.preventDefault();
        var formElemt = jQuery('#product-form').serialize();
        formElemt.action = 'register_product';

        jQuery("input[type='text'], .form-control").each(function () {
            if (jQuery(this).val() == "") {
                jQuery(this).addClass('validateerror');
            }
        });


        var emailaddress = jQuery('#email').val();

        if (!validateWBEmail(emailaddress)) {
            jQuery('#email').addClass('validateerror');
        }


        jQuery.each(jQuery('.rec'), function (index, value) {
            if (jQuery(value).val() == '') {
                jQuery(value).addClass('error');
            } else {
                jQuery(value).removeClass('error');
            }
        });
        if (!validateProductSerial(jQuery('#product-serial').val())) {
            jQuery('#product-serial').addClass('error');
            return false;
        } else {
            jQuery('#product-serial').removeClass('error');
        }
        if (jQuery('#product-form .error').length !== 0) {
            return;
        }
        

        if($('#product-form').find('.validateerror').length == 0) {
            jQuery.ajax({
                url: ue_ajax.url,
                method: 'POST',
                data: formElemt,
                success: function (data) {
                    data = JSON.parse(data);
                    if (data.status === 'success') {
                        jQuery('#product-form').remove();
                        jQuery('.sub_title').html(data.msg);
                    } else {
                        jQuery('.sub_title').html('<div class="sub_title">' + data.msg + '</div>');
                    }
                }
            });
        }
    });
});
function timestamp() {
    if (jQuery('#g-recaptcha-response').length !== 0) {
        var response = document.getElementById("g-recaptcha-response");
        if (response == null || response.value.trim() == "") {
            var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);
            elems["ts"] = JSON.stringify(new Date().getTime());
            document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems);
        }
    }
}
setInterval(timestamp, 500);
function doSomething() {
    document.getElementById('captchaFormid').action = "https://webto.salesforce.com/servlet/servlet.WebToCase?encoding=UTF-8";
}

function validateProductSerial(val) {

    return true;

    var regExp = /^[a-z0-9]+$/i;
    var alphaOnly = /^[a-z]+$/i;
    if (val.length !== 12) {
        return false;
    }
    if (!regExp.test(val)) {
        return false;
    }
    var currentYear = new Date().getFullYear().toString().substr(-2);
    var yearCode = val[0] + val[1];
    yearCode = parseInt(yearCode);
    if (isNaN(yearCode)) {
        return false;
    }
    if (yearCode > currentYear) {
        return false;
    }
    var weekCode = val[2] + val[3];
    weekCode = parseInt(weekCode);
    if (isNaN(weekCode)) {
        return false;
    }
    if (weekCode > 52 || weekCode < 1) {
        return false;
    }
    var locationCode = val[4] + val[5];
    if (!alphaOnly.test(locationCode)) {
        return false;
    }
    return true;
}
function validateWBEmail(e) {
    var a = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return a.test(e);
}
