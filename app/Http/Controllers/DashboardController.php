<?php

namespace App\Http\Controllers;

use App\Models\User; // Penting: import model User
use App\Models\Order; // Penting: import model Order (jika Anda memilikinya)
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->role === 'admin') {
                // Ambil data untuk admin dashboard
                $totalUsers = User::count();
                $totalOrders = Order::count(); // Asumsi Anda punya model Order dan tabel orders
                $recentOrders = Order::with('user')->orderBy('created_at', 'desc')->limit(5)->get(); // Asumsi relasi user

                return view('admin.dashboard', compact('totalUsers', 'totalOrders', 'recentOrders'));
            } else {
                // Untuk user biasa (jika ada dashboard user)
                return view('dashboard');
            }
        }
        // Jika tidak login, redirect ke login page
        return redirect()->route('login');
    }
}