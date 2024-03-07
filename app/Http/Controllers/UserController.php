<?php

namespace App\Http\Controllers;
// return type redirect respone
use Illuminate\Http\RedirectResponse;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function Index(){
        $no=0;
        $no++;
        $Users=user::all();
        return View('User.Index',["title"=>"Home",'active'=>'Home'],compact('Users'));
    }

    public function Register(){
        return View('User.Register');
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
        'address'=>$request->address,
        'password'=>$request->password
        ]);
        return redirect('/user')->with('success','Registration successfull! ');




    }

public function edit(string $id):View
{
    //get member by id
    $user=user::findOrFail($id);
    return view('User.Edit',["title"=>"Edit",'active'=>'User'], compact('user'));

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
            'address'=>$request->address,
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
        return redirect()->route('users.index',["title"=>"User",'active'=>'User'])->with(['success'=>'data telah berhasil di delete!']);
    }

}
