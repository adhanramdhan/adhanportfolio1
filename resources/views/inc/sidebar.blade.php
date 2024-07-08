        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">admin compro</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                master website
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>master website</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">master website</h6>
                    <!-- fungsi route untuk mengarahkan/memanggil link tujuan -->
                    <a class="collapse-item" href="{{ route('admin.profile.index') }}">profil</a>
                    <a class="collapse-item" href="{{ route('admin.about.index') }}">About</a>
                    <a class="collapse-item" href="{{ route('admin.whatido.index') }}">Whatido</a>
                    <a class="collapse-item" href="{{ route('admin.education.index') }}">pendidikan</a>
                    <a class="collapse-item" href="{{ route('admin.experience.index') }}">pengalaman</a>
                    <a class="collapse-item" href="{{ route('admin.skill.index') }}">skill</a>
                    <a class="collapse-item" href="{{ route('admin.portfolio.index') }}">Portfolio</a>
                    <a class="collapse-item" href="{{ route('admin.imgproject.index') }}">imgproject</a>
                    <a class="collapse-item" href="{{ route('admin.ctgproject.index') }}">Category</a>
                </div>
            </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

          
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.user.index') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>User</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.setting.index') }}">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Setting</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
