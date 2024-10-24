<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AgregatorEksternal extends Model

{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'artist',
        'album',
        'cover_artis',
        'file_lagu',
        'song',
        'pencipta_lagu',
        'tentang_artis',
        'lirik',
        'keterangan_lagu',
        'facebook',
        'x',
        'youtube',
        'instagram',
        'apple',
        'spotify',
        'tiktok',
        'joox',
        'tidal'

    ];

    public function getListArtis()
    {
        $listArtis = DB::table('artis')
                                ->join('users','artis.id_user','=','users.id_artist')
                                ->select('artis.*','users.id AS id_users')
                                ->get();
                                return $listArtis;
    }
    public function getListArtisMember()
    {
        $listArtisMember = DB::table('artis')
                                ->join('users','artis.id_user','=','users.id_artist')
                                ->select('artis.*','users.id AS id_users')
                                ->get();
                                return $listArtisMember;
    }
    public function getListArtisAlbum()
    {
        $listArtisAlbum = DB::table('artis')
                                ->join('albums','artis.album','=','albums.id')
                                ->select('artis.*','albums.nameAlbum AS album_name','albums.cover AS album_cover')
                                ->get();
                                return $listArtisAlbum;
    }
}
