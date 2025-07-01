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
            <a href="/superadmin/kategori" class="nav-link {{ Request::is('superadmin/kategori*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-list"></i>
                <p>
                    Kategori Produk
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/superadmin/dokter" class="nav-link {{ Request::is('superadmin/dokter*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    DOKTER
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/superadmin/pasien" class="nav-link {{ Request::is('superadmin/pasien*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    PASIEN
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/superadmin/produk" class="nav-link {{ Request::is('superadmin/produk*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-cubes"></i>
                <p>
                    Stok Produk
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/superadmin/jadwal" class="nav-link {{ Request::is('superadmin/jadwal*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-calendar"></i>
                <p>
                    Jadwal Dokter
                </p>
            </a>
        </li>

        {{-- <li class="nav-header">PEMESANAN</li>
        <li class="nav-item">
            <a href="/superadmin/konsumen" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Konsumen
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/superadmin/pemesanan" class="nav-link">
                <i class="nav-icon fas fa-shopping-cart"></i>
                <p>
                    Pemesanan Produk
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/superadmin/laporan" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    Laporan
                </p>
            </a>
        </li> --}}
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
            <a href="/logout" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                    Logout
                </p>
            </a>
        </li>
    </ul>
</nav>