<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index (request $request){
       // dd('search');
        if (request('search')) {
            $no=0;
            $no++;
            $Category=category::where('name','=',request('search'))->get();
           //$tracker=tracker::where('code','LIKE','%'.request('search').'%')->get('code');
            return view('Category.Index',["title"=>"Category","active"=>"Home"],compact('Category','no'));
            }

        else{
            $no=0;
            $no++;
            $Category=category::all();
            return view('Category.Index',["title"=>"Category","active"=>"Home"],compact('Category','no'));


            }

    }
    public function index2 (request $request){
       // dd('search');
        if (request('search')) {
            $no=0;
            $no++;
            $Category=category::where('name','=',request('search'))->get();
           //$tracker=tracker::where('code','LIKE','%'.request('search').'%')->get('code');
            return view('Category.Index',["title"=>"Category","active"=>"Home"],compact('Category','no'));
            }

        else{
            $no=0;
            $no++;
            $Category=category::all();
            return view('Category.Index',["title"=>"Category","active"=>"Home"],compact('Category','no'));


            }

    }
}
