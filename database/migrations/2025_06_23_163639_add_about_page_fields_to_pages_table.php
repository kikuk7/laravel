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
            // HAPUS BARIS INI: $table->string('about_hero_image_path')->nullable()->after('hero_title');

            // Kolom untuk Visi & Misi (Ini benar, biarkan)
            $table->string('vision_title')->nullable()->after('body');
            $table->text('vision_body')->nullable();
            $table->string('mission_title')->nullable();
            $table->text('mission_body')->nullable();

            // Kolom untuk Judul Keunggulan (Ini benar, biarkan)
            $table->string('excellence_title')->nullable();

            // HAPUS BARIS-BARIS INI:
            // $table->string('excellence_image_1_path')->nullable();
            // $table->string('excellence_image_2_path')->nullable();
            // $table->string('excellence_image_3_path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            // HAPUS BARIS DROP INI: $table->dropColumn('about_hero_image_path');

            // Kolom untuk Visi & Misi (Ini benar, biarkan)
            $table->dropColumn('vision_title');
            $table->dropColumn('vision_body');
            $table->dropColumn('mission_title');
            $table->dropColumn('mission_body');

            // Kolom untuk Judul Keunggulan (Ini benar, biarkan)
            $table->dropColumn('excellence_title');

            // HAPUS BARIS DROP INI:
            // $table->dropColumn('excellence_image_1_path');
            // $table->dropColumn('excellence_image_2_path');
            // $table->dropColumn('excellence_image_3_path');
        });
    }
};