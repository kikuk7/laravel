@extends('layouts.admin_app')

@section('title', 'Tambah Produk Baru - Admin Dashboard')

@section('content')
    <div class="py-3">
        <h1>Tambah Produk Baru</h1>

        @if (session('error'))
            <div class="alert alert-danger mt-3">
                {{ session('error') }}
            </div>
        @endif

        <div class="card shadow-sm mt-4">
            <div class="card-header bg-dark text-white">
                Formulir Produk
            </div>
            <div class="card-body">
                <form action="{{ route('admin.products.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi Produk</label>
                        <textarea class="form-control" id="description" name="description" rows="5" required>{{ old('description') }}</textarea>
                        @error('description')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="model_path" class="form-label">Path File GLB (.glb)</label>
                        <input type="text" class="form-control" id="model_path" name="model_path" value="{{ old('model_path') }}" placeholder="Contoh: assets/Product/TangkiKotak.glb" required>
                        @error('model_path')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                        <small class="form-text text-muted">Masukkan path relatif file GLB Anda dari folder 'public/'.</small>
                    </div>

                    <div class="mb-3">
                        <label for="specs_json" class="form-label">Spesifikasi (Format JSON Array)</label>
                        <textarea class="form-control" id="specs_json" name="specs_json" rows="5" placeholder='["Bahan: Plat besi", "Tebal: 2mm"]'>{{ old('specs_json') }}</textarea>
                        @error('specs_json')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                        <small class="form-text text-muted">Masukkan spesifikasi sebagai array JSON string.</small>
                    </div>

                    <div class="mb-3">
                        <label for="whatsapp_number" class="form-label">Nomor WhatsApp</label>
                        <input type="text" class="form-control" id="whatsapp_number" name="whatsapp_number" value="{{ old('whatsapp_number') }}" placeholder="+62878xxxxxx">
                        @error('whatsapp_number')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" {{ old('is_active', 1) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">Aktif (Tampilkan di website)</label>
                    </div>

                    <button type="submit" class="btn btn-success mt-3">Simpan Produk</button>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary mt-3">Batal</a>
                </form>
            </div>
        </div>
    </div>
@endsection