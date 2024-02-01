<!-- Tabler Core -->
<script src="{{ asset('assets/template/js/tabler.min.js?1684106062') }}" defer></script>
<script src="{{ asset('assets/template/js/demo.min.js?1684106062') }}" defer></script>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/template/libs/bs-notify/bs-notify.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#logout').click(function(event) {
            event.preventDefault();
            var form = $('#logout-form');
            form.submit();
        });
    });
</script>
@stack('scripts')
