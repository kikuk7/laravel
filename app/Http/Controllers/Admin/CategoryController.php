<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Category; // Jangan lupa mengimpor model Category Anda jika ada

class CategoryController extends Controller
{
    /**
     * Menampilkan daftar semua kategori.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Di sini Anda akan mengambil data kategori dari database
        // dan mengirimkannya ke view. Contoh:
        // $categories = Category::all();
        // return view('admin.categories.index', compact('categories'));

        return view('admin.categories.index'); // Untuk saat ini, hanya me-load view
    }

    // Anda bisa menambahkan metode lain di sini untuk CRUD:
    // public function create() { /* ... */ }
    // public function store(Request $request) { /* ... */ }
    // public function show(Category $category) { /* ... */ }
    // public function edit(Category $category) { /* ... */ }
    // public function update(Request $request, Category $category) { /* ... */ }
    // public function destroy(Category $category) { /* ... */ }
}