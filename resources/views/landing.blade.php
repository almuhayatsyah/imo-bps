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
                        Keuangan negara yang baik adalah pengelolaan hak dan kewajiban negara yang dilakukan secara sehat, transparan, dan akuntabel untuk mendorong pertumbuhan ekonomi serta kesejahteraan rakyat. Pengelolaan ini berjalan optimal apabila pemerintah mampu menghimpun pendapatan secara mandiri dan adil, mengalokasikan belanja secara efektif untuk sektor produktif seperti pendidikan, kesehatan, dan infrastruktur, serta menjaga rasio defisit dan utang tetap terkendali dalam batas aman. Di samping itu, seluruh proses perencanaan hingga pelaporan harus diawasi secara ketat dan bebas dari korupsi agar anggaran negara benar-benar berfungsi menjaga stabilitas ekonomi sekaligus mengurangi kemiskinan dan ketimpangan sosial secara berkelanjutan.
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

<div class="imo-list-page">

    <!-- ==============================
         DAFTAR STATUS PENGAJUAN HONOR
    =============================== -->
    <section class="imo-card">

        <div class="imo-card-header">
            <div class="imo-heading">
                <div class="imo-heading-icon">☷</div>
                <h3>Daftar Status Pengajuan Honor</h3>
            </div>

            <div class="imo-toolbar">
                <div class="imo-search">
                    <span>⌕</span>
                    <input type="text" placeholder="Cari pegawai...">
                </div>

                <button class="imo-btn imo-btn-filter">⚲ Filter</button>
            </div>
        </div>

        <div class="imo-table-wrapper">
            <table class="imo-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Antrian</th>
                        <th>Nama Mitra</th>
                        <th>Nama Kegiatan</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td><strong>AHP5-001</strong></td>
                        <td>
                            <div class="imo-person">
                                <div class="imo-avatar">BS</div>
                                <div>
                                    <strong>Budi Santoso</strong>
                                    <small>Koordinator Mitra</small>
                                </div>
                            </div>
                        </td>
                        <td>Survei Sosial Ekonomi Nasional</td>
                        <td>15 Nov 2026</td>
                        <td><span class="imo-status selesai">● Selesai</span></td>
                        <td>
                            <div class="imo-actions">
                                <button title="Lihat">◉</button>
                                
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td><strong>AHP5-002</strong></td>
                        <td>
                            <div class="imo-person">
                                <div class="imo-avatar avatar-blue">SA</div>
                                <div>
                                    <strong>Siti Aminah</strong>
                                    <small>Petugas Input Data</small>
                                </div>
                            </div>
                        </td>
                        <td>Pendataan Potensi Desa (Podes)</td>
                        <td>15 Nov 2026</td>
                        <td><span class="imo-status proses">● Proses</span></td>
                        <td>
                            <div class="imo-actions">
                                <button title="Lihat">◉</button>
                                
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="imo-table-footer">
            <span>Menampilkan 1 sampai 2 dari 2 entri</span>

            <div class="imo-pagination">
                <span>Tampilkan:</span>
                <select>
                    <option>5</option>
                    <option>10</option>
                    <option>20</option>
                </select>
                <button disabled>‹</button>
                <button class="active">1</button>
                <button>›</button>
            </div>
        </div>

    </section>


    <!-- ==============================
         DAFTAR ANTRIAN PENGAJUAN ANGGARAN
    =============================== -->
    <section class="imo-card">

        <div class="imo-card-header">
            <div class="imo-heading">
                <div class="imo-heading-icon">♟</div>
                <h3>Daftar Antrian Pengajuan Anggaran</h3>
            </div>

            <div class="imo-toolbar">
                <div class="imo-search">
                    <span>⌕</span>
                    <input type="text" placeholder="Cari pengajuan...">
                </div>

                <button class="imo-btn imo-btn-filter">⚲ Filter</button>
                
            </div>
        </div>

        <div class="imo-table-wrapper">
            <table class="imo-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Antrian</th>
                        <th>Nama Pengaju</th>
                        <th>Jenis Anggaran</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td><strong>QA-001</strong></td>
                        <td>
                            <div class="imo-person">
                                <div class="imo-avatar avatar-pink">DA</div>
                                <div>
                                    <strong>Dewi Anggraini</strong>
                                    <small>Bagian Keuangan</small>
                                </div>
                            </div>
                        </td>
                        <td>Belanja Operasional</td>
                        <td>14 Nov 2026</td>
                        <td><span class="imo-status menunggu">● Menunggu</span></td>
                        <td>
                            <div class="imo-actions">
                                <button title="Lihat">◉</button>
                            
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td><strong>QA-002</strong></td>
                        <td>
                            <div class="imo-person">
                                <div class="imo-avatar avatar-gray">AF</div>
                                <div>
                                    <strong>Ahmad Fauzi</strong>
                                    <small>Bagian Umum</small>
                                </div>
                            </div>
                        </td>
                        <td>Belanja Modal</td>
                        <td>13 Nov 2026</td>
                        <td><span class="imo-status diproses">● Diproses</span></td>
                        <td>
                            <div class="imo-actions">
                                <button title="Lihat">◉</button>
                                
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="imo-table-footer">
            <span>Menampilkan 1 sampai 2 dari 2 entri</span>

            <div class="imo-pagination">
                <span>Tampilkan:</span>
                <select>
                    <option>5</option>
                    <option>10</option>
                    <option>20</option>
                </select>
                <button disabled>‹</button>
                <button class="active">1</button>
                <button>›</button>
            </div>
        </div>

    </section>

</div>

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
            <img src="{{ asset('assets/images/logo-sm.png') }}"
                 alt="Logo IMO BPS">
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

