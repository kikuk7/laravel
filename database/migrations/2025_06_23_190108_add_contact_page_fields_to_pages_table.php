<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('contact_overlay_text')->nullable()->after('body'); // Teks overlay di hero section
            $table->string('contact_title')->nullable(); // Judul utama 'Kontak Kami' (H2)
            $table->string('contact_phone')->nullable();
            $table->string('contact_location_title')->nullable(); // Judul 'Kunjungi kami' (H3)
            $table->text('contact_location_body')->nullable(); // Paragraf lokasi
            $table->string('contact_email_title')->nullable(); // Judul 'Email' (H3)
            $table->string('contact_email_address')->nullable(); // Alamat email
            $table->string('contact_whatsapp_number')->nullable(); // Nomor WA untuk tombol link
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn('contact_overlay_text');
            $table->dropColumn('contact_title');
            $table->dropColumn('contact_phone');
            $table->dropColumn('contact_location_title');
            $table->dropColumn('contact_location_body');
            $table->dropColumn('contact_email_title');
            $table->dropColumn('contact_email_address');
            $table->dropColumn('contact_whatsapp_number');
        });
    }
};