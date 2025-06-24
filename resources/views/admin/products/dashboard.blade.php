@extends('frontend.layouts.main') {{-- Jika dashboard admin juga menggunakan layout utama --}}

@section('title', 'Admin Dashboard - CV Sumber Alam Raya')

@section('content')
    <div class="container py-5">
        <h1>Selamat Datang di Admin Dashboard!</h1>
        <p>Anda login sebagai: {{ Auth::user()->name }} (Role: {{ Auth::user()->role }})</p>

        <div class="card mt-4">
            <div class="card-header">Navigasi Admin</div>
            <div class="card-body">
                <ul>
                    <li><a href="{{ route('admin.pages.index') }}">Kelola Halaman</a></li>
                    <li><a href="{{ route('admin.products.index') }}">Kelola Produk</a></li>
                    <li><a href="{{ route('admin.gallery-images.index') }}">Kelola Galeri</a></li>
                    <li><a href="{{ route('dashboard') }}">Kembali ke Dashboard Utama</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Anda bisa menambahkan konten khusus admin di sini --}}
    </div>
@endsection