@extends('layouts.admin_app') {{-- Pastikan ini mengacu ke layout admin baru Anda --}}

@section('title', 'Manajemen Pengguna - Admin Dashboard')

@section('content')
    <div class="py-3">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Manajemen Pengguna</h1>
            <a href="#" class="btn btn-primary"><i class="fas fa-plus me-2"></i> Tambah Pengguna Baru</a>
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
                Daftar Pengguna
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Bergabung Sejak</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user) {{-- Mengulang data pengguna dari controller --}}
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td><span class="badge bg-secondary">{{ $user->role }}</span></td>
                                    <td>{{ $user->created_at->format('d M Y') }}</td>
                                    <td>
                                        {{-- Anda perlu membuat rute admin.users.edit dan admin.users.destroy --}}
                                        <a href="#" class="btn btn-info btn-sm">Edit</a>
                                        <form action="#" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted">
                                        <p class="mt-3">Belum ada pengguna yang terdaftar.</p>
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