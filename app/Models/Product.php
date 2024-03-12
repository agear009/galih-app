<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [

        'category_id',
        'produsen',
        'image',
        'name',
        'size',
        'stock',
        'price',
        'description',
        'headline',
        'image_video',
        'masalah',
        'solusi',
        'manfaat',
        'gambar_testimoni',
        'bonus',
        'kontak',
        'kelangkaan',
        'kerugian',
        'phone1',
        'phone2',
        'phone3',
        'phone4',
        'phone5',


    ];

}
