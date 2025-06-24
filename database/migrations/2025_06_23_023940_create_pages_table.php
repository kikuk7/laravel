<?php

// database/migrations/YYYY_MM_DD_create_pages_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('pages', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('slug')->unique(); // Penting untuk identifikasi halaman seperti 'beranda', 'tentang'
        $table->text('body')->nullable(); // Konten utama halaman (longtext jika konten panjang)
        $table->string('hero_title')->nullable(); // Opsional, jika ada judul terpisah di hero section
        // Tambahan kolom lain jika diperlukan, misal untuk gambar hero, meta deskripsi, dll.
        $table->timestamps();
    });
}


    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};