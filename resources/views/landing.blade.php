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
                    <li class="nav-item"><a class="nav-link landing-nav-link" href="#beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link landing-nav-link" href="#fitur">Fitur</a></li>
                    <li class="nav-item"><a class="nav-link landing-nav-link" href="#tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link landing-nav-link" href="#kontak">Kontak</a></li>
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
         TENTANG
    ========================================================== -->
    <section class="landing-section pt-0" id="tentang">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="about-visual">
                        <x-app-logo class="about-watermark" alt="" aria-hidden="true" />
                        <p class="about-quote mb-3">
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt."
                        </p>
                        <div class="d-flex align-items-center gap-3 position-relative">
                            <img src="{{ asset('assets/images/user_2.jpg') }}" alt="User" class="table-user-avatar">
                            <div>
                                <div class="table-user-name">Lorem Ipsum</div>
                                <div class="table-user-sub">Dolor Sit Amet</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <span class="section-eyebrow"><i class="bi bi-info-circle"></i> Tentang Kami</span>
                    <h2 class="section-title">Sed ut perspiciatis unde omnis iste natus</h2>
                    <p class="section-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante
                        venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum.
                    </p>
                    <ul class="about-list">
                        <li><i class="bi bi-check-lg"></i> Nullam quis risus eget urna mollis ornare vel eu leo.</li>
                        <li><i class="bi bi-check-lg"></i> Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</li>
                        <li><i class="bi bi-check-lg"></i> Donec ullamcorper nulla non metus auctor fringilla.</li>
                    </ul>
                    <a href="{{ route('login') }}" class="btn-custom btn-custom-primary">
                        Lorem Ipsum <i class="bi bi-arrow-right"></i>
                    </a>
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
         FOOTER
    ========================================================== -->
    <footer class="landing-footer">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
            <span class="footer-logo">
                <x-app-logo /> {{ config('app.name', 'IMO BPS') }}
            </span>
            <span>&copy; {{ date('Y') }} Lorem ipsum dolor sit amet. All rights reserved.</span>
            <ul class="footer-links">
                <li><a href="#" class="footer-link">Privasi</a></li>
                <li><a href="#" class="footer-link">Ketentuan</a></li>
                <li><a href="#" class="footer-link">Bantuan</a></li>
            </ul>
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

