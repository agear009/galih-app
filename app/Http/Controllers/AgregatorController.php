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
        return View('Agregator.Index',["title"=>"User","active"=>"Home"],compact('Artist','no'));
    }
    public function create(Request $id_users):view
    {
        $user=user::FindOrFail($id_users);
        return View('Agregator.Create',["title"=>"Creat Artist","active"=>"Home"], compact('user'));

    }

    public function store(request $request){

    $this->validate($request,[

        'name' =>'required|max:255',
        'phone' =>'required|max:255',
        'email' =>'required|max:255',
        'address' =>'required',
        'password' =>'required'
    ]);

        user::create([
        'name'=>$request->name,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'level_user'=>$request->level_user,
        'address'=>$request->address,
        'status'=>$request->status,
        'password'=>$request->password,
        'id_artist'=>$request->id_artist
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
