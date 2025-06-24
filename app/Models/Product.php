<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'model_path',
        'specs',
        'whatsapp_number',
        'is_active',
    ];

    // PENTING: Cast 'specs' ke array agar bisa langsung diakses sebagai array di PHP
    protected $casts = [
        'specs' => 'array',
        'is_active' => 'boolean',
    ];
}