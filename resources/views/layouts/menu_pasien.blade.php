<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column text-sm" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="/pasien/home" class="nav-link {{Request::is('pasien/home') ? 'active' : ''}}">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Beranda
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/pasien/jadwal" class="nav-link {{Request::is('pasien/jadwal') ? 'active' : ''}}">
                <i class="nav-icon fa fa-calendar"></i>
                <p>
                    Jadwal Dokter
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/pasien/konsultasi" class="nav-link {{Request::is('pasien/konsultasi') ? 'active' : ''}}">
                <i class="nav-icon fa fa-clipboard"></i>
                <p>
                    Konsultasi Saya
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/pasien/gantipass" class="nav-link {{Request::is('pasien/gantipass') ? 'active' : ''}}">
                <i class="nav-icon fas fa-key"></i>
                <p>
                    Ganti Password
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