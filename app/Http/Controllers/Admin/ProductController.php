<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product; // Impor model Product
use Illuminate\Validation\Rule; // Untuk validasi unik

class ProductController extends Controller
{
    /**
     * Menampilkan daftar semua produk.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Menampilkan formulir untuk membuat produk baru.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Menyimpan produk baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:products,name',
            'description' => 'required|string',
            'model_path' => 'required|string|max:255',
            'specs_json' => 'nullable|json', // Validasi input specs sebagai JSON string
            'whatsapp_number' => 'nullable|string|max:255',
            'is_active' => 'boolean',
        ]);

        $data = $request->except(['_token', 'specs_json']); // Ambil semua kecuali token dan specs_json

        // Konversi specs_json string ke array/JSON untuk disimpan
        if ($request->filled('specs_json')) {
            $data['specs'] = json_decode($request->specs_json, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                return back()->withInput()->withErrors(['specs_json' => 'Format Spesifikasi JSON tidak valid.']);
            }
        } else {
            $data['specs'] = []; // Default ke array kosong jika tidak ada specs
        }
        
        Product::create($data);

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail produk.
     */
    public function show(Product $product)
    {
        // Biasanya tidak ada halaman show terpisah untuk produk di admin, langsung ke edit
        return redirect()->route('admin.products.edit', $product->id);
    }

    /**
     * Menampilkan formulir untuk mengedit produk tertentu.
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Memperbarui produk tertentu di database.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', Rule::unique('products')->ignore($product->id)],
            'description' => 'required|string',
            'model_path' => 'required|string|max:255',
            'specs_json' => 'nullable|json',
            'whatsapp_number' => 'nullable|string|max:255',
            'is_active' => 'boolean',
        ]);

        $data = $request->except(['_token', '_method', 'specs_json']);

        if ($request->filled('specs_json')) {
            $data['specs'] = json_decode($request->specs_json, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                return back()->withInput()->withErrors(['specs_json' => 'Format Spesifikasi JSON tidak valid.']);
            }
        } else {
            $data['specs'] = [];
        }

        $product->update($data);

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil diperbarui!');
    }

    /**
     * Menghapus produk dari database.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil dihapus!');
    }
}