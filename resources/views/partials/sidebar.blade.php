<!-- Sidebar -->
<ul class="navbar-nav bg-that-more-light-than-black sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('src/sb-admin/img/logo_aja.png') }}" width="45" height="45" alt="">
        </div>
        <div class="sidebar-brand-text color-white-medium-emphasis"><span>Asia</span>Teknik</div>
    </a>

    <!-- Divider -->
    {{-- <hr class="sidebar-divider my-0"> --}}

    <!-- Heading -->
    <div class="sidebar-heading my-2">
        Main
    </div>

    <!-- Nav Item - Dashboard -->
    @if ($loginUser->user_role == 0) <!-- OWNER -->
        <li class="nav-item {{ (\Request::route()->getName() == 'owner_report') ? 'active' : '' }}">
            <a class="nav-link"href="{{ route('owner_report') }}">
                <i class="fa fa-bar-chart nav-icon"></i>
                <span>Laporan</span>
            </a>
        </li>
        <li class="nav-item {{ (\Request::route()->getName() == 'owner_service' || \Request::route()->getName() == 'owner_edit_service') ? 'active' : '' }}">
            <a class="nav-link"href="{{ route('owner_service') }}">
                <i class="fa fa-wrench nav-icon"></i>
                <span>Master Service</span>
            </a>
        </li>
        <li class="nav-item {{ (\Request::route()->getName() == 'owner_item' || \Request::route()->getName() == 'owner_edit_item') ? 'active' : '' }}">
            <a class="nav-link"href="{{ route('owner_item') }}">
                <i class="fa fa-cubes nav-icon"></i>
                <span>Master Item</span>
            </a>
        </li>
        <li class="nav-item {{ (\Request::route()->getName() == 'owner_user' || \Request::route()->getName() == 'owner_edit_user') ? 'active' : '' }}">
            <a class="nav-link"href="{{ route('owner_user') }}">
                <i class="fa fa-users nav-icon"></i>
                <span>List User</span>
            </a>
        </li>
    @elseif ($loginUser->user_role == 1) <!-- MANAJER -->
        <li class="nav-item {{ (\Request::route()->getName() == 'manajer_service' || \Request::route()->getName() == 'manajer_edit_service') ? 'active' : '' }}">
            <a class="nav-link"href="{{ route('manajer_service') }}">
                <i class="fa fa-wrench nav-icon"></i>
                <span>Master Service</span>
            </a>
        </li>
        <li class="nav-item {{ (\Request::route()->getName() == 'manajer_item' || \Request::route()->getName() == 'manajer_edit_item') ? 'active' : '' }}">
            <a class="nav-link"href="{{ route('manajer_item') }}">
                <i class="fa fa-cubes nav-icon"></i>
                <span>Master Item</span>
            </a>
        </li>
        <li class="nav-item {{ (\Request::route()->getName() == 'manajer_user' || \Request::route()->getName() == 'manajer_edit_user') ? 'active' : '' }}">
            <a class="nav-link"href="{{ route('manajer_user') }}">
                <i class="fa fa-users nav-icon"></i>
                <span>List User</span>
            </a>
        </li>
        <li class="nav-item {{ (\Request::route()->getName() == 'manajer_gajian') ? 'active' : '' }}">
            <a class="nav-link"href="{{ route('manajer_gajian') }}">
                <i class="fa fa-usd nav-icon"></i>
                <span>Paycheck</span>
            </a>
        </li>
    @elseif ($loginUser->user_role == 2) <!-- TEKNISI -->
        {{-- <li class="nav-item {{ (\Request::route()->getName() == 'teknisi_dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('teknisi_dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt nav-icon"></i>
                <span>Dashboard</span>
            </a>
        </li> --}}
        <li class="nav-item {{ (\Request::route()->getName() == 'teknisi_service' || \Request::route()->getName() == 'teknisi_edit_service') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('teknisi_service') }}">
                <i class="fa fa-wrench nav-icon" aria-hidden="true"></i>
                <span>My Service</span>
            </a>
        </li>
        <li class="nav-item {{ (\Request::route()->getName() == 'teknisi_service_history') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('teknisi_service_history') }}">
                <i class="fa fa-history nav-icon"></i>
                <span>History</span>
            </a>
        </li>
    @else <!-- KASIR -->
        <li class="nav-item {{ (\Request::route()->getName() == 'kasir_store') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('kasir_store') }}">
                <i class="fa fa-shopping-basket nav-icon"></i>
                <span>Store</span>
            </a>
        </li>
    @endif

    <!-- Divider -->
    {{-- <hr class="sidebar-divider d-none d-md-block"> --}}

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline mt-4">
        <button class="rounded-circle border-0" id="sidebarToggle" style="background-color: #111011;"></button>
    </div>

</ul>
<!-- End of Sidebar -->
