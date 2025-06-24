@extends('frontend.layouts.main')

@section('title', 'Manajemen Kategori - Admin Dashboard')

@section('content')
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Manajemen Kategori Produk</h1>
            <a href="#" class="btn btn-primary"><i class="fas fa-plus me-2"></i> Tambah Kategori Baru</a>
        </div>

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
                Daftar Kategori
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Kategori</th>
                                <th>Jumlah Produk</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Di sini Anda akan mengulang data kategori dari database --}}
                            {{-- @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->products_count ?? 'N/A' }}</td> {{-- Asumsi ada relasi dan withCount di controller --}}
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm">Edit</a>
                                        <form action="#" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach --}}
                            <tr>
                                <td colspan="4" class="text-center text-muted">
                                    <p class="mt-3">Belum ada kategori yang terdaftar atau data belum dimuat.</p>
                                    <p>Untuk melihat daftar kategori, Anda perlu mengambil data dari database di `CategoryController`.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Anda bisa menambahkan skrip JavaScript di sini jika diperlukan --}}
@endpush