@extends('layouts.admin_app')

@section('title', 'Manajemen Halaman - Admin Dashboard')

@section('content')
    <div class="py-3">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Manajemen Halaman Website</h1>
            <a href="{{ route('admin.pages.create') }}" class="btn btn-primary"><i class="fas fa-plus me-2"></i> Tambah Halaman Baru</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger mt-3">
                {{ session('error') }}
            </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white">
                Daftar Halaman
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul Halaman</th>
                                <th>URL (Slug)</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pages as $page) {{-- Mengulang data halaman dari controller --}}
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $page->title }}</td>
                                    <td>/{{ $page->slug }}</td>
                                    <td>
                                        <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-info btn-sm">Edit</a>
                                        <form action="{{ route('admin.pages.destroy', $page->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus halaman ini? Kontennya akan hilang dari website!')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted">
                                        <p class="mt-3">Belum ada halaman yang terdaftar di database.</p>
                                        <p>Anda bisa menambahkannya dengan tombol "Tambah Halaman Baru".</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection