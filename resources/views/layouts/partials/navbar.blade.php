<header class="navbar-custom">
    <!-- Left Navbar: Sidebar Toggle & Quick Actions -->
    <div class="navbar-left">
        <!-- Mobile Sidebar Toggle -->
        <button type="button" class="sidebar-toggle-btn" aria-label="Toggle Sidebar">
            <i class="bi bi-list"></i>
        </button>

        <!-- Desktop Sidebar Minimize Toggle -->
        <button type="button" id="desktop-sidebar-toggle" class="btn-desktop-toggle d-none d-xl-flex align-items-center justify-content-center" title="Minimize Sidebar">
            <i class="bi bi-chevron-bar-left"></i>
        </button>

        <!-- Quick Actions Dropdown -->
        <div class="dropdown">
            <button class="btn-quick-action dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-plus-lg"></i>
                <span>Aksi Cepat</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-quick-action">
                <li><h6 class="dropdown-header">Pintasan Baru</h6></li>
                <li>
                    <a class="dropdown-item" href="#">
                        <i class="bi bi-file-earmark-plus"></i> Input Data Baru
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">
                        <i class="bi bi-person-plus"></i> Tambah Pengguna
                    </a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <a class="dropdown-item" href="#">
                        <i class="bi bi-cloud-arrow-down"></i> Unduh Laporan
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Center Navbar: Search Bar -->
    <div class="navbar-search-wrapper">
        <form action="#" method="GET">
            <input type="text" name="q" class="navbar-search-input" placeholder="Cari data, laporan, atau menu...">
            <button type="submit" class="navbar-search-btn" aria-label="Search">
                <i class="bi bi-search"></i>
            </button>
        </form>
    </div>

    <!-- Right Navbar: Fullscreen, Notifications & User Profile -->
    <div class="navbar-actions">
        <!-- Fullscreen Toggle -->
        <button type="button" id="btn-fullscreen" class="navbar-action-btn d-none d-md-flex" title="Layar Penuh">
            <i class="bi bi-arrows-fullscreen"></i>
        </button>

        <!-- Notification Dropdown -->
        <div class="dropdown">
            <button type="button" class="navbar-action-btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Notifications">
                <i class="bi bi-bell"></i>
                <span class="navbar-action-badge"></span>
            </button>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-notification p-0">
                <div class="notification-header">
                    <h6 class="notification-title">Notifikasi</h6>
                    <button type="button" class="btn-clear-all">Tandai Dibaca</button>
                </div>
                <div class="notification-list">
                    <a href="#" class="notification-item">
                        <div class="notification-icon bg-lime-accent text-dark">
                            <i class="bi bi-check2-circle"></i>
                        </div>
                        <div class="notification-content">
                            <p class="notification-text"><strong>Laporan Bulanan</strong> berhasil diverifikasi.</p>
                            <span class="notification-time">5 menit yang lalu</span>
                        </div>
                        <span class="notification-unread-dot"></span>
                    </a>
                    <a href="#" class="notification-item">
                        <div class="notification-icon bg-forest-medium text-white">
                            <i class="bi bi-person-check"></i>
                        </div>
                        <div class="notification-content">
                            <p class="notification-text">Pengguna baru ditambahkan ke sistem.</p>
                            <span class="notification-time">1 jam yang lalu</span>
                        </div>
                    </a>
                </div>
                <a href="#" class="notification-footer">Lihat Semua Notifikasi</a>
            </div>
        </div>

        <!-- User Profile Dropdown -->
        <div class="dropdown">
            <button type="button" class="navbar-profile-btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('assets/images/avatar.png') }}" alt="Profile" class="navbar-profile-img">
                <span class="navbar-profile-name d-none d-sm-inline">{{ auth()->user()->name ?? 'Administrator' }}</span>
                <i class="bi bi-chevron-down navbar-profile-caret d-none d-sm-inline"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-profile">
                <li><h6 class="dropdown-header">Akun Saya</h6></li>
                <li>
                    <a class="dropdown-item" href="#">
                        <i class="bi bi-person"></i> Profil Saya
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">
                        <i class="bi bi-gear"></i> Pengaturan
                    </a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <a class="dropdown-item text-danger" href="{{ route('login') }}">
                        <i class="bi bi-box-arrow-right text-danger"></i> Keluar
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>

