@extends('frontend.layouts.main')

@section('title', 'Manajemen Testimoni - Admin Dashboard')

@section('content')
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Manajemen Testimoni</h1>
            <a href="#" class="btn btn-primary"><i class="fas fa-plus me-2"></i> Tambah Testimoni Baru</a>
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
                Daftar Testimoni
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Pelanggan</th>
                                <th>Isi Testimoni</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Di sini Anda akan mengulang data testimoni dari database --}}
                            {{-- @foreach ($testimonials as $testimonial)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $testimonial->customer_name }}</td>
                                    <td>{{ Str::limit($testimonial->content, 100) }}</td>
                                    <td><span class="badge {{ $testimonial->is_approved ? 'bg-success' : 'bg-warning' }}">{{ $testimonial->is_approved ? 'Disetujui' : 'Pending' }}</span></td>
                                    <td>{{ $testimonial->created_at->format('d M Y') }}</td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm">Edit</a>
                                        <form action="#" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus testimoni ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach --}}
                            <tr>
                                <td colspan="6" class="text-center text-muted">
                                    <p class="mt-3">Belum ada testimoni yang terdaftar atau data belum dimuat.</p>
                                    <p>Untuk melihat daftar testimoni, Anda perlu mengambil data dari database di `TestimonialController`.</p>
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