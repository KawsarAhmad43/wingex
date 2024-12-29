<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.settings.inner') }}">
                <i class="menu-icon mdi mdi-account"></i>
                <span class="menu-title">Users</span>
            </a>
        </li>


        {{-- <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="menu-icon mdi mdi-account-circle-outline"></i>
                <span class="menu-title">User Permissions</span>
            </a>
        </li> --}}

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.settings.index') }}">
                <i class="menu-icon fa fa-gears"></i>
                <span class="menu-title">Settings</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-account-circle-outline"></i>
                <span class="menu-title">User Managements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Users</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Roles</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Permissions</a>
                    </li>
                </ul>
            </div>
        </li>






    </ul>
</nav>
