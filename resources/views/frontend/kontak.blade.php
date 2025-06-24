@extends('frontend.layouts.main')

@section('title', $page->title ?? 'Kontak - CV Sumber Alam Raya')

@section('styles')
    <link rel="stylesheet" href="{{ asset('style/kontak.css') }}" />
@endsection

@section('content')

    <section class="hero">
        <div class="container">
            <div class="hero-image-wrapper">
                <img src="{{ asset('assets/Foto Galeri/1.jpg') }}" alt="Layanan Hero" /> {{-- Gambar hardcoded --}}
                <div class="overlay-text">{{ $page->contact_overlay_text ?? 'Kepuasan Anda Tujuan Kami' }}</div>
            </div>
        </div>
    </section>

    <section class="kontak-kami">
        <h2>{{ $page->contact_title ?? 'Kontak Kami' }}</h2>
        <div class="info-boxes">
            <div class="info-card">
                <div class="icon"><img src="{{ asset('assets/icon/telp 2.png') }}" alt="Ikon Telepon"></div>
                <h3>Telepon</h3>
                <p>{{ $page->contact_phone ?? '+62 895 0479 8167' }}</p>
            </div>
            <div class="info-card">
                <div class="icon"><img src="{{ asset('assets/icon/home.png') }}" alt="Ikon Lokasi"></div>
                <h3>{{ $page->contact_location_title ?? 'Kunjungi kami' }}</h3>
                <p>{{ $page->contact_location_body ?? 'Desa Bengledukuh, Bengle, Kec. Talang, Kabupaten Tegal, Jawa Tengah 52193' }}</p>
            </div>
            <div class="info-card">
                <div class="icon"><img src="{{ asset('assets/icon/email 2.png') }}" alt="Ikon Email"></div>
                <h3>{{ $page->contact_email_title ?? 'Email' }}</h3>
                <p>{{ $page->contact_email_address ?? 'sumberalam423@gmail.com' }}</p>
            </div>
        </div>

        <div class="atau">atau</div>
        <div class="wa-button">
            <a href="https://wa.me/{{ $page->contact_whatsapp_number ? str_replace(['+', ' '], '', $page->contact_whatsapp_number) : '6287801319313' }}" class="btn-primary">
                <img src="{{ asset('assets/icon/WA.png') }}" alt="WhatsApp Icon" class="btn-icon-img"> WA Sekarang
            </a>
        </div>
    </section>

@endsection