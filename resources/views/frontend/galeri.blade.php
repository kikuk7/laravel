@extends('frontend.layouts.main')

@section('title', $page->title ?? 'Galeri - CV Sumber Alam Raya')

@section('content')

    <section class="galeri">
        <h2>{{ $page->title ?? 'Galeri Kami' }}</h2>
        @if($page && $page->gallery_intro_body)
            <p>{!! $page->gallery_intro_body !!}</p> {{-- Paragraf pembuka dinamis --}}
        @else
            <p>Dokumentasi visual dari setiap proses dan hasil karya kami mencerminkan komitmen terhadap kualitas dan ketelitian. Melalui galeri ini, Anda dapat melihat bagaimana kami bekerja dengan penuh dedikasi dan tim yang berpengalaman untuk menghasilkan solusi terbaik bagi kebutuhan industri Anda.</p>
        @endif
        <div class="parent">
            {{-- Gambar-gambar Galeri tetap hardcoded --}}
            <div class="div7"><img src="{{ asset('assets/Foto Galeri/DSCF5415 (1).JPG') }}" alt="Galeri 1"></div>
            <div class="div8"><img src="{{ asset('assets/Foto Galeri/5.jpg') }}" alt="Galeri 2"></div>
            <div class="div9"><img src="{{ asset('assets/Foto Galeri/DSCF5362 (2).JPG') }}" alt="Galeri 3"></div>
            <div class="div10"><img src="{{ asset('assets/DSCF5374.JPG') }}" alt="Galeri 4"></div>
            <div class="div11"><img src="{{ asset('assets/Foto Galeri/DSCF5418 (1).JPG') }}" alt="Galeri 5"></div>
            <div class="div12"><img src="{{ asset('assets/DSCF5359 (1).JPG') }}" alt="Galeri 6"></div>
            <div class="div13"><img src="{{ asset('assets/DSCF5365 (2) (1).jpg') }}" alt="Galeri 7"></div>
            <div class="div14"><img src="{{ asset('assets/DSCF5361 (1).JPG') }}" alt="Galeri 8"></div>
            <div class="div15"><img src="{{ asset('assets/Foto Galeri/DSCF5421 (1).JPG') }}" alt="Galeri 9"></div>
            <div class="div16"><img src="{{ asset('assets/DSCF5360 (1).JPG') }}" alt="Galeri 10"></div>
            <div class="div17"><img src="{{ asset('assets/DSCF5385.JPG') }}" alt="Galeri 11"></div>
            <div class="div18"><img src="{{ asset('assets/tentang.JPG') }}" alt="Galeri 12"></div>
        </div>
    </section>

@endsection