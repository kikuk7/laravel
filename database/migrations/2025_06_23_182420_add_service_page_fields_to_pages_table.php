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
            $table->text('main_intro_body')->nullable()->after('body'); // Paragraf pembuka layanan

            // Kolom untuk 3 Kartu Layanan
            $table->string('service_1_title')->nullable();
            $table->text('service_1_body')->nullable();
            $table->string('service_2_title')->nullable();
            $table->text('service_2_body')->nullable();
            $table->string('service_3_title')->nullable();
            $table->text('service_3_body')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn('main_intro_body');
            $table->dropColumn('service_1_title');
            $table->dropColumn('service_1_body');
            $table->dropColumn('service_2_title');
            $table->dropColumn('service_2_body');
            $table->dropColumn('service_3_title');
            $table->dropColumn('service_3_body');
        });
    }
};