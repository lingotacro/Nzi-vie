{{--<!-- Toastr js -->--}}
<script src="{{ asset('js/toastr.min.js') }}"></script>
<script type="text/javascript">
    function toasterOptions() {
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    }
    toasterOptions(4);
    @if($errors->any())
    toastr.error("Veuillez remplir correctement le formulaire");
    @endif

    @if(session('error'))
    toastr.error('<?= addslashes(session('error')) ?>');
    @endif

    @if(session('success'))
    toastr.success('<?= addslashes(session('success')) ?>');
    @endif

    @if(session('info'))
    toastr.info('<?= addslashes(session('info')) ?>');
    @endif
</script>
