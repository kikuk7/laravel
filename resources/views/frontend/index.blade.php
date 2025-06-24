@extends('frontend.layouts.main')

@section('title', $page->title ?? 'Beranda - CV Sumber Alam Raya')

@section('content')

    <section class="hero">
        <div class="container">
            <div class="hero-image-wrapper">
                {{-- Video/Gambar Hero hardcoded (sesuai permintaan sebelumnya) --}}
                <video autoplay muted loop>
                    <source src="{{ asset('assets/beranda.mp4') }}" type="video/mp4" />
                    Browser Anda tidak mendukung video.
                </video>
                {{-- Atau jika ingin gambar: <img src="{{ asset('assets/hero_default_image.jpg') }}" alt="Hero Default" style="width:100%; height:auto; object-fit: cover;"> --}}

                <div class="hero-text">
                    <h1>{{ $page->hero_title ?? 'CV Sumber Alam Raya' }}</h1>
                    <a href="{{ url('/produk') }}" class="btn-primary">lihat produk kami</a>
                </div>
            </div>
        </div>
    </section>

    <section class="content container layanan-kami-section">
        <div class="about-section">
            <div class="card">
                <h2>Tentang Kami</h2>
                {{-- PENTING: Mengambil teks dari kolom spesifik homepage_about_section_text --}}
                @if($page && $page->homepage_about_section_text)
                    {!! $page->homepage_about_section_text !!}
                @else
                    <p>CV Sumber Alam Raya adalah perusahaan manufaktur berbahan dasar besi yang melayani berbagai kebutuhan industri, mulai dari otomotif, konstruksi, hingga pengadaan barang umum.</p>
                @endif
                <a href="{{ url('/tentang') }}" class="btn-outline">selengkapnya</a>
            </div>

            <div class="card" style="margin-top: 50px;">
                <h2>Layanan Kami</h2>
                {{-- PENTING: Mengambil teks dari kolom spesifik homepage_services_section_text --}}
                @if($page && $page->homepage_services_section_text)
                    {!! $page->homepage_services_section_text !!}
                @else
                    <p>CV Sumber Alam Raya adalah perusahaan manufaktur yang berbasis di Tegal, Jawa Tengah.</p>
                @endif
                <a href="{{ url('/layanan') }}" class="btn-outline">selengkapnya</a>
            </div>
        </div>

        <div class="bottom-section">
            <div class="image-content">
                {{-- Gambar layanan hardcoded (sesuai permintaan sebelumnya) --}}
                <img src="{{ asset('assets/layanan2.jpg') }}" alt="layanan2" class="img-small" />
                <img src="{{ asset('assets/layanan1.jpg') }}" alt="layanan1" class="img-large" />
                <img src="{{ asset('assets/layanan3.jpg') }}" alt="layanan3" class="img-small" />
            </div>
        </div>
    </section>

@endsection