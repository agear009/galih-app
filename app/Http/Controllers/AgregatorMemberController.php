<?php


namespace App\Http\Controllers;
// return type redirect respone
use Illuminate\Http\RedirectResponse;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Artis;

class AgregatorMemberController extends Controller
{
    //
    public function Index(){
        $no=0;
        $no++;
        $Users=user::FindOrFail(auth()->user()->id);
        //$Artis=artis::all();
        $modelbanner = new Artis;
        $Artist=$modelbanner->getListArtis();
        return View('Agregator.Index',["title"=>"Agregator","active"=>"Home"],compact('Users','Artist','no'));
    }
    public function create(Request $id_users):view
    {
        $user=user::FindOrFail($id_users);
        return View('Agregator.Create',["title"=>"Creat Artist","active"=>"Home"], compact('user'));


    }

    public function store(request $request){

    $this->validate($request,[

        'id_user' =>'required|max:255',
        'artist' =>'required|max:255',
        'song' =>'required|max:255',
        'pencipta_lagu' =>'required'
    ]);

        Artis::create([

        'id_user'=>$request->id_user,
        'artist'=>$request->artist,
        'song'=>$request->song,
        'tentang_artis'=>$request->tentang_artis,
        'lirik'=>$request->lirik,
        'keterangan_lagu'=>$request->keterangan_lagu,
        'facebook'=>$request->facebook,
        'x'=>$request->x,
        'youtube'=>$request->youtube,
        'instagram'=>$request->instagram,
        'apple'=>$request->apple,
        'spotify'=>$request->spotify,
        'joox'=>$request->joox,
        'tidal'=>$request->tidal



        ]);
        return redirect('/user')->with('success','Registration user successfull! ');




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

        $artis->update([


            'artist'=>$request->artist,
            'song'=>$request->song
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
