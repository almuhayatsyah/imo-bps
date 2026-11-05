<footer class="footer-custom">
    <div class="footer-left">
        <span class="footer-logo">
            <x-app-logo />
            {{ config('app.name', 'IMO BPS') }}
        </span>
        <span class="footer-separator">|</span>
        <span class="footer-copy">
            &copy; {{ date('Y') }} Badan Pusat Statistik. Dibuat dengan <i class="bi bi-heart-fill text-danger footer-heart"></i>
        </span>
    </div>
    <div class="footer-right">
        <ul class="footer-links">
            <li><a href="#" class="footer-link">Panduan</a></li>
            <li><a href="#" class="footer-link">Bantuan</a></li>
            <li>
                <a href="#" class="footer-link">
                    Status Sistem <span class="status-dot"></span>
                </a>
            </li>
        </ul>
    </div>
</footer>

