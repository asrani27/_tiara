<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column text-sm" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="/customer/home" class="nav-link {{Request::is('customer/home') ? 'active' : ''}}">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Beranda
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/customer/profil" class="nav-link {{Request::is('customer/profil') ? 'active' : ''}}">
                <i class="nav-icon fa fa-user"></i>
                <p>
                    Profil
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/customer/penunjukan" class="nav-link {{Request::is('customer/penunjukan') ? 'active' : ''}}">
                <i class="nav-icon fa fa-calendar"></i>
                <p>
                    Surat Penunjukkan
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