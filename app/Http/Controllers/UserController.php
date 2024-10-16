<?php

namespace App\Http\Controllers;
// return type redirect respone
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Artis;

class UserController extends Controller
{
    //
    public function Index(){

        if( auth()->user()->level_user==="Karyawan"){

            $level_user='Anggota';
            $Users=user::where('level_user','=',$level_user)->get();
            $no=0;
            $no++;
            //$Users=user::all();
            $Artis=artis::all();
            return View('User.Index_pendaftar',["title"=>"User","active"=>"Home"],compact('Users','no','Artis'));
            //return View('User.Index',["title"=>"User","active"=>"Home"],compact('Users','no'));


        }

        elseif( auth()->user()->level_user==="Agregator"){
        $no=0;
        $no++;
        $status='Menunggu_Verifikasi';
        $artis = new Artis;
        $Artis=$artis->getListArtis();

        $Users=user::where('status','=',$status,'and','id_artist','=',auth()->user()->id_artist)->get();
        //$Artist=artis::where('id_user','=', auth()->user()->id_artist)->get();
        return View('User.Index_pendaftar_eksternal',["title"=>"User","active"=>"Home"],compact('Users','no','Artis'));

        }

        else{

            $no=0;
            $no++;
           // $status='pendaftar';
            //$Users=user::where('status','=',$status)->get();;
            $Users=user::all();

            $Artis=artis::all();
            return View('User.Index',["title"=>"User","active"=>"Home"],compact('Users','no'));
        }
    }

    public function Register(){
        return View('User.Register',["title"=>"User","active"=>"Home"]);
    }

    public function store(request $request){

    $this->validate($request,[

        'name' =>'required|max:255',
        'phone' =>'required|max:255',
        'email' =>'required|max:255',
        'address' =>'required',
        'password' =>'required'
    ]);

    $filektp=$request->file('ktp');
    $filektp-> storeAs('public/KTP', $filektp->hashName());
        user::create([
        'name'=>$request->name,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'level_user'=>$request->level_user,
        'address'=>$request->address,
        'status'=>$request->status,
        'password'=>$request->password,
        'id_artist'=>$request->id_artist,
        'npwp'=>$request->npwp,
        'ktp'=>$filektp->hashName(),
        'bank'=>$request->bank,
        'norek'=>$request->norek
        ]);
        return redirect('/user')->with('success','Registration user successfull! ');




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
    //dd();
    $user=user::FindOrFail($id);

    if($request->hasFile('ktp'))
    {

        $filektp=$request->file('ktp');

        $filektp->storeAs('public/KTP',$filektp->hashName());



        //delete old image
        Storage::delete('public/KTP/'.$user->ktp);
        $user->update([


            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'level_user'=>$request->level_user,
            'address'=>$request->address,
            'status'=>$request->status,
            'password'=>$request->password,
            'id_artist'=>$request->id_artist,
            'npwp'=>$request->npwp,
            'ktp'=>$filektp->hashName(),
            'bank'=>$request->bank,
            'norek'=>$request->norek
            ]);
            return redirect('/user')->with('success','Registration successfull! ');
    }

    else {
        $user->update([
        'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'level_user'=>$request->level_user,
            'address'=>$request->address,
            'status'=>$request->status,
            'password'=>$request->password,
            'id_artist'=>$request->id_artist,
            'npwp'=>$request->npwp,
            'bank'=>$request->bank,
            'norek'=>$request->norek
            ]);
            return redirect('/user')->with('success','Registration successfull! ');

    }




}

public function destroy($id): RedirectResponse
    {
        //get member id
        $user=user::findOrFail($id);

        //delete image
        Storage::delete('public/KTP/'. $user->ktp);


        // delete member
        $user->delete();

        //redirect to index
        return redirect()->route('users.index',["title"=>"User","active"=>"User"])->with(['success'=>'data telah berhasil di delete!']);
    }

}
