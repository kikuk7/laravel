<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\ActivityLog; // Jika Anda memiliki model ActivityLog sendiri
use Illuminate\Support\Facades\Log; // Untuk menggunakan fitur logging bawaan Laravel

class ActivityLogController extends Controller
{
    /**
     * Menampilkan daftar log aktivitas.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Opsi 1: Menggunakan fitur logging bawaan Laravel (sederhana, berbasis file)
        // $logs = file(storage_path('logs/laravel.log')); // Baca isi file log
        // return view('admin.activity-log.index', compact('logs'));

        // Opsi 2: Jika Anda menggunakan model ActivityLog (lebih terstruktur, basis data)
        // $logs = ActivityLog::latest()->paginate(20); // Ambil log terbaru, paginasi
        // return view('admin.activity-log.index', compact('logs'));

        return view('admin.activity-log.index'); // Untuk saat ini, hanya me-load view
    }
}