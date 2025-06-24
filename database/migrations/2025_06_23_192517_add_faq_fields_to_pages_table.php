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
            // Tambahkan kolom untuk FAQ Title
            $table->string('faq_main_title')->nullable()->after('contact_whatsapp_number'); // Sesuaikan 'after' sesuai kolom terakhir yang Anda miliki sebelum ini

            // Tambahkan kolom untuk 5 item FAQ
            for ($i = 1; $i <= 5; $i++) {
                $table->text('faq_' . $i . '_question')->nullable();
                $table->text('faq_' . $i . '_answer')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            // Hapus kolom untuk FAQ Title
            $table->dropColumn('faq_main_title');

            // Hapus kolom untuk 5 item FAQ
            for ($i = 1; $i <= 5; $i++) {
                $table->dropColumn('faq_' . $i . '_question');
                $table->dropColumn('faq_' . $i . '_answer');
            }
        });
    }
};