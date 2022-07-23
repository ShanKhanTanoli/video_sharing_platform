<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 fixed-start bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('AdminDashboard') }}">
            <span class="ms-1 font-weight-bold text-white">
                {{ config('app.name', 'Laravel') }}
            </span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white @if (Request::path() == 'Admin/Dashboard') active bg-gradient-primary : '' @endif"
                    href="{{ route('AdminDashboard') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <span class="nav-link-text ms-1">
                        Dashboard
                    </span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">
                    Users
                </h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white @if (Request::path() == 'Admin/Buyers') active bg-gradient-primary : '' @endif"
                    href="{{ route('AdminUsers') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-business-time"></i>
                    </div>
                    <span class="nav-link-text ms-1">
                        Users
                    </span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">
                    Videos
                </h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white @if (Request::path() == 'Admin/Sellers/' . App::getLocale()) ? active bg-gradient-primary : '' @endif"
                    href="#">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-video"></i>
                    </div>
                    <span class="nav-link-text ms-1">
                        Videos
                    </span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">
                    Settings
                </h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white @if (Request::path() == 'Admin/Settings/Profile' or Request::path() == 'Admin/Settings/Password') active bg-gradient-primary @else '' @endif"
                    href="{{ route('AdminEditProfile') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-cog"></i>
                    </div>
                    <span class="nav-link-text ms-1">
                        Settings
                    </span>
                </a>
            </li>
            <hr>
            <!--Begin::Logout-->
            @livewire('auth.logout')
            <!--Begin::Logout-->
        </ul>
    </div>
</aside>
