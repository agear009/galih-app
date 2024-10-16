<?php

namespace App\Http\Controllers;
// return type redirect respone
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Album;
use App\Models\Artis;
use App\Models\CoverArtist;

class AgregatorController extends Controller
{
    //
    public function Index(){
        $no=0;
        $no++;
        //$Users=user::all();
        //$Artis=artis::all();
        $modelbanner = new Artis;
        $Artist=$modelbanner->getListArtis();
        $users=user::all();
        $Art=artis::all();
        $Cover=CoverArtist::all();
        return View('Agregator.Index',["title"=>"Agregator","active"=>"Home"],compact('Artist','users','no','Art','Cover'));
    }
    public function create(Request $id_users):view
    {
        //$user=user::FindOrFail($id_users);
        $users=user::all();
        $Albums=album::all();
        $Cover=CoverArtist::all();
        return View('Agregator.Create',["title"=>"Creat Artist","active"=>"Home"], compact('users','Albums','Cover'));


    }

    public function store(request $request){

    $this->validate($request,[

        'id_user' =>'required|max:255',
        'artist' =>'required|max:255',
        'song' =>'required|max:255'

    ]);

    $cover=$request->file('cover_artis');
    $cover-> storeAs('public/CoverArtists', $cover->hashName());

    $filelagu=$request->file('file_lagu');
    $filelagu-> storeAs('public/FileLagu', $filelagu->hashName());

    artis::create([
        'id_user'=>$request->id_user,
        'artist'=>$request->artist,
        'album'=>$request->album,
        'cover_artis'=>$cover->hashName(),
        'file_lagu'=>$filelagu->hashName(),
        'jenis_musik'=>$request->jenis_musik,
        'song'=>$request->song,
        'pencipta_lagu'=>$request->pencipta_lagu,
        'kontrak'=>$request->kontrak,
        'tentang_artis'=>$request->tentang_artis,
        'lirik'=>$request->lirik,
        'keterangan_lagu'=>$request->keterangan_lagu,
        'facebook'=>$request->facebook,
        'x'=>$request->x,
        'youtube'=>$request->youtube,
        'instagram'=>$request->instagram,
        'apple'=>$request->apple,
        'spotify'=>$request->spotify,
        'tiktok'=>$request->tiktok,
        'joox'=>$request->joox,
        'tidal'=>$request->tidal

           ]);
    //redirect to index
    return redirect('/artist')->with('success','Registration user successfull! ');

    }

public function edit(string $id):View
{

    //dd($id_artist);
    //get member by id
    $Artist=artis::findOrFail($id);
    $Albums=album::all();
    //$Artist=Artis::where($id);
  // dd($id_artist);
   // exit;
    return view('Agregator.Edit',["title"=>"Artis","active"=>"User"], compact('Artist','Albums'));

}

public function update(Request $request, $id): RedirectResponse

{

    $this->validate($request,[

        'artist' =>'required|max:255',
        'song' =>'required|max:255'

    ]);
    //get member by id
    $artis=artis::FindOrFail($id);

    if($request->hasFile('cover_artis') and $request->hasFile('file_lagu') )
    {
        //upload new image
        $cover=$request->file('cover_artis');
        $cover->storeAs('public/CoverArtists',$cover->hashName());

        $filelagu=$request->file('file_lagu');
        $filelagu-> storeAs('public/FileLagu', $filelagu->hashName());


        //delete old image
        Storage::delete('public/CoverArtists/'.$artis->cover_artis);
        Storage::delete('public/FileLagu/'. $artis->file_lagu);

        //update album with new image
        $artis->update([
            'id_user'=>$request->id_user,
            'artist'=>$request->artist,
            'album'=>$request->album,
            'cover_artis'=>$cover->hashName(),
            'file_lagu'=>$filelagu->hashName(),
            'song'=>$request->song,
            'jenis_musik'=>$request->jenis_musik,
            'pencipta_lagu'=>$request->pencipta_lagu,
            'tentang_artis'=>$request->tentang_artis,
            'lirik'=>$request->lirik,
            'kontrak'=>$request->kontrak,
            'keterangan_lagu'=>$request->keterangan_lagu,
            'facebook'=>$request->facebook,
            'x'=>$request->x,
            'youtube'=>$request->youtube,
            'instagram'=>$request->instagram,
            'apple'=>$request->apple,
            'spotify'=>$request->spotify,
            'tiktok'=>$request->tiktok,
            'joox'=>$request->joox,
            'tidal'=>$request->tidal

        ]);

    }

    elseif($request->hasFile('cover_artis'))
    {
         //upload new image
         $cover=$request->file('cover_artis');
         $cover->storeAs('public/CoverArtists',$cover->hashName());
         //delete old image
         Storage::delete('public/CoverArtists/'.$artis->cover_artis);



        $artis->update([
            'id_user'=>$request->id_user,
            'artist'=>$request->artist,
            'album'=>$request->album,
            'cover_artis'=>$cover->hashName(),
            'jenis_musik'=>$request->jenis_musik,
            'song'=>$request->song,
            'pencipta_lagu'=>$request->pencipta_lagu,
            'tentang_artis'=>$request->tentang_artis,
            'lirik'=>$request->lirik,
            'kontrak'=>$request->kontrak,
            'keterangan_lagu'=>$request->keterangan_lagu,
            'facebook'=>$request->facebook,
            'x'=>$request->x,
            'youtube'=>$request->youtube,
            'instagram'=>$request->instagram,
            'apple'=>$request->apple,
            'spotify'=>$request->spotify,
            'tiktok'=>$request->tiktok,
            'joox'=>$request->joox,
            'tidal'=>$request->tidal

        ]);

    }
    elseif($request->hasFile('file_lagu'))
    {
         //upload new image
         $cover=$request->file('file_lagu');
         $cover->storeAs('public/FileLagu',$cover->hashName());
         //delete old image
         Storage::delete('public/FileLagu/'.$artis->file_lagu);



        $artis->update([
            'id_user'=>$request->id_user,
            'artist'=>$request->artist,
            'album'=>$request->album,
            'file_lagu'=>$cover->hashName(),
            'jenis_musik'=>$request->jenis_musik,
            'song'=>$request->song,
            'pencipta_lagu'=>$request->pencipta_lagu,
            'tentang_artis'=>$request->tentang_artis,
            'lirik'=>$request->lirik,
            'kontrak'=>$request->kontrak,
            'keterangan_lagu'=>$request->keterangan_lagu,
            'facebook'=>$request->facebook,
            'x'=>$request->x,
            'youtube'=>$request->youtube,
            'instagram'=>$request->instagram,
            'apple'=>$request->apple,
            'spotify'=>$request->spotify,
            'tiktok'=>$request->tiktok,
            'joox'=>$request->joox,
            'tidal'=>$request->tidal

        ]);

    }
    else
    {
        $artis->update([
            'id_user'=>$request->id_user,
            'artist'=>$request->artist,
            'jenis_musik'=>$request->jenis_musik,
            'song'=>$request->song,
            'pencipta_lagu'=>$request->pencipta_lagu,
            'tentang_artis'=>$request->tentang_artis,
            'lirik'=>$request->lirik,
            'kontrak'=>$request->kontrak,
            'keterangan_lagu'=>$request->keterangan_lagu,
            'facebook'=>$request->facebook,
            'x'=>$request->x,
            'youtube'=>$request->youtube,
            'instagram'=>$request->instagram,
            'apple'=>$request->apple,
            'spotify'=>$request->spotify,
            'tiktok'=>$request->tiktok,
            'joox'=>$request->joox,
            'tidal'=>$request->tidal

        ]);

    }
            return redirect('/artist')->with('success','sudah dirubah');


}

public function destroy($id): RedirectResponse
    {
        //get member id
        $artist=Artis::findOrFail($id);

        //delete image
        Storage::delete('public/CoverArtists/'. $artist->cover_artis);
        Storage::delete('public/FileLagu/'. $artist->file_lagu);


        // delete member
        $artist->delete();

        //redirect to index
        return redirect()->route('artist.index',["title"=>"Admin","active"=>"Admin"])->with(['success'=>'data telah berhasil di delete!']);
    }

}
