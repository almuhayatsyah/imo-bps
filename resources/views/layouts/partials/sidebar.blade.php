<aside class="sidebar-wrapper">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="sidebar-brand">
        <x-app-logo />
        <x-brand-title />
    </a>

    <!-- Main Menu Section -->
    <div class="sidebar-menu-section">
        <div class="sidebar-menu-title">Menu Utama</div>
        <ul class="sidebar-menu-list">
            <li class="sidebar-menu-item">
                <a href="{{ route('dashboard') }}" class="sidebar-menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Contoh Menu Dropdown / Submenu -->
            <li class="sidebar-menu-item">
                <a href="#submenuData" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="submenuData" class="sidebar-menu-link">
                    <i class="bi bi-folder2-open"></i>
                    <span>Master Data</span>
                    <i class="bi bi-chevron-down dropdown-caret"></i>
                </a>
                <div class="collapse" id="submenuData">
                    <ul class="sidebar-submenu">
                        <li><a href="#" class="sidebar-submenu-link">Data Pegawai</a></li>
                        <li><a href="#" class="sidebar-submenu-link">Data Kegiatan</a></li>
                        <li><a href="#" class="sidebar-submenu-link">Unit Kerja</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-menu-item">
                <a href="#" class="sidebar-menu-link">
                    <i class="bi bi-bar-chart-line"></i>
                    <span>Laporan & Statistik</span>
                    <span class="sidebar-menu-badge">Baru</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Settings / System Section -->
    <div class="sidebar-menu-section">
        <div class="sidebar-menu-title">Pengaturan</div>
        <ul class="sidebar-menu-list">
            <li class="sidebar-menu-item">
                <a href="#" class="sidebar-menu-link">
                    <i class="bi bi-people"></i>
                    <span>Manajemen User</span>
                </a>
            </li>
            <li class="sidebar-menu-item">
                <a href="#" class="sidebar-menu-link">
                    <i class="bi bi-gear"></i>
                    <span>Pengaturan Sistem</span>
                </a>
            </li>
            <li class="sidebar-menu-item">
                <a href="{{ route('login') }}" class="sidebar-menu-link">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Halaman Login</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Bottom User Profile Card -->
    <div class="sidebar-profile">
        <img src="{{ asset('assets/images/avatar.png') }}" alt="User Avatar" class="sidebar-profile-img">
        <div class="sidebar-profile-info">
            <div class="sidebar-profile-name">{{ auth()->user()->name ?? 'Administrator' }}</div>
            <div class="sidebar-profile-email">{{ auth()->user()->email ?? 'admin@bps.go.id' }}</div>
        </div>
    </div>
</aside>

