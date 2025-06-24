@extends('frontend.layouts.main')

@section('title', $page->title ?? 'Layanan - CV Sumber Alam Raya')

@section('content')

    <section class="hero">
        <div class="container">
            <div class="hero-image-wrapper">
                <img src="{{ asset('assets/layanan2.jpg') }}" alt="Layanan Hero" /> {{-- Gambar hardcoded --}}
            </div>
        </div>
    </section>

    <section class="container">
        <div class="content card">
            <h2 class="section-title">{{ $page->title ?? 'Layanan Kami' }}</h2>
            @if($page && $page->main_intro_body)
                {!! $page->main_intro_body !!} {{-- Paragraf pembuka dinamis --}}
            @else
                <p>Dalam menjalankan usahanya di bidang manufaktur berbasis besi, CV Sumber Alam Raya berkomitmen untuk memberikan layanan yang profesional, tepat guna, dan sesuai dengan kebutuhan industri. Perusahaan ini menghadirkan berbagai solusi dalam pengolahan besi yang dapat disesuaikan dengan permintaan pelanggan, baik untuk keperluan konstruksi, otomotif, maupun pengadaan industri. Adapun layanan utama yang ditawarkan meliputi:</p>
            @endif
        </div>

        <div class="service-grid">
            @for ($i = 1; $i <= 3; $i++)
                @php
                    $serviceTitle = $page->{'service_' . $i . '_title'} ?? 'Judul Layanan ' . $i . ' (Default)';
                    $serviceBody = $page->{'service_' . $i . '_body'} ?? 'Deskripsi default untuk layanan ini.';
                    $imagePath = '';
                    if ($i == 1) $imagePath = 'assets/layanan1.jpg';
                    if ($i == 2) $imagePath = 'assets/Foto Galeri/3.jpg';
                    if ($i == 3) $imagePath = 'assets/Foto Galeri/6.JPG';
                @endphp
                <div class="service-card">
                    <img src="{{ asset($imagePath) }}" alt="Layanan {{ $i }}" /> {{-- Gambar hardcoded --}}
                    <h3>{{ $serviceTitle }}</h3>
                    <p>{!! $serviceBody !!}</p>
                </div>
            @endfor
        </div>
    </section>

    {{-- Catatan: Bagian contact-section dan footer sudah di main.blade.php --}}

@endsection