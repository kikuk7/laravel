<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'body', // Konten utama halaman (teks saja)
        'hero_title', // Untuk Judul Hero Beranda
        'homepage_about_section_text',
        'homepage_services_section_text',


        // Kolom untuk Halaman Tentang Kami (teks saja)
        'vision_title',
        'vision_body',
        'mission_title',
        'mission_body',
        'excellence_title',

        // PENTING: KOLOM BARU UNTUK HALAMAN LAYANAN KAMI (TEKS SAJA)
        'main_intro_body',
        'service_1_title',
        'service_1_body',
        'service_2_title',
        'service_2_body',
        'service_3_title',
        'service_3_body',

        'gallery_intro_body',

        'name' ,
        'description' ,
        'model_path' ,
        'specs_json' ,
        'whatsapp_number',
        'is_active',

        
        'title', 
        'body',
        'contact_overlay_text',
        'contact_title',
        'contact_phone',
        'contact_location_title',
        'contact_location_body',
        'contact_email_title',
        'contact_email_address',
        'contact_whatsapp_number',

        'title', 'slug', 'body', 'hero_title',
        'homepage_about_section_text', 'homepage_services_section_text', // Beranda
        'vision_title', 'vision_body', 'mission_title', 'mission_body', 'excellence_title', // Tentang Kami
        'main_intro_body', 'service_1_title', 'service_1_body', 'service_2_title', 'service_2_body', 'service_3_title', 'service_3_body', // Layanan Kami
        'gallery_intro_body', // Galeri

        // PENTING: Kolom baru untuk FAQ
        'faq_items', // Ini akan menjadi JSON
        'faq_main_title', // Judul utama FAQ

        'faq_main_title' ,
        'faq_items_json' ,

        'contact_overlay_text',
        'contact_title',
        'contact_phone',
        'contact_location_title',
        'nullable|string|max:255',
    
        'contact_location_body',
        'contact_email_title',
        'contact_email_address',
        'contact_whatsapp_number',

        'faq_main_title',
        'faq_1_question',
        'faq_1_answer',
        'faq_2_question',
        'faq_2_answer',
        'faq_3_question',
        'faq_3_answer',
        'faq_4_question',
        'faq_4_answer',
        'faq_5_question',
        'faq_5_answer',

    ];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        // Contoh jika Anda memiliki kolom JSON di database
        // 'options' => 'array',
        'faq_items' => 'array',
    ];
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    // protected $table = 'my_pages_table'; // Tidak perlu jika nama tabel sesuai konvensi Laravel
}