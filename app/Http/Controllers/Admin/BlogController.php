<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Post; // Atau App\Models\Blog, sesuaikan dengan nama model untuk postingan blog Anda

class BlogController extends Controller
{
    /**
     * Menampilkan daftar semua postingan blog.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Di sini Anda akan mengambil data postingan blog dari database
        // dan mengirimkannya ke view. Contoh:
        // $posts = Post::latest()->get(); // Mengambil postingan terbaru
        // return view('admin.blog.index', compact('posts'));

        return view('admin.blog.index'); // Untuk saat ini, hanya me-load view
    }

    // Anda bisa menambahkan metode lain di sini untuk CRUD:
    // public function create() { /* ... */ }
    // public function store(Request $request) { /* ... */ }
    // public function show(Post $post) { /* ... */ }
    // public function edit(Post $post) { /* ... */ }
    // public function update(Request $request, Post $post) { /* ... */ }
    // public function destroy(Post $post) { /* ... */ }
}