<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <meta name="author" content="Rizal Faizurohman"> --}}

    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('/') }}themes/sb_admin/plugins/select2/select2.min.css" /> --}}
    <style type="text/css">
        /*<![CDATA[*/

        .index__user-avatar img {
            width: 175px;
            height: 175px;
            border-radius: 50%;
            object-fit: cover;
        }

        .index__user-detail {
            line-height: 1.3;
        }

        .index__top-skor-avatar img {
            width: 75px;
            height: 75px;
            border-radius: 50%;
            object-fit: cover;
        }

        /*]]>*/
    </style>
    <style type="text/css">
        /*<![CDATA[*/

        .flat {
            border-radius: 3px;
        }

        .loadingku-atas {
            display: none;
            position: fixed;
            z-index: 100001;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: rgba(0, 0, 0, 0.5) url('/images/load.gif') 50% 50% no-repeat;
        }

        button,
        .btn,
        .btn-sm,
        .alert,
        .card {
            border-radius: 3px;
        }

        /*]]>*/
    </style>

    </style>
    {{-- <script type="text/javascript" src="{{ asset('/') }}assets/ca61087a/jquery.min.js"></script> --}}
    <title>Sistem Informasi SPPD - Politeknik Negeri Cilacap</title>
    <!-- Tambahkan ini untuk CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('/') }}themes/sb_admin/src/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->
    <link href="{{ asset('/') }}themes/sb_admin/src/css/google_fonts.css" rel="stylesheet">
    <link href="{{ asset('/') }}themes/sb_admin/src/css/sb-admin-2.css" rel="stylesheet">

    <link rel="icon" href="{{ asset('/') }}images/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('/') }}images/logo.png" type="image/x-icon">

    <!-- Custom styles for this page -->
    <link href="{{ asset('/') }}themes/sb_admin/src/vendor/datatables/dataTables.bootstrap4.min.css"
        rel="stylesheet">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('themes/sb_admin/plugins/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/sb_admin/plugins/sweetalert2/sweetalert-custom.css') }}">

    <!-- Custom CSS dari tiap view (jika ada) -->
    @stack('css')

    <noscript>
        <div class="bg-danger text-white p-3">
            Javascript is disabled. Please enable it, or use other browser(s).
        </div>
    </noscript>
</head>

<body id="page-top">

    <div id="wrapper">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- End of Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-3 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Header -->
                    @include('layouts.header')
                    <!-- End of Header -->

                </nav>

                <!-- Isi Page Content Di sini! -->
                {{-- <div class="container-fluid"> --}}
                @yield('content')
                {{-- </div> --}}
            </div>

            <!-- Footer -->
            @include('layouts.footer')
            <!-- End of Footer -->
        </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>

    <div class="loadingku-atas">&nbsp;</div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('/') }}themes/sb_admin/src/vendor/jquery/jquery.min.js"></script>
    {{-- <script src="{{ asset('/') }}themes/sb_admin/plugins/chartjs/chart.min.js"></script> --}}
    <script src="{{ asset('/') }}themes/sb_admin/src/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}themes/sb_admin/src/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="{{ asset('/') }}themes/sb_admin/src/js/sb-admin-2.min.js"></script>
    {{-- <script src="{{ asset('/') }}themes/sb_admin/src_login/vendor/togglePassword/hideShowPassword.min.js"></script> --}}
    {{-- <script src="{{ asset('/') }}themes/sb_admin/plugins/select2/select2.full.min.js"></script> --}}
    {{-- <script src="{{ asset('/') }}themes/sb_admin/plugins/floathead/jquery.floatThead.min.js"></script> --}}
    <script src="{{ asset('/') }}themes/sb_admin/plugins/jam/jam.js"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('/') }}themes/sb_admin/src/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/') }}themes/sb_admin/src/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    {{-- <script src="{{ asset('/') }}themes/sb_admin/src/js/demo/datatables-demo.js"></script> --}}
    <!-- Validator -->
    <script src="{{ asset('js/validator.min.js') }}"></script>
     <!-- SweetAlert2 -->
    <script src="{{ asset('themes/sb_admin/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    <script type="text/javascript">
        // showTime();
        showDateTime();

        function loading_start() {
            $('.loadingku-atas').fadeIn();
        }

        function loading_end() {
            $('.loadingku-atas').fadeOut();
        }

        $(window).bind('beforeunload', function() {
            loading_start();
        });
    </script>
    {{-- <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8fc37d5f5d9a8339","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"version":"2024.10.5","token":"83c79eeada01454e9a743a8c39fbac50"}'
        crossorigin="anonymous"></script> --}}

    <!-- Custom JS dari tiap view (jika ada) -->
    @stack('scripts')
</body>

</html>
