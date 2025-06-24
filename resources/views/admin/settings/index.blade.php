@extends('layouts.admin_app') {{-- Pastikan ini mengacu ke layout admin baru Anda --}}

@section('title', 'Pengaturan Situs - Admin Dashboard')

@section('content')
    <div class="py-3">
        <h1 class="mb-4">Pengaturan Situs</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white">
                Konfigurasi Umum
            </div>
            <div class="card-body">
                {{-- Formulir ini akan mengirim data ke metode update di SettingController --}}
                <form action="{{ route('admin.settings.update') }}" method="POST">
                    @csrf
                    @method('PUT') {{-- Gunakan metode PUT untuk update resource --}}

                    <div class="mb-3">
                        <label for="site_name" class="form-label">Nama Situs</label>
                        <input type="text" class="form-control" id="site_name" name="site_name" value="{{-- {{ $settings->site_name ?? 'CV Sumber Alam Raya' }} --}}" required>
                        <small class="form-text text-muted">Nama yang akan ditampilkan di judul situs, footer, dll.</small>
                    </div>

                    <div class="mb-3">
                        <label for="site_description" class="form-label">Deskripsi Situs</label>
                        <textarea class="form-control" id="site_description" name="site_description" rows="3">{{-- {{ $settings->site_description ?? '' }} --}}</textarea>
                        <small class="form-text text-muted">Deskripsi singkat situs Anda untuk SEO dan informasi umum.</small>
                    </div>

                    {{-- Tambahkan field pengaturan lain di sini, contoh: --}}
                    {{--
                    <div class="mb-3">
                        <label for="contact_email" class="form-label">Email Kontak</label>
                        <input type="email" class="form-control" id="contact_email" name="contact_email" value="{{ $settings->contact_email ?? '' }}">
                    </div>

                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $settings->phone_number ?? '' }}">
                    </div>
                    --}}

                    <button type="submit" class="btn btn-success mt-3">Simpan Pengaturan</button>
                </form>
            </div>
        </div>
    </div>
@endsection