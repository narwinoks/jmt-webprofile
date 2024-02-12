<!doctype html>
<html lang="en">
@include('templates.admin.header')

<body>
    <script src="{{ asset('assets/template') }}/js/demo-theme.min.js?1684106062"></script>
    <div class="page">
        @include('templates.admin.navbar')
        <div class="page-wrapper">
            <!-- Page header -->
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <h2 class="page-title">
                                {{ Breadcrumbs::current()->title }}
                            </h2>
                        </div>
                        <!-- Page title actions -->
                        <div class="col-auto ms-auto d-print-none">
                            <div class="d-flex">
                                {{ Breadcrumbs::render() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @yield('content')
            @include('templates.admin.footer')
        </div>
    </div>
    @include('templates.admin.scripts')
    @include('templates.admin.alert')
</body>
</body>

</html>
