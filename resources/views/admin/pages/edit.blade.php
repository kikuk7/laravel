@extends('layouts.admin_app')

@section('title', 'Edit Halaman: ' . ($page->title ?? 'Tidak Ditemukan') . ' - Admin Dashboard')

@section('content')
    <div class="py-3">
        <h1>Edit Halaman: {{ $page->title ?? 'Tidak Ditemukan' }}</h1>

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger mt-3">
                {{ session('error') }}
            </div>
        @endif

        <div class="card shadow-sm mt-4">
            <div class="card-header bg-dark text-white">
                Formulir Edit Halaman
            </div>
            <div class="card-body">
                <form action="{{ route('admin.pages.update', $page->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Judul Halaman</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $page->title) }}" required>
                        @error('title')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug (URL)</label>
                        <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug', $page->slug) }}" required>
                        @error('slug')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                        <small class="form-text text-muted">Contoh: 'beranda', 'tentang', 'kontak'. Slug harus unik.</small>
                    </div>

                    <div class="mb-3">
                        <label for="hero_title" class="form-label">Judul Hero (Untuk Beranda)</label>
                        <input type="text" class="form-control" id="hero_title" name="hero_title" value="{{ old('hero_title', $page->hero_title) }}">
                        @error('hero_title')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                        <small class="form-text text-muted">Judul utama di bagian atas halaman beranda.</small>
                    </div>

                    ---
                    {{-- BAGIAN KHUSUS HALAMAN BERANDA (TEKS SAJA) --}}
                    @if($page->slug == 'beranda')
                        <h4 class="mb-3">Konten Spesifik Halaman Beranda</h4>

                        <div class="mb-3">
                            <label for="homepage_about_section_text" class="form-label">Teks Bagian Tentang Kami (Beranda)</label>
                            <textarea class="form-control" id="homepage_about_section_text" name="homepage_about_section_text" rows="5">{{ old('homepage_about_section_text', $page->homepage_about_section_text) }}</textarea>
                            @error('homepage_about_section_text')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">Paragraf utama di bagian "Tentang Kami" pada beranda.</small>
                        </div>

                        <div class="mb-3">
                            <label for="homepage_services_section_text" class="form-label">Teks Bagian Layanan Kami (Beranda)</label>
                            <textarea class="form-control" id="homepage_services_section_text" name="homepage_services_section_text" rows="5">{{ old('homepage_services_section_text', $page->homepage_services_section_text) }}</textarea>
                            @error('homepage_services_section_text')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">Paragraf utama di bagian "Layanan Kami" pada beranda.</small>
                        </div>
                    @endif

                    ---
                    {{-- BAGIAN KHUSUS HALAMAN TENTANG KAMI (TEKS SAJA) --}}
                    @if($page->slug == 'tentang')
                        <h4 class="mb-3">Konten Spesifik Halaman Tentang Kami</h4>

                        <div class="mb-3">
                            <label for="vision_title" class="form-label">Judul Visi</label>
                            <input type="text" class="form-control" id="vision_title" name="vision_title" value="{{ old('vision_title', $page->vision_title) }}">
                            @error('vision_title')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="vision_body" class="form-label">Isi Visi</label>
                            <textarea class="form-control" id="vision_body" name="vision_body" rows="3">{{ old('vision_body', $page->vision_body) }}</textarea>
                            @error('vision_body')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="mission_title" class="form-label">Judul Misi</label>
                            <input type="text" class="form-control" id="mission_title" name="mission_title" value="{{ old('mission_title', $page->mission_title) }}">
                            @error('mission_title')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="mission_body" class="form-label">Isi Misi</label>
                            <textarea class="form-control" id="mission_body" name="mission_body" rows="3">{{ old('mission_body', $page->mission_body) }}</textarea>
                            @error('mission_body')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="excellence_title" class="form-label">Judul Keunggulan</label>
                            <input type="text" class="form-control" id="excellence_title" name="excellence_title" value="{{ old('excellence_title', $page->excellence_title) }}">
                            @error('excellence_title')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    @endif

                    ---
                    {{-- BAGIAN KHUSUS HALAMAN LAYANAN KAMI (TEKS SAJA) --}}
                    @if($page->slug == 'layanan')
                        <h4 class="mb-3">Konten Spesifik Halaman Layanan Kami</h4>

                        <div class="mb-3">
                            <label for="main_intro_body" class="form-label">Paragraf Pembuka Layanan</label>
                            <textarea class="form-control" id="main_intro_body" name="main_intro_body" rows="5">{{ old('main_intro_body', $page->main_intro_body) }}</textarea>
                            @error('main_intro_body')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        @for ($i = 1; $i <= 3; $i++)
                            <h5 class="mt-4">Kartu Layanan {{ $i }}</h5>
                            <div class="mb-3">
                                <label for="service_{{ $i }}_title" class="form-label">Judul Kartu Layanan {{ $i }}</label>
                                <input type="text" class="form-control" id="service_{{ $i }}_title" name="service_{{ $i }}_title" value="{{ old('service_' . $i . '_title', $page->{'service_' . $i . '_title'}) }}">
                                @error('service_' . $i . '_title')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="service_{{ $i }}_body" class="form-label">Deskripsi Kartu Layanan {{ $i }}</label>
                                <textarea class="form-control" id="service_{{ $i }}_body" name="service_{{ $i }}_body" rows="3">{{ old('service_' . $i . '_body', $page->{'service_' . $i . '_body'}) }}</textarea>
                                @error('service_' . $i . '_body')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        @endfor
                    @endif

                    ---
                    {{-- BAGIAN KHUSUS HALAMAN GALERI (TEKS SAJA) --}}
                    @if($page->slug == 'galeri')
                        <h4 class="mb-3">Konten Spesifik Halaman Galeri</h4>

                        <div class="mb-3">
                            <label for="gallery_intro_body" class="form-label">Paragraf Pembuka Galeri</label>
                            <textarea class="form-control" id="gallery_intro_body" name="gallery_intro_body" rows="5">{{ old('gallery_intro_body', $page->gallery_intro_body) }}</textarea>
                            @error('gallery_intro_body')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    @endif

                    ---
                    {{-- BAGIAN KHUSUS HALAMAN KONTAK (TEKS SAJA) --}}
                    @if($page->slug == 'kontak')
                        <h4 class="mb-3">Konten Spesifik Halaman Kontak Kami</h4>

                        <div class="mb-3">
                            <label for="contact_overlay_text" class="form-label">Teks Overlay Hero</label>
                            <input type="text" class="form-control" id="contact_overlay_text" name="contact_overlay_text" value="{{ old('contact_overlay_text', $page->contact_overlay_text) }}">
                            @error('contact_overlay_text')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">Teks singkat di atas gambar hero halaman Kontak.</small>
                        </div>

                        <div class="mb-3">
                            <label for="contact_title" class="form-label">Judul Utama Kontak</label>
                            <input type="text" class="form-control" id="contact_title" name="contact_title" value="{{ old('contact_title', $page->contact_title) }}">
                            @error('contact_title')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <h5 class="mt-4">Info Kontak (Telepon)</h5>
                        <div class="mb-3">
                            <label for="contact_phone" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="contact_phone" name="contact_phone" value="{{ old('contact_phone', $page->contact_phone) }}">
                            @error('contact_phone')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <h5 class="mt-4">Info Kontak (Lokasi)</h5>
                        <div class="mb-3">
                            <label for="contact_location_title" class="form-label">Judul Lokasi</label>
                            <input type="text" class="form-control" id="contact_location_title" name="contact_location_title" value="{{ old('contact_location_title', $page->contact_location_title) }}">
                            @error('contact_location_title')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="contact_location_body" class="form-label">Alamat Lengkap</label>
                            <textarea class="form-control" id="contact_location_body" name="contact_location_body" rows="3">{{ old('contact_location_body', $page->contact_location_body) }}</textarea>
                            @error('contact_location_body')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <h5 class="mt-4">Info Kontak (Email)</h5>
                        <div class="mb-3">
                            <label for="contact_email_title" class="form-label">Judul Email</label>
                            <input type="text" class="form-control" id="contact_email_title" name="contact_email_title" value="{{ old('contact_email_title', $page->contact_email_title) }}">
                            @error('contact_email_title')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="contact_email_address" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="contact_email_address" name="contact_email_address" value="{{ old('contact_email_address', $page->contact_email_address) }}">
                            @error('contact_email_address')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="contact_whatsapp_number" class="form-label">Nomor WhatsApp (untuk Tombol)</label>
                            <input type="text" class="form-control" id="contact_whatsapp_number" name="contact_whatsapp_number" value="{{ old('contact_whatsapp_number', $page->contact_whatsapp_number) }}">
                            @error('contact_whatsapp_number')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">Contoh: +6287812345678 (gunakan format internasional).</small>
                        </div>
                    @endif

                    ---
                    {{-- BAGIAN BARU KHUSUS HALAMAN FAQ (TEKS SAJA) --}}
                    @if($page->slug == 'faq')
                        <h4 class="mb-3">Konten Spesifik Halaman FAQ</h4>

                        <div class="mb-3">
                            <label for="faq_main_title" class="form-label">Judul Utama FAQ</label>
                            <input type="text" class="form-control" id="faq_main_title" name="faq_main_title" value="{{ old('faq_main_title', $page->faq_main_title) }}">
                            @error('faq_main_title')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        @for ($i = 1; $i <= 5; $i++) {{-- Loop untuk 5 item FAQ --}}
                            <h5 class="mt-4">Item FAQ {{ $i }}</h5>
                            <div class="mb-3">
                                <label for="faq_{{ $i }}_question" class="form-label">Pertanyaan {{ $i }}</label>
                                <input type="text" class="form-control" id="faq_{{ $i }}_question" name="faq_{{ $i }}_question" value="{{ old('faq_' . $i . '_question', $page->{'faq_' . $i . '_question'}) }}">
                                @error('faq_' . $i . '_question')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="faq_{{ $i }}_answer" class="form-label">Jawaban {{ $i }}</label>
                                <textarea class="form-control" id="faq_{{ $i }}_answer" name="faq_{{ $i }}_answer" rows="3">{{ old('faq_' . $i . '_answer', $page->{'faq_' . $i . '_answer'}) }}</textarea>
                                @error('faq_' . $i . '_answer')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        @endfor
                    @endif

                    ---
                    <div class="mb-3">
                        <label for="body" class="form-label">Konten Halaman (Utama)</label>
                        <textarea class="form-control" id="body" name="body" rows="10">{{ old('body', $page->body) }}</textarea>
                        @error('body')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                        <small class="form-text text-muted">Isi utama halaman ini. Anda bisa menggunakan HTML di sini.</small>
                    </div>

                    <button type="submit" class="btn btn-success mt-3">Simpan Perubahan</button>
                    <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary mt-3">Batal</a>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Inisialisasi CKEditor atau WYSIWYG editor lainnya di sini jika Anda menggunakannya --}}
    <script>
        // Contoh inisialisasi CKEditor jika Anda memiliki ckeditor.js
        // if (typeof CKEDITOR !== 'undefined') {
        //     CKEDITOR.replace('body');
        // }
    </script>
@endpush