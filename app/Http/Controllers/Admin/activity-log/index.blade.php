@extends('layouts.admin_app')

@section('title', 'Log Aktivitas - Admin Dashboard')

@section('content')
    <div class="container py-5">
        <h1>Log Aktivitas</h1>

        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white">
                Daftar Aktivitas
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Waktu</th>
                                <th>Pengguna</th>
                                <th>Aktivitas</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Opsi 1: Jika menggunakan logging bawaan Laravel --}}
                            {{-- @foreach ($logs as $log)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ substr($log, 0, 19) }}</td> {{-- Ambil timestamp dari awal baris --}}
                                    <td>N/A</td> {{-- Perlu parsing lebih lanjut untuk mendapatkan nama pengguna --}}
                                    <td>{{ substr($log, 21) }}</td> {{-- Sisa baris adalah pesan log --}}
                                    <td><button class="btn btn-sm btn-outline-secondary">Lihat</button></td>
                                </tr>
                            @endforeach --}}

                            {{-- Opsi 2: Jika menggunakan model ActivityLog --}}
                            {{-- @foreach ($logs as $log)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $log->created_at->format('d M Y H:i:s') }}</td>
                                    <td>{{ $log->causer->name ?? 'Sistem' }}</td> {{-- Asumsi ada relasi ke user --}}
                                    <td>{{ $log->description }}</td>
                                    <td><a href="#" class="btn btn-sm btn-outline-info">Detail</a></td>
                                </tr>
                            @endforeach --}}
                            <tr>
                                <td colspan="5" class="text-center text-muted">
                                    <p class="mt-3">Belum ada aktivitas yang tercatat atau data belum dimuat.</p>
                                    <p>Untuk melihat log aktivitas, pastikan Anda telah mengkonfigurasi logging (Laravel bawaan atau paket seperti `spatie/laravel-activitylog`) dan mengambil data yang sesuai di `ActivityLogController`.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection