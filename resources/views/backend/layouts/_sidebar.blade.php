<ul class="navbar-nav bg-gradient-light sidebar sidebar-light accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin') }}">
        <div class="sidebar-brand-icon">
            <img src="{{asset('assets/images/MSWDO.png')}}" alt="MSWDLogo" style= "height: 2.5rem; width: 2.5rem;">
        </div>
        <div class="sidebar-brand-text mx-3 fa-2x">MSWD</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Modules
    </div>

    <!-- Nav Item - Students Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-users"></i>
            <span>PWD Management</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('pwd.create') }}">New Entry</a>
                <a class="collapse-item" href="{{ route('pwd.search') }}">Search</a>
            </div>
        </div>
    </li>

  <!-- Nav Item - Pages Collapse Menu -->
  {{-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Content Management</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Front page:</h6>
            <a class="collapse-item" href="{{ route('backend.News') }}">News</a>
            <a class="collapse-item" href="{{ route('backend.Project') }}">Projects</a>
            <a class="collapse-item" href="#">Programs</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">About Us Page:</h6>
            <a class="collapse-item" href="#">About Us</a>
            <h6 class="collapse-header">Services Page:</h6>
            <a class="collapse-item" href="{{ route('backend.Service') }}">Services</a>
            <h6 class="collapse-header">Contacts Page:</h6>
            <a class="collapse-item" href="{{ route('backend.Contact') }}">Contact Details</a>
        </div>
    </div>
</li> --}}


    <!-- Nav Item - Options-->
    {{-- <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-object-ungroup"></i>
            <span>Options</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
