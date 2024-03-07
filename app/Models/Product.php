<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [

        'id_category',
        'produsen',
        'image',
        'name',
        'size',
        'stock',
        'price',
        'description',
        'headline',
        'imagevideo',
        'masalah',
        'solusi',
        'manfaat',
        'gambartestimoni',
        'bonus',
        'kontak',
        'kelangkaan',
        'kerugian'

    ];

}
