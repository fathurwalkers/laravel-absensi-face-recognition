<div>
    <div class="main-sidebar">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="index.html">Neo Tech</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="index.html">NT</a>
            </div>
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-home"></i>
                        <span>Dashboard</span></a>
                </li>
                <li class="menu-header">Pages</li>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-list"></i> <span>Absensi</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('daftar-absensi') }}">Daftar Absensi</a></li>
                        <li><a href="{{ route('daftar-absensi-user') }}">Daftar Semua Absensi</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i> <span>Laporan</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ route('daftar-laporan-user') }}">Laporan Semua Kegiatan</a>
                        </li>
                        <li><a class="nav-link" href="{{ route('daftar-laporan') }}">Laporan Kegiatan Harian</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-database"></i> <span>Master
                            Data</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ route('data-karyawan') }}">Data Karyawan</a></li>
                        <li><a class="nav-link" href="features-posts.html">Role Akses</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-cog"></i> <span>Pengaturan
                            Aplikasi</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="utilities-contact.html">Pengaturan Android</a></li>
                        <li><a class="nav-link" href="utilities-invoice.html">Pengaturan Dashboard</a></li>
                        <li><a href="utilities-subscribe.html">Settings</a></li>
                    </ul>
            </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                    <i class="fas fa-rocket"></i> Documentation
                </a>
            </div>
        </aside>
    </div>
</div>
