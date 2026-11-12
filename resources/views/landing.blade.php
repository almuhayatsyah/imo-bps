<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'IMO BPS') }} - Lorem Ipsum Dolor Sit Amet</title>

    @include('layouts.partials.favicon')

    <!-- Core Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}">
</head>
<body class="landing-body">

    <!-- =========================================================
         NAVBAR
    ========================================================== -->
    <nav class="navbar navbar-expand-lg landing-navbar" id="landingNavbar">
        <div class="container">
            <a href="{{ route('home') }}" class="landing-brand">
                <x-app-logo />
                <x-brand-title />
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#landingNav" aria-controls="landingNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>

            <div class="collapse navbar-collapse" id="landingNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link landing-nav-link" href="#beranda"></a></li>
                    <li class="nav-item"><a class="nav-link landing-nav-link" href="#fitur"></a></li>
                    <li class="nav-item"><a class="nav-link landing-nav-link" href="#tentang"></a></li>
                    <li class="nav-item"><a class="nav-link landing-nav-link" href="#kontak"></a></li>
                </ul>
                <div class="d-flex gap-2 mt-3 mt-lg-0">
                    <a href="{{ route('login') }}" class="btn-ghost-light">Masuk</a>
                    <a href="{{ route('dashboard') }}" class="btn-lime">
                        Dashboard <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- =========================================================
         HERO
    ========================================================== -->
    <section class="landing-hero" id="beranda">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-badge">
                        <span>BARU</span> Lorem ipsum dolor sit amet
                    </div>
                    <h1 class="hero-title">
                        <span class="text-integrated">Intergrated</span>
                        <span class="text-money">Money</span>
                        <span class="text-organization">organization</span>
                        <span class="d-block text-white hero-title-sub">BPS Kabupaten Nagan raya</span>
                    </h1>
                    <p class="hero-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris.
                    </p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="{{ route('login') }}" class="btn-lime">
                            Mulai Sekarang <i class="bi bi-arrow-right"></i>
                        </a>
                        <a href="#fitur" class="btn-ghost-light">
                            <i class="bi bi-play-circle"></i> Pelajari Lebih Lanjut
                        </a>
                    </div>

                    <div class="hero-stats">
                        <div>
                            <div class="hero-stat-value">12K+</div>
                            <div class="hero-stat-label">Lorem Ipsum</div>
                        </div>
                        <div>
                            <div class="hero-stat-value">98%</div>
                            <div class="hero-stat-label">Dolor Sit Amet</div>
                        </div>
                        <div>
                            <div class="hero-stat-value">24/7</div>
                            <div class="hero-stat-label">Consectetur</div>
                        </div>
                    </div>
                </div>

                <!-- Hero Visual: Mock dashboard preview -->
                <div class="col-lg-6">
                    <div class="hero-visual ms-lg-4">
                        <div class="hero-floating-chip">
                            <i class="bi bi-graph-up-arrow"></i> +24.5%
                        </div>

                        <div class="hero-visual-card">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="stat-label mb-1">Lorem Ipsum Dolor</div>
                                    <div class="stat-value-amount">1,284</div>
                                </div>
                                <span class="trend-badge trend-up">
                                    <i class="bi bi-arrow-up-right"></i> 12.5%
                                </span>
                            </div>
                            <div class="hero-bar-group">
                                <div class="hero-bar" style="height: 45%"></div>
                                <div class="hero-bar lime" style="height: 65%"></div>
                                <div class="hero-bar" style="height: 50%"></div>
                                <div class="hero-bar lime" style="height: 80%"></div>
                                <div class="hero-bar" style="height: 60%"></div>
                                <div class="hero-bar lime" style="height: 95%"></div>
                                <div class="hero-bar" style="height: 70%"></div>
                            </div>
                        </div>

                        <div class="hero-visual-card">
                            <div class="d-flex align-items-center gap-3">
                                <img src="{{ asset('assets/images/user_1.jpg') }}" alt="User" class="table-user-avatar">
                                <div class="flex-grow-1">
                                    <div class="table-user-name">Lorem Ipsum</div>
                                    <div class="table-user-sub">Consectetur adipiscing elit</div>
                                </div>
                                <span class="badge-table success">Selesai</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        <th>Nomor Antrian</th>
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

    <!-- =========================================================
         FITUR
    ========================================================== -->
    <section class="landing-section" id="fitur">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-eyebrow"><i class="bi bi-stars"></i> Fitur Utama</span>
                <h2 class="section-title">Lorem ipsum dolor sit amet</h2>
                <p class="section-desc mx-auto">
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="bi bi-bar-chart-line"></i></div>
                        <h3 class="feature-title">Lorem Ipsum</h3>
                        <p class="feature-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="bi bi-shield-check"></i></div>
                        <h3 class="feature-title">Dolor Sit Amet</h3>
                        <p class="feature-desc">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="bi bi-lightning-charge"></i></div>
                        <h3 class="feature-title">Consectetur</h3>
                        <p class="feature-desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="bi bi-people"></i></div>
                        <h3 class="feature-title">Adipiscing Elit</h3>
                        <p class="feature-desc">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!-- =========================================================
         CTA
    ========================================================== -->
    <section class="landing-section pt-0" id="kontak">
        <div class="container">
            <div class="landing-cta">
                <h2>Lorem ipsum dolor sit amet?</h2>
                <p>
                    Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur.
                    Curabitur blandit tempus porttitor.
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap position-relative">
                    <a href="{{ route('login') }}" class="btn-lime">
                        Masuk ke Sistem <i class="bi bi-arrow-right"></i>
                    </a>
                    <a href="mailto:info@example.com" class="btn-ghost-light">
                        <i class="bi bi-envelope"></i> Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </section>
     <!-- =========================================================
         TENTANG
    ========================================================== -->

<section class="about-section">

    <div class="about-container">

        <!-- KOLOM KIRI: GOOGLE MAPS -->
        <div class="about-map-column">

            <div class="about-label">
                <i class="bi bi-info-circle"></i>
                TENTANG KAMI
            </div>

            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.441501442072!2d96.3198743739639!3d4.1332089463178745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303ecf003d3d4bb5%3A0xa2bcc4046d75f29a!2sBPS%20Nagan%20Raya!5e0!3m2!1sid!2sid!4v1794296062472!5m2!1sid!2sid"
                    loading="lazy"
                    allowfullscreen=""
                    referrerpolicy="strict-origin-when-cross-origin">
                </iframe>
            </div>

        </div>

        <!-- KOLOM KANAN: INFORMASI BPS -->
        <div class="about-text-column">

            <h2>
                BADAN PUSAT STATISTIK KABUPATEN NAGAN RAYA
            </h2>

            <p>
                Jl. Paduka yang Mulia Presiden Soekarno - Suka Makmue,
                Gampong Alue Ie Mameh, Kecamatan Kuala,
                Kabupaten Nagan Raya. Kode Pos 23661
            </p>

        </div>

    </div>

</section>

    <!-- =========================================================
         FOOTER
    ========================================================== -->


<footer class="landing-footer">

    <!-- BAGIAN ATAS -->
    <div class="footer-top">

        <!-- KIRI: TENTANG SISTEM -->
        <div class="footer-about">
            <h3>INTEGRATED MONEY ORGANIZATION</h3>
            <p>
                IMO BPS merupakan sistem informasi pengelolaan
                keuangan yang dirancang untuk membantu proses
                pemantauan, pengelolaan, dan transparansi anggaran
                di lingkungan Badan Pusat Statistik.
            </p>
        </div>

        <!-- KANAN: MEDIA SOSIAL -->
        <div class="footer-social">
            <h4>Ikuti Kami</h4>

            <div class="social-list">

                <!-- INSTAGRAM -->
                <a href="https://www.instagram.com/bpskabnaganraya?xtok=N2JibzA4M3psbjFw"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="sosial-icon instagram"
                   aria-label="Instagram">
                    <i class="bi bi-instagram"></i>
                </a>

                <!-- FACEBOOK -->
                <a href="https://www.facebook.com/USERNAME_FB/"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="sosial-icon facebook"
                   aria-label="Facebook">
                    <i class="bi bi-facebook"></i>
                </a>

                <!-- TWITTER / X -->
                <a href="https://x.com/USERNAME_X"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="sosial-icon twitter"
                   aria-label="Twitter">
                    <i class="bi bi-twitter-x"></i>
                </a>

                <!-- TIKTOK -->
                <a href="https://www.tiktok.com/@USERNAME_TIKTOK"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="sosial-icon tiktok"
                   aria-label="TikTok">
                    <i class="bi bi-tiktok"></i>
                </a>

                <!-- WEBSITE BPS -->
                <a href="https://naganrayakab.bps.go.id/"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="sosial-icon website"
                   aria-label="Website BPS Nagan Raya">
                    <i class="bi bi-globe"></i>
                </a>

            </div>
        </div>

    </div>

    <!-- BAGIAN BAWAH -->
    <div class="footer-bottom">

        <!-- LOGO IMO DAN NAMA -->
        <div class="footer-logo">
            <img src="{{ asset('images/logo-imo.png') }}"
                 alt="Logo IMO">
            <span>IMO BPS</span>
        </div>

        <!-- COPYRIGHT -->
        <span class="footer-copyright">
            &copy; {{ date('Y') }} IMO BPS. All rights reserved.
        </span>

        <!-- MENU FOOTER -->
        <div class="footer-links">
            <a href="#">Privasi</a>
            <a href="#">Ketentuan</a>
            <a href="#">Bantuan</a>
        </div>

    </div>

</footer>


    <!-- Core Scripts -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        // Navbar: ubah background saat halaman di-scroll
        document.addEventListener('DOMContentLoaded', function () {
            const navbar = document.getElementById('landingNavbar');
            const toggleScrolled = () => navbar.classList.toggle('scrolled', window.scrollY > 20);
            toggleScrolled();
            window.addEventListener('scroll', toggleScrolled);

            // Tutup menu mobile setelah link anchor diklik
            document.querySelectorAll('#landingNav .nav-link').forEach(function (link) {
                link.addEventListener('click', function () {
                    const collapse = bootstrap.Collapse.getInstance(document.getElementById('landingNav'));
                    if (collapse) collapse.hide();
                });
            });
        });
    </script>
</body>
</html>

