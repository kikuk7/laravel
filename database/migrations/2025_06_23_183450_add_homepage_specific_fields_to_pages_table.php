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
            // Kolom-kolom ini sudah ada: 'title', 'slug', 'body', 'hero_title'

            // Kolom untuk bagian "Tentang Kami" di beranda
            $table->text('homepage_about_section_text')->nullable()->after('hero_title');

            // Kolom untuk bagian "Layanan Kami" di beranda
            $table->text('homepage_services_section_text')->nullable()->after('homepage_about_section_text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn('homepage_about_section_text');
            $table->dropColumn('homepage_services_section_text');
        });
    }
};