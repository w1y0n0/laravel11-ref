<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript" src="{{ asset('assets/ca61087a/jquery.min.js') }}"></script>
    <title>Sistem Informasi SPPD - Politeknik Negeri Cilacap</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta name="author" content="Rizal Faizurohman"> --}}
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('themes/sb_admin/src_login/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('themes/sb_admin/src_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('themes/sb_admin/src_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/sb_admin/src_login/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('themes/sb_admin/src_login/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('themes/sb_admin/src_login/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/sb_admin/src_login/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/sb_admin/src_login/css/main.css') }}">
    <!--===============================================================================================-->
    <style>
        .flat {
            border-radius: 0;
        }

        .bg-ku {
            background: rgba(255, 255, 255, 0.5);
            /* background: #03001e; */
            /* background: -webkit-linear-gradient(to top left, #0652DD, #F4F5FF);
                background: linear-gradient(to top left, #0652DD, #F4F5FF); */
        }

        .wrap-ku {
            box-shadow: 0 10px 75px #c3c5c2;
            /* box-shadow: 0 10px 75px #0652DD; */
        }

        .login-button {
            background-color: #263f55;
            color: white;
            /* Tambahkan warna teks jika perlu */
            border: none;
            /* Opsional: Hapus border */
            padding: 10px 20px;
            /* Opsional: Ukuran tombol */
            cursor: pointer;
            /* Memberikan efek pointer saat hover */
            transition: background-color 0.3s ease;
            /* Efek transisi */
        }

        .login-button:hover {
            background-color: green;
            /* Warna hijau saat hover */
        }


        .loadingku-atas {
            display: none;
            position: fixed;
            z-index: 100000;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: rgba(255, 255, 255, 0.5) url("images/load.gif") 50% 50% no-repeat;
        }
    </style>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
</head>

<body>

    <div class="limiter">
        <div class="container-login100 bg-ku">
            <div class="wrap-login100 wrap-ku flat">
                <div class="login100-form-title"
                    style="background-image: url('{{ asset('themes/sb_admin/src_login/images/bg-02.jpg') }}'); padding-top: 30px; padding-bottom: 20px;">
                    <img src="{{ asset('images/pnc.svg') }}" style="width: 75px;">
                    <span class="login100-form-title-1"
                        style="text-transform: none; text-shadow: 2px 2px 1px rgba(0,0,0,0.6); margin-top: 10px; font-size: 16px; line-height: 150%;">
                        Surat Perintah Perjalanan Dinas
                        <br>
                        Politeknik Negeri Cilacap
                    </span>
                </div>

                <form class="login100-form validate-form" onsubmit="loading_start()" id="login-form" action="/home"
                    method="get">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Username</span>
                        <input placeholder="Masukkan Username" class="input100" required="required"
                            name="LoginForm[username]" id="LoginForm_username" type="text" />
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input placeholder=" Masukkan Password" class="input100 togglePass" required="required"
                            name="LoginForm[password]" id="LoginForm_password" type="password" />
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-30">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox"
                                onchange="$('.togglePass').togglePassword();">
                            <label class="label-checkbox100" for="ckb1">Tampilkan Password</label>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn flat mr-2 login-button">
                            Login
                        </button>
                        {{-- <button type="button" class="btn btn-outline-success flat"
                            onclick="window.open('https://data-sdm.kemdikbud.go.id/', '_blank').focus();">
                            Lupa Password?
                        </button> --}}
                    </div>

                </form>
                <div style="background-color: #263f55; padding: 15px 20px; color: white; text-align: center;">
                    {{-- copyrigth --}}
                    <p style="color: white;">&copy; 2025 <a href="https://www.pnc.ac.id/" target="_blank"
                            style="color: white;">Politeknik Negeri Cilacap</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="loadingku-atas">
        &nbsp;
    </div>

    <!--===============================================================================================-->
    <!-- <script src="/themes/sb_admin/src_login/vendor/jquery/jquery-3.2.1.min.js"></script> -->
    <!--===============================================================================================-->
    <script src="{{ asset('themes/sb_admin/src_login/vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('themes/sb_admin/src_login/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('themes/sb_admin/src_login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <!-- <script src="{{ asset('themes/sb_admin/src_login/vendor/select2/select2.min.js') }}"></script> -->
    <!--===============================================================================================-->
    <script src="{{ asset('themes/sb_admin/src_login/vendor/daterangepicker/moment.min.js') }}"></script>
    <!-- <script src="{{ asset('themes/sb_admin/src_login/vendor/daterangepicker/daterangepicker.js') }}"></script>
        -->
    <!--===============================================================================================-->
    <!-- <script src="{{ asset('themes/sb_admin/src_login/vendor/countdowntime/countdowntime.js') }}"></script>
        -->
    <!--===============================================================================================-->
    <script src="{{ asset('themes/sb_admin/src_login/js/main.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('themes/sb_admin/src_login/vendor/togglePassword/hideShowPassword.min.js') }}"></script>

    <script>
        function loading_start() {
            $('.loadingku-atas').fadeIn();
        }
    </script>

    {{-- <script defer="defer"
        src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8fc0da63097ace55","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"version":"2024.10.5","token":"83c79eeada01454e9a743a8c39fbac50"}'
        crossorigin="anonymous"></script> --}}
</body>

</html>
