<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        {{-- <div class="sidebar-brand-icon rotate-n-15"> --}}
        <div class="sidebar-brand-icon">
            {{-- <i class="fas fa-laugh-wink"></i> --}}
            <img src="{{ asset('images/logo.png') }}" style="width: 40px;">
        </div>
        <div class="sidebar-brand-text mx-3">
            <small>SPPD PNC</small>
        </div>
    </a>


    <hr class="sidebar-divider my-0">

    <li class="nav-item {{ routeIs('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-stop-circle"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item {{ routeIs(['unit-kerja.index']) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseZero"
            aria-expanded="false" aria-controls="collapseZero">
            <i class="fas fa-fw fa-stop-circle"></i>
            <span>Data Master</span>
        </a>
        <div id="collapseZero" class="collapse {{ routeIs(['unit-kerja.index']) ? 'show' : '' }}" aria-labelledby="headingZero" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ routeIs(['unit-kerja.index']) ? 'active' : '' }}" href="{{ route('unit-kerja.index') }}">Data Unit Kerja</a>
                <a class="collapse-item " href="">Data Pegawai</a>
                <a class="collapse-item " href="">Data Pimpinan</a>
                <a class="collapse-item " href="">Data Kode Surat</a>
            </div>
        </div>
    </li>

    {{-- <li class="nav-item ">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
            aria-expanded="false" aria-controls="collapseOne">
            <i class="fas fa-fw fa-stop-circle"></i>
            <span>SKP</span>
        </a>
        <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item " href="{{ asset('/') }}pegawai{{ asset('/') }}index.jsp">Rencana SKP</a>

                <!-- <a class="collapse-item " href="{{ asset('/') }}pegawai/realisasi/sem1.jsp">Realisasi Semester 1</a> -->
                <!-- <a class="collapse-item " href="{{ asset('/') }}pegawai/realisasi/sem2.jsp">Realisasi Semester 2</a> -->
                <!-- <a class="collapse-item " href="{{ asset('/') }}site/under_construction.jsp">Realisasi Tahunan</a> -->

                <hr class="mx-4 my-1">
                <a class="collapse-item " href="{{ asset('/') }}pegawai/evalperiodik/tri_satu.jsp">
                    Evaluasi Triwulan 1 </a>
                <a class="collapse-item " href="{{ asset('/') }}pegawai/evalperiodik/tri_dua.jsp">
                    Evaluasi Triwulan 2 </a>
                <a class="collapse-item " href="{{ asset('/') }}pegawai/evalperiodik/tri_tiga.jsp">
                    Evaluasi Triwulan 3 </a>
                <a class="collapse-item " href="{{ asset('/') }}pegawai/evalperiodik/tri_empat.jsp">
                    Evaluasi Triwulan 4 </a>
                <a class="collapse-item " href="{{ asset('/') }}pegawai/realisasi/tahunan.jsp">Evaluasi
                    Akhir</a>

                <hr class="mx-4 my-1">
                <a class="collapse-item " href="{{ asset('/') }}pegawai/arsip/index.jsp">Arsip SKP</a>
            </div>
        </div>
    </li>


    <li class="nav-item ">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
            aria-expanded="false" aria-controls="collapseThree">
            <i class="fas fa-fw fa-stop-circle"></i>
            <span>Log Harian</span>
        </a>
        <div id="collapseThree" class="collapse " aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item " href="{{ asset('/') }}pegawai/logharian/cal.jsp">Kalender</a>
                <a class="collapse-item " href="{{ asset('/') }}pegawai/logharian/rekap.jsp">Rekap &amp;
                    Capaian</a>
            </div>
        </div>
    </li>

    <li class="nav-item ">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
            aria-expanded="false" aria-controls="collapseFour">
            <i class="fas fa-fw fa-stop-circle"></i>
            <span>Bantuan</span>
        </a>
        <div id="collapseFour" class="collapse " aria-labelledby="headingFour" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item " href="{{ asset('/') }}pegawai/help/manual.jsp">Buku Panduan</a>
                <a class="collapse-item " href="{{ asset('/') }}pegawai/help/video2.jsp">Video
                    Tutorial</a>
                <!-- <a class="collapse-item " href="{{ asset('/') }}pegawai/help/video.jsp">Video Tutorial</a> -->
                <!-- <a class="collapse-item " href="{{ asset('/') }}pegawai/help/faq.jsp">FAQ</a> -->
            </div>
        </div>
    </li>

    <li class="nav-item ">
        <a class="nav-link" href="{{ asset('/') }}pemberitahuan/index.jsp">
            <i class="fas fa-fw fa-stop-circle"></i>
            <span>Pemberitahuan</span>
        </a>
    </li>

    <hr class="sidebar-divider mt-3">

    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/') }}pegawai/site/refresh_session.jsp">
            <i class="fas fa-fw fa-stop-circle"></i>
            <span>Refresh Session</span>
        </a>
    </li> --}}

    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}">
            <i class="fas fa-fw fa-stop-circle"></i>
            <span>Logout</span>
        </a>
    </li>
    <!-- Divider -->
    {{-- <hr class="sidebar-divider d-none d-md-block"> --}}
    <!-- Sidebar Toggler (Sidebar) -->
    {{-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div> --}}
</ul>
