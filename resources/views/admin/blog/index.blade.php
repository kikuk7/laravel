@extends('frontend.layouts.main')

@section('title', 'Manajemen Blog - Admin Dashboard')

@section('content')
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Manajemen Blog / Berita</h1>
            <a href="#" class="btn btn-primary"><i class="fas fa-plus me-2"></i> Tambah Postingan Baru</a>
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
                Daftar Postingan
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Kategori</th>
                                <th>Tanggal Publikasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Di sini Anda akan mengulang data postingan dari database --}}
                            {{-- @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->author->name ?? 'Admin' }}</td>
                                    <td>{{ $post->category->name ?? 'Umum' }}</td>
                                    <td>{{ $post->published_at ? $post->published_at->format('d M Y') : 'Draf' }}</td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm">Edit</a>
                                        <form action="#" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus postingan ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach --}}
                            <tr>
                                <td colspan="6" class="text-center text-muted">
                                    <p class="mt-3">Belum ada postingan yang terdaftar atau data belum dimuat.</p>
                                    <p>Untuk melihat daftar postingan, Anda perlu mengambil data dari database di `BlogController`.</p>
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