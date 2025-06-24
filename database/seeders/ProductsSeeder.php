<?php

namespace Database\Seeders;

use App\Models\Product; // Impor model Product
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::firstOrCreate(
            ['name' => 'Adaptor Knalpot Motor'],
            [
                'description' => 'Aksesoris pendukung knalpot motor, berfungsi sebagai sambungan atau penghubung antara bagian knalpot dengan komponen lainnya.',
                'model_path' => 'assets/Product/KomponenKnalpot3Lobang.glb',
                'specs' => [ // PHP Array, akan otomatis jadi JSON di DB karena $casts
                    "Bahan: Plat baja", "Tebal Bahan: 3,5 mm", "Diameter: 8 cm", "Harga Satuan: Rp3.500,-"
                ],
                'whatsapp_number' => '+6287801319313', // Contoh nomor WA
                'is_active' => true,
            ]
        );
        Product::firstOrCreate(
            ['name' => 'Plendes Mii'],
            [
                'description' => 'Komponen perlengkapan knalpot motor, berfungsi sebagai sambungan atau dudukan knalpot agar terpasang dengan presisi.',
                'model_path' => 'assets/Product/KomponenKnalpot2Lobang.glb',
                'specs' => [
                    "Bahan: Plat besi", "Tebal Bahan: 3,2 mm", "Ukuran: 8 cm x 4 cm", "Harga Satuan: Rp1.750,-"
                ],
                'whatsapp_number' => '+6287801319313',
                'is_active' => true,
            ]
        );
        Product::firstOrCreate(
            ['name' => 'Matahari'],
            [
                'description' => 'Ornamen logam berbentuk matahari dengan desain gelombang elegan, cocok digunakan sebagai hiasan pada pagar, pintu gerbang, atau dekorasi eksterior lainnya.',
                'model_path' => 'assets/Product/kb.glb',
                'specs' => [
                    "Bahan: Plat galvanis", "Tebal Bahan: 0,6 mm", "Diameter: 6,5 cm", "Harga Satuan: Rp 1.000 / pcs"
                ],
                'whatsapp_number' => '+6287801319313',
                'is_active' => true,
            ]
        );
        // ... Lanjutkan untuk semua produk Anda ...
        Product::firstOrCreate(
            ['name' => 'Ring Bintang 8'],
            [
                'description' => 'Ornamen untuk pagar, teralis, atau dekorasi lainnya.',
                'model_path' => 'assets/Product/bintang.glb',
                'specs' => [
                    "Bahan: Plat besi galvanis", "Tebal Bahan: 0,6 mm", "Diameter: 10 cm", "Harga Satuan: Rp1.800,-"
                ],
                'whatsapp_number' => '+6287801319313',
                'is_active' => true,
            ]
        );
        Product::firstOrCreate(
            ['name' => 'Tombak Keraton'],
            [
                'description' => 'Ornamen dekoratif berbentuk tombak untuk ujung pagar, memberikan tampilan yang elegan dan klasik. Cocok untuk memperindah desain pagar besi.',
                'model_path' => 'assets/Product/UjungPagar.glb',
                'specs' => [
                    "Bahan: Plat besi", "Tebal Bahan: 0,6 mm", "Ukuran: 12 cm x 6 cm", "Harga Satuan: Rp1.100,-"
                ],
                'whatsapp_number' => '+6287801319313',
                'is_active' => true,
            ]
        );
        Product::firstOrCreate(
            ['name' => 'End Muffler Knalpot Variasi'],
            [
                'description' => 'Tingkatkan tampilan dan performa kendaraan Anda dengan End Muffler Knalpot Variasi berkualitas tinggi.',
                'model_path' => 'assets/Product/KomponenKnalpotkykmangkok.glb',
                'specs' => [
                    "Bahan: Plat Galvanis", "Tebal Bahan: 1 mm", "Diameter Luar: ±6 cm", "Diameter Lubang Dalam: ±3,5 cm",
                    "Panjang (Depth): ±6 cm", "Warna: Abu-abu metalik", "Harga: Rp10.000 / pcs"
                ],
                'whatsapp_number' => '+6287801319313',
                'is_active' => true,
            ]
        );
        Product::firstOrCreate(
            ['name' => 'Nako Letter S'],
            [
                'description' => 'Teralis Nako S adalah ornamen besi berbentuk spiral elegan yang digunakan untuk memperindah pagar, jendela, maupun pintu teralis.',
                'model_path' => 'assets/Product/KomponenPagarS.glb',
                'specs' => [
                    "Bahan: Besi Nako", "Ketebalan: 9,3 mm", "Ukuran Tersedia: 15 x 11 cm, 20 x 11 cm, 25 x 11 cm", "Harga: Rp17.000 / kg"
                ],
                'whatsapp_number' => '+6287801319313',
                'is_active' => true,
            ]
        );
        Product::firstOrCreate(
            ['name' => 'Nako Letter C'],
            [
                'description' => 'Nako Letter C adalah ornamen besi berbentuk lengkungan menyerupai huruf C yang digunakan sebagai elemen dekoratif dan struktural pada pagar, jendela, maupun pintu teralis.',
                'model_path' => 'assets/Product/kuda.glb',
                'specs' => [
                    "Bahan: Besi Nako", "Ketebalan: 9,3 mm", "Ukuran Tersedia: 12 x 8 cm, 10 x 6,5 cm, 20 x 11 cm", "Harga: Rp17.000 / kg"
                ],
                'whatsapp_number' => '+6287801319313',
                'is_active' => true,
            ]
        );
        Product::firstOrCreate(
            ['name' => 'Tangki Oli Dump Truck'],
            [
                'description' => 'Tangki Oli Dump Truck ini dirancang khusus sebagai wadah oli hidrolik untuk kendaraan dump truck.',
                'model_path' => 'assets/Product/TangkiKotak.glb',
                'specs' => [
                    "Bahan: Plat Besi", "Tebal Plat: 2 mm", "Kapasitas: 20 liter", "Tutup: Aluminium",
                    "Pipa Keluar/Masuk: Pipa kecil: diameter 19 mm, Pipa besar: diameter 32 mm",
                    "Ukuran Tangki: Panjang: 28 cm, Lebar: 30 cm, Tinggi: 25 cm", "Harga Satuan: Rp375.000"
                ],
                'whatsapp_number' => '+6287801319313',
                'is_active' => true,
            ]
        );
        Product::firstOrCreate(
            ['name' => 'Tangki Oli Bulat Dump Truck'],
            [
                'description' => 'Tangki Oli Bulat Dump Truck ini dirancang untuk menampung oli hidrolik pada kendaraan dump truck dalam skala kecil hingga menengah.',
                'model_path' => 'assets/Product/TangkiBulat.glb',
                'specs' => [
                    "Bahan: Plat baja", "Tebal bahan: 2 mm", "Kapasitas: 5 – 6 liter", "Bentuk: Silinder (bulat)",
                    "Perkiraan Ukuran Tangki:",
                    "• Diameter: ± 15 – 20 cm",
                    "• Tinggi: ± 15 – 25 cm",
                    "Harga Satuan: Rp. 275.000"
                ],
                'whatsapp_number' => '+6287801319313',
                'is_active' => true,
            ]
        );
    }
}