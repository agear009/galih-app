<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\View\View;
use App\Models\User;
use App\Models\Album;
use App\Models\AgregatorEksternal;
use App\Models\Artis;
use App\Models\CoverArtist;

class SearchArtistController extends Controller
{
    public function index (request $request)    {

        if (request('search')) {
            //dd($request);
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
    public function index2 (request $request){
       // dd('search');
        if (request('search')) {
            $no=0;
            $no++;
            $Category=artis::where('name','=',request('search'))->get();
           //$tracker=tracker::where('code','LIKE','%'.request('search').'%')->get('code');
            return view('Category.Index',["title"=>"Category","active"=>"Home"],compact('Category','no'));
            }

        else{
            $no=0;
            $no++;
            $Category=artis::all();
            return view('Category.Index',["title"=>"Category","active"=>"Home"],compact('Category','no'));


            }

    }
}
