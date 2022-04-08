<!-- JS -->
<script src="{{asset('/assets/style/js/jquery.min.js')}}"></script>
<script src="{{ asset('/app-assets/vendors/js/toastr/toastr.min.js')}}"></script>
<script src="{{ asset('/assets/style/auth/auth.js') }}"></script>
<script>
    var isRtl = $('html').attr('data-textdirection') === 'rtl';
    // Set the options that I want
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
</script>