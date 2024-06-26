<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>JTM GROUP</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <!-- CSS files -->
    <link href="{{ asset('assets/template/css/tabler.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('assets/template/css/tabler-flags.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('assets/template/css/tabler-payments.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('assets/template/css/tabler-vendors.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('assets/template/css/demo.min.css?1684106062') }}" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body class=" d-flex flex-column">
    <script src="{{ asset('assets/template/js/demo-theme.min.js?1684106062') }}"></script>
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="/" class="navbar-brand navbar-brand-autodark"><img
                        src="{{ asset('assets/images/logo.webp') }}" height="36" alt=""></a>
            </div>
            <div class="card card-md">
                <div class="card-body">
                    <h2 class="h2 text-center mb-4">Login to your account</h2>
                    <form action="./" method="get" autocomplete="off" novalidate>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" id="email" class="form-control" placeholder="email@email.com"
                                autocomplete="off">
                            <span class="error-email text-danger d-none"></span>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">
                                Password
                            </label>
                            <div class="input-group input-group-flat">
                                <input type="password" id="password" class="form-control" placeholder="Password anda"
                                    autocomplete="off">
                                <span class="input-group-text">
                                    <a href="#" class="link-secondary" title="Show password"
                                        data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                            <path
                                                d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                        </svg>
                                    </a>
                                </span>
                            </div>
                            <span class="error-password text-danger d-none"></span>
                        </div>
                        <div class="form-footer">
                            <button type="button" id="button" class="btn btn-primary w-100">
                                <div class="spinner-border d-none mx-4" role="status">
                                </div>
                                <span id="tag-button">
                                    Sign in
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/template/js/tabler.min.js?1684106062') }}" defer></script>
    <script src="{{ asset('assets/template/js/demo.min.js?1684106062') }}" defer></script>
    <script src="{{ asset('assets/template/libs/bs-notify/bs-notify.min.js') }}"></script>
    <script src="{{ asset('assets/main/validation.js') }}"></script>
    <script src="{{ asset('assets/main/alert.js') }}"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        $('#button').click(function() {
            $(this).prop('disabled', false);
            $(this).find('.spinner-border').removeClass('d-none');
            $(this).find('#tag-button').addClass('d-none');
            var formData = {
                password: $("#password").val(),
                email: $("#email").val(),
            };

            $.ajax({
                type: "POST",
                url: "{{ route('authenticate') }}",
                data: formData,
                dataType: "json",
                encode: true,
                success: function(response) {
                    showAlert(response.message, 'success')
                    setTimeout(() => {
                        window.location.href = response.redirect;
                    }, 2000);
                },
                error: function(error) {
                    if (error.status == 400 || error.status == 422) {
                        printErrorMsg(error);
                    } else {
                        showAlert(error.responseJSON.message || 'Error', 'danger')
                    }
                },
                complete: function(data) {
                    $('#button').find('.spinner-border').addClass('d-none');
                    $('#button').find('#tag-button').removeClass('d-none');
                }
            });
        });
    </script>
    @include('templates.admin.alert')
</body>

</html>
