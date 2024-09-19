<?php


namespace App\Http\Controllers;
// return type redirect respone
use Illuminate\Http\RedirectResponse;

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
        $users=user::all();
        $Albums=Album::all();
        $userst=user::where('id_artist','=', auth()->user()->id_artist)->get();
        return View('AgregatorMember.Create',["title"=>"Creat Artist","active"=>"Home"], compact('userst','users','Albums'));


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
        return redirect('/member')->with('success','Registration user successfull! ');




    }

public function edit(string $id):View
{

    //dd($id_member);
    //get member by id
    $Artist=artis::findOrFail($id);
    //$member=Artis::where($id);
  // dd($id_member);
   // exit;
    return view('AgregatorMember.Edit',["title"=>"Artis","active"=>"User"], compact('Artist'));

}

public function update(Request $request, $id): RedirectResponse

{
    //dd($request);
    $this->validate($request,[

        'id_user' =>'required|max:255',
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
            return redirect('/member')->with('success','sudah dirubah ');


}

public function destroy($id): RedirectResponse
    {
        //get member id
        $artist=artis::findOrFail($id);

        //delete image



        // delete member
        $artist->delete();

        //redirect to index
        return redirect()->route('member.index',["title"=>"artist","active"=>"artist"])->with(['success'=>'data telah berhasil di delete!']);
    }

}
