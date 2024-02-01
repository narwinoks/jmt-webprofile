<!doctype html>
<html lang="en">
@include('templates.admin.header')

<body>
    <script src="{{ asset('assets/template') }}/js/demo-theme.min.js?1684106062"></script>
    <div class="page">
        @include('templates.admin.navbar')
        <div class="page-wrapper">
            @yield('content')
            @include('templates.admin.footer')
        </div>
    </div>
    @include('templates.admin.scripts')
    @include('templates.admin.alert')
</body>
</body>

</html>
