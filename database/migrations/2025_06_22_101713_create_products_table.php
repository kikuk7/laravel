<?php

// database/migrations/YYYY_MM_DD_create_products_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Kolom ID otomatis (primary key, auto-increment)
            $table->string('name'); // Nama produk
            $table->text('description')->nullable(); // Deskripsi produk (nullable = boleh kosong)
            $table->decimal('price', 10, 2); // Harga produk (10 digit total, 2 di belakang koma)
            $table->string('image')->nullable(); // Nama file gambar produk (opsional)
            $table->boolean('is_active')->default(true); // Status produk aktif/tidak
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
