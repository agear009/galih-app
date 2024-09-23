<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CoverArtist extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_artist',
        'nameCoverArtist',
        'cover'

    ];

    public function getListArtis()
    {
        $listArtis = DB::table('artis')
                                ->join('users','artis.id_user','=','users.id_artist')
                                ->select('artis.*','users.id AS id_users')
                                ->get();
                                return $listArtis;
                            }
}

