@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- Page Header & Date Picker -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Ringkasan Dashboard</h1>
            <p class="page-subtitle">Pantau aktivitas, statistik kegiatan, dan capaian kinerja secara real-time.</p>
        </div>
        <div class="d-flex align-items-center gap-2">
            <button type="button" id="date-picker-trigger" class="btn-date-picker">
                <i class="bi bi-calendar3"></i>
                <span id="selected-date-range">{{ date('F j, Y') }}</span>
                <i class="bi bi-chevron-down fs-xs"></i>
            </button>
        </div>
    </div>

    <!-- Top Stat Cards Row -->
    <div class="row g-4 mb-2">
        <!-- Alert / Highlight Card -->
        <div class="col-12 col-md-4">
            <div class="card alert-green-card">
                <div>
                    <span class="alert-green-badge">Pembaruan Sistem</span>
                    <div class="alert-green-date">{{ date('d F Y') }}</div>
                    <div class="alert-green-text">Target capaian kegiatan bulan ini meningkat 24% dari periode sebelumnya.</div>
                </div>
                <a href="#" class="alert-green-link">
                    Lihat Detail Laporan <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Net Income / Sparkline Card 1 -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card card-stat d-flex flex-column justify-content-between">
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="stat-label">Total Kegiatan Selesai</span>
                        <button class="card-more-btn" type="button"><i class="bi bi-three-dots"></i></button>
                    </div>
                    <div class="stat-value">1,284</div>
                    <span class="trend-badge trend-up">
                        <i class="bi bi-arrow-up-right"></i> +12.5% dari bulan lalu
                    </span>
                </div>
                <div class="sparkline-card-footer">
                    <div id="income-sparkline"></div>
                </div>
            </div>
        </div>

        <!-- Total Return / Sparkline Card 2 -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card card-stat d-flex flex-column justify-content-between">
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="stat-label">Menunggu Verifikasi</span>
                        <button class="card-more-btn" type="button"><i class="bi bi-three-dots"></i></button>
                    </div>
                    <div class="stat-value">42</div>
                    <span class="trend-badge trend-down">
                        <i class="bi bi-arrow-down-right"></i> -4.2% antrean berkurang
                    </span>
                </div>
                <div class="sparkline-card-footer">
                    <div id="return-sparkline"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="row g-4 mb-2">
        <!-- Main Bar Chart -->
        <div class="col-12 col-lg-8">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title">Statistik Realisasi Bulanan</h5>
                    <div class="d-flex align-items-center gap-3">
                        <span class="chart-legend-item">
                            <span class="legend-dot bg-forest-medium"></span> Target
                        </span>
                        <span class="chart-legend-item">
                            <span class="legend-dot bg-lime-accent"></span> Realisasi
                        </span>
                    </div>
                </div>
                <div id="revenue-chart"></div>
            </div>
        </div>

        <!-- Donut Chart -->
        <div class="col-12 col-lg-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title">Distribusi Status</h5>
                    <button class="card-more-btn" type="button"><i class="bi bi-three-dots"></i></button>
                </div>
                <div id="views-chart"></div>
                <div class="chart-legends-container">
                    <div class="chart-legend-item">
                        <span class="legend-dot bg-lime-accent"></span> Selesai (68%)
                    </div>
                    <div class="chart-legend-item">
                        <span class="legend-dot bg-forest-light"></span> Proses (23%)
                    </div>
                    <div class="chart-legend-item">
                        <span class="legend-dot bg-brand-orange"></span> Revisi (16%)
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Reusable Premium Table Component -->
    <div class="table-card-custom">
        <div class="table-header-control">
            <h5 class="card-title mb-0">Daftar Kegiatan Terbaru</h5>
            <div class="d-flex align-items-center gap-2 flex-wrap">
                <div class="table-search-box">
                    <i class="bi bi-search table-search-icon"></i>
                    <input type="text" class="table-search-input" placeholder="Cari kegiatan...">
                </div>
                <div class="table-filter-group">
                    <button type="button" class="btn-table-action">
                        <i class="bi bi-funnel"></i> Filter
                    </button>
                    <button type="button" class="btn-custom btn-custom-primary btn-custom-sm">
                        <i class="bi bi-plus-lg"></i> Tambah Data
                    </button>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table-custom">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Penanggung Jawab</th>
                        <th>Nama Kegiatan</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-order-id">#BPS-001</td>
                        <td>
                            <div class="table-user-cell">
                                <img src="{{ asset('assets/images/user_1.jpg') }}" alt="User" class="table-user-avatar">
                                <div>
                                    <div class="table-user-name">Budi Santoso</div>
                                    <div class="table-user-sub">Statistisi Ahli Muda</div>
                                </div>
                            </div>
                        </td>
                        <td class="table-product-name">Survei Sosial Ekonomi Nasional</td>
                        <td>{{ date('d M Y') }}</td>
                        <td><span class="badge-table success">Selesai</span></td>
                        <td class="text-end">
                            <a href="#" class="table-btn-action" title="Detail"><i class="bi bi-eye"></i></a>
                            <a href="#" class="table-btn-action" title="Edit"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="table-btn-action delete" title="Hapus"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-order-id">#BPS-002</td>
                        <td>
                            <div class="table-user-cell">
                                <img src="{{ asset('assets/images/user_2.jpg') }}" alt="User" class="table-user-avatar">
                                <div>
                                    <div class="table-user-name">Siti Aminah</div>
                                    <div class="table-user-sub">Koordinator Fungsi</div>
                                </div>
                            </div>
                        </td>
                        <td class="table-product-name">Pendataan Potensi Desa (Podes)</td>
                        <td>{{ date('d M Y') }}</td>
                        <td><span class="badge-table pending">Proses</span></td>
                        <td class="text-end">
                            <a href="#" class="table-btn-action" title="Detail"><i class="bi bi-eye"></i></a>
                            <a href="#" class="table-btn-action" title="Edit"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="table-btn-action delete" title="Hapus"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="table-footer-control">
            <span class="table-pagination-info">Menampilkan 1 sampai 2 dari 2 entri</span>
            <nav aria-label="Table pagination">
                <ul class="pagination pagination-sm mb-0">
                    <li class="page-item disabled"><a class="page-link" href="#">Sebelumnya</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">Selanjutnya</a></li>
                </ul>
            </nav>
        </div>
    </div>
@endsection

