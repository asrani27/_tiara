<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-header">MENU UTAMA</li>
        <li class="nav-item">
            <a href="/superadmin/home" class="nav-link {{ Request::is('superadmin/home*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Beranda
                </p>
            </a>
        </li>
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
                @if (notifCustomer() > 0)
                <span class="right badge badge-danger">{{notifCustomer()}}</span>
                @endif
            </a>
        </li>
        <li class="nav-item">
            <a href="/superadmin/foreman" class="nav-link {{ Request::is('superadmin/foreman*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-alt"></i>
                <p>
                    Foreman
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/superadmin/penunjukan"
                class="nav-link {{ Request::is('superadmin/penunjukan*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-envelope-square"></i>
                <p>
                    Surat Penunjukan
                </p>
                @if (notifPenunjukan() > 0)
                <span class="right badge badge-danger">{{notifPenunjukan()}}</span>
                @endif
            </a>
        </li>

        <li class="nav-item">
            <a href="/superadmin/pengajuan" class="nav-link {{ Request::is('superadmin/pengajuan*') ? 'active' : '' }}">
                <i class="nav-icon far fa-envelope-open"></i>
                <p>
                    Surat Pengajuan
                </p>
                @if (notifPengajuan() > 0)
                <span class="right badge badge-danger">{{notifPengajuan()}}</span>
                @endif
            </a>
        </li>
        <li class="nav-header">REPORT</li>
        <li class="nav-item">
            <a href="/superadmin/awalloading" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>
                    Report Awal Loading
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/superadmin/loading" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>
                    Report Loading
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/superadmin/complated" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>
                    Report Complated
                </p>
            </a>
        </li>
        <li class="nav-header">KENDALA</li>
        <li class="nav-item">
            <a href="/superadmin/demage" class="nav-link">
                <i class="nav-icon fas fa-window-close"></i>
                <p>
                    Demage
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/superadmin/perubahancargo" class="nav-link">
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