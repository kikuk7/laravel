<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page; // PENTING: Pastikan Anda mengimpor model Page ini
use Illuminate\Support\Facades\Storage; // PENTING: Pastikan Anda mengimpor Storage Facade

class PageController extends Controller
{
    /**
     * Menampilkan daftar semua halaman statis dari database.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // <-- METODE INI HARUS ADA!
    {
        // Ambil semua halaman dari database
        $pages = Page::all();
        return view('admin.pages.index', compact('pages'));
    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }


    /**
     * Menampilkan formulir untuk membuat halaman baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Menyimpan halaman baru ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:pages,slug|max:255',
            'body' => 'nullable|string',
            'hero_title' => 'nullable|string|max:255',
        ];

        // VALIDASI KHUSUS UNTUK BERANDA
        if ($request->slug == 'beranda') {
            $rules['homepage_about_section_text'] = 'nullable|string';
            $rules['homepage_services_section_text'] = 'nullable|string';
        }

        // VALIDASI TEKS UNTUK HALAMAN TENTANG KAMI
        if ($request->slug == 'tentang') {
            $rules['vision_title'] = 'nullable|string|max:255';
            $rules['vision_body'] = 'nullable|string';
            $rules['mission_title'] = 'nullable|string|max:255';
            $rules['mission_body'] = 'nullable|string';
            $rules['excellence_title'] = 'nullable|string|max:255';
        }

        // VALIDASI UNTUK HALAMAN LAYANAN KAMI
        if ($request->slug == 'layanan') {
            $rules['main_intro_body'] = 'nullable|string';
            for ($i = 1; $i <= 3; $i++) {
                $rules['service_' . $i . '_title'] = 'nullable|string|max:255';
                $rules['service_' . $i . '_body'] = 'nullable|string';
            }
        }

        // VALIDASI UNTUK HALAMAN GALERI KAMI
        if ($request->slug == 'galeri') {
            $rules['gallery_intro_body'] = 'nullable|string';
        }

        // VALIDASI UNTUK HALAMAN KONTAK KAMI
        if ($request->slug == 'kontak') {
            $rules['contact_overlay_text'] = 'nullable|string|max:255';
            $rules['contact_title'] = 'nullable|string|max:255';
            $rules['contact_phone'] = 'nullable|string|max:255';
            $rules['contact_location_title'] = 'nullable|string|max:255';
            $rules['contact_location_body'] = 'nullable|string';
            $rules['contact_email_title'] = 'nullable|string|max:255';
            $rules['contact_email_address'] = 'nullable|string|email|max:255';
            $rules['contact_whatsapp_number'] = 'nullable|string|max:255';
        }

        // --- VALIDASI BARU UNTUK HALAMAN FAQ ---
        if ($request->slug == 'faq') {
            $rules['faq_main_title'] = 'nullable|string|max:255';
            for ($i = 1; $i <= 5; $i++) { // Menambahkan validasi untuk setiap item FAQ
                $rules['faq_' . $i . '_question'] = 'nullable|string';
                $rules['faq_' . $i . '_answer'] = 'nullable|string';
            }
        }
        // --- AKHIR VALIDASI BARU UNTUK HALAMAN FAQ ---

        $validatedData = $request->validate($rules); // Lakukan validasi setelah semua rules terkumpul

        // Karena kita tidak lagi menggunakan faq_items_json, tidak perlu konversi di sini
        // Kita bisa langsung pakai $validatedData
        Page::create($validatedData);

        return redirect()->route('admin.pages.index')->with('success', 'Halaman berhasil ditambahkan!');
    }


    public function update(Request $request, Page $page)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:pages,slug,' . $page->id . '|max:255',
            'body' => 'nullable|string',
            'hero_title' => 'nullable|string|max:255',
        ];

        // VALIDASI KHUSUS UNTUK BERANDA
        if ($request->slug == 'beranda') {
            $rules['homepage_about_section_text'] = 'nullable|string';
            $rules['homepage_services_section_text'] = 'nullable|string';
        }

        // VALIDASI TEKS UNTUK HALAMAN TENTANG KAMI
        if ($request->slug == 'tentang') {
            $rules['vision_title'] = 'nullable|string|max:255';
            $rules['vision_body'] = 'nullable|string';
            $rules['mission_title'] = 'nullable|string|max:255';
            $rules['mission_body'] = 'nullable|string';
            $rules['excellence_title'] = 'nullable|string|max:255';
        }

        // VALIDASI UNTUK HALAMAN LAYANAN KAMI
        if ($request->slug == 'layanan') {
            $rules['main_intro_body'] = 'nullable|string';
            for ($i = 1; $i <= 3; $i++) {
                $rules['service_' . $i . '_title'] = 'nullable|string|max:255';
                $rules['service_' . $i . '_body'] = 'nullable|string';
            }
        }

        // VALIDASI UNTUK HALAMAN GALERI KAMI
        if ($request->slug == 'galeri') {
            $rules['gallery_intro_body'] = 'nullable|string';
        }

        // VALIDASI UNTUK HALAMAN KONTAK KAMI
        if ($request->slug == 'kontak') {
            $rules['contact_overlay_text'] = 'nullable|string|max:255';
            $rules['contact_title'] = 'nullable|string|max:255';
            $rules['contact_phone'] = 'nullable|string|max:255';
            $rules['contact_location_title'] = 'nullable|string|max:255';
            $rules['contact_location_body'] = 'nullable|string';
            $rules['contact_email_title'] = 'nullable|string|max:255';
            $rules['contact_email_address'] = 'nullable|string|email|max:255';
            $rules['contact_whatsapp_number'] = 'nullable|string|max:255';
        }

        // --- VALIDASI BARU UNTUK HALAMAN FAQ ---
        if ($request->slug == 'faq') {
            $rules['faq_main_title'] = 'nullable|string|max:255';
            for ($i = 1; $i <= 5; $i++) { // Menambahkan validasi untuk setiap item FAQ
                $rules['faq_' . $i . '_question'] = 'nullable|string';
                $rules['faq_' . $i . '_answer'] = 'nullable|string';
            }
        }
        // --- AKHIR VALIDASI BARU UNTUK HALAMAN FAQ ---

        $validatedData = $request->validate($rules); // Lakukan validasi setelah semua rules terkumpul

        // Data yang akan diupdate diambil dari $validatedData
        // Tidak perlu lagi $request->except, karena $validatedData sudah bersih
        $page->update($validatedData);

        return redirect()->route('admin.pages.edit', $page->id)->with('success', 'Halaman berhasil diperbarui!');
    }

    public function destroy(Page $page)
    {
        // Pastikan tidak ada logika hapus file di sini
        $page->delete();
        return redirect()->route('admin.pages.index')->with('success', 'Halaman berhasil dihapus!');
    }
}