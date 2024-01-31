@include('templates.public.header')

<body>
    <!--=================================loading -->
    <div id="loading">
        <div id="loading-center">
            <img src="assets/images/loading-jmt.gif" alt="">
        </div>
    </div>
    @include('templates.public.menu')
    <!--=================================search and side menu content -->
    <div class="search-overlay"></div>
    <div class="menu-overlay"></div>
    <div id="search" class="search header topbar-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <input type="search" placeholder="Pencarian...">
                </div>
            </div>
        </div>
    </div>
    @yield('content')
    @include('templates.public.footer')
</body>
</html>
