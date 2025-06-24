<?php

namespace Database\Seeders;

use App\Models\User; // Pastikan ini diimpor
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // PENTING: Panggil seeder lain di sini
        $this->call([
            // UserSeeder::class, // Anda bisa membuat UserSeeder terpisah jika ingin
            PageSeeder::class, // Ini akan menjalankan PageSeeder untuk mengisi data halaman
        ]);

        // Buat pengguna admin untuk login ke dashboard
        User::firstOrCreate(
            ['email' => 'admin@example.com'], // Coba temukan berdasarkan email
            [
                'name' => 'Admin CV SAR', // Nama pengguna admin
                'password' => bcrypt('password'), // Password 'password' yang di-hash
                // Tambahkan role jika Anda memiliki kolom 'role' di tabel users
                'role' => 'admin',
            ]
        );

        // Contoh: Membuat beberapa user dummy lainnya (opsional)
        // User::factory(10)->create();
    }
}