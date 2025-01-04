@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-2 flat">
                    <div class="card-header py-3">
                        <div class="float-right">

                            <form autocomplete="off" class="form-inline" id="pilih-posisi-terpilih-form"
                                action="{{ asset('/') }}pegawai/site/save_posisi_terpilih.jsp" method="post">
                                <input type="hidden"
                                    value="bXVVVmpDZ183SzlsSDkxemtEV3l2enF5cF9rajZsM3FFIi4HAeNgSdvw6sAdcw1hLmj_ArOQEcsiRx4u2liiPg=="
                                    name="YII_CSRF_TOKEN" />
                                <select id="pilih_posisi_tahun" class="form-control form-control-sm flat mb-1 mr-sm-2"
                                    required="required" name="posisiTerpilih[tahun]">
                                    <option value="">- Pilih Tahun -</option>
                                    <option value="2024" selected="selected">2024</option>
                                    <option value="2023">2023</option>
                                </select>
                                <select id="pilih_posisi_durasi" class="form-control form-control-sm flat mb-1 mr-sm-2"
                                    required="required" name="posisiTerpilih[durasi]">
                                    <option value="">- Pilih Durasi -</option>
                                    <option value="161007" selected="selected">01 Januari 2024 - 31
                                        Desember 2024</option>
                                </select>
                                <input type="text" class="form-control form-control-sm flat mb-1 mr-sm-2"
                                    value="Politeknik Negeri Cilacap" id="pilih_posisi_nama_unit" readonly required
                                    data-toggle="tooltip" data-placement="top" title="Politeknik Negeri Cilacap" />

                                <input type="text" class="form-control form-control-sm flat mb-1 mr-sm-2"
                                    value="Pustakawan Terampil" id="pilih_posisi_nama_jabatan" readonly required
                                    data-toggle="tooltip" data-placement="top" title="Pustakawan Terampil" />

                                <button type="submit" class="btn btn-sm flat btn-primary mb-1 mr-sm-2 px-3">SET</button>

                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div id="my_content">
            <div class="card shadow mb-2">
                <div class="card-body p-0">
                    <table class="table table-sm table-borderless p-0 m-0">
                        <tbody>
                            <tr>
                                <td class="px-3 py-2">
                                    <marquee scrollamount="10" onmouseover="this.stop();" onmouseout="this.start();">
                                        <a href="{{ asset('/') }}pemberitahuan/5.jsp">Sudah bulan
                                            Desember 2024....
                                            Pastikan Dokumen SKP 2024 segera dilengkapi.....klik untuk
                                            detail</a>

                                    </marquee>
                                </td>
                                <td class="px-4 py-2 text-white bg-primary" style="width: 160px;">
                                    <span class="px-2">Pemberitahuan</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-xl-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 pt-2 pb-1 font-weight-bold text-primary">Selamat Datang di E-SKP
                                :)</h6>
                        </div>
                        <div class="card-body">
                            <div class="text-center pb-2">
                                <div class="index__user-avatar mt-4">
                                    <img src="{{ asset('/') }}images/user/undraw_profile.png" class="img-thumbnail">
                                </div>
                                <div class="index__user-detail mt-4">
                                    <small>
                                        <b>USER</b>
                                        <br>
                                        user1 <br>
                                        Pustakawan Terampil <br>
                                        Politeknik Negeri Cilacap </small>
                                </div>
                                <div class="index__user-action-btn mt-4 mb-5">
                                    <a href="{{ asset('/') }}pegawai{{ asset('/') }}index.jsp"
                                        class="btn btn-primary btn-sm px-3 mr-1">Lihat SKP</a>
                                    <a href="{{ asset('/') }}pegawai/logharian/cal.jsp"
                                        class="btn btn-outline-primary btn-sm px-3">Isi Log Harian</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <div class="float-left">
                                <h6 class="m-0 font-weight-bold text-primary">Statistik Anda di Januari
                                    2024</h6>
                            </div>
                            <div class="float-right">
                                <form class="form-inline">
                                    <select name="bln" id="stat_bulanan_bulan" class="form-control form-control-sm mr-2"
                                        onchange="stat_bulanan_change_bulan()">
                                        <option value="1" selected>
                                            Januari </option>
                                        <option value="2">
                                            Februari </option>
                                        <option value="3">
                                            Maret </option>
                                        <option value="4">
                                            April </option>
                                        <option value="5">
                                            Mei </option>
                                        <option value="6">
                                            Juni </option>
                                        <option value="7">
                                            Juli </option>
                                        <option value="8">
                                            Agustus </option>
                                        <option value="9">
                                            September </option>
                                        <option value="10">
                                            Oktober </option>
                                        <option value="11">
                                            November </option>
                                        <option value="12">
                                            Desember </option>
                                    </select>
                                    <button type="button" class="btn btn-primary btn-sm px-3"
                                        onclick="stat_bulanan_update_skor()">
                                        Perbarui
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="chart_stat_bulanan"></canvas>
                            </div>
                            <div class="alert alert-info pt-1 mt-3 mb-0" role="alert" style="font-style: italic;">
                                <small>
                                    Catatan:
                                    <br>
                                    <ul class="pl-4 mb-0">
                                        <li>Skor statistik rata-rata: <b>83.52</b></li>
                                        <li>Data bulan berjalan diperbarui setiap hari pada pukul 23.00 WIB.
                                        </li>
                                    </ul>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Progres SKP Anda</h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td class="text-center align-middle" style="width: 40px;">1.</td>
                                        <td>
                                            <div>
                                                Penyusunan Rencana SKP&nbsp;&nbsp;<i
                                                    class='fas fa-check-circle text-success'></i> </div>
                                            <div>
                                                <small>Membuat dan mengajukan rencana SKP</small>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">2.</td>
                                        <td>
                                            <div>
                                                Persetujuan Rencana SKP&nbsp;&nbsp;<i
                                                    class='fas fa-check-circle text-success'></i> </div>
                                            <div>
                                                <small>Rencana SKP disetujui oleh ketua tim / pejabat
                                                    penilai</small>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">3.</td>
                                        <td>
                                            <div>
                                                Pengisian &amp; Pengajuan Realisasi Akhir
                                                Tahun&nbsp;&nbsp;<i class='fas fa-check-circle text-success'></i> </div>
                                            <div>
                                                <small>Mengisi realisasi dan mengajukan evaluasi akhir
                                                    tahun</small>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">4.</td>
                                        <td>
                                            <div>
                                                SKP Selesai Dievaluasi&nbsp;&nbsp;<i class='fas fa-times-circle'></i>
                                            </div>
                                            <div>
                                                <small>SKP akhir tahun telah selesai diberikan predikat dan
                                                    umpan balik oleh ketua tim / pejabat penilai</small>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <!-- Top Skor -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <div class="float-left">
                                <h6 class="m-0 font-weight-bold text-primary">Statistik 5 Teratas di Bulan
                                    Januari 2024</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-info" role="alert">
                                <small>
                                    <ul class="pl-2 mb-0">
                                        <li>Berikut adalah 5 pegawai di Politeknik Negeri Cilacap yang
                                            memiliki skor statistik tertinggi di bulan Januari 2024.</li>
                                    </ul>
                                </small>
                            </div>
                            <div class="table-reponsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th style="width: 50px;">No</th>
                                            <th colspan="2">Nama</th>
                                            <th>Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center align-middle">
                                                1.
                                            </td>
                                            <td class="text-center align-middle border-right-0" style="width: 100px;">
                                                <div class="index__top-skor-avatar">
                                                    <img src="{{ asset('/') }}images/user/undraw_profile.png"
                                                        class="img-thumbnail">
                                                </div>
                                            </td>
                                            <td class="align-middle border-left-0" style="line-height: 1.3;">
                                                <div style="margin-left: -10px;">
                                                    <small>
                                                        <b>SITI MARKHATUN, , S.H.</b>
                                                        <br>
                                                        196906111993032005 <br>
                                                        Analis Kepegawaian Ahli Muda </small>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <div class="h6">
                                                    <i>92.21</i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center align-middle">
                                                2.
                                            </td>
                                            <td class="text-center align-middle border-right-0" style="width: 100px;">
                                                <div class="index__top-skor-avatar">
                                                    <img src="{{ asset('/') }}images/user/undraw_profile.png"
                                                        class="img-thumbnail">
                                                </div>
                                            </td>
                                            <td class="align-middle border-left-0" style="line-height: 1.3;">
                                                <div style="margin-left: -10px;">
                                                    <small>
                                                        <b>CAHYO TRI LEKSONO, S.H.</b>
                                                        <br>
                                                        198208012021211004 <br>
                                                        Arsiparis Ahli Pertama </small>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <div class="h6">
                                                    <i>91.14</i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center align-middle">
                                                3.
                                            </td>
                                            <td class="text-center align-middle border-right-0" style="width: 100px;">
                                                <div class="index__top-skor-avatar">
                                                    <img src="{{ asset('/') }}images/user/undraw_profile.png"
                                                        class="img-thumbnail">
                                                </div>
                                            </td>
                                            <td class="align-middle border-left-0" style="line-height: 1.3;">
                                                <div style="margin-left: -10px;">
                                                    <small>
                                                        <b>MUHAMMAD WISNUADHI PAMUJI, S.E.</b>
                                                        <br>
                                                        198211062021211003 <br>
                                                        Arsiparis Ahli Pertama </small>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <div class="h6">
                                                    <i>90.34</i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center align-middle">
                                                4.
                                            </td>
                                            <td class="text-center align-middle border-right-0" style="width: 100px;">
                                                <div class="index__top-skor-avatar">
                                                    <img src="{{ asset('/') }}images/user/undraw_profile.png"
                                                        class="img-thumbnail">
                                                </div>
                                            </td>
                                            <td class="align-middle border-left-0" style="line-height: 1.3;">
                                                <div style="margin-left: -10px;">
                                                    <small>
                                                        <b>FIRMAN SEPTIADI, A.Md.</b>
                                                        <br>
                                                        199509102019031008 <br>
                                                        Teknisi Laboratorium </small>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <div class="h6">
                                                    <i>87.66</i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center align-middle">
                                                5.
                                            </td>
                                            <td class="text-center align-middle border-right-0" style="width: 100px;">
                                                <div class="index__top-skor-avatar">
                                                    <img src="{{ asset('/') }}images/user/undraw_profile.png"
                                                        class="img-thumbnail">
                                                </div>
                                            </td>
                                            <td class="align-middle border-left-0" style="line-height: 1.3;">
                                                <div style="margin-left: -10px;">
                                                    <small>
                                                        <b>TEGUH FITRIYOKO, A.Md.</b>
                                                        <br>
                                                        197809112021211002 <br>
                                                        Pranata Komputer Terampil </small>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <div class="h6">
                                                    <i>87.36</i>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- content -->
    </div>
@endsection
