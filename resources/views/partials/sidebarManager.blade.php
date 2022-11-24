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

    <!-- Divider -->
    {{-- <hr class="sidebar-divider d-none d-md-block"> --}}

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline mt-4">
        <button class="rounded-circle border-0" id="sidebarToggle" style="background-color: #111011;"></button>
    </div>

</ul>
<!-- End of Sidebar -->
