@extends('frontend.layouts.main')

@section('title', $page->title ?? 'Tentang Kami - CV Sumber Alam Raya')

@section('content')

    <section class="hero">
        <div class="container">
            <div class="hero-image-wrapper">
                <img src="{{ asset('assets/tentang.JPG') }}" alt="Tentang Kami Hero" /> {{-- Gambar hardcoded --}}
            </div>
        </div>
    </section>

    <section class="container">
        <div class="content card">
            <h2 class="section-title">{{ $page->title ?? 'Tentang Kami' }}</h2>
            @if($page && $page->body)
                {!! $page->body !!} {{-- Konten utama paragraf tentang --}}
            @else
                <p>CV Sumber Alam Raya adalah perusahaan manufaktur yang berbasis di Tegal, Jawa Tengah. Kami bergerak di bidang pengolahan besi untuk memenuhi kebutuhan industri, seperti tangki oli hidrolik, ornamen pagar, aksesori knalpot, serta berbagai komponen kendaraan lainnya.</p>
                <p>Didirikan pada tahun 2018, kami telah membangun reputasi sebagai penyedia produk berkualitas dengan layanan profesional dan pengiriman tepat waktu. Dengan pengalaman hampir 7 tahun, kami terus berinovasi dan mengembangkan bisnis untuk menjangkau pasar nasional hingga internasional melalui pendekatan digital yang adaptif dan efisien.</p>
            @endif
        </div>
    </section>

    <section class="visi-misi">
        <div class="container visi-misi-box">
            <div>
                <h3>{{ $page->vision_title ?? 'Visi' }}</h3>
                <p>{{ $page->vision_body ?? 'Membangun perusahaan yang profesional, berintegritas tinggi, inovatif dan berkelanjutan.' }}</p>
            </div>
            <div>
                <h3>{{ $page->mission_title ?? 'Misi' }}</h3>
                <p>{{ $page->mission_body ?? 'Menyediakan produk dan layanan unggulan, menjaga hubungan baik dengan pelanggan, serta berkontribusi positif terhadap industri dan masyarakat.' }}</p>
            </div>
        </div>
    </section>

    <section class="galeri">
        <section class="container">
            <h2 class="section-title">{{ $page->excellence_title ?? 'Keunggulan Kami' }}</h2>
        </section>
        <div class="tentang-grid">
            <img src="{{ asset('assets/tentang2.png') }}" alt="Keunggulan 1" /> {{-- Gambar hardcoded --}}
            <img src="{{ asset('assets/tentang1.png') }}" alt="Keunggulan 2" /> {{-- Gambar hardcoded --}}
            <img src="{{ asset('assets/tentang3.png') }}" alt="Keunggulan 3" /> {{-- Gambar hardcoded --}}
        </div>
    </section>

@endsection