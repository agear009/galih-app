<?php


namespace App\Http\Controllers;
// return type redirect respone
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Artis;
use App\Models\Album;

class AgregatorMemberController extends Controller
{
    //
    public function Index(){
        $no=0;
        $no++;
        //$Users=user::all();
        //$Artis=artis::all();
        $modelbanner = new Artis;
        //$Artist=$modelbanner->getListArtis();

       // $Artist=artis::where('id_user','=',request(auth()->user()->id_artist))->get();
        $Artist=artis::where('id_user','=', auth()->user()->id_artist)->get();
        $users=user::all();
        return View('AgregatorMember.Index',["title"=>"AgregatorMember","active"=>"Home"],compact('Artist','users','no'));
    }
    public function create(Request $id_users):view
    {
        //$userst=user::FindOrFail(auth()->user()->id)->get();
        $album = new Album;
        $Albums=$album->getListAlbum();

        $users=user::all();
        $userst=user::where('id_artist','=', auth()->user()->id_artist)->get();
        return View('AgregatorMember.Create',["title"=>"Creat Artist","active"=>"Home"], compact('userst','users','Albums'));


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
            'kontrak'=>'dd/mm/yyyy',
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
        return redirect('/member')->with('success','Registration user successfull! ');




    }

public function edit(string $id):View
{

    //dd($id_member);
    //get member by id
    $Artist=artis::findOrFail($id);
    $Albums=Album::all();
    //$member=Artis::where($id);
  // dd($id_member);
   // exit;
    return view('AgregatorMember.Edit',["title"=>"Artis","active"=>"User"], compact('Artist','Albums'));

}

public function update(Request $request, $id): RedirectResponse

{
    //dd($request);
    $this->validate($request,[

        'artist' =>'required|max:255',
        'song' =>'required|max:255'

    ]);
    //get member by id
    $artis=artis::FindOrFail($id);

    if($request->hasFile('cover_artis'))
    {
        //upload new image
        $cover=$request->file('cover_artis');

        $cover->storeAs('public/CoverArtists',$cover->hashName());



        //delete old image
        Storage::delete('public/CoverArtists/'.$artis->cover_artis);

        //update album with new image
        $artis->update([
            'id_user'=>$request->id_user,
            'artist'=>$request->artist,
            'album'=>$request->album,
            'cover_artis'=>$cover->hashName(),
            'file_lagu'=>$request->file_lagu,
            'song'=>$request->song,
            'pencipta_lagu'=>$request->pencipta_lagu,
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

    }

    else
    {
        $artis->update([
            'id_user'=>$request->id_user,
            'artist'=>$request->artist,
            'album'=>$request->album,
            'file_lagu'=>$request->file_lagu,
            'song'=>$request->song,
            'pencipta_lagu'=>$request->pencipta_lagu,
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

    }
            return redirect('/member')->with('success','sudah dirubah ');


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
        return redirect()->route('member.index',["title"=>"artist","active"=>"artist"])->with(['success'=>'data telah berhasil di delete!']);
    }

}
