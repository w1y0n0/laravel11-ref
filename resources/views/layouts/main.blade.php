<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <meta name="author" content="Rizal Faizurohman"> --}}

    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}themes/sb_admin/plugins/select2/select2.min.css" />
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

        .loadingku-atas-2 {
            display: none;
            position: fixed;
            z-index: 100000;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: rgba(0, 0, 0, 0.5) url('/images/load.gif') 50% 50% no-repeat;
        }

        .cgridview_pager_hidden {
            display: none;
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
    <style type="text/css">
        /*<![CDATA[*/

        table.table-float {
            border: 1px solid #dcdde1;
        }

        table.table-float>thead {
            background-color: #ecf0f1;
        }

        table.table-float>thead>tr>th,
        table.table-float>thead>tr>td {
            border: 1px solid #dcdde1;
        }

        table.table-float>tbody>tr>td {
            border: 1px solid #dcdde1;
            padding-top: 10px;
            padding-bottom: 15px;
        }

        table.table-blue,
        table.table-blue>thead>tr>th,
        table.table-blue>thead>tr>td,
        table.table-blue>tbody>tr>td {
            border: 1px solid #54a0ff;
        }

        /*]]>*/
    </style>
    <style type="text/css">
        /*<![CDATA[*/

        .select2-selection__rendered {
            line-height: 31px !important;
        }

        .select2-container .select2-selection--single {
            height: 35px !important;
        }

        .select2-selection__arrow {
            height: 34px !important;
        }

        /*]]>*/
    </style>
    <script type="text/javascript" src="{{ asset('/') }}assets/ca61087a/jquery.min.js"></script>
    <title>Sistem Informasi SPPD - Politeknik Negeri Cilacap</title>

    <link href="{{ asset('/') }}themes/sb_admin/src/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->
    <link href="{{ asset('/') }}themes/sb_admin/src/css/google_fonts.css" rel="stylesheet">
    <link href="{{ asset('/') }}themes/sb_admin/src/css/sb-admin-2.css" rel="stylesheet">

    <link rel="icon" href="{{ asset('/') }}images/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('/') }}images/logo.png" type="image/x-icon">

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
    <div class="loadingku-atas-2">&nbsp;</div>
    <script type="text/javascript" src="{{ asset('/') }}themes/sb_admin/plugins/chartjs/chart.min.js"></script>
    <script type="text/javascript"
        src="{{ asset('/') }}themes/sb_admin/src/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}themes/sb_admin/src/vendor/jquery-easing/jquery.easing.min.js">
    </script>
    <script type="text/javascript" src="{{ asset('/') }}themes/sb_admin/src/js/sb-admin-2.min.js"></script>
    <script type="text/javascript"
        src="{{ asset('/') }}themes/sb_admin/src_login/vendor/togglePassword/hideShowPassword.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}themes/sb_admin/plugins/select2/select2.full.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}themes/sb_admin/plugins/floathead/jquery.floatThead.min.js">
    </script>
    <script type="text/javascript" src="{{ asset('/') }}themes/sb_admin/plugins/jam/jam.js"></script>
    <script type="text/javascript">
        /*<![CDATA[*/

        function stat_bulanan_change_bulan() {
            request = $.ajax({
                url: '{{ asset('/') }}site/stat_bulanan_change_bulan.jsp',
                type: 'post',
                beforeSend: function() {
                    $('.loadingku-atas').fadeIn()
                },
                data: {
                    bulan: $('#stat_bulanan_bulan').val(),
                    YII_CSRF_TOKEN: 'bXVVVmpDZ183SzlsSDkxemtEV3l2enF5cF9rajZsM3FFIi4HAeNgSdvw6sAdcw1hLmj_ArOQEcsiRx4u2liiPg=='
                },
            });
            request.done(function(response, textStatus, jqXHR) {
                $('.loadingku-atas-2').fadeIn()
                window.location.reload();
            });
            request.fail(function(jqXHR, textStatus, errorThrown) {
                alert('The following error occurred: ' + textStatus + ' ' + errorThrown);
            });
            request.always(function() {
                $('.loadingku-atas').fadeOut();
            });
        }


        const data = {
            labels: [
                ['1. Jumlah Log Harian', '(100.00)'],
                ['3. Keterkaitan Log', 'Harian dengan SKP', '(100.00)'],
                ['4. Nilai Capaian Bulanan', '(80.00)'],
                ['2. Ketepatan Waktu', 'Pengisian Log Harian', '(54.09)'],
            ],
            datasets: [{
                label: 'Nilai',
                data: [100.00, 100.00, 80.00, 54.09],
                fill: true,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgb(255, 99, 132)',
                pointBackgroundColor: 'rgb(255, 99, 132)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(255, 99, 132)'
            }, ]
        };

        const config = {
            type: 'radar',
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                elements: {
                    line: {
                        borderWidth: 3
                    }
                },
                scales: {
                    r: {
                        suggestedMin: 0,
                        suggestedMax: 100
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    },
                }
            }
        };

        const myChart = new Chart(
            document.getElementById('chart_stat_bulanan'),
            config
        );

        function stat_bulanan_update_skor() {
            request = $.ajax({
                url: '{{ asset('/') }}pegawai/site/stat_bulanan_update_skor.jsp',
                type: 'post',
                beforeSend: function() {
                    $('.loadingku-atas').fadeIn()
                },
                data: {
                    bulan: $('#stat_bulanan_bulan').val(),
                    tahun: 2024,
                    YII_CSRF_TOKEN: 'bXVVVmpDZ183SzlsSDkxemtEV3l2enF5cF9rajZsM3FFIi4HAeNgSdvw6sAdcw1hLmj_ArOQEcsiRx4u2liiPg=='
                },
            });
            request.done(function(response, textStatus, jqXHR) {
                $('.loadingku-atas-2').fadeIn()
                window.location.reload();
            });
            request.fail(function(jqXHR, textStatus, errorThrown) {
                alert('The following error occurred: ' + textStatus + ' ' + errorThrown);
            });
            request.always(function() {
                $('.loadingku-atas').fadeOut();
            });
        }

        // showTime();
        showDateTime();

        var idleTime = 0;
        $(document).ready(function() {
            // Increment the idle time counter every minute.
            var idleInterval = setInterval(timerIncrement, 60000);

            // Zero the idle timer on mouse movement.
            $(this).on('mousedown mousemove keydown click scroll touchstart', function() {
                idleTime = 0;
            });
        });

        function timerIncrement() {
            idleTime++;
            if (idleTime >= 90) {
                location.href = '{{ asset('/') }}site/logout.jsp';
            }
        }


        function loading_start() {
            $('.loadingku-atas').fadeIn();
        }

        function loading_end() {
            $('.loadingku-atas').fadeOut();
        }
        $(window).bind('beforeunload', function() {
            loading_start();
        });

        function loading_start2() {
            $('.loadingku-atas-2').fadeIn();
        }

        function loading_end2() {
            $('.loadingku-atas-2').fadeOut();
        }


        function loading_start_2() {
            $('.loadingku-atas-2').fadeIn();
        }

        function loading_end_2() {
            $('.loadingku-atas-2').fadeOut();
        }

        jQuery(function($) {
            jQuery('body').on('change', '#pilih_posisi_tahun', function() {
                jQuery.ajax({
                    'type': 'POST',
                    'url': '\x2Fskp\x2Fpegawai\x2Fsite\x2Fset_durasi.jsp',
                    'data': {
                        thn: $(this).val(),
                        YII_CSRF_TOKEN: 'bXVVVmpDZ183SzlsSDkxemtEV3l2enF5cF9rajZsM3FFIi4HAeNgSdvw6sAdcw1hLmj_ArOQEcsiRx4u2liiPg=='
                    },
                    'beforeSend': function() {
                        $(".loadingku-atas").fadeIn();
                    },
                    'success': function(data) {
                        $('#pilih_posisi_durasi').html(data);
                        $('#pilih_posisi_durasi').change();
                    },
                    'error': function(x, t, m) {
                        alert(x.responseText);
                        $(".loadingku-atas").fadeOut();
                    },
                    'cache': false
                });
                return false;
            });
            jQuery('body').on('change', '#pilih_posisi_durasi', function() {
                jQuery.ajax({
                    'type': 'POST',
                    'url': '\x2Fskp\x2Fpegawai\x2Fsite\x2Fset_unit_jabatan.jsp',
                    'data': {
                        posisi_id: $(this).val(),
                        YII_CSRF_TOKEN: 'bXVVVmpDZ183SzlsSDkxemtEV3l2enF5cF9rajZsM3FFIi4HAeNgSdvw6sAdcw1hLmj_ArOQEcsiRx4u2liiPg=='
                    },
                    'beforeSend': function() {
                        $(".loadingku-atas").fadeIn();
                    },
                    'success': function(data) {
                        var respon = JSON.parse(data);
                        $('#pilih_posisi_nama_unit').val(respon.nama_unit);
                        $('#pilih_posisi_nama_jabatan').val(respon.nama_jabatan);

                        $(".loadingku-atas").fadeOut();
                    },
                    'error': function(x, t, m) {
                        alert(x.responseText);
                        $(".loadingku-atas").fadeOut();
                    },
                    'cache': false
                });
                return false;
            });

            function templateResult(item, container) {
                // replace the placeholder with the break-tag and put it into an jquery object
                return $('<span>' + item.text.replace(/__/g, '<br>') + '</span>');
            }

            function templateSelection(item, container) {
                // replace your placeholder with nothing, so your select shows the whole option text
                return item.text.replace('__', ' - ').replace('<b>', '').replace('</b>', '');
            }
            $('.select_2').select2({
                templateResult: templateResult,
                templateSelection: templateSelection
            });


            $('[data-toggle="tooltip"]').tooltip();


            $(".table-float").floatThead({
                responsiveContainer: function($table) {
                    return $table.closest(".table-responsive");
                },
                zIndex: 900,
            });
            // $("#tabelFilter").floatThead();


            $('input[type=number]').on('wheel', function(e) {
                return false;
            });

        });
        /*]]>*/
    </script>
    {{-- <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8fc37d5f5d9a8339","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"version":"2024.10.5","token":"83c79eeada01454e9a743a8c39fbac50"}'
        crossorigin="anonymous"></script> --}}
</body>

</html>
