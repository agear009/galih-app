<?php

namespace App\Http\Controllers;
// return type redirect respone
use Illuminate\Http\RedirectResponse;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Artis;

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
        return View('Agregator.Index',["title"=>"Agregator","active"=>"Home"],compact('Artist','users','no'));
    }
    public function create(Request $id_users):view
    {
        //$user=user::FindOrFail($id_users);
        $users=user::all();
        return View('Agregator.Create',["title"=>"Creat Artist","active"=>"Home"], compact('users'));


    }

    public function store(request $request){

    $this->validate($request,[

        'id_user' =>'required|max:255',
        'artist' =>'required|max:255',
        'song' =>'required|max:255'

    ]);
        //dd($request);
        artis::create([
            'id_user'=>$request->id_user,
            'artist'=>$request->artist,
            'album'=>$request->album,
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
        return redirect('/artist')->with('success','Registration user successfull! ');




    }

public function edit(string $id):View
{

    //dd($id_artist);
    //get member by id
    $Artist=artis::findOrFail($id);
    //$Artist=Artis::where($id);
  // dd($id_artist);
   // exit;
    return view('Agregator.Edit',["title"=>"Artis","active"=>"User"], compact('Artist'));

}

public function update(Request $request, $id): RedirectResponse

{

    $this->validate($request,[

        'artist' =>'required|max:255',
        'song' =>'required|max:255'

    ]);
    //get member by id
    $artis=artis::FindOrFail($id);
        //dd($request);
        $artis->update([


            'id_user'=>$request->id_user,
            'artist'=>$request->artist,
            'album'=>$request->album,
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
            return redirect('/artist')->with('success','sudah dirubah ');


}

public function destroy($id): RedirectResponse
    {
        //get member id
        $user=user::findOrFail($id);

        //delete image



        // delete member
        $user->delete();

        //redirect to index
        return redirect()->route('users.index',["title"=>"User","active"=>"User"])->with(['success'=>'data telah berhasil di delete!']);
    }

}
