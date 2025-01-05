<ul class="navbar-nav ml-auto">

    <li class="nav-item dropdown no-arrow mx-1">
        <div class="nav-link small" style="color: #858796;" id="i_jam"></div>
        {{-- <div class="nav-link small" style="color: #858796;" id="i_jam"></div> --}}
    </li>

    <div class="topbar-divider d-none d-sm-block"></div>

    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                {{ Auth::user()->name }} </span>

            <img class="img-profile rounded-circle" src="{{ asset('/') }}images/user/undraw_profile.png"
                style="object-fit: cover">
        </a>

        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            {{-- <a href="#" class="dropdown-item"><i
                    class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Profil</a> --}}
            <a href="{{ route('logout') }}" class="dropdown-item"><i
                    class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
            <!-- <div class="dropdown-divider"></div> -->
        </div>
    </li>

</ul>
