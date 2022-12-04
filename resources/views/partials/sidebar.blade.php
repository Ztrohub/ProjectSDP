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

    @php
        $checkRoleSidebar = Auth::user()
    @endphp

    <!-- Nav Item - Dashboard -->
    @if ($checkRoleSidebar->user_role == 0) <!-- OWNER -->
        <li class="nav-item {{ (\Request::route()->getName() == 'owner_user') ? 'active' : '' }}">
            <a class="nav-link"href="{{ route('owner_user') }}">
                <i class="fa fa-users nav-icon"></i>
                <span>List User</span>
            </a>
        </li>
        <li class="nav-item {{ (\Request::route()->getName() == 'owner_barang') ? 'active' : '' }}">
            <a class="nav-link"href="{{ route('owner_barang') }}">
                <i class="fa fa-shopping-basket nav-icon"></i>
                <span>Master Barang</span>
            </a>
        </li>
        <li class="nav-item {{ (\Request::route()->getName() == 'owner_service') ? 'active' : '' }}">
            <a class="nav-link"href="{{ route('owner_service') }}">
                <i class="fa fa-server nav-icon"></i>
                <span>Master Service</span>
            </a>
        </li>
        <li class="nav-item {{ (\Request::route()->getName() == 'owner_laporan') ? 'active' : '' }}">
            <a class="nav-link"href="{{ route('owner_laporan') }}">
                <i class="fa fa-bar-chart nav-icon"></i>
                <span>Laporan</span>
            </a>
        </li>
    @elseif ($checkRoleSidebar->user_role == 1) <!-- MANAJER -->
        <li class="nav-item {{ (\Request::route()->getName() == 'manager_masterbarang') ? 'active' : '' }}">
            <a class="nav-link"href="{{ route('manager_masterbarang') }}">
                <i class="fa fa-shopping-basket nav-icon"></i>
                <span>Master Barang</span>
            </a>
        </li>
        <li class="nav-item {{ (\Request::route()->getName() == 'manager_masterservice') ? 'active' : '' }}">
            <a class="nav-link"href="{{ route('manager_masterservice') }}">
                <i class="fa fa-server nav-icon"></i>
                <span>Master Service</span>
            </a>
        </li>
        <li class="nav-item {{ (\Request::route()->getName() == 'manager_gajian') ? 'active' : '' }}">
            <a class="nav-link"href="{{ route('manager_gajian') }}">
                <i class="fa-solid fa-coins nav-icon"></i>
                <span>Gajian</span>
            </a>
        </li>
    @elseif ($checkRoleSidebar->user_role == 2) <!-- TEKNISI -->
        <li class="nav-item {{ (\Request::route()->getName() == 'dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt nav-icon"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item {{ (\Request::route()->getName() == 'store') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('store') }}">
                <i class="fa fa-shopping-basket nav-icon"></i>
                <span>Store</span>
            </a>
        </li>
        <li class="nav-item {{ (\Request::route()->getName() == 'master_item' || \Request::route()->getName() == 'master_item_add') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('master_item') }}">
                <i class="fa fa-th nav-icon"></i>
                <span>Master Item</span>
            </a>
        </li>
        <li class="nav-item {{ (\Request::route()->getName() == 'teknisi_service') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('teknisi_service') }}">
                <i class="fa fa-cog nav-icon" aria-hidden="true"></i>
                <span>Master Service</span>
            </a>
        </li>
        <li class="nav-item {{ (\Request::route()->getName() == 'service_history') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('service_history') }}">
                <i class="fa fa-history nav-icon"></i>
                <span>History</span>
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
