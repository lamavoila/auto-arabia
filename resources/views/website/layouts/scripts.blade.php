<script src="{{ asset("assets/vendors/jquery/jquery-3.6.0.min.js")}}"></script>
<script src="{{ asset("assets/vendors/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{ asset("assets/vendors/jarallax/jarallax.min.js")}}"></script>
<script src="{{ asset("assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js")}}"></script>
<script src="{{ asset("assets/vendors/jquery-appear/jquery.appear.min.js")}}"></script>
<script src="{{ asset("assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js")}}"></script>
<script src="{{ asset("assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js")}}"></script>
<script src="{{ asset("assets/vendors/jquery-validate/jquery.validate.min.js")}}"></script>
<script src="{{ asset("assets/vendors/nouislider/nouislider.min.js")}}"></script>
<script src="{{ asset("assets/vendors/odometer/odometer.min.js")}}"></script>
<script src="{{ asset("assets/vendors/swiper/swiper.min.js")}}"></script>
<script src="{{ asset("assets/vendors/tiny-slider/tiny-slider.min.js")}}"></script>
<script src="{{ asset("assets/vendors/wnumb/wNumb.min.js")}}"></script>
<script src="{{ asset("assets/vendors/wow/wow.js")}}"></script>
<script src="{{ asset("assets/vendors/isotope/isotope.js")}}"></script>
<script src="{{ asset("assets/vendors/countdown/countdown.min.js")}}"></script>
<script src="{{ asset("assets/vendors/owl-carousel/owl.carousel.min.js")}}"></script>
<script src="{{ asset("assets/vendors/bxslider/jquery.bxslider.min.js")}}"></script>
<script src="{{ asset("assets/vendors/bootstrap-select/js/bootstrap-select.min.js")}}"></script>
<script src="{{ asset("assets/vendors/vegas/vegas.min.js")}}"></script>
<script src="{{ asset("assets/vendors/jquery-ui/jquery-ui.js")}}"></script>
<script src="{{ asset("assets/vendors/timepicker/timePicker.js")}}"></script>
<script src="{{ asset("assets/vendors/circleType/jquery.circleType.js")}}"></script>
<script src="{{ asset("assets/vendors/circleType/jquery.lettering.min.js")}}"></script>
<script src="{{ asset("assets/vendors/sidebar-content/jquery-sidebar-content.js")}}"></script>



<script>
    jQuery.extend(jQuery.validator.messages, {
        required: "{{ __("required") }}",
        email: "{{ __("email_valid")}}",
        url: "Please enter a valid URL.",
        date: "Please enter a valid date.",
        number: "Please enter a valid number.",
        digits: "Please enter only digits.",
        creditcard: "Please enter a valid credit card number.",
        equalTo: "Please enter the same value again.",
        maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
        minlength: jQuery.validator.format("Please enter at least {0} characters."),
        rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
        range: jQuery.validator.format("Please enter a value between {0} and {1}."),
        max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
        min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
    });
</script>
<!-- template js -->
<script src="{{ asset("assets/js/austry.js")}}"></script>
