<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Order; // Jangan lupa mengimpor model Order Anda jika ada

class OrderController extends Controller
{
    /**
     * Menampilkan daftar semua pesanan.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Di sini Anda akan mengambil data pesanan dari database
        // dan mengirimkannya ke view. Contoh:
        // $orders = Order::with('user')->latest()->get(); // Mengambil pesanan terbaru dengan informasi pengguna
        // return view('admin.orders.index', compact('orders'));

        return view('admin.orders.index'); // Untuk saat ini, hanya me-load view
    }

    // Anda bisa menambahkan metode lain di sini untuk CRUD:
    // public function show(Order $order) { /* ... */ } // Untuk melihat detail pesanan
    // public function update(Request $request, Order $order) { /* ... */ } // Untuk mengubah status pesanan
    // public function destroy(Order $order) { /* ... */ } // Untuk menghapus pesanan
}