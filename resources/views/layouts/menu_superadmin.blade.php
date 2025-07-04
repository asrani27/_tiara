<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="/superadmin/home" class="nav-link {{ Request::is('superadmin/home*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Beranda
                </p>
            </a>
        </li>
        <li class="nav-header">DATA UTAMA</li>
        <li class="nav-item">
            <a href="/superadmin/user" class="nav-link {{ Request::is('superadmin/user*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Data User
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/superadmin/customer" class="nav-link {{ Request::is('superadmin/customer*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Customer
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/superadmin/foreman" class="nav-link {{ Request::is('superadmin/foreman*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Foreman
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/superadmin/penunjukan"
                class="nav-link {{ Request::is('superadmin/penunjukan*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    Surat Penunjukan
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/superadmin/pengajuan" class="nav-link {{ Request::is('superadmin/pengajuan*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    Surat Pengajuan
                </p>
            </a>
        </li>

        <li class="nav-header">SETTING</li>
        <li class="nav-item">
            <a href="/superadmin/laporan" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    Laporan
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/superadmin/monitoring" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    Monitoring
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/logout" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                    Logout
                </p>
            </a>
        </li>
    </ul>
</nav>