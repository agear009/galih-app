<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Album extends Model

{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'nameAlbum',
        'cover'

    ];

    public function getListAlbum()
    {
        $listAlbum = DB::table('albums')
                                ->join('users','albums.id_user','=','users.id_artist')
                                ->select('albums.*','users.id_artist AS id_user')
                                ->get();
                                return $listAlbum;
                            }
}

