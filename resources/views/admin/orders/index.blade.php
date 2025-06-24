@extends('frontend.layouts.main')

@section('title', 'Manajemen Pesanan - Admin Dashboard')

@section('content')
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Manajemen Pesanan</h1>
            {{-- Tombol "Tambah Pesanan Baru" biasanya tidak ada untuk pesanan karena dibuat oleh pelanggan --}}
            {{-- <a href="#" class="btn btn-primary"><i class="fas fa-plus me-2"></i> Tambah Pesanan Baru</a> --}}
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
                Daftar Pesanan
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID Pesanan</th>
                                <th>Pelanggan</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Tanggal Pesan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Di sini Anda akan mengulang data pesanan dari database --}}
                            {{-- @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $order->order_id }}</td> {{-- Sesuaikan dengan kolom ID pesanan Anda --}}
                                    <td>{{ $order->user->name ?? 'Tamu' }}</td> {{-- Asumsi ada relasi ke user --}}
                                    <td>Rp {{ number_format($order->total_amount, 0, ',', '.') }}</td>
                                    <td><span class="badge bg-info">{{ $order->status }}</span></td>
                                    <td>{{ $order->created_at->format('d M Y H:i') }}</td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm">Detail</a>
                                        <a href="#" class="btn btn-warning btn-sm">Edit Status</a>
                                        <form action="#" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pesanan ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach --}}
                            <tr>
                                <td colspan="7" class="text-center text-muted">
                                    <p class="mt-3">Belum ada pesanan yang terdaftar atau data belum dimuat.</p>
                                    <p>Untuk melihat daftar pesanan, Anda perlu mengambil data dari database di `OrderController`.</p>
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