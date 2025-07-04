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
        <li class="nav-header">SURAT</li>
        <li class="nav-item">
            <a href="/foreman/penunjukan"
                class="nav-link {{ Request::is('foreman/penunjukan*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-envelope-square"></i>
                <p>
                    Surat Penunjukan
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/foreman/pengajuan" class="nav-link {{ Request::is('foreman/pengajuan*') ? 'active' : '' }}">
                <i class="nav-icon far fa-envelope-open"></i>
                <p>
                    Surat Pengajuan
                </p>
            </a>
        </li>

        <li class="nav-header">REPORT</li>
        <li class="nav-item">
            <a href="/foreman/awalloading" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>
                    Report Awal Loading
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/foreman/loading" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>
                    Report Loading
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/foreman/complated" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>
                    Report Complated
                </p>
            </a>
        </li>
        <li class="nav-header">KENDALA</li>
        <li class="nav-item">
            <a href="/foreman/demage" class="nav-link">
                <i class="nav-icon fas fa-window-close"></i>
                <p>
                    Demage
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/foreman/perubahancargo" class="nav-link">
                <i class="nav-icon fas fa-window-close"></i>
                <p>
                    Perubahan Cargo
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