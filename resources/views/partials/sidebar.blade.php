<!-- Sidebar -->
<ul class="navbar-nav warnaecok sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('src/sb-admin/img/logo_aja.png') }}" width="45" height="45" alt="">
        </div>
        <div class="sidebar-brand-text color-darkgrey"><span>Asia</span>Teknik</div>
    </a>

    <!-- Divider -->
    {{-- <hr class="sidebar-divider my-0"> --}}

    <!-- Heading -->
    <div class="sidebar-heading my-2">
        Main
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link color-darkgrey" href="#">
            <i class="fas fa-fw fa-tachometer-alt" style="color: #b6707c;"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link color-darkgrey" href="{{ route('store') }}">
            <i class="fa fa-shopping-basket"></i>
            <span>Store</span>
        </a>
    </li>

    <!-- Divider -->
    {{-- <hr class="sidebar-divider d-none d-md-block"> --}}

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline mt-4">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
