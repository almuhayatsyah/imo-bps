@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <div class="login-card">
        <!-- Brand Header -->
        <a href="{{ url('/') }}" class="login-brand">
            <x-app-logo />
            <x-brand-title />
        </a>

        <h1 class="login-title">Selamat Datang Kembali</h1>
        <p class="login-subtitle">Silakan masuk menggunakan akun Anda untuk melanjutkan.</p>

        <form id="loginForm" action="{{ route('dashboard') }}" method="GET" novalidate>
            <!-- Email / Username Input -->
            <div class="login-form-group">
                <label for="email" class="login-form-label">Alamat Email / NIP</label>
                <div class="login-input-group">
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="login-input"
                        placeholder="nama@bps.go.id"
                        required
                    >
                    <i class="bi bi-envelope input-icon"></i>
                </div>
                <div class="invalid-feedback">Harap masukkan alamat email yang valid.</div>
            </div>

            <!-- Password Input -->
            <div class="login-form-group">
                <label for="password" class="login-form-label">Kata Sandi</label>
                <div class="login-input-group">
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="login-input login-input-password"
                        placeholder="Masukkan kata sandi"
                        required
                    >
                    <i class="bi bi-lock input-icon"></i>
                    <button type="button" id="toggle-password" class="password-toggle-btn" aria-label="Show password">
                        <i class="bi bi-eye"></i>
                    </button>
                </div>
                <div class="invalid-feedback">Kata sandi wajib diisi.</div>
            </div>

            <!-- Remember Me & Forgot Password -->
            <div class="login-options">
                <label class="custom-control-label">
                    <input type="checkbox" name="remember" class="custom-checkbox-input">
                    <span>Ingat Saya</span>
                </label>
                <a href="#" class="forgot-password-link">Lupa Kata Sandi?</a>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn-login">
                <span>Masuk ke Sistem</span>
                <i class="bi bi-arrow-right"></i>
            </button>
        </form>

        <p class="login-footer-text mt-4">
            Kembali ke <a href="{{ route('dashboard') }}">Halaman Dashboard</a>
        </p>
    </div>
@endsection

