<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="/foreman/home" class="nav-link {{ Request::is('foreman/home*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Beranda
                </p>
            </a>
        </li>
        <li class="nav-header">DATA UTAMA</li>

        <li class="nav-item">
            <a href="/foreman/penunjukan" class="nav-link {{ Request::is('foreman/penunjukan*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    Surat Penunjukan
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/foreman/pengajuan" class="nav-link {{ Request::is('foreman/pengajuan*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    Surat Pengajuan
                </p>
            </a>
        </li>

        <li class="nav-header">SETTING</li>
        <li class="nav-item">
            <a href="/foreman/laporan" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    Laporan
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/foreman/kendala" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    Kendala
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