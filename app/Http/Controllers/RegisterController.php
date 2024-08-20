<?php

namespace App\Http\Controllers;
// return type redirect respone
use Illuminate\Http\RedirectResponse;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Artis;

class RegisterController extends Controller
{
    //
    public function Index(){
        $no=0;
        $no++;
        $Users=user::all();
        return View('User.Index',["title"=>"User","active"=>"Home"],compact('Users','no'));
    }

    public function Register(){
        return View('User.Register',["title"=>"User","active"=>"Home"]);
    }

    public function store(request $request){
        dd($request);
        $date=date("Ymd");
        $part1=date("his");
        $code=$date.$part1;

    $this->validate($request,[

        'name' =>'required|max:255',
        'phone' =>'required|max:255',
        'email' =>'required|max:255',
        'address' =>'required',
        'password' =>'required',
        'id_artist' =>$code
    ]);

        user::create([
        'name'=>$request->name,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'level_user'=>$request->level_user,
        'address'=>$request->address,
        'status'=>$request->status,
        'password'=>$request->password



        ]);
        Artis::create([
            'id_user'=>$code,
            'artist'=>$request->artist,
            'song'=>$request->song,
            'cover'=>$request->cover
        ]);
        return redirect('/index')->with('success','Registration user successfull! ');




    }

public function edit(string $id):View
{
    //get member by id
    $user=user::findOrFail($id);
    return view('User.Edit',["title"=>"User","active"=>"User"], compact('user'));

}

public function update(Request $request, $id): RedirectResponse

{

    $this->validate($request,[

        'name' =>'required|max:255',
        'phone' =>'required|max:255',
        'email' =>'required|max:255',
        'address' =>'required'

    ]);
    //get member by id
    $user=user::FindOrFail($id);

        $user->update([


            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'level_user'=>$request->level_user,
            'address'=>$request->address,
            'status'=>$request->status,
            'password'=>$request->password
            ]);
            return redirect('/user')->with('success','Registration successfull! ');


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

