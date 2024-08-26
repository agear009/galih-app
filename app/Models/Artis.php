<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artis extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'artist',
        'song',
        'cover'

    ];
}