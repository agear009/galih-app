<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){

        return view('Login.Index',['title'=>'Login','active'=>'login']);

    }

    public function authenticate(request $request)
{
        $credentials=$request->validate([

            'email'=>'required|email:dns',
            'password'=> 'required'

        ]);
        //dd('berhasil');
        //return $request()->all();
        if(Auth::attempt($credentials)){

            $request->session()->regenerate();
            $request->session()->regenerateToken();
            return redirect()->intended('/admin');


        }
        return back()->with('loginError','Login Filed!');

}

    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        //$request->session()->regenerateToken();

        return redirect('/index');

    }

}
