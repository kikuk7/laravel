<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        // Konten Beranda (Teks untuk kolom spesifik)
        $homePageAboutSectionText = '
            <p>CV Sumber Alam Raya adalah perusahaan manufaktur berbahan dasar besi yang melayani berbagai kebutuhan industri, mulai dari otomotif, konstruksi, hingga pengadaan barang umum.</p>
        ';
        $homePageServicesSectionText = '
            <p>CV Sumber Alam Raya adalah perusahaan manufaktur yang berbasis di Tegal, Jawa Tengah.</p>
        ';

        Page::firstOrCreate(
            ['slug' => 'beranda'],
            [
                'title' => 'Beranda Utama',
                'hero_title' => 'CV Sumber Alam Raya',
                'body' => null, // Set body menjadi NULL atau kosong jika kontennya dipindahkan ke kolom spesifik
                'homepage_about_section_text' => $homePageAboutSectionText, // Konten untuk bagian Tentang di Beranda
                'homepage_services_section_text' => $homePageServicesSectionText, // Konten untuk bagian Layanan di Beranda
            ]
        );

        // ... (Halaman 'tentang', 'layanan', 'produk', 'galeri', 'kontak', 'faq' - pastikan semua sudah lengkap seperti yang kita diskusikan) ...
        // Saya sertakan lagi beberapa di sini sebagai pengingat:
        $aboutPageBody = '
            <p>CV Sumber Alam Raya adalah perusahaan manufaktur yang berbasis di Tegal, Jawa Tengah. Kami bergerak di bidang pengolahan besi untuk memenuhi kebutuhan industri, seperti tangki oli hidrolik, ornamen pagar, aksesori knalpot, serta berbagai komponen kendaraan lainnya.</p>
            <p>Didirikan pada tahun 2018, kami telah membangun reputasi sebagai penyedia produk berkualitas dengan layanan profesional dan pengiriman tepat waktu. Dengan pengalaman hampir 7 tahun, kami terus berinovasi dan mengembangkan bisnis untuk menjangkau pasar nasional hingga internasional melalui pendekatan digital yang adaptif dan efisien.</p>
        ';
        Page::firstOrCreate(
            ['slug' => 'tentang'],
            [
                'title' => 'Tentang Kami', 'body' => $aboutPageBody, 'vision_title' => 'Visi Kami', 'vision_body' => 'Membangun perusahaan yang profesional, berintegritas tinggi, inovatif dan berkelanjutan.',
                'mission_title' => 'Misi Kami', 'mission_body' => 'Menyediakan produk dan layanan unggulan, menjaga hubungan baik dengan pelanggan, serta berkontribusi positif terhadap industri dan masyarakat.',
                'excellence_title' => 'Keunggulan Kami',
            ]
        );

        $layananMainIntro = 'Dalam menjalankan usahanya di bidang manufaktur berbasis besi, CV Sumber Alam Raya berkomitmen untuk memberikan layanan yang profesional, tepat guna, dan sesuai dengan kebutuhan industri. Perusahaan ini menghadirkan berbagai solusi dalam pengolahan besi yang dapat disesuaikan dengan permintaan pelanggan, baik untuk keperluan konstruksi, otomotif, maupun pengadaan industri. Adapun layanan utama yang ditawarkan meliputi:';
        Page::firstOrCreate(
            ['slug' => 'layanan'],
            [
                'title' => 'Layanan Kami', 'body' => '<p>Konten utama untuk bagian body (jika ada).</p>',
                'main_intro_body' => $layananMainIntro,
                'service_1_title' => 'Jasa Fabrikasi Besi Custom', 'service_1_body' => 'CV Sumber Alam Raya menyediakan layanan pengolahan bahan baku besi menjadi produk akhir sesuai permintaan pelanggan. Contoh produk: Tangki oli hidrolik, Komponen Knalpot, Komponen khusus industri.',
                'service_2_title' => 'Produksi Ornamen dan Komponen Besi', 'service_2_body' => 'Menyediakan komponen otomotif (seperti knalpot motor) serta ornamen besi untuk kebutuhan konstruksi dan dekorasi, seperti pagar besi dan ornamen arsitektural.',
                'service_3_title' => 'Pengadaan Barang Berbahan Dasar Besi', 'service_3_body' => 'Layanan penyediaan produk berbasis besi untuk sektor industri, baik dalam skala kecil hingga menengah, dengan jaminan kualitas dan ketepatan waktu.',
            ]
        );

        Page::firstOrCreate(['slug' => 'produk'], ['title' => 'Produk Kami', 'body' => '<p>Isi default halaman produk kami.</p>']);
        
        $galleryIntroText = 'Dokumentasi visual dari setiap proses dan hasil karya kami mencerminkan komitmen terhadap kualitas dan ketelitian. Melalui galeri ini, Anda dapat melihat bagaimana kami bekerja dengan penuh dedikasi dan tim yang berpengalaman untuk menghasilkan solusi terbaik bagi kebutuhan industri Anda.';
        Page::firstOrCreate(
            ['slug' => 'galeri'],
            [
                'title' => 'Galeri Kami',
                'body' => null, // Set body menjadi null atau kosong
                'gallery_intro_body' => 'Dokumentasi visual dari setiap proses dan hasil karya kami mencerminkan komitmen terhadap kualitas dan ketelitian. Melalui galeri ini, Anda dapat melihat bagaimana kami bekerja dengan penuh dedikasi dan tim yang berpengalaman untuk menghasilkan solusi terbaik bagi kebutuhan industri Anda.',
            ]
        );


        Page::firstOrCreate(
            ['slug' => 'kontak'],
            [
                'title' => 'Kontak Kami',
                'body' => null, // Set body menjadi null atau kosong jika tidak ada body utama
                'contact_overlay_text' => 'Kepuasan Anda Tujuan Kami',
                'contact_title' => 'Kontak Kami',
                'contact_phone' => '+62 895 0479 8167',
                'contact_location_title' => 'Kunjungi kami',
                'contact_location_body' => 'Desa Bengledukuh, Bengle, Kec. Talang, Kabupaten Tegal, Jawa Tengah 52193',
                'contact_email_title' => 'Email',
                'contact_email_address' => 'sumberalam423@gmail.com',
                'contact_whatsapp_number' => '+6287801319313', // Nomor WA
                
            ]
        );

        
        Page::firstOrCreate(
            ['slug' => 'faq'],
            [
                'title' => 'FAQ', // Judul halaman utama
                'body' => null, // Biarkan null atau kosong jika tidak ada body utama
                'faq_main_title' => 'Pertanyaan yang Sering Diajukan',
                'faq_1_question' => 'Produk apa saja yang diproduksi oleh CV Sumber Alam Raya?',
                'faq_1_answer' => 'Kami memproduksi beragam produk berbahan dasar besi seperti tangki oli hidrolik, ornamen pagar, aksesoris knalpot, pipa hollow, dan komponen kendaraan lainnya.',
                'faq_2_question' => 'Apakah bisa pesan produk custom sesuai kebutuhan?',
                'faq_2_answer' => 'Ya, kami menerima pemesanan produk sesuai desain atau spesifikasi dari pelanggan.',
                'faq_3_question' => 'Bagaimana cara melakukan pemesanan?',
                'faq_3_answer' => 'Anda dapat menghubungi kami melalui WhatsApp pada website ini. Tim kami akan membantu Anda dalam proses pemesanan.',
                'faq_4_question' => 'Berapa lama waktu produksi dan pengiriman?',
                'faq_4_answer' => 'Waktu produksi dan pengiriman bervariasi tergantung kompleksitas dan lokasi. Umumnya 3–7 hari kerja.',
                'faq_5_question' => 'Apakah bisa melakukan kerja sama jangka panjang?',
                'faq_5_answer' => 'Tentu saja! Kami terbuka untuk kerja sama jangka panjang dengan perusahaan, instansi, atau mitra distribusi.',
                ],
            
        );
    }
}