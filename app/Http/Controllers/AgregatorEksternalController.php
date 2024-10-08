<?php

namespace App\Http\Controllers;
// return type redirect respone
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Album;
use App\Models\AgregatorEksternal;
use App\Models\Artis;
use App\Models\CoverArtist;


class AgregatorEksternalController extends Controller
{
    //
    public function Index(){
        $no=0;
        $no++;
        //$Users=user::all();
        //$Artis=artis::all();
        $Album = new AgregatorEksternal();
        //$Artist=$modelbanner->getListArtis();
        $users=user::all();
        //$Art=artis::all();
        $Art=$Album->getListArtisAlbum();
        $Cover=CoverArtist::all();
        return View('AgregatorEksternal.Index',["title"=>"Agregator","active"=>"Home"],compact('users','no','Art','Cover'));
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

    artis::create([
        'id_user'=>$request->id_user,
        'artist'=>$request->artist,
        'album'=>$request->album,
        'cover_artis'=>$cover->hashName(),
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
    //redirect to index
    return redirect('/artist')->with('success','Registration user successfull! ');

    }

    public function show(request $request)
    {

    if (request('search')) {
        dd($request);
        $no=0;
        $no++;
        $Art=artis::where('id_user','=',request('search'))->get();
       //$tracker=tracker::where('code','LIKE','%'.request('search').'%')->get('code');
        return view('AgregatorEksternal.Index',["title"=>"Agregator","active"=>"List Artis"],compact('Art','no'));
        }

    else{
        $no=0;
        $no++;
        $Art=artis::all();
        return view('AgregatorEksternal.Index',["title"=>"Agregator","active"=>"List Artis"],compact('Art','no'));


        }
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
    return view('AgregatorEksternal.Edit',["title"=>"Artis","active"=>"User"], compact('Artist','Albums'));

}

public function update(Request $request, $id): RedirectResponse

{

    $this->validate($request,[


            'apple'=>'required|max:255',
            'spotify'=>'required|max:255',
            'tiktok'=>'required|max:255',
            'joox'=>'required|max:255',
            'tidal'=>'required|max:255'

    ]);
    //get member by id
    $artis=artis::FindOrFail($id);


        $artis->update([

            'apple'=>$request->apple,
            'spotify'=>$request->spotify,
            'tiktok'=>$request->tiktok,
            'joox'=>$request->joox,
            'tidal'=>$request->tidal

        ]);


            return redirect('/eksternal')->with('success','sudah dirubah ');


}

public function destroy($id): RedirectResponse
    {
        //get member id
        $artist=Artis::findOrFail($id);

        //delete image
        Storage::delete('public/CoverArtists/'. $artist->cover_artis);


        // delete member
        $artist->delete();

        //redirect to index
        return redirect()->route('artist.index',["title"=>"Admin","active"=>"Admin"])->with(['success'=>'data telah berhasil di delete!']);
    }

}
