(function ($) {
    "use strict";
    jQuery(document).ready(function () {
        $(function () {
            $("#contact-form").validate({
                rules: { name: { required: !0, minlength: 2 }, email: { required: !0 }, message: { required: !0 } },
                messages: { name: { required: "<div class='text-danger' style='border-bottom:1px red solid; width:60px'>&nbsp;</div>", minlength: "<div class='text-danger' style='border-bottom:1px red solid; width:60px'>&nbsp;</div>" }, email: { required: "<div class='text-danger' style='border-bottom:1px red solid; width:60px'>&nbsp;</div>" }, message: { required: "<div class='text-danger' style='border-bottom:1px red solid; width:60px'>&nbsp;</div>" } },
                submitHandler: function (form) {
                    $(form).ajaxSubmit({
                        type: "POST",
                        data: $(form).serialize(),
                        url: "../assets/php/process.php",
                        success: function () {
                                $("#msgsuccess").show();
                        },
                        error: function () {
                            $("#contact").fadeTo("slow", 1, function () {
                                $("#msgerror").show();

                            });
                        },
                    });
                },
            });
        });
    });
})(jQuery);






















