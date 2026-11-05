{{--
    Komponen Logo Aplikasi
    Pemakaian : <x-app-logo />  atau  <x-app-logo class="brand-logo-lg" />
    Ukuran diatur lewat CSS (.brand-logo di main.css) sesuai konteks tempat logo dipasang.
    Untuk mengganti logo, cukup ganti file public/assets/images/logo-sm.png
--}}
<img
    src="{{ asset('assets/images/logo-sm.png') }}"
    width="174"
    height="192"
    {{ $attributes->merge([
        'class' => 'brand-logo',
        'alt' => 'Logo ' . config('app.name', 'IMO BPS'),
    ]) }}
>
