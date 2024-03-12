<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Copywrite extends Model
{
    use HasFactory;
    protected $fillable = [


        'headline',
        'masalah',
        'solusi',
        'manfaat',
        'bonus',
        'kontak',
        'kelangkaan',
        'kerugian'

    ];


}
